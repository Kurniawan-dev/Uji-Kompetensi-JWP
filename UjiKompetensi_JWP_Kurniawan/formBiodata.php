<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Input Biodata</title>
    <!-- Link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <style>
    /* Menambahkan style agar titik dua berada sejajar */
    .col-form-label {
        display: flex;
        justify-content: space-between;
    }

    .col-form-label span {
        margin-right: 10px;
    }

    .col-form-label::after {
        content: " :";
        margin-left: 10px;
    }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4"><u>Input Biodata</u></h4>
                        <!-- Ketika form di submit, menjalankan file process.php -->
                        <form action="process.php" method="POST">
                            <div class="mb-3 row">
                                <label for="nik" class="col-sm-4 col-form-label">NIK</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nik" name="nik" required />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama" name="nama" required />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="tempat_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                        required />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="tanggal_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                        required />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="jenis_kelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin"
                                        required />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="alamat" name="alamat" required />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="agama" class="col-sm-4 col-form-label">Agama</label>
                                <div class="col-sm-8">
                                    <select class="form-select" name="agama" id="agama" required>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                    </select>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Send</button>
                                <button type="button" class="btn btn-secondary"
                                    onclick="window.location.href='index.php';">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>