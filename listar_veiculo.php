<?php
    include ("conexao.php");

    $consulta = "select * from veiculo";

    $resultado = mysqli_query($conexao,$consulta) or die("Erro");

    while($linha=mysqli_fetch_assoc($resultado)){
        print_r($linha);
        echo "<br /><br />";
    }
?>