<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task34</title>
</head>

<body>
    <?php
    $delete_item = 'April';
    // take a list of months in an array
    $months = array('Jan', 'Feb', 'March', 'April', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'); // for april, the key is 4
    foreach (array_keys($months, $delete_item) as $key) {
        unset($months[$key]);
    }
    // print array to see latest values
    var_dump($months);
    ?>
</body>

</html>