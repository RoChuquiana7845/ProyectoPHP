<form method="post">
    <label for="edad">Ingrese una edad:</label>
    <input type="number" name="edad" id="edad"/>
    <input type="submit" value="Enviar">          
</form>
<?php
// Obtener la edad ingresada por el usuario (aquí asumimos que se ha enviado mediante un formulario)
$edad = $_POST['edad'];

// Comparar la edad con diferentes valores utilizando operadores de comparación
if ($edad < 18) {
    echo "Eres menor de edad.";
} elseif ($edad >= 18 && $edad <= 65) {
    echo "Eres mayor de edad y estás en edad laboral.";
} else {
    echo "Eres mayor de edad pero estás en edad de jubilación.";
}
?>