<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Nilai Ujian</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .btn-hover:hover {
            background-color: #198754;
            color: #fff;
            transition: 0.3s;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4">
                    <h3 class="text-center mb-4">Form Nilai Ujian</h3>
                    <form method="post" action="">
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nilai Ujian</label>
                            <input type="number" name="nilai" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100 btn-hover">Kirim</button>
                    </form>
                </div>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nama = htmlspecialchars($_POST['nama']);
                    $email = htmlspecialchars($_POST['email']);
                    $nilai = (int) $_POST['nilai'];

                    echo "<div class='alert mt-4 ";
                    echo ($nilai > 70) ? "alert-success" : "alert-warning";
                    echo "'>";
                    echo "<h5>Hasil Penilaian</h5>";
                    echo "Nama: <strong>$nama</strong><br>";
                    echo "Email: <strong>$email</strong><br>";
                    echo "Nilai: <strong>$nilai</strong><br>";
                    echo "Status: <strong>" . ($nilai > 70 ? "Lulus" : "Remedial") . "</strong>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional, untuk interaktif tambahan) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>