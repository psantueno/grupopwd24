<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar Películas - Cinem@s</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/styles.css">

</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-light">
                    <div class="card-body">
                        <h2 class="text-center">Cargar Películas - Cinem@s</h2>
                        <form action="action/action.php" method="post" id="formulario">
                            <div class="form-group">
                                <label for="titulo">Título</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" >
                            </div>
                            <div class="form-group">
                                <label for="actores">Actores</label>
                                <input type="text" class="form-control" id="actores" name="actores">
                            </div>
                            <div class="form-group">
                                <label for="director">Director</label>
                                <input type="text" class="form-control" id="director" name="director">
                            </div>
                            <div class="form-group">
                                <label for="guion">Guión</label>
                                <input type="text" class="form-control" id="guion" name="guion">
                            </div>
                            <div class="form-group">
                                <label for="produccion">Producción</label>
                                <input type="text" class="form-control" id="produccion" name="produccion">
                            </div>
                            <div class="form-group">
                                <label for="anio">Año</label>
                                <input type="text" class="form-control" id="anio" name="anio" maxlength="4"
                                    pattern="\d{4}">
                            </div>
                            <div class="form-group">
                                <label for="nacionalidad">Nacionalidad</label>
                                <input type="text" class="form-control" id="nacionalidad" name="nacionalidad">
                            </div>
                            <div class="form-group">
                                <label for="genero">Género</label>
                                <select class="form-control" id="genero" name="genero">
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
                                 pattern="\d{1,3}">
                            </div>
                            <div class="form-group">
                                <label>Restricciones de edad</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="todoPublico" name="restriccion"
                                        value="Todo Público" checked>
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
                                ></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                            <button type="reset" class="btn btn-secondary">Borrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
    <script src="./assets/javascript/validacionesEj4Tp2.js"></script>

</body>

</html>