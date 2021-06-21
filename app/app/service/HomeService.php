<?php
class APP__HomeService {
  private APP__HomeRepository $homeRepository;

  public function __construct() {
    global $App__homeRepository;
    $this->homeRepository = $App__homeRepository;
  }
}