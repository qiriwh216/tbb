<?php

namespace app\common\controller;

use think\Controller;
use tools\Json;

class Base extends Controller
{


  public $controller;
  public $action;
  public $configArr = [];
  public $Json;//类
  public function _initialize() {

    // parent::_initialize();
    //读取配置
    //$this->configArr  = Db::name("Config")->where("status>0")->column("value","name");
    //$this->assign("configArr",$this->configArr);
    //$this->controller = request()->controller();
    //$this->action     = request()->action();
    $this->Json       = new Json();
  }

}
