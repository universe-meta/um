<?php
$account = $_POST["account"];
file_put_contents("accounts.txt", $account . "\n", FILE_APPEND);
?>
