<!DOCTYPE html>
<html lang="en">

<head>
    <title>CSS Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= asset('main.css') ?>">
</head>

<body>
    <?php view("layout/sidenav") ?>
    <div class="content">
        <?php view($inc, $v) ?>
    </div>

</body>

</html>