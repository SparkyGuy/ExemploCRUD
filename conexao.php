<?php



$pdo = new PDO('mysql:host=127.0.0.1;dbname=escola;','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    if(isset($_POST['nome_escola'])){
        $sql = $pdo->prepare("INSERT INTO escola VALUES (null, ?,?,?,?,?)");
        $sql->execute(array(
            $_POST['nome_escola'],
            $_POST['tel_escola'],
            $_POST['end_escola'],
            $_POST['cnpj_escola'],
            md5($_POST['senha_escola']
        )));
    }
    if (isset($_GET['delete'])){
        $id = (int)$_GET['delete'];
        $pdo->exec("DELETE FROM escola WHERE id=$id");
    }


    $sql = $pdo->prepare("SELECT * FROM escola");
    $sql->execute();

    $fetchEscola = $sql->fetchAll();
    
    foreach ($fetchEscola as $key => $value){
        echo '<a href="?delete='.$value['id'].'">(X)</a>'.'Nome: '.$value['nome'].' | '.'Telefone: '.$value['tel'].' | '.'Endereço: '.$value['ende'].' | '.'CNPJ: '.$value['cnpj'].' | '.'Senha: '.$value['senha'];
        echo'<hr>';
    }


?>