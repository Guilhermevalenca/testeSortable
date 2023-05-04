<h2>Materias:</h2>
<?php 
    foreach($_GET['materia'] as $materia){
        echo $materia . "<br>";
    }
?>
<h2>Linhas:</h2>
<?php 
    foreach($_GET['linha'] as $linha){
        echo $linha . "<br>";
    }
?>
<h2>Coluna:</h2>
<?php 
    foreach($_GET['coluna'] as $coluna){
        echo $coluna . "<br>";
    }
?>