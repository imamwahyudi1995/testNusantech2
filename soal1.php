<form action="" method="post">
    <label for="">Inputan :</label>
    <input type="text" name="input" id="">
    <input type="submit" value="submit" name="submit">
</form>
<?php
    include "function_test.php";
    echo "<br>";
    soal1(@$_POST['input']);
?>