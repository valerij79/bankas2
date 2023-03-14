<?php

echo $_SERVER['REQUEST_METHOD'];


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!file_exists(__DIR__ . '/customers.json')) {
    $arr = [];
    } else {
        $arr = json_decode(file_get_contents(__DIR__ . '/customers.json'));
    };
    $arr[] = $_POST;
    
    file_put_contents(__DIR__ . '/customers.json', json_encode($arr));
    
    
    header('Location: http://localhost/bankas_u2/create.php');
    die;
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <form action="http://localhost/bankas_u2/create.php" method="post">
        <fieldset>
            <legend>ADD NEW:</legend>
            <label>name: </label>
            <input type="text" name="name">
            <label>surname: </label>
            <input type="text" name="surname">
            <label>row: </label>
            <input type="text" name="place_in_row">
            <button type="submit">ADD</button>
        </fieldset>

    </form>
</body>
</html>