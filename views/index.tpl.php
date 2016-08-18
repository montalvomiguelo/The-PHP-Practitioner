<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Todos</title>
</head>
<body>
    <ul>
        <?php foreach ($todos as $todo) : ?>
            <li>
                <?php if ($todo->completed) : ?>
                    <s><?php echo $todo->description; ?></s>
                <?php else : ?>
                    <?php echo $todo->description; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
