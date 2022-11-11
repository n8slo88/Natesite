<?php
header( "refresh:5;url=index.php" );

$to = "natesloss@gmail.com";
$subject = $_POST["subject"];
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$headers = "From: $name, $email";

mail($to, $subject, $headers, $message)




?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENT</title>
      <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<video id="background-video" autoplay loop muted poster="img/hero-bg.jpg">
  <source src="img/beach.mp4" type="video/mp4">
</video>
<section id="hero">
    <div class="hero-container">
      <h1>EMAIL SENT!</h1>
      <h2>YOU ARE BEING REDIRECTED HOME. PLEASE WAIT</h2>
      <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
    </div>
  </section>
</body>
</html>