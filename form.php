<?php
if (isset($_POST['s1']))

$num1 = $_POST["T1"];
$num2 = $_POST["T2"];
$result = $num1 + $num2;
$num1 = "";
$num2 = "";
$result = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <form name="form1" method="post" action="form.php">
        <table>
            <tr>
                <td>First Number</td>
                <td><input name="T1" type="text" value="<?php echo ($num1) ?>"> </td>
            </tr>
            <tr>
                <td>Second Number</td>
                <td><input name="T2" type="text" value="<?php echo ($num2) ?>"> </td>
            </tr>
            <tr>
                <td>RESULT</td>
                <td><input name="T3" type="text" value="<?php echo ($result); ?>" ></td>
            </tr>
            <tr>
                <td><input name="s1" type="submit" value="ADD"></td>
                <td><input name="s2" type="submit" value="RESET"></td>
            </tr>
        </table>
    </form>
</body>
</html>


