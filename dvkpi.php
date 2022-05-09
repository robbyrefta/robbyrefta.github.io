<!doctype html>
<html lang="en">
  <head>
    <?php include "part/head.php"; ?>
  </head>

  <body >
    <div class="wrapper">
      <header class="navbar navbar-expand-md navbar-light d-print-none">
        <?php include "part/header.php"; ?>
      </header>

      <!-- navabar horizontal -->
      <div class="navbar-expand-md">
        <?php include "part/navbar.php"; ?>
      </div>
      <!-- navbar horizontal -->

      <!-- wrapper body -->
      <div class="page-wrapper">
        <?php include "view/v_dvkpi.php"; ?>

        <footer class="footer footer-transparent d-print-none">
          <?php include "part/footer.php"; ?>
        </footer>
          <!-- wrapper body -->
      </div>
    </div>

    <!-- js -->
    <?php include "part/js.php"; ?>
    <!-- js -->
  </body>
</html>