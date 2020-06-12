<?php
// router.php
$path = pathinfo($_SERVER["SCRIPT_FILENAME"]);
if ($path["extension"] == "html") {
    header("Content-Type: text/html");
    include($_SERVER["SCRIPT_FILENAME"]);
}
else {
    return false;
}
?>

