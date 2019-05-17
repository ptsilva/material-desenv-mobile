<?php
include_once('conecta.php');
class Classbusca extends CONN
{
    function Functionbusca()
    {
     if($_POST['busca']){
          $sql = "SELECT * FROM `aluno`";
          $sql = self::exeSQL($sql);
          $dados =  mysqli_num_rows($sql);
          while ($res[]= mysqli_fetch_array($sql)) {
                }
            echo json_encode([
            'busca'=> $res,
            'erros' => true,
            'quant'=>$dados
        ]);
        }
    }
}
$obj =new Classbusca;
$obj->Functionbusca();
