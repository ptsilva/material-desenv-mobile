<?php
include_once('conecta.php');
class Classverifica extends CONN
{
    function FunctionVerifica()
    {
        
    
        $mensagem = [];
        $erros = false;
        if ($_POST['nome'] == '') {
            $erros = true;
            $mensagem['nome'] = "o nome esta vasio";
        }

        if ($_POST['idade'] == '') {
            $erros = true;
            $mensagem['idade'] = "o idade esta vasio";
        }
        if ($_POST['altura'] == '') {
            $erros = true;
            $mensagem['altura'] = "o altura esta vasio";
        }

        if (!$erros) {
            $campos = "`nome`, `altura`, `idade`";
            $value = "'".$_POST['nome']."','".$_POST['idade']."','".$_POST['altura']."'";
            $sql = "INSERT INTO `aluno`($campos) VALUES ($value)";
            self::exeSQL($sql);
            echo json_encode([
                'mensagem'=>'salvo com sucesso',
                'erros' => false
            ]);
        }else {
        // echo json_encode($mensagem);
        echo json_encode([
            'mensagem'=> $mensagem,
            'erros' => true
        ]);
        }

        
    }
}
$obj =new Classverifica;
$obj->FunctionVerifica();