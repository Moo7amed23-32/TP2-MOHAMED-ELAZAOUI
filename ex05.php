<?php
//  $moyenne = -1;
// $moyenne = 9;
// $moyenne = 10;
// "
// "
// $moyenne = 14;
// $moyenne = 16;
//  $moyenne = 21;
if ( $moyenne >=0 and $moyenne<=20){
    if($moyenne>10 and $moyenne<=12){
        echo" Passable";
    }
    elseif($moyenne>12 and $moyenne<=14){
        echo"Assez bien";
    }
    elseif($moyenne>14 and $moyenne<=16){
        echo" Bien";
    }
    elseif($moyenne>16 and $moyenne<=20){
          echo" Très bien";
    }
}

else{
    echo" Note invalide";
}




?>