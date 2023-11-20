<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css.css">
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/1c256bdeea.js" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
    <header class="fixed-top">
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand fw-bold">DB MAHASISWA</a>
                <div class="collapse navbar-collapse">
                    <form action="data-daftar-mahasiswa.php" method="POST" class="col me-3">
                        <input type="text" name="keyword" id="search" class="form-control" placeholder="Search...">
                        <input type="submit" name="search" hidden>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="login.php" class="btn btn-outline-light">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <p class="m-2">Logged in as : Admin</p>
    </header>

    <main>
        <title>Login</title>

        <?php 

        // Kode untuk login

        ?>

        <div class="content container-fluid d-flex justify-content-center align-items-center">
            <div class="row">
                <h1 class="text-center my-4">Login</h1>
                <div class="card shadow p-3">
                    <form action="" method="POST">
                        <fieldset>
                            <div class="my-2">
                                <label for="username" class="form-label">Username :</label>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="my-2">
                                <label for="password" class="form-label">Password :</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <input type="submit" name="login" value="Login" class="btn btn-dark form-control mt-2">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>