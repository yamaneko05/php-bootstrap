<?php 

session_start();

if (isset($_GET["set_toast"])) {
  // $_SESSION["toast"] = ["success", "サクセスネ"];
  $_SESSION["toast"] = ["danger", "えらーおつ"];
  echo "afvsvsbf";
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"/>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header class="position-fixed top-0 start-0 border-end border-primary-subtle border-5" style="width: 300px;">
    <div class="container vh-100 p-3 d-flex flex-column flex-shrink-0">
      <h1 class="fs-3 fw-bold mb-0">オートコールシステム</h1>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
          <ul class="nav nav-pills flex-column ps-4">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Active</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
              <ul class="nav nav-pills flex-column ps-4">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled">Disabled</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <hr>
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          wet@cdas.com
        </button>
        <ul class="dropdown-menu dropdown-menu-dark">
          <li><a class="dropdown-item active" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Separated link</a></li>
        </ul>
      </div>
    </div>
  </header>
  <main class="" style="padding-left: 300px;">
    <div class="main-container px-3">
      <div class="alert alert-primary" role="alert">
        A simple primary alert—check it out!
        <i class="bi-alarm"></i><i class="bi bi-person-circle"></i>
      </div>
    </div>
  </main>
  <footer style="padding-left: 300px;">
    <p>footer</p>
  </footer>

  <?php if (isset($_SESSION["toast"])): ?>
    <div class="toast-container position-fixed bottom-0 start-50 p-3 translate-middle-x">
      <div class="toast align-items-center text-bg-<?php echo $_SESSION["toast"][0] ?> border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
          <div class="toast-body"><?php echo $_SESSION["toast"][1] ?></div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div>
    </div>
    <?php unset($_SESSION["toast"]) ?>
  <?php endif; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/285c1d0655.js" crossorigin="anonymous"></script>
  <script src="./dist/main.js"></script>
</body>
</html>
