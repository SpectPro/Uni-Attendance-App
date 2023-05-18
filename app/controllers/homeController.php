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

    public function loginSuccess(){
        $username = $_POST ['username'];
        $password=$_POST ['password'];

        $this->loadModel('loginModel');

        $this->view->ann = $this->model->readLogin($username, $password);
        if($_SESSION['type']=='admin'){
            $this->view->render('homeView');
        }
        else if($_SESSION['type']=='lecture'){
            $this->view->render('homeView');
        }
    }

    public function attendanceReport(){
        $this->view->render('attendanceReportView');
    }

    public function studentDetails(){
        $this->view->render('studentDetailsView');
    }

    public function student(){
        $this->view->render('studentView');
    }
}