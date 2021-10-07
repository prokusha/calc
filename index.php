<?php
if(isset($_POST['submit'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
}
switch ($operation) {
    case '+':
        $result = $number1 + $number2;
        break;
    case '-':
        $result = $number1 - $number2;
        break;
    case '*':
        $result = $number1 * $number2;
        break;
    case '/':
        $result = $number1 / $number2;
        break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calc</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/calc.css">

</head>
<body>
    <div class="container calc-container">
        <form action="" method="post">
            <div class="row col-5 row-cols-5 my-3">
                <input type="text" name="number1">
                <select name="operation" id="operation">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
                <input type="text" name="number2">
                <input type="submit" name="submit" class="btn btn-success" value="=">
                <h5 class="text-center text"><?=$result?></h5>
            </div>
 <!--           <div class="row col-5 row-cols-4 my-1">
                <input type="button" class="btn btn-dark" value="7">
                <input type="button" class="btn btn-dark" value="8">
                <input type="button" class="btn btn-dark" value="9">
                <input type="button" name="operation" class="btn btn-info" value="+">

                <input type="button" class="btn btn-dark" value="3">
                <input type="button" class="btn btn-dark" value="5">
                <input type="button" class="btn btn-dark" value="6">
                <input type="button" name="operation" class="btn btn-primary" value="-">

                <input type="button" class="btn btn-dark" value="1">
                <input type="button" class="btn btn-dark" value="2">
                <input type="button" class="btn btn-dark" value="3">
                <input type="button" name="operation" class="btn btn-warning" value="*">

                <input type="button" class="btn btn-dark" value="0">
                <input type="button" name="operation" class="btn btn-danger" value="C">
                <input type="submit" name="submit" class="btn btn-success" value="=">
                <input type="button" name="operation" class="btn btn-secondary" value="/">
            </div>
-->
        </form>
    </div>
</body>
</html>