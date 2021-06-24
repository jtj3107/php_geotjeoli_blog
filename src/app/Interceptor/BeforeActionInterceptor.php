<?php

namespace App\Interceptor;

use App\Service\MemberService;

class BeforeActionInterceptor extends Interceptor{
    private MemberService $memberServicre;

    public function __construct()
    {
        $this->memberServicre = MemberService::getInstance();
    }

    function run(string $action) {
        $_REQUEST['App__isLogined'] = false;
        $_REQUEST['App__loginedMemberId'] = 0;
        $_REQUEST['App__loginedMember'] = null;
        
        if ( isset($_SESSION['loginedMemberId']) ) {
        $_REQUEST['App__isLogined'] = true;
        $_REQUEST['App__loginedMemberId'] = intval($_SESSION['loginedMemberId']);
        $_REQUEST['App__loginedMember'] = $this->memberServicre->getForPrintMemberById($_REQUEST['App__loginedMemberId']);
        }
    }
}