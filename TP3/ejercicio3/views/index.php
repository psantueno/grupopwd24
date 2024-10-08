<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Películas - Cinem@s</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-light">
                    <div class="card-body">
                        <h2 class="text-center">Cargar Películas - Cinem@s</h2>
                        <form action="action/action.php" method="post"
                            enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="titulo">Título</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" required>
                            </div>
                            <div class="form-group">
                                <label for="actores">Actores</label>
                                <input type="text" class="form-control" id="actores" name="actores" required>
                            </div>
                            <div class="form-group">
                                <label for="director">Director</label>
                                <input type="text" class="form-control" id="director" name="director" required>
                            </div>
                            <div class="form-group">
                                <label for="guion">Guión</label>
                                <input type="text" class="form-control" id="guion" name="guion" required>
                            </div>
                            <div class="form-group">
                                <label for="produccion">Producción</label>
                                <input type="text" class="form-control" id="produccion" name="produccion" required>
                            </div>
                            <div class="form-group">
                                <label for="anio">Año</label>
                                <input type="text" class="form-control" id="anio" name="anio" maxlength="4" required
                                    pattern="\d{4}">
                            </div>
                            <div class="form-group">
                                <label for="nacionalidad">Nacionalidad</label>
                                <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" required>
                            </div>
                            <div class="form-group">
                                <label for="genero">Género</label>
                                <select class="form-control" id="genero" name="genero" required>
                                    <option>Comedia</option>
                                    <option>Drama</option>
                                    <option>Terror</option>
                                    <option>Románticas</option>
                                    <option>Suspenso</option>
                                    <option>Otras</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="duracion">Duración (minutos)</label>
                                <input type="text" class="form-control" id="duracion" name="duracion" maxlength="3"
                                    required pattern="\d{1,3}">
                            </div>
                            <div class="form-group">
                                <label>Restricciones de edad</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="todoPublico" name="restriccion"
                                        value="Todo Público" required>
                                    <label class="form-check-label" for="todoPublico">Todo Público</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="mayores7" name="restriccion"
                                        value="Mayores de 7 años">
                                    <label class="form-check-label" for="mayores7">Mayores de 7 años</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="mayores18" name="restriccion"
                                        value="Mayores de 18 años">
                                    <label class="form-check-label" for="mayores18">Mayores de 18 años</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sinopsis">Sinopsis</label>
                                <textarea class="form-control" id="sinopsis" name="sinopsis" rows="3"
                                    required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="imagen" class="form-label">Imagen de la Película</label>
                                <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*"
                                    required>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                            <button type="reset" class="btn btn-secondary">Borrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <script src="assets/javascript/validacionForm.js"></script>
</body>

</html>