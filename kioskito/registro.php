<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/registro.css">
    <link rel="stylesheet" href="scss/custom.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css">
</head>
<body class="colorbg">
    <header class="header ">
        <div class="header-p">
            <div class="logo ">
            </div>
        </div>
    </header>
    <main >
        <section class="container-fluid mb-5 ">
            <div class="container-xxl fonmtsas">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="mi-h2">Registate</h1>
                        <p class="parrdao">Let's join us</p>
                    </div>
                    <div class="col-12 text">
                        <?php
                        

                        ?>
                        <form class="row  needs-validation styliia  m-auto" novalidate action="insertaruser.php" method="POST">
                            <div class="col-md-12 mb-1">
                                <label for="validationCustom05" class="form-label parrdao">Nombre</label>
                                <input type="text" class="form-control form-control-lg p-2" name="Nombre" placeholder="Escriba su Nombre" required>
                                <div class="invalid-feedback">
                                    <i class="fa-solid fa-xmark"></i> Escriba su Nombre
                                </div>
                            </div>
                            <div class="col-md-12  mb-1">
                                <label for="validationCustom05" class="form-label parrdao">Apellido</label>
                                <input type="text" class="form-control form-control-lg p-2" name="Apellido" placeholder="Escriba su Apellido" required>
                                <div class="invalid-feedback">
                                    <i class="fa-solid fa-xmark"></i> Escriba su Apellido
                                </div>
                            </div>
                            <div class="col-md-12 mb-1">
                                <label for="validationCustom05" class="form-label parrdao">Email</label>
                                <input type="email" class="form-control form-control-lg p-2" name="email" placeholder="Username o email address" required>
                                <div class="invalid-feedback">
                                    <i class="fa-solid fa-xmark"></i> Escriba una direcion de email valida
                                </div>
                            </div>
                            <div class="col-md-12 mb-1">
                                <label for="validationCustom05" class="form-label parrdao">Contraseña</label>
                                <input type="password" class="form-control form-control-lg p-2" name="contrasena" placeholder="Contraseña" required>
                                <div class="invalid-feedback">
                                    <i class="fa-solid fa-xmark"></i> Escriba una contraseña valida
                                </div>
                            </div>
                            
                            <div class="col-12 botonper text-center mt-5">
                                <button class="" type="submit" value="Enviar">registrarse</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    <script src="js/conta.js"></script>
    <script src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/83996c6a04.js" crossorigin="anonymous"></script>
</body>
</html>