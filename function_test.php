
<?php
function soal1($nilai){
    for ($i=1; $i <=$nilai ; $i++) { 
        # code...
        if ($i % 3 == 0){
            echo $i." fish<br>";
            if ($i % 5 ==0) {
                echo $i." bash<br>";
                if ($i % 15== 0) {
                    echo $i." fish bash<br>"; 
                }
            }
        }
    }
}
function soal2($nilai2){
    $y=(count($nilai2));
    for ($i=0; $i<$y; $i++) { 
        for ($j=0; $j<$y-$i ; $j++) { 
            $t = $j + 1;
            if (@$nilai2[$t]<@$nilai2[$j]) {
                list($nilai2[$j], $nilai2[$t])=array($nilai2[$t], $nilai2[$j]); // ada notif warning karena versi php
            }
        }
    }
    return $nilai2;
}
function soal3($nilai3){
    for ($i=strlen($nilai3); $i >= 0 ; $i--) { 
        $balik=@$balik.@$nilai3[$i];
    }
    return $balik;
}
    
?>