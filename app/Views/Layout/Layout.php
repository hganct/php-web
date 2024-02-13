<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$titlePage;?></title>
    <link rel="stylesheet" href="lib/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <script src="lib/jquery/jquery-3.7.1.min.js"></script>
</head>

<body>
    <div>
        <header>
            <?php if(isset($_SESSION['role']) && $_SESSION['role'] === 'admin'):?>
                <p><a href="/myweb/dashboard">Go to Dashboad</a></p>
            <?php endif;?>
            <?php require_once "app/Views/Layout/Header.php";?>
        </header>
        <main>
            <?php require_once $contentPage;?>
        </main>
        <footer>
            <?php require_once "app/Views/Layout/Footer.php";?>
        </footer>
    </div>
    <script type="text/javascript" src="lib/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="public/js/main.js"></script>
</body>

</html>