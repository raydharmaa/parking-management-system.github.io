<?php include('connection.php'); ?>

<?php 

session_start();

$emailErr = '';
$usernameErr = '';
$passwordErr = '';
$vehicleNameErr = '';
$vehicleTypeErr = '';
$vehicleNumberErr = '';

$success = [];
$errors = [];

if(isset($_POST['register'])){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($email)){
        $emailErr = 'Empty email!';
    }
    if(empty($username)){
        $usernameErr = 'Empty username!';
    }
    if(empty($password)){
        $passwordErr = 'Empty password!';
    }

    if(!empty($username) && !empty($password)){
        $sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";
        if(mysqli_query($conn, $sql)){
            array_push($success, 'Successfully added data!'); 
        } else {
            array_push($errors, mysqli_error($conn));
        }
    }
}

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username)){
        $usernameErr = 'Empty username!';
    }

    if(empty($password)){
        $passwordErr = 'Empty password!';
    }

    if(!empty($username) && !empty($password)){
        $login = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $login);

        $data = mysqli_fetch_assoc($result);

        if($data['status'] == 'admin'){
            $_SESSION['admin'] = $username;
            $_SESSION['success'] = 'Login success!';
            header('Location: admin-page.php'); 
        } 
        if($data['status'] == 'user') {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = 'Login success!';
                header('Location: system.php');
        } 
        if($data == FALSE){
            $nameErr = 'Wrong username!';
            $passwordErr = 'Wrong password!';
        }
    }
}

// Add Vehicle
if(isset($_POST['addVehicle'])){
    $vehicleName = $_POST['vehicleName'];
    $vehicleType = $_POST['vehicleType'];
    $vehicleNumber = $_POST['vehicleNumber'];
    $enterDate = $_POST['enterDate'];

    if(empty($vehicleName)){
        $vehicleNameErr = 'Empty vehicle name!';
    }

    if(empty($vehicleType)){
        $vehicleTypeErr = 'Empty vehicle type!';
    }

    if(empty($vehicleNumber)){
        $vehicleNumberErr = 'Empty vehicle number!';
    }

    if(!empty($vehicleName) && !empty($vehicleType) && !empty($vehicleNumber)){
        $add = "INSERT INTO vehicle (vehicle_name, vehicle_type, vehicle_no, enter_date) VALUES ('$vehicleName', '$vehicleType', '$vehicleNumber', '$enterDate')";
    } if(mysqli_query($conn, $add)){
        array_push($success, 'Successfully added data!'); 
    } else {
        array_push($errors, mysqli_error($conn));
    }
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = "DELETE FROM vehicle WHERE id = $id";
    if(mysqli_query($conn, $delete) == TRUE){
        $success = 'Items deleted successfully';
    } 
}

if(isset($_GET['adminLogout'])){
    session_destroy();
    unset($_SESSION['admin']);
    header('location: index.php');
}

?>