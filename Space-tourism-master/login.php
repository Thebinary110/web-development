<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "space";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("INSERT INTO login (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
      
  }

}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="./app/images/favicon-32x32.png">
    <title>Frontend Mentor | Space tourism website</title>

    <link rel="stylesheet" href="./app/css/style.min.css">

    <style>
        body {
            background-image: url('./app/images/home/background-home-desktop.jpg');
        }

        @media screen and (max-width: 1024px) {
            body {
                height: auto;
                background-image: url('./app/images/home/background-home-tablet.jpg');
            }
        }

        @media screen and (max-width: 510px) {
            body {
                min-height: 100vh;
                height: auto;
                justify-content: center;
                background-image: url('./app/images/home/background-home-mobile.jpg');
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <nav class="header-grid">

          <a href="./home2.html" title="Home">
            <img src="./app/images/shared/logo.svg" alt="logo" />
          </a>

          <div class="hamburger">
            <img src="./app/images/shared/icon-hamburger.svg" alt="icon-hamburger" id="hamburger">
            <img src="./app/images/shared/icon-close.svg" alt="icon-close" id="close">
          </div>

          <ul class="menu" id="menu">
            <li class="menu__item">
              <a href="home2.html" class="selected"><strong>00</strong> Home</a>
            </li>
            <li class="menu__item">
              <a href="./destination.html"><strong>01</strong> Destination</a>
            </li>
            <li class="menu__item">
              <a href="./crew.html"><strong>02</strong> Crew</a>
            </li>
            <li class="menu__item">
              <a href="./technology.html"><strong>03</strong> Technology</a>
            </li>
          </ul>

        </nav>
    </header>
    <!-- End Header -->

    <!-- Start Hero -->
    <section class="hero">
        <div class="wrapper">
          <div class="hero-grid">
            <article class="hero__container">
              <header class="hero__header">So, you want to travel to</header>
              <h1 class="hero__title">Space</h1>
              <p class="hero__description">
                Let's face it; if you want to go to space, you might as well
                genuinely go to outer space and not hover kind of on the edge of
                it. Well sit back, and relax because we'll give you a truly out of
                this world experience!
              </p>
            </article>
            <div>
              <form method="post" action="login.php" >
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br>

                <input type="submit" value="Login">
              </form>
            </div>
           </div>
        </div>
    </section>
    <!-- End Hero -->

    <script src="./app/js/app.js"></script>
    <script src="./app/js/home.js"></script>
</body>
</html>