<?php 

// Membuat koneksi ke database

?>

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
        <title>CRUD | Data Daftar Mahasiswa</title>

        <div class="content container-fluid text-center justify-content-center mt-5 p-4">
            <div class="row">
                <h1>Data Daftar Mahasiswa</h1>
                <div class="card shadow p-3">
                    <table class="table table-hover shadow">
                        <thead>
                            <tr class="table-dark">
                                <th>NIM</th>
                                <th>NAMA</th>
                                <th>JENIS KELAMIN</th>
                                <th class="col-5">ALAMAT</th>
                                <th>NOMOR HP</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            
                            // Kode untuk menampilkan data mahasiswa
                            
                            ?>
                            <tr>
                                <td><?= $result["nim"]; ?></td>
                                <td><?= $result["nama"]; ?></td>
                                <td><?= $result["jenis_kelamin"]; ?></td>
                                <td><?= $result["alamat"]; ?></td>
                                <td><a href="" target="_blank"><?= $result["no_hp"]; ?></a></td>
                                <td>
                                    <a class="fw-bold" href="">Ubah</a> | 
                                    <a class="fw-bold" href="" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div><a class="btn btn-dark" href="tambah-mahasiswa.php"><i class="fas fa-plus"></i>&nbsp; Tambah baru</a></div>
                </div>
            </div>
        </div>
    </main>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>