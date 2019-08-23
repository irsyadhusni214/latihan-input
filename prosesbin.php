<?php
if(isset($_POST['masuk'])){
    $bintang = $_POST['bintang'];

    for($i = $bintang; $i > 0; $i--){
        for($j = 0; $j <= $i; $j++){
        echo "&nbsp;";   
        }
       for($k = $bintang; $k > $i; $k--){
        echo "*";
       }
       for ($l=$bintang; $l > $i ; $l--) { 
        echo "*";
    }
    echo "<br>";
  }
}
?>