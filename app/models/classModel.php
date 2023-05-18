<?php
session_start();
require '../app/core/model.php';

class classModel extends model
{
    function __construct()
    {
        parent::__construct();
    }

    public function readClasses()
    {
        require '../app/core/database.php';
        if ($_SESSION['type'] == "Admin") {
            $sql = "SELECT * FROM class";
            $result = $this->conn->query($sql);
            return $result;
        } else {
            $sql = "SELECT * FROM class JOIN class_assign ON class.id = class_assign.class_id WHERE class_assign.user_id = {$_SESSION['userId']}";
            $result = $this->conn->query($sql);
            return $result;
        }
    }
}
