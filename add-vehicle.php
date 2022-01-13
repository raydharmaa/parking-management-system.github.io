<?php include('app/server.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Add Vehicle</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="public/main.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="public/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Parking System</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="add-vehicle.php?adminLogout">Logout</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="admin-page.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="add-vehicle.php">
              <span data-feather="file"></span>
              Add Vehicle
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="track-vehicle.php">
              <span data-feather="shopping-cart"></span>
              Track Vehicle
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="report.php">
              <span data-feather="users"></span>
              Report
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="vehicle-out.php">
              <span data-feather="bar-chart-2"></span>
              Vehicle Out
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Vehicle</h1>
      </div>

    <form method="post" action="">
    <div class="form-group">
        <label for="exampleInputEmail1">Vehicle Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Vehicle Name" name="vehicleName">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Vehicle Type</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Vehicle Type" name="vehicleType">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Vehicle Number</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Vehicle Number" name="vehicleNumber">
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Enter Date</label>
    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Enter Date" name="enterDate">
    </div>
    <button type="submit" name="addVehicle" class="btn btn-primary mt-3">Add</button>
    </form>

<?php include('layouts/footer.php'); ?>


