<?php

require '../app/core/model.php';

class studentModel extends model
{
    function __construct()
    {
        parent::__construct();
    }

    public function readStudents()
    {
        require '../app/core/database.php';

        $sql = "SELECT * FROM students";
        $result = $this->conn->query($sql);
        return $result;
    }
}
