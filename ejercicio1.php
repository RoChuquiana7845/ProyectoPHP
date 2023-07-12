<form method="post">
    <label for="numero1">Ingrese un número:</label>
    <input type="number" name="numero1" id="numero1"/>
    <label for="numero2">Ingrese otro número:</label>
    <input type="number" name="numero2" id="numero2"/>
    <input type="submit" value="Enviar">          
</form>

<?php
$numero1 =  $_POST['numero1'];
$numero2 =  $_POST['numero2'];

// Igualdad
if ($numero1 == $numero2) {
    echo "Los números son iguales.";
} else {
    echo "Los números no son iguales.";
}

// Desigualdad
if ($numero1 != $numero2) {
    echo "Los números no son iguales.";
} else {
    echo "Los números son iguales.";
}

// Mayor que
if ($numero1 > $numero2) {
    echo "El número 1 es mayor que el número 2.";
} else {
    echo "El número 1 no es mayor que el número 2.";
}

// Menor que
if ($numero1 < $numero2) {
    echo "El número 1 es menor que el número 2.";
} else {
    echo "El número 1 no es menor que el número 2.";
}

// Mayor o igual que
if ($numero1 >= $numero2) {
    echo "El número 1 es mayor o igual que el número 2.";
} else {
    echo "El número 1 no es mayor o igual que el número 2.";
}

// Menor o igual que
if ($numero1 <= $numero2) {
    echo "El número 1 es menor o igual que el número 2.";
} else {
    echo "El número 1 no es menor o igual que el número 2.";
}
?>