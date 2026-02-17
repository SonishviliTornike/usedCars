<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
</head>
<body>
    <header>
        <h1><?= $siteName; ?></h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home page</a></li>        
        </ul>
    </nav>
    <main>
        <p><?= $output ?></p>
    </main>

    <footer>
        &copy <?php ?>
    </footer>

</body>
</html>