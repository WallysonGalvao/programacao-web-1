<?php    
    // Dados do Funcionário
    $txtNome    = $_GET["txtNome"];
    $txtRg      = $_GET["txtRg"]; 
    $txtCpf     = $_GET["txtCpf"];
    $txtSexo    = $_GET["txtSexo"];
    
    echo "=======================</br>";
    echo "Dados do Funcionário: </br>";
    echo "Nome: $txtNome </br>";
    echo "Rg: $txtRg </br>";
    echo "CPF: $txtCpf </br>";
    echo "Sexo: $txtSexo </br>";
    
    // Dados Financeiros
    $txtSalario = $_GET["txtSalario"];
    $txtHoras   = $_GET["txtHoras"];
    $turno      = $_GET["turno"];
        
    echo "=======================</br>";
    echo "Dados Financeiros:</br>";
    echo "Salário: $txtSalario </br>";
    echo "Horas Extras: $txtHoras </br>";
    foreach ($turno as $chave => $valor){
        echo "Turno: $valor </br>";
    }
    
    // Outras Informações
    $comentarios    = $_GET["comentarios"];
    
    echo "=======================</br>";
    echo "Outras Informações:</br>";
    echo "Comentários: $comentarios </br>";
    echo "=======================";    
?>

