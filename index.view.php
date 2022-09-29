<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <title>Formulario</title>
</head>
<body>
    <h1 id="h1-principal">Formulario</h1>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <input type="text" class="form-control" id="name" name="nombre" placeholder="Nombre: " value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
            <input type="text" class="form-control" id="mail" name="correo" placeholder="Correo: " value="<?php if(!$enviado && isset($correo)) echo $correo ?>">
            <textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje: "><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>

            <?php if(!empty($errores)):?>
                <div class="alert error">
                    <?php echo $errores ?>
                </div>
            <?php elseif($enviado): ?>
            <div class="alert success">
                <p>¡Enhorabuena! Se ha enviado correctamente.</p>
            </div>
            <?php endif; ?>
            <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
        </form>
    </div>
</body>
</html>