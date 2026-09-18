<?php
// Recibe mediante POST los datos enviados desde index.php.
$nombre = htmlspecialchars($_POST['nombre'] ?? '', ENT_QUOTES, 'UTF-8');
$edad = htmlspecialchars($_POST['edad'] ?? '', ENT_QUOTES, 'UTF-8');
$ciudad = htmlspecialchars($_POST['ciudad'] ?? '', ENT_QUOTES, 'UTF-8');
$pasatiempo = htmlspecialchars($_POST['pasatiempo'] ?? '', ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Resultados de datos!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dive2">
        <h1>Resultados</h1>

        <div class="result-card">
            <h2>Datos registrados</h2>
            <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
            <p><strong>Edad:</strong> <?php echo $edad; ?></p>
            <p><strong>Ciudad:</strong> <?php echo $ciudad; ?></p>
            <p><strong>Pasatiempo favorito:</strong> <?php echo $pasatiempo; ?></p>
        </div>

        <h2>¡Bien Hecho!</h2>

        <button type="button" onclick="Alert.show()">
            Registrar otro dato
        </button>
    </div>

    <!-- Ventana emergente -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <div class="modal-icon">?</div>
            <h2>¿Deseas regresar?</h2>
            <p>Al regresar podrás ingresar un nuevo dato.</p>
            <div class="modal-buttons">
                <button type="button" onclick="Alert.close()">Cancelar</button>
                <a href="index.php">
                    <button type="button">Sí, regresar</button>
                </a>
            </div>
        </div>
    </div>

    <script src="app.js"></script>
</body>
</html>
