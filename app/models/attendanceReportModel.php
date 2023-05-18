<?php

require '../app/core/model.php';

class attendanceReportModel extends model
{
    function __construct()
    {
        parent::__construct();
    }

    public function readAttendanceReport($id)
    {
        require '../app/core/database.php';

        $sql = "SELECT * FROM class";
        $result = $this->conn->query($sql);
        return $result;

    }
}