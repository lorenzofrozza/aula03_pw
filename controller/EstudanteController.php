<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/aula03/model/EstudanteModel.php';

class EstudanteController
{
    public function listar()
    {
        $estudanteModel = new EstudanteModel();
        $estudantes = $estudanteModel ->listarModel();
        $_REQUEST['estudantes'] = $estudantes;

        //render na view
        require_once $_SERVER['DOCUMENT_ROOT'] . '/aula03/view/EstudanteView.php';
    }

    public function salvar()
    {
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            require_once $_SERVER['DOCUMENT_ROOT'] . '/aula03/view/EstudanteForm.php';
        }elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nome= $_POST['nome'];
            $idade= $_POST['idade'];
    
            $estudanteModel = new EstudanteModel();
            $estudanteModel->salvarModel($nome, $idade);
            
            header('Location: http://localhost:8081/aula03/?controller=Estudante&acao=listar');
            exit();
        }

    }

}