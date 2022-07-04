<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <h4>Nuevo empleado</h4>
    <form action = "confirmNewUser.php" method="post" name="formNewEmployee">
        <div class="mb-3">
            <label for="inputName" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="inputName" name="inputName">
        </div>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">eMail</label>
            <input type="email" class="form-control" id="inputEmail" name="inputEmail">
        </div>
        <div class="mb-3">
            <label for="inputAge" class="form-label">Edad</label>
            <input type="number" class="form-control" id="inputAge" name="inputAge">
        </div>
        <div class="mb-3">
            <label for="inputCity" class="form-label">Ciudad</label>
            <input type="text" class="form-control" id="inputCity" name="inputCity">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</body>
</html>