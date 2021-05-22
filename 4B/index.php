<?php
include 'settings.php';

if (isset($_GET['hal']) && !empty($_GET['hal'])) $hal = $_GET['hal'];
else $hal = "home";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seven Deadly Sins</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="container">
            <section>
                <h1><a href="index.php">Seven Deadly Sins</a></h1>
            </section>
            <nav>
                <ul>
                    <a href="?hal=tambah-heroes">
                        <li>Add Heroes</li>
                    </a>
                    <a href="?hal=tambah-type">
                        <li>Add Type</li>
                    </a>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <section>
                <?php include "content.php"; ?>
            </section>
        </div>
    </main>
    <footer>
        <span>
            Copyright &copy; 2021 DumbwaysTest
        </span>
    </footer>
</body>

</html>