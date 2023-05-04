<h2>Materias:</h2>
<?php 
    foreach($_POST['materia'] as $materia){
        echo $materia . "<br>";
    }
?>
<h2>Linhas:</h2>
<?php 
    foreach($_POST['linha'] as $linha){
        echo $linha . "<br>";
    }
?>
<h2>Coluna:</h2>
<?php 
    foreach($_POST['coluna'] as $coluna){
        echo $coluna . "<br>";
    }
?>