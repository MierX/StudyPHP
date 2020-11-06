<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：20.11.6 16:04
motto：有志者，事竟成
-->
<?php
$num = '';
if (!empty($_POST)) {
    switch ($_POST['v']) {
        case '+':
            $num = $_POST['num1'] + $_POST['num2'];
            break;
        case '-':
            $num = $_POST['num1'] - $_POST['num2'];
            break;
        case 'x':
            $num = $_POST['num1'] * $_POST['num2'];
            break;
        case '÷':
            $num = $_POST['num1'] / $_POST['num2'];
            break;
        default:
            $num = 0;
            break;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>
            <input type="number" value="<?php echo !empty($_POST['num1']) && $_POST['num1'] ? $_POST['num1'] : '';?>" name="num1" />
        </label>
        <label>
            <select name="v">
                <option value="+" <?php echo !empty($_POST['v']) && $_POST['v'] == '+' ? 'selected="selected"' : '' ?> >+</option>
                <option value="-" <?php echo !empty($_POST['v']) && $_POST['v'] == '-' ? 'selected="selected"' : '' ?> >-</option>
                <option value="x" <?php echo !empty($_POST['v']) && $_POST['v'] == 'x' ? 'selected="selected"' : '' ?> >x</option>
                <option value="÷" <?php echo !empty($_POST['v']) && $_POST['v'] == '÷' ? 'selected="selected"' : '' ?> >÷</option>
            </select>
        </label>
        <label>
            <input type="number" value="<?php echo !empty($_POST['num2']) && $_POST['num2'] ? $_POST['num2'] : '';?>" name="num2" />
        </label>
        <button type="submit">=</button>
        <label>
            <input type="number" readonly="readonly" value="<?php echo $num ?: '';?>">
        </label>
    </form>
</body>
</html>
