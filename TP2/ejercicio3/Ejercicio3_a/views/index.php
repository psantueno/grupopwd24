<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-dark">
    <form action="action/action.php" method="post" class="bg-white pt-4 pb-5 px-4 rounded-2" id="formulario">
        <div class="d-flex justify-content-center align-items-center mt-2">
            <h1 class="fs-4">Member login</h1>
        </div>
        <div class="input-group mt-3 mb-3" id="input-field-username">
                <i class="bi bi-person-fill input-group-text bg-white"></i>
                <input type="text" name="username" id="username" placeholder="Username" class="form-control">
        </div>
        <div class="input-group mb-3" id="input-field-password">
            <i class="bi bi-lock-fill input-group-text bg-white"></i>
            <input type="password" name="password" id="password" placeholder="Password" class="form-control">
        </div>
        <div class="mb-4">
            <button class="btn btn-success col-12" type="submit">Login</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
    <script src="assets/javascript/validarTp2Ej3a.js"></script>
</body>
</html>