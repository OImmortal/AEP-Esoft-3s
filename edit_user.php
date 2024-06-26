<?php
    include("php/MySql.php");
    $sql = MySql::Connect();

    $id = $_GET['id'];

    $buscaUsuario = $sql->prepare("SELECT * FROM users WHERE id = ?");
    $buscaUsuario->execute(array($id));
    $buscaUsuario = $buscaUsuario->fetch();

    if(isset($_POST['acao'])) {
        $idQuero = $_POST['id'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $editUser = $sql->prepare("UPDATE users SET usuario = ?, senha = ? WHERE id = ?");
        $editUser->execute(array($email, $senha, $idQuero));
        header("Location: tables.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="container mt-4">
                                        <h2><strong style="color: black;">Editar Usuário</strong></h2>
                                        <form action="edit_user.php" method="post">
                                            <input type="hidden" name="id" value="<?php echo $id ?>">
                                          <div class="form-group">
                                            <label for="email">Novo Email:</label>
                                            <input type="email" class="form-control" id="email" name="email" required placeholder="user@email.com" value="<?php echo $buscaUsuario['usuario'] ?>">
                                          </div>
                                          <div class="form-group">
                                            <label for="senha">Nova Senha:</label>
                                            <input type="password" class="form-control" id="senha" name="senha" required placeholder="senha" value="<?php echo $buscaUsuario['senha'] ?>">
                                          </div>
                                          <input type="submit" value="Salvar Alterções" class="btn btn-primary" name="acao">
                                        </form>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>