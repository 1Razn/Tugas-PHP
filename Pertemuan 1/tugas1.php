<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas PHP: Form & Struktur Kendali</title>
</head>

<body>

  <h2>Form Input Data Siswa</h2>

  <form method="POST" action="">
    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="nilai">Nilai Ujian:</label><br>
    <input type="number" id="nilai" name="nilai" min="0" max="100" required><br><br>

    <button type="submit" name="submit">Kirim</button>
  </form>

  <hr>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nilai = $_POST['nilai'];

    echo "<h2>Hasil Output:</h2>";
    echo "<p><b>Nama:</b> $nama</p>";
    echo "<p><b>Email:</b> $email</p>";
    echo "<p><b>Nilai Ujian:</b> $nilai</p>";

    echo "<p><b>Status Kelulusan:</b> ";

    if ($nilai > 70) {
      echo "Lulus</p>";
    } else {
      echo "Remedial</p>";
    }
  }
  ?>

</body>

</html>