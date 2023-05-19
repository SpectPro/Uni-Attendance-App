<?php
session_start();
if (!isset($_SESSION['userId'])) {
  header('location:/Uni-Attendance-App/public/homeController/login');
  die;
}
 $count1 = $this->attendanceReport[1]->fetch_assoc();
 $array1 = $count1;
 $count1 = $array1["COUNT(id)"];

 $count2 = $this->attendanceReport[2]->fetch_assoc();
 $array2 = $count2;
 $count2 = $array2["late_student_count"];


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Attendance Report Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
</head>

<body>
  <div class="d-flex">
    <div class="bg-light" style="width: 5%; height: 100vh">
      <div class="d-flex flex-column flex-fill align-items-center align-content-center justify-content-evenly" style="width: 100%; height: 100vh">
        <a href="home" class="mb-4 w-100" style="text-decoration: none">
          <img src="../../public/img/logo-s.png" alt="Logo" class="img-fluid" />
        </a>
        <div class="mt-5 d-flex flex-column align-items-center w-100">
          <a href="class" class="w-100 pt-3 pb-3" style="text-decoration: none; background: #a6d7bf">
            <img src="../../public/img/iocn_6.png" alt="Logo" class="img-fluid ps-3" />
          </a>
          <a href="studentDetails" class="mb-4 w-100 pt-3 pb-3" style="text-decoration: none" onMouseOver="this.style.background='#d0e5db'" onmouseout="this.style.background='none'">
            <img src="../../public/img/iocn_5.png" alt="Logo" class="img-fluid ps-2" />
          </a>
        </div>

        <a href="logout" class="mb-4 w-100 pt-3 pb-3" style="text-decoration: none" onMouseOver="this.style.background='#d0e5db'" onmouseout="this.style.background='none'">
          <img src="../../public/img/icon_3.png" alt="Logo" class="img-fluid ps-3" />
        </a>
      </div>
    </div>
    <div class="d-flex justify-content-center align-items-center" style="width: 95%; height: 100vh; background-color: #cccfc7">
      <div class="container text-center">
        <div class="row align-items-start gap-4">
          <div class="col bg-light" style="border-radius: 15px; height: 200px">
            <h2 class="mt-4">Total Number of Students</h2>
            <h1 class="mt-3"><?php
                     echo $count1;
                            ?>
                    </h1>
          </div>
          <div class="col bg-light" style="border-radius: 15px; height: 200px">
            <h2 class="mt-5">On Time</h2>
            <h1 class="mt-3"><?php
                     echo $count1-$count2;
                            ?></h1>
          </div>
          <div class="col bg-light" style="border-radius: 15px; height: 200px">
            <h2 class="mt-5">Late</h2>
            <h1 class="mt-3"><?php
                     echo $count2;
                            ?></h1>
          </div>
          <div class="col bg-light" style="border-radius: 15px; height: 200px">
            <h3>Avarage</h3>
            <div style="height: 150px" class="d-flex justify-content-center">
              <canvas id="myChart"></canvas>
            </div>
          </div>
        </div>

        <div class="row bg-light p-5 mt-5" style="border-radius: 15px">
          <table class="table h-75">
            <thead>


              <tr class="table-dark">
                <th scope="col">Student ID</th>
                <th scope="col">Name</th>
                <th scope="col">Department</th>
                <th scope="col">Status</th>
                <th scope="col">Subject</th>
                <th scope="col">Time In</th>
                <th scope="col">Time Out</th>
              </tr>
            </thead>
            <tbody>

            <?php
                    if ($this->attendanceReport[0]->num_rows > 0) {
                        while ($row = $this->attendanceReport[0]->fetch_assoc()) { ?>
                            <tr>
                <th scope="row"><?php echo $row["id"]; ?></th>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["department"]; ?></td>
                <td><?php echo $row["status"]; ?></td>
                <td><?php echo $row["degree_program"]; ?></td>
                <td><?php echo $row["time_inn"]; ?></td>
                <td><?php echo $row["time_out"]; ?></td>
              </tr>
                    <?php
                        }
                    } else {
                    }
                    ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const ctx = document.getElementById("myChart");

    new Chart(ctx, {
      type: "doughnut",
      data: {
        datasets: [{
          label: ["Students"],
          data: [<?php
                     echo $count1-$count2;
                            ?>, <?php
                            echo $count2;
                                   ?>, ],
        }, ],
      },
      options: {
        responsive: true,
      },
    });
  </script>
</body>

</html>