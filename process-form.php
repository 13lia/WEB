<?php 
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
}

$mixed_data = $name ."\n". $email ."\n". $phone ."\n" . $message ."\n";

$dynamic_name = 1;
while (file_exists($dynamic_name.".txt")) {
    $dynamic_name++;
}

$create_file = fopen($dynamic_name.".txt", "w");
fwrite($create_file, $mixed_data);
fclose($create_file);



