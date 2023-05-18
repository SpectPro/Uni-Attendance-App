<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="d-flex">
        <div class="bg-dark p-3" style="width: 20%; height: 100vh;">
            <img src="../../public/img/logo.png" alt="Logo" class="img-fluid mb-3" />
            <h1 class="text-center text-light">
              Welcome </br>to </br>University Attendance System
            </h1>
        </div>
        <div class="d-flex justify-content-center align-items-center " style="width:80%; height: 100vh;">
            <div class="m-5 img-fluid d-flex justify-content-center align-items-center flex-column" style="
            height: 90%;
            width: 90%;
            background-image: url('../../public/img/students_bg.png');
            background-size: cover;
            background-position: center;
            opacity: 80%;
            border-radius: 20px;
          ">
            <a href="attendanceReport" class="bg-dark-subtle mb-4 p-2 d-flex flex-row justify-content-center align-items-center" 
            style="text-decoration: none; background: #CCCFC7;
            box-shadow: inset 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 10px; width: 450px;">
                <img src="../../public/img/icon_1.png" class="img-fluid mx-2 mb-2 mt-2">
                <h3 class="text-dark mx-2">View Attendance Report</h3>
            </a>
            <a href="studentDetails" class="bg-dark-subtle p-2 d-flex flex-row justify-content-center align-items-center" 
            style="text-decoration: none; background: #CCCFC7;
            box-shadow: inset 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 10px; width: 450px;">
                <img src="../../public/img/icon_2.png" class="img-fluid me-5 mb-2 mt-2">
                <h3 class="text-dark  ms-5 me-5">Student Details</h3>
            </a>
            </div>
        </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
      integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
