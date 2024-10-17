<?php
$msg =""; 
if (Tsset($_POST[(1)])){
    $textnum = $_POST['n1']
    if ($textnum % 2 ==1)
    {
        $msg = "The number $testnum is odd;"
    }
    else
    {
        $msg = "The number $textnum is unknow";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action=""></form>
    <table>
        <tr>
            <td><input type="text" name="numb" value=""></td>
            <td><input type="submit" name="cl" value="check"> </td>
        </tr>
    </table>
    <td>
        <?php
        echo "$msg";
        ?>
   </td>
</form>
</body>
</html>