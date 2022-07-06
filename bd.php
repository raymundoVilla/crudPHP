<?php
$usuario="root";
$contraseña="";
try {
    $mbd = new PDO('mysql:host=localhost;dbname=crud', $usuario, $contraseña);
    foreach($mbd->query('SELECT * from datos') as $fila) {
        var_dump($fila);
    }
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>