<!doctype html>
<html lang="en">
  <head>
    <?php include "part/head.php"; ?>
  </head>
  <body  class=" border-top-wide border-primary d-flex flex-column">
    <?php 
    if(isset($_GET['ms']))
    {
      if($_GET['ms'] == "er")
      {
        echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='fa-solid fa-triangle-exclamation fa-lg'></span>  Login Gagal : Username / Password Salah !</div>";
      }
    }
    ?>
    <div class="page page-center">
      <div class="container-tight py-4">
        <div class="text-center mb-4">
          <a href="." class="navbar-brand "><img src="./dist/img/logo.png" height="130" alt=""></a>
        </div>
        <form class="card card-md" action="login_act" method="post" autocomplete="off">
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Login to your account</h2>
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" class="form-control" name="username" placeholder="Enter Username">
            </div>
            <div class="mb-2">
              <label class="form-label">
                Password
              </label>
              <div class="input-group input-group-flat">
                <input type="password" class="form-control" name="password" placeholder="Password"  autocomplete="off">
                <span class="input-group-text">
                  <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                  </a>
                </span>
              </div>
            </div>
            <div class="mb-2">
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">Sign in</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js"></script>
    <script src="./dist/js/demo.min.js"></script>
  </body>
</html>