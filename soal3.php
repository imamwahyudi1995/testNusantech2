<form action="" method="post">
    <label for="">Inputan :</label>
    <input type="text" name="input2">
    <input type="submit" value="generate" name="generate">
</form>
<?php
    include "function_test.php";
    if (isset($_POST['generate'])) {
        $tdkTerbalik = $_POST['input2'];
        $berbalik = soal3($_POST['input2']);
        
    }
?>
<form action="" method="post">
    <label for="">hasil generate :</label>
    <input type="text" name="input3" value="<?php  echo $berbalik ?>">
    <br>
    <input type="submit" value="submit" name="submit">
</form>
<br>
<?php
    if (isset($_POST['submit'])) {
        if ($tdkTerbalik == @$_POST['input3']) echo "true";
        else echo "false";
    }
?>
