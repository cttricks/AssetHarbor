<?php include_once('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('common/meta.html'); ?>
    <?php include_once('common/links.html'); ?>
    <title>Asset Harbor</title>
    <link rel="stylesheet" href="./stylesheets/common.css?v=<?= VERSION; ?>" />
    <link rel="stylesheet" href="./stylesheets/dashboard.css?v=<?= VERSION; ?>" />
</head>
<body>
    <!-- Menu & Main -->
    <section class="container">
        <?php include_once('pages/menu.html'); ?>
        <?php include_once('pages/main.html'); ?>
    </section>
    <!-- File Info Container & Viewer -->

    <?php include_once('pages/fileinfo.html'); ?>
    <!-- Footer -->
</body>
</html>