<?php
session_start();
if (!isset($_SESSION['userId'])) {
  header('location:/Uni-Attendance-App/public/homeController/login');
  die;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Studence Details Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
</head>

<body>
  <div class="d-flex">
    <div class="bg-light" style="width: 5%; height: 100vh; position: fixed; top: 0; left: 0;">
      <div class="d-flex flex-column flex-fill align-items-center align-content-center justify-content-evenly" style="width: 100%; height: 100vh">
        <a href="home" class="mb-4 w-100" style="text-decoration: none">
          <img src="../../public/img/logo-s.png" alt="Logo" class="img-fluid" />
        </a>
        <div class="mt-5 d-flex flex-column align-items-center w-100">
          <a href="class" class="w-100 pt-3 pb-3" style="text-decoration: none" onMouseOver="this.style.background='#d0e5db'" onmouseout="this.style.background='none'">
            <img src="../../public/img/iocn_6.png" alt="Logo" class="img-fluid ps-3" />
          </a>
          <a href="studentDetails" class="mb-4 w-100 pt-3 pb-3" style="text-decoration: none; background: #a6d7bf">
            <img src="../../public/img/iocn_5.png" alt="Logo" class="img-fluid ps-2" />
          </a>
        </div>

        <a href="logout" class="mb-4 w-100 pt-3 pb-3" style="text-decoration: none" onMouseOver="this.style.background='#d0e5db'" onmouseout="this.style.background='none'">
          <img src="../../public/img/icon_3.png" alt="Logo" class="img-fluid ps-3" />
        </a>
      </div>
    </div>
    <div class="d-flex justify-content-center align-items-center " style="width: 100%;  background-color: #cccfc7">
      <div class="container text-center mb-5 mt-5">
        <div class="row align-items-start gap-5 ms-5">
          <?php
          if ($this->student->num_rows > 0) {
            while ($row = $this->student->fetch_assoc()) { ?>
              <div class="col-2 bg-light" style="border-radius: 15px; height: 250px">
                <img src="../../public/img/profile.png" height="100px" width="100px" class="img-fluid mb-2 mt-3">
                <h3 class="text-dark  ms-5 me-5"><?php echo $row["name"]; ?></h3>
                <a href="student?id=<?php echo ($row["id"]) ?>&name=<?php echo ($row["name"]) ?>&department=<?php echo ($row["department"]) ?>&degree=<?php echo ($row["degree_program"]) ?>&mobile=<?php echo ($row["phone_num"]) ?>">
                  <button action="student" type="button" class="btn mt-3 btn-secondary px-5">View Details</button>
                </a>

              </div>
          <?php
            }
          } else {
          }
          ?>


        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>

</body>

</html>