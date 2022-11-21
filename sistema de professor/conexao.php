<?php
    $nome = $_POST["nome"];
    $select = $_POST["select"];
    $senha = $_POST["senha"];

    try{
        $con = new PDO("mysql:host=localhost;dbname=trabalho", "root", "");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $comando = "Insert into dados(nome, select, senha)
        VALUES(?, ?, ?)";
    
        $s = $con->prepare($comando);
    
        $s->bindParam(1, $nome);
        $s->bindParam(2, $select);
        $s->bindParam(3, $senha);
    
        $s->execute();

        $comando1 = "Select * from dados";
        $s1 = $con->prepare($comando1);

        if () {
            # code...
        }

        header('Location: insere.php?id=' . $s1->columnCount());

    } catch (PDOException $e){
        echo 'ERROR: ' . $e->getMessage();
    }

    
?>