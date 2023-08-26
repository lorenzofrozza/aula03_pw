<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/aula03/model/Database.php';

class EstudanteModel
{
    private int $idade;

    private string $nome;

    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    //Getters and setters

    public function listarModel(): array
    {
        $dadosArray = $this->database->executeSelect("SELECT * FROM estudantes");

        //$array = array(1, 2, 3, 4, 5);
        //$array = ["João", "Lucas", "Maria", "Eduardo"];

        return $dadosArray;
    }

    public function salvarModel(string $nome, int $idade)
    {
        $sql = "INSERT INTO estudantes (nome, idade) Values ('$nome', '$idade')";
        $this->database->insert($sql);

        echo "Estudante salvo com sucesso!";
    }
}