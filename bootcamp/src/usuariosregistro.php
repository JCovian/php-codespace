<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script>
        function checkPass(){
            pass1 = document.formNewUser.inputPassword.value;
            pass2 = document.formNewUser.inputConfirm.value;

            if (pass1 === pass2)
             document.formNewUser.submit()
            else
             window.alert("Las dos claves son distintas")
        }
</script> 
</head>
<body>
    <div class="container">
        <?php include_once 'mimenu.php'; ?>
        <h3>Ingreso nuevo usuario</h3>
        <hr>
        <form action = "confirmRegister.php" method="post" name="formNewUser">
            <div class="mb-3">
                <label for="inputName" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="inputName" name = "inputName">
            </div>
            <div class="mb-3">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" name = "inputEmail">
                <div id="emailHelp" class="form-text">Nuna compartiremos tu dirección de correo electrónico.</div>
            </div>
            <div class="mb-3">
                <label for="inputPassword" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="inputPassword" name = "inputPassword">
            </div>
            <div class="mb-3">
                <label for="inputConfirm" class="form-label">Confirme contraseña</label>
                <input type="password" class="form-control" id="inputConfirm" name="inputConfirm">
            </div>
            <button type="button" class="btn btn-primary" onClick = "checkPass()">Enviar</button>
        </form>
    </div>
    
</body>
</html>