<form action="" method="post">
    <label for="">Inputan 1 :</label>
    <input type="text" name="input1">
    <br>
    <label for="">Inputan 2 :</label>
    <input type="text" name="input2">
    <br>
    <label for="">Inputan 3 :</label>
    <input type="text" name="input3">
    <br>
    <label for="">Inputan 4 :</label>
    <input type="text" name="input4">
    <br>
    <label for="">Inputan 5 :</label>
    <input type="text" name="input5">
    <br>
    <input type="submit" value="submit" name="submit">
</form>
<?php
    include "function_test.php";
    echo "<br>";
    $input1 = @$_POST['input1'];
    $input2 = @$_POST['input2'];
    $input3 = @$_POST['input3'];
    $input4 = @$_POST['input4'];
    $input5 = @$_POST['input5'];
    $arr = array($input1,$input2,$input3,$input4,$input5);
    echo implode(soal2($arr));
?>