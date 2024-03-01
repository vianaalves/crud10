<?php
$host='localhost '
$user=' root' ,
$senha= ' ' ;
$bd= ' sistema ';


$conexao=new mysqli($host,$user,$senha,$bd)
if ($ $conexao){
    echo " erro ao se comunicar com o bd ". mysqli_connect_error;
}
else{
    echo'deu certo a  conexao'
}
?>
