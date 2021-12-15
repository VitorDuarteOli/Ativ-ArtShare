<?php
var_dump($_FILES);

echo $_FILES['myfile']['name'];

echo $_FILES['myfile']['tmp_name'];

$tmp = $_FILES['myfile']['tmp_name'];

$filename = $_FILES['myfile']['name'];

$pessoa = $_POST['seunome'];

$cidade = $_POST['cidade_pess'];

$data = date("d-m-Y");

$hora_envio = $_POST['horario'];

$produtofinal = $pessoa.'-'.$cidade.'-'.$data.'-'.$hora_envio;

$path = pathinfo($filename); //pega info sobre o filename

$ext = $path['extension']; //separa a extensão

$extpermitidas = array("png", "jpg", "jpeg", "gif", "svg");
if(in_array($ext, $extpermitidas)){
    move_uploaded_file($tmp, 'enviados/'.$produtofinal.'.'.$ext);
    echo "<br>Arquivo enviado com sucesso!";
}else{
    echo "<br>Extensão não permitida.";
}