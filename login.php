<?php include('layouts/header.php'); ?>
<?php include('app/server.php'); ?>

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

<div class="main-bg-in"></div>

<div class="main-bg">
  <h1 class="fw-bold text-white">Parking Management System</h1>
  <p class="text-white">The Best Service for Vehicle</p>
</div>

<div class="container-fluid p-0 mt-5">
  <h1 class="text-center fw-bold">Log In</h1>
</div>

<div class="container p-5">
<form action="" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div><p>Don't have an account yet? <a href="signup.php">Sign up</a></p></div>
  <button type="submit" name="login" class="btn btn-primary">Log In</button>
</form>
</div>

<?php include('layouts/footer.php'); ?>