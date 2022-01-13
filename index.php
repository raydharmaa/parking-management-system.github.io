<?php include('layouts/header.php'); ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="index.php">Parking System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="v-header full-container">
  <div class="fullscreen-video-wrap">
    <video id="myvideo" src="public/img/catch-the-stars.mp4" muted autoplay loop></video>
  </div>
</div>

<div class="main-title">
  <h1 class="fw-bold text-white">Parking Management System</h1>
  <p class="text-white">The Best Service for Vehicle</p>
</div>

<div class="container-fluid p-0 mt-5">
  <h1 class="text-center fw-bold">Parking Management System</h1>
</div>

<div class="container mt-5">
  <div class="row ">

  <div class="col-md-6 mt-3">

  <div class="card rounded">
  <img src="public/img/girl-driving1.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Log In</h5>
    <p class="card-text">Log In jika Anda telah memiliki akun.</p>
    <a href="login.php" class="btn btn-primary">Log In</a>
  </div>
  </div>

    </div>

  <div class="col-md-6 mt-3">

  <div class="card rounded">
  <img src="public/img/girl-driving2.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Sign Up</h5>
    <p class="card-text">Daftar jika Anda belum memiliki akun.</p>
    <a href="signup.php" class="btn btn-primary">Sign Up</a>
  </div>
  </div>

    </div>

  </div>
</div>

<div class="mb-5"></div>

<?php include('layouts/footer.php'); ?>