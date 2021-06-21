<?php
class APP__UsrHomeController {
  
  public function __construct() {
    global $App__homeService;
    $this->homeService = $App__homeService;
  }

  public function actionShowAboutMe() {
    require_once App__getViewPath("usr/home/aboutMe");
  }

}