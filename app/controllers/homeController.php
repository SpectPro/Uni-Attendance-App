<?php

require_once '../app/core/controller.php';

class homeController extends controller{

    function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->view->render('404errorView');
    }

    public function home(){
        $this->loadModel('homeModel');
        $this->view->users = $this->model->readTable();
        $this->view->render('homeView');
    }
    

    public function login(){
        $this->view->render('loginView');
    }
}