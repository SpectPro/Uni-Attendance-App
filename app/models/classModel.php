<?php

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

        $sql = "SELECT * FROM class";
        $result = $this->conn->query($sql);
        return $result;

        // if ($type == "Admin") {
        //     $sql = "SELECT * FROM class";
        //     $result = $this->conn->query($sql);
        //     return $result;
        // } else {
        //     $sql = "SELECT * FROM class INNER JOIN class_assign ON class_assign.user_id = class.id WHERE class_assign.user_id = {$_SESSION['userId']}";
        //     $result = $this->conn->query($sql);
        //     return $result;
        // }
    }
}
