<?php
    $completeName = "";
    $tempStr = "";

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(!empty($_POST["completeName"])) {
            $completeName = test_input($_POST["completeName"]);
        }

        $spacePos = strPos($completeName, " ");
        $firstName = subStr($completeName, 0, $spacePos);
        $middleName = subStr($completeName, $spacePos, -5);
        $lastName = subStr($completeName, $spacePos);
        $lastName = trim($lastName);

        $tempStr = "";
        $tempStr = $tempStr . "First Name: $firstName\n";
        $tempStr .= "It contains " . strlen($firstName) . " characters. \n\n";

        $tempStr = $tempStr . "Middel name: $middleName\n";
        $tempStr .= "It contains " . strlen($middleName) . " characters.\n\n";

        $tempStr = $tempStr . "Last name: $lastName\n";
        $tempStr .= "It contains " . strlen($lastName) . " characters.\n\n";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation PHP</title>
    <link rel="stylesheet" href="../bootstrap-5.1.3/css/bootstrap.css">

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
                  <li><a class="dropdown-item" href="../page2/phpCalculator.php">Assignment 1 PHP</a></li>
                  <li><a class="dropdown-item" href="../page3/assignment2.html">Assignment 2 JS</a></li>
                  <li><a class="dropdown-item" href="../page4/assignment3.html">Assignment 3 JS</a></li>
                  <li><a class="dropdown-item" href="../page5/assignment4.php">Assignment 4 PHP</a></li>
                  <li><a class="dropdown-item" href="../page6/assignment5a.html">Assignment 5a</a></li>
                  <li><a class="dropdown-item" href="../page6/assignment5b.html">Assignment 5b</a></li>
                  <li><a class="dropdown-item" href="../page7/alabama.php">Assignment 6 PHP Alabama</a></li>
                  <li><a class="dropdown-item" href="../page7/alaska.php">Assignment 6 PHP Alaska</a></li>
                  <li><a class="dropdown-item" href="../page7/arizona.php">Assignment 6 PHP Arizona</a></li>
                  <li><a class="dropdown-item" href="../page9/assignment7-inline.html">Assignment 7 Inline</a></li>
                  <li><a class="dropdown-item" href="../page9/assignment7-internal.html">Assignment 7 Internal</a></li>
                  <li><a class="dropdown-item" href="../page9/assignment7-external.html">Assignment 7 External</a></li>
                  <li><a class="dropdown-item" href="../page10/assignment8.html">Assignment 8</a></li>
                  <li><a class="dropdown-item" href="../page11/assignment9JS.html">Assignment 9-JS</a></li>
                  <li><a class="dropdown-item" href="../page12/assignment9.php">Assignment 9-PHP</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">About</a></li>
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
      <div class="container">
            <h1>String Manipulation PHP</h1>
            <h2>Caleb Welch</h2>
      </div>
      
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          Name: <input type="text" name="completeName" size="30" value="<?php echo $completeName;?>">
          <p>
          <input type="submit" value="Extract Name">
          <p>
          <textarea name="results" cols="50" rows="8"><?php echo $tempStr;?></textarea>
      </form>
      <script src="../bootstrap-5.1.3/js/bootstrap.bundle.js"></script>
    </body>
    </html>