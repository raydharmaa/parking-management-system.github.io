<?php include('app/server.php'); ?>

<?php 

if(isset($_GET['trackVehicle'])){
    $search = $_GET['trackVehicle'];
    $sql = "SELECT * FROM vehicle WHERE vehicle_name LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM vehicle";
}

$result = mysqli_query($conn, $sql);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Track Vehicle</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="public/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
      <a class="nav-link px-3" href="track-vehicle.php?adminLogout">Logout</a>
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
            <a class="nav-link" href="add-vehicle.php">
              <span data-feather="file"></span>
              Add Vehicle
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="track-vehicle.php">
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
        <h1 class="h2">Track Vehicle</h1>
      </div>

      <div class="main">
  
  <!-- Actual search box -->

  
  <!-- Another variation with a button -->
  <form action="" method="get">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Track Vehicle" name="trackVehicle">
    <div class="input-group-append">
      <button type="submit" class="btn btn-primary" type="button">
        <i class="fa fa-search"></i>
      </button>
    </div>
  </div>
  </div>
  </form>

      <h2 class="mt-3">Vehicle Lists</h2>
      <table class="table table-hover ">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Vehicle Name</th>
      <th scope="col">Vehicle Type</th>
      <th scope="col">Vehicle Number</th>
    </tr>
  </thead>
  <tbody>
      <?php $no = 1; ?>
      <?php while($row = mysqli_fetch_assoc($result)){ 
    ?>
    <tr>
      <th scope="row"><?= $no++ ?></th>
      <td><?= $row['vehicle_name'] ?></td>
      <td><?= $row['vehicle_type'] ?></td>
      <td><?= $row['vehicle_no'] ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>


<?php include('layouts/footer.php'); ?>


