<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Blog</title>
    <link rel="stylesheet" href="/app.css"/>
</head>
<body>
    <?php foreach ($posts as $post) : ?>

        <?= $post; ?>

    <?php endforeach; ?>

</body>
</html>