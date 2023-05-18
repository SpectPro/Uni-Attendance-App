<?php

require_once '../app/core/controller.php';

class homeController extends controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->render('404errorView');
    }

    public function home()
    {
        $this->loadModel('homeModel');
        $this->view->users = $this->model->readTable();
        $this->view->render('homeView');
    }


    public function login()
    {
        $this->view->render('loginView');
    }

    public function loginSuccess()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $this->loadModel('loginModel');

        $this->view->ann = $this->model->readLogin($username, $password);
        if ($_SESSION['type'] == 'Admin') {
            $this->view->render('homeView');
        } else if ($_SESSION['type'] == 'Lecture') {
            $this->view->render('homeView');
        }
    }

    public function logout()
    {
        session_start();

        $_SESSION = array();

        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time() - 86400, '/');
        }

        session_destroy();

        $this->view->render('loginView');
    }

    public function class()
    {

        $this->loadModel('classModel');
        $this->view->class = $this->model->readClasses();
        $this->view->render('classView');
    }

    public function attendanceReport()
    {

        $id = $_GET['id'];

        $this->loadModel('attendanceReportModel');

        $this->view->attendanceReport = $this->model->readAttendanceReport($id);
        $this->view->render('attendanceReportView');
    }

    public function studentDetails()
    {
        $this->loadModel('studentModel');
        $this->view->student = $this->model->readStudents();
        $this->view->render('studentDetailsView');
    }

    public function student()
    {
        $this->view->render('studentView');
    }
}
