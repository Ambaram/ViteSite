<?php
if(isset($_POST['email'])){
    $email=$_POST['email'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $phone=$_POST['phone'];
    $code = $_POST['code'];
    $insurance = $_POST['insurance'];
    if ($email==""){
        $emailerror="Please enter your email";
    }
    elseif (!filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)){
        $emailerror="Please enter valid email";
    }
    else{
        $emailerror="valid email";
    }
    $pattern="/[0-9]{10}/";
    if (empty($phone)){
        $phoneerror="Please enter phone number";
    }
    elseif (!preg_match($pattern,$phone)){
        $phoneerror="Please enter 10 digits";
    }
    $codepattern="/[A-Z][0-9]{3}/";
    if (empty($code)){
        $codeerror = "Please enter the code";
    }
    elseif (!preg_match($codepattern,$code)){
        $codeerror="Please provide code in format of <A1A1A1>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="request form">
    <title>PHP Content</title>
</head>
<body>
<main>
    <h1>Request for information form</h1>
    <p>To receive information on our products ad services by email, please complete the form below</p>
    <form method="post" action="index.php">
        <div class="container">
            <div id="customer">
                <label for="fname" id="fname">First Name</label>
                <input name="fname" type="text"  value=<?= isset($fname)? $fname:'';?>>
            </div>
            <div>
                <label for="lname" id="lname">Last Name</label>
                <input name="lname" type="text" value=<?= isset($lname)? $lname:'';?>>
            </div>
            <div>
                <label for="code" id="code">Postal Code</label>
                <input type="text" name="code" placeholder="ex.A1A1A1" value=<?= isset($code) ? $code : "" ?>>
                <?= isset($codeerror) ? $codeerror : ""?>
            </div>
            <div>
                <label for="phone" id="phone">Phone</label>
                <input type="text" name="phone" placeholder="ex.4161234567" value=<?= isset($phone) ? $phone : "" ?>>
                <?= isset($phoneerror) ? $phoneerror : ""?>
            </div>
            <div>
                <label for="email" id="email">Email</label>
                <input type="text" name="email" value=<?= isset($email) ? $email : "" ?>>
                <?= isset($emailerror) ? $emailerror : "" ?>
            </div>
            <div>
                <input type="radio" name="insurance" value="life">
                <label for="life">Life Insurance</label>
            </div>
            <div>
                <input type="radio" name="insurance" value="auto">
                <label for="auto">Auto Insurance</label>
            </div>
            <div>
                <input type="radio" name="insurance" value="health">
                <label for="health">Health Insurance</label>
            </div>
            <div>
                <input type="radio" name="insurance" value="travel">
                <label for="travel">Travel Insurance</label>
            </div>
        </div>
        <input id='submit' type="submit" value="Submit">
    </form>
</main>
</body>
</html>
