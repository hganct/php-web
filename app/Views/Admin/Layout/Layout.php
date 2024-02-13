<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $titlePage; ?>
    </title>
    <link rel="stylesheet" href="lib/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="lib/jquery/jquery-3.7.1.min.js"></script>
</head>

<body>
    <header class="bg-danger">
        <?php include "app/Views/Admin/Layout/Header.php" ?>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row row-cols-2 g-2">
                <div class="col-2">
                    <?php include $contentNav; ?>
                </div>
                <div class="col-10">
                    <?php include $contentView; ?>
                </div>
            </div>
        </div>
    </main>
    <footer class="bg-dark text-light">
        <p>Copyright &copy; 2023 -
            <?= date('Y') ?> Version 1.0. Coder by Trung Tien.
        </p>
    </footer>
    <script type="text/javascript" src="lib/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>