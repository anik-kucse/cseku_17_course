<?php

/**
 * Created by PhpStorm.
 * User: anik
 * Date: 9/26/2017
 * Time: 9:29 AM
 */
class AccountMange extends MainController{
    public  function __construct(){
        parent::__construct();
        Session::checkSession();
    }

    public function Index(){
        self::accountMange();
    }

    public function accountMange(){

    }
}