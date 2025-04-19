<?php
$title = "Welcome Page";
$subtitle = "This is embedded HTML inside PHP!";
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p><?php echo $subtitle; ?></p>
</body>
</html>
