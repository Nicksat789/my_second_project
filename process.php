<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $secondname = $_POST['secondname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $mkoa = $_POST['mkoa'];
    $wilaya = $_POST['wilaya'];
    $kata = $_POST['kata'];
    $mwenyekiti = $_POST['mwenyekiti'];
    $message = $_POST['message'];

    echo "<h2>Submitted Information</h2>";
    echo "First Name: " . htmlspecialchars($firstname) . "<br>";
    echo "Second Name: " . htmlspecialchars($secondname) . "<br>";
    echo "Last Name: " . htmlspecialchars($lastname) . "<br>";
    echo "Phone Number: " . htmlspecialchars($phone) . "<br>";
    echo "Gender: " . htmlspecialchars($gender) . "<br>";
    echo "Mkoa: " . htmlspecialchars($mkoa) . "<br>";
    echo "Wilaya: " . htmlspecialchars($wilaya) . "<br>";
    echo "Kata: " . htmlspecialchars($kata) . "<br>";
    echo "Mwenyekiti: " . htmlspecialchars($mwenyekiti) . "<br>";
    echo "Message: " . nl2br(htmlspecialchars($message)) . "<br>";
}
?>