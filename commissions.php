<?php

$conn = new mysqli("localhost", "root", "root", "commissiondb", 8889);

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $userName = $_POST["userName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $deadline = $_POST["deadline"];
    $project_description = $_POST["projDesc"];
    $budget = $_POST["budget"];
}

$conn->query("INSERT INTO commissions (userName, email, phone, deadline, project_description, budget) VALUES ('$userName', '$email', '$phone','$deadline', '$project_description', '$budget')");


$conn->close();
?>