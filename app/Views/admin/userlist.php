<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User list</title>
    <link rel="stylesheet" href="<?= base_url(); ?>css_native/style.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap.min.css" />
    <style>
        body{
        font-family: 'Yanone Kaffeesatz', sans-serif;
        background-color: #002B27;
        } 
        .navbar{
          background-color: #09675E;
          margin-bottom: 35px;
        }

    #modal_add{
        padding-top: 130px;
    }
    .table-title{
        color: #002B27;
    }
    .table{
        background-color: #E8DEAB;
    }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm">
        <div class="container">
          <a class="navbar-brand" href="#"> <img src="Img/Logo Cafe.svg" alt="Logo" width="150px" height="50px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto fw-semibold">
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>admin">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>admin">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Karyawan</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <section id="modal_add">
        <div class="container">
            <div class="row">
                <h1 class="text-light offset-1 mt-3">Data Users</h1>
                <div class="col-md-6 offset-1 mt-4">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-secondary px-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add Data
                    </button>
                    <a href="index.html" class="btn btn-danger ms-1 px-4">Kembali</a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="#" method="post">
                                        <div class="mb-3">
                                            <label for="kode_karyawan" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="kode_karyawan" name="kode_karyawan" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Email</label>
                                            <input type="text" class="form-control" id="nama" name="nama" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Role</label>
                                            <textarea class="form-control" id="alamat" name="alamat" rows="5" required></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div clas s="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-md-10 ">
                <table class="table rounded text-center shadow">
                    <thead>
                      <tr>
                        <th scope="col" class="table-title">No</th>
                        <th scope="col" class="table-title">Username</th>
                        <th scope="col" class="table-title">Email</th>
                        <th scope="col" class="table-title">Role</th>
                        <th scope="col" class="table-title">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($users as $user) : ?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $user->username; ?></td>
                        <td><?= $user->email; ?></td>
                        <td><?= $user->name; ?></td>
                        <td>
                          <button type="button" class="btn btn-danger">Delete</button>
                          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Update
                    </button>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                    </tbody>
                  </table>
            </div>
            </div>
        </div>
        </section>
    
</body>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
</html>