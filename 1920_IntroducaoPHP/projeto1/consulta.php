<?php
    $mysqli=new mysqli("localhost","root","123456","projeto");
    if($mysqli -> connect_errno){
        echo "Falha na conexão MySQL:" .$mysqli -> connect_errno;
        exit();
    }

    $query="SELECT first_name, last_name from actor";
    $result=mysqli_query($mysqli, $query);
    echo "
        <table class='table table-dark table-striped'>
        <thead>
        <th>Nome</th>
        <th>Sobrenome</th>
        </thead>
        <tbody>
    ";
    
    while($row=mysqli_fetch_row($result)){
        print("<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>");
    }

    echo "
        </tbody>
        </table>
    ";

    $mysqli -> close();
?>