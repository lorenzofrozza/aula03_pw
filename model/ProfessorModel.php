<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/database/Database.php';

class ProfessorModel
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
        $dadosArray = $this->database->executeSelect("SELECT * FROM professores");
        //$array = array(1, 2, 3, 4, 5);
        //$array = ["João", "Lucas", "Maria", "Eduardo"];

        return $dadosArray;
    }

    public function salvarModel(string $nome, int $idade)
    {
        $sql = "INSERT INTO professores (nome, idade) Values ('$nome', '$idade')";
        $this->database->insert($sql);

    }
}