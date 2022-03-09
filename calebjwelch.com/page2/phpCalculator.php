<?php
    $result = "";
    $number1 = 0;
    $number2 = 0;

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["number1"])) {
            $number1 = test_input($_POST["number1"]);
        }
        if (!empty($_POST["number2"])) {
            $number2 = test_input($_POST["number2"]);
        }

        $result = $number1 + $number2;
        }

?>

<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1 PHP</title>
    <link rel="stylesheet" href="../bootstrap-5.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="https://www.calebjwelch.com">calebjwelch.com</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="http://www.calebjwelch.com">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://github.com/cwelch1070">GitHub</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Assignments
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="../page1/assignment1.html">Assignment 1 JS</a></li>
                  <li><a class="dropdown-item" href="../page3/assignment2.html">Assignment 2 JS</a></li>
                  <li><a class="dropdown-item" href="../page4/assignment3.html">Assignment 3 JS</a></li>
                  <li><a class="dropdown-item" href="../page5/assignment4.php">Assignment 4 PHP</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled"></a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>


    <div class="">
    <div class="fs-3">PHP Calculator</div>
    <div class="fs-4">Caleb Welch<div><p>
    <form class="form2" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Number1: <input type="text" name="number1" value="<?php echo $number1;?>"> <p>
        Number2: <input type="text" name="number2" value="<?php echo $number2;?>"> <p>
        <input type="submit" value="Calculate Answer"> <p>
        Total: <input type="text" name="result" value="<?php echo $result;?>"> <p>  
    </form> 
    </div>


    <script src="../bootstrap-5.1.3/js/bootstrap.bundle.js"></script>
</body>
</html>