<?php
include 'connect.php';
$sql = "SELECT * FROM tblworkoutplan";
$resultset = mysqli_query($connection, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlyFit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/plans2.css" rel="stylesheet">
</head>
<body>
    <header>OnlyFit</header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container" style="font-size: 22px; font-weight: bold">
          <a class="navbar-brand" href="#">
            <img src="path_to_your_logo.png" alt="Logo">
          </a>
          
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
              <a class="nav-link" href="register.php#registrationForm">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php#LogCard">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutUs.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactUs.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Go Back Home</a>
            </li>
          </ul>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card p-4 custom-container" style="max-width: 900px; font-size: 19px;">
            <div class="text-center">
            <h1><b>PULL DAY</b></h1>
            <p>"Pull Day: Focus on strengthening your back, biceps, and forearms with pulling movements. Work on your posture and build a well-rounded physique by targeting muscles involved in pulling actions."</p>
            <p>The exercises in these will usually involve pulling movements using your back, biceps, and forearms.</p>
            <p>Some examples would be:</p>
            <img src="https://i.pinimg.com/originals/eb/bd/cc/ebbdcc88e7d8c6ea4a29176c73e3e9e4.jpg" width="75%" height="75%"alt="sample_pull_day">

            <form action="" method="post">
                <input type="hidden" name="workoutdesciprtion" value="Pull Day: Focus on strengthening your back, biceps, and forearms with pulling movements. Work on your posture and build a well-rounded physique by targeting muscles involved in pulling actions. The exercises in these will usually involve pulling movements using your back, biceps, and forearms.">
                <input type="hidden" name="workouttype" value="pull">
                <button type="submit" name="btnRegister" class="btnPrimaryA">Create Pull Workout Plan</button>
            </form>
      </div>

      </div>

          </div>
          <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <footer>
        <p>Peter Sylvan L. Vecina | Kyle T. Vasquez</p>
        <p>Bachelor of Computer Science | Year 2</p>
    </footer>

    <?php
    if(isset($_POST['btnRegister'])){
        $workoutplandescription = mysqli_real_escape_string($connection, $_POST['workoutdesciprtion']);     
        $workoutplantype = mysqli_real_escape_string($connection, $_POST['workouttype']);
        $sql = "INSERT INTO tblworkoutplan(workoutplandescription, workoutplantype) VALUES(?, ?)";
        $stmt = mysqli_prepare($connection, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $workoutplandescription, $workoutplantype);
        mysqli_stmt_execute($stmt);
        echo "<script>alert('Workout plan created successfully!');</script>";
        mysqli_stmt_close($stmt);
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
