<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div
      class="container-fluid"
      style="
        min-height: 100vh;
        background-color: #90baa0;
        display: flex;
        justify-content: center;
        align-items: center;
      "
    >
      <div
        class="container"
        style="
          width: 900px;
          height: 600px;
          background-color: #f9f9f9;
          border-radius: 20px;
          display: flex;
          justify-content: center;
          align-items: center;
        "
      >
        <form action="loginSuccess" method="POST" class="form" style="width: 350px">
          <div class="row mb-4">
            <div class="col text-center">
              <h1>LOGIN</h1>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <select
                class="form-select form-select-lg"
                aria-label=".form-select-lg example"
              >
                <option selected>Login As</option>
                <option>Admin</option>
                <option>Lecture</option>
              </select>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <div class="input-group input-group-lg">
                <input
                  type="text"
                  name="username"
                  class="form-control"
                  placeholder="Username"
                />
              </div>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col">
              <div class="input-group input-group-lg">
                <input
                  type="password"
                  name="password"
                  class="form-control"
                  placeholder="Password"
                />
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col text-center">
              <h6>Forget Password?</h6>
            </div>
          </div>
          <div class="row mt-4">
            <div class="d-grid gap-2 col-6 mx-auto col text-center">
              <button type="submit" href="loginSuccess" class="btn btn-secondary btn-lg">
                LOGIN
              </button>
            </div>
          </div>
        </form>
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
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
      integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
      crossorigin="anonymous"
    ></script>
    <script>
      // Form validation
      // const form = document.querySelector(".form");
      // form.addEventListener("submit", function (event) {
      //   event.preventDefault();
      //   const username = document.querySelector('input[type="text"]').value;
      //   const password = document.querySelector('input[type="password"]').value;
      //   if (username.trim() === "" || password.trim() === "") {
      //     alert("Please enter a username and password.");
      //   } else {
      //     alert("Form submitted successfully!");
      //     // Additional validation or form submission logic can be added here
      //   }
      // });
    </script>
  </body>
</html>
