<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <!-- CSS Via CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
    <script src="./js/login.js" defer ></script>
  </head>
  <body>
    <div class="row col-lg-4 col-md-8 mx-auto mt-5 border rounded shadow-lg p-2 login">
      <div class="text-center">
        <h1>Login</h1>
      </div>
      <div class="mx-auto" style="max-width: 400px">
        <form method="post" onsubmit="myaction.collect_data(event,'login');">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"
              >Email address</label
            >
            <input type="email" class="form-control" id="userMail" name="email" />
            <div  class="form-text text-danger js-errors js-error-email"></div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" />
            <div  class="form-text text-danger js-errors js-error-password"></div>
          </div>
          <div class="mb-3">
            <a href="registerhtml.php"><p>Don't Have Account !</p></a><!--**********-->
          </div>
          <div class="progress mb-3 d-none">
            <div
              class="progress-bar"
              role="progressbar"
              style="width: 25%"
            >
             Loading.... 25%
            </div>
          </div>
          <button type="submit" class="btn btn-primary col-12 mb-3">
            Sign-In
          </button>
        </form>
      </div>
    </div>
  </body>
</html>
