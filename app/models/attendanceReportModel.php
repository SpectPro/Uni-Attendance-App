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


        $st = "SELECT students.id,students.name,students.department,attendance_table.status,students.degree_program,attendance_table.time_inn,attendance_table.time_out FROM attendance_table
            JOIN students
                ON students.id = attendance_table.st_id
            JOIN class
                ON class.id = attendance_table.class_id
            WHERE
                class.id = {$id}";

        $count = "SELECT COUNT(id)
            FROM attendance_table
            WHERE class_id = {$id};";

        $late = "SELECT COUNT(CASE WHEN attendance_table.time_inn > class.start_time THEN 1 END) AS late_student_count FROM attendance_table JOIN class ON class.id = attendance_table.class_id WHERE class.id = {$id};";

        $result1 = $this->conn->query($st);
        $result2 = $this->conn->query($count);
        $result3 = $this->conn->query($late);


        $res = array($result1, $result2, $result3);

        return $res;
    }
}
