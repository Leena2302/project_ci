<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title; ?></title>
    <?php include_once 'shared/common_css.php'; ?>
</head>

<body>

    <?php include_once 'shared/header.php'; ?>

    <?= $content; ?>

    <?php include_once 'shared/footer.php'; ?>

    <?php include_once 'shared/common_js.php'; ?>
</body>

</html>