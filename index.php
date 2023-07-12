<form method="post">
    <label for="numero">Ingrese un número:</label>
    <input type="number" name="numero" id="numero"/>
    <input type="submit" value="Enviar">          
</form>

<?php
// Obtener el número ingresado por el usuario (aquí asumimos que se ha enviado mediante un formulario)
$numero = $_POST['numero'];

// Verificar si el número es positivo, negativo o cero utilizando operadores de comparación
if ($numero > 0) {
    echo "El número $numero es positivo.";
} elseif ($numero < 0) {
    echo "El número $numero es negativo.";
} else {
    echo "El número es cero.";
}
?>