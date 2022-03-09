<?php
    //Variables
    $tax = 0;
    $total = 0;
    $membership = "gold";
    $tennis = "no";
    $racquetball = "no";
    $golf = "no";
    
    //Removes unneeded special characters and other bad input
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(!empty($_POST["tax"])){
            $tax = test_input($_POST["tax"]);
        }

        if(!empty($_POST["membership"])){
            $membership = test_input($_POST["membership"]);
        }

        if($membership == "basic"){
            $total = 80;
        }
        elseif($membership == "platinum"){
            $total = 100;
        }
        else{
            $total = 120;
        }

        if(isset($_POST["tennis"])){
            $tennis = "yes";
            $total = $total + 15;
        }

        if(isset($_POST["racquetball"])){
            $racquetball = "yes";
            $total = $total + 20;
        }

        if(isset($_POST["golf"])){
            $golf = "yes";
            $total = $total + 25;
        }

        if(isset($_POST["childCare"])){
            $childCare = "yes";
            $total = $total + 50;
        }

        if(isset($_POST["personalTrainer"])){
            $personalTrainer = "yes";
            $total = $total + 60;
        }

        if(isset($_POST["swimmingPool"])){
            $swimmingPool = "yes";
            $total = $total + 70;
        }

        $total = $total + ($total * $tax);
        $total = "$" + sprintf('%.2f', $total);
    }
?>

<html>
    <head>
        <title>Health Club PHP</title>
    </head>
    <link rel="stylesheet" href="style.css">
    <div class="nav">
        <a class="active" href="../index.html">Home</a>
        <a href="../page2/assignment1.html">Assignment 1 JS</a>
        <a href="../php/phpCalculator.php">Assignmnet 1 PHP</a>
        <a href="page4/assignment3.html">Assignment 3</a>
        <a href="page5/assignment4.html">Assignment 4</a>
    </div>
    <h2>Health Club Calculator (PHP)</h2>
    Caleb Welch
    <form method="post" name="healthClubForm" id="healthClubForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div style="float:left; width:130px; background-color: pink;">
        <dl>
            <dt>Membership</dt>
            <dt><input type="radio" name="membership" onchange="reloadForm()" <?php if(isset($membership) && $membership == "basic") echo "checked";?> value="basic">Basic</dt>
            <dt><input type="radio" name="membership" onchange="reloadForm()" <?php if(isset($membership) && $membership == "platinum") echo "checked";?> value="platinum">Platinum</dt>
            <dt><input type="radio" name="membership" onchange="reloadForm()" <?php if(isset($membership) && $membership == "gold") echo "checked";?> value="gold">Gold</dt>
        </dl>
    </div>
    <div style="float:left; width:180px; background-color:yellow;">
        <dl>
            <dt>Additional Charges (1)</dt>
            <dt><input type="checkbox" onchange="reloadForm()" <?php if(isset($tennis) && $tennis=="yes") echo "checked"?> name="tennis">Tennis</dt>
            <dt><input type="checkbox" onchange="reloadForm()" <?php if(isset($racquetball) && $racquetball=="yes") echo "checked"?> name="racquetball">Raquetball</dt>
            <dt><input type="checkbox" onchange="reloadForm()" <?php if(isset($golf) && $golf=="yes") echo "checked"?> name="golf">Golf</dt>
        </dl>
    </div>
    <div style="float:left; width:180px; background-color: lightblue;">
        <dl>
            <dt>Additonal Charges (2)</dt>
            <dt><input type="checkbox" onchange="reloadForm()" <?php if(isset($childCare) && $childCare=="yes") echo "checked"?> name="childCare" >Child Care</dt>
            <dt><input type="checkbox" onchange="reloadForm()" <?php if(isset($personalTrainer) && $personalTrainer=="yes") echo "checked"?> name="personalTrainer" >Personal Trainer</dt>
            <dt><input type="checkbox" onchange="reloadForm()" <?php if(isset($swimmingPool) && $swimmingPool=="yes") echo "checked"?> name="swimmingPool" >Swimming Pool</dt>
        </dl>
    </div>
    <div style="clear:both">&nbsp;</div>
    <div style="float:left; width:150px; background-color:lightcoral;">
        <dl>
            <dt><input type="submit" value="Calculate Total"></dt>
            <dt><input type="submit" value="Clear"></dt>
        </dl>
    </div>
    <div style="float:left; background-color: lightgreen;">
        <dl>
            <dt>Tax: <input type="text" onchange="reloadForm()" name="tax" value="<?php echo $tax;?>" size="10"></dt>
            <dt>Total: <input type="text" name="total" value="$<?php echo $total;?>" size="10"></dt>
        </dl>
    </div>
    <script>
        function reloadForm() {
            document.getElementById("healthClubForm").submit();
        }
    </script>
    </form>
</html>