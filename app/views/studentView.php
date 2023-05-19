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
  <title>Student Page</title>
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
    <div class="d-flex justify-content-center align-items-center" style="width: 95%; height: 100vh; background-color: #cccfc7">
      <div class="container text-center">
        <div class="row align-items-start gap-4">
          <div class="col-3 bg-light d-flex align-items-center justify-content-evenly" style="border-radius: 15px; height: 400px">
            <img src="../../public/img/profile.png" height="200px" width="200px" class="img-fluid mb-2 mt-3">
          </div>
          <div class="col-8 bg-light " style="border-radius: 15px; ">
            <h3 class="text-dark my-5 ms-5 me-5">Ajantha Kumara</h3>
            <table class="table table-borderless mt-4 mb-5 px-5 mx-5 text-start">
              <thead>
                <tr>
                  <th scope="col">ID Number :</th>
                  <th scope="col"><?php echo ($_GET['id']) ?></th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Name :</th>
                  <td><?php echo ($_GET['name']) ?></td>
                </tr>
                <tr>
                  <th scope="row">Degree Program :</th>
                  <td><?php echo ($_GET['degree']) ?></td>
                </tr>
                <tr>
                  <th scope="row">Department :</th>
                  <td><?php echo ($_GET['department']) ?></td>
                </tr>
                <tr>
                  <th scope="row">Telephone Number :</th>
                  <td><?php echo ($_GET['mobile']) ?></td>
                </tr>

              </tbody>
            </table>

          </div>


        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>

</body>

</html>