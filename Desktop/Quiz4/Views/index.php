<?php
use Model\Database;
use Model\formdata ;
require_once '../Model/Database.php';
require_once  '../Model/formdata.php';

$dbcon = Database::getdb();
$c = new formdata();
$data = $c->getdatabyid($dbcon);
?>

<!DOCTYPE html>
<html>
<head></head>
<body>
<main>
    <h2>Request for insurance information</h2>
    Thankyou <?= $data->firstname, $data->lastname ?> for requesting insurance on our <?=$data->insurance?> product.
    we will send an email to <?= $data->email?>@email.com with detailed product information.
</main>
</body>
</html>
