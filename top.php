<?php
    $phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);
    $pathParts = pathinfo($phpSelf);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>How To Solve A Rubik's Cube</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name = "authors" content="Wyatt Chrismann and Tucker Schulz ">
        <meta name="description" content = "CS 008 Final Project; a website teaching how to solve rubix cubes">
        <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" media="(max-width: 800px)" href="css/custom-tablet.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" media="(max-width: 600px)" href="css/custom-mobile.css?version=<?php print time(); ?>" type="text/css">
         <!-- add rubix icon -->
         <link rel ="icon" href ="images/rubixIcon.jpg" type = "image/x-icon">


    </head>
    <?php
    print PHP_EOL;
    print '<div class ="header">';
    print PHP_EOL;
    include 'header.php';
    print PHP_EOL;
    include 'nav.php';
    print PHP_EOL;
    print '</div>';
    print PHP_EOL;
    print '<body class="' . $pathParts['filename'] . '">';
    print PHP_EOL;
    print '<!--  ############# Start of Body Element ################ -->';
    include 'connect-DB.php';
    print PHP_EOL;
    ?>
    