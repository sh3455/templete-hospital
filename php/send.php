<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['n'];
    $email = $_POST['e'];
    $message = $_POST['message'];

   
    $data = "$name, $email, $message\n";
    file_put_contents('messages.txt', $data, FILE_APPEND);

    echo " sent successfully!";
} else {
    echo "Invalid ";
}
?>
