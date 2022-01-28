<?php
class queryBuilder
{
    public $pdo;
    function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    function selectAll($table, String $intoClass)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }
    function insertTask($table, $task){
        $descrizione = $task["descrizione"];
        $sql = "INSERT INTO {$table} (descrizione, terminata) VALUES (:descrizione, {$task['terminata']})";
       $statement = $this->pdo->prepare($sql);
       $statement->bindParam(':descrizione', $descrizione, PDO::PARAM_LOB);
       $statement->execute();
    }
    function doneTask($id){
        $sql = "UPDATE `tasks` SET `terminata`='1' WHERE `id`= {$id};";
        $this->execute($sql);
    }
    function execute($sql){
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
    }
}
