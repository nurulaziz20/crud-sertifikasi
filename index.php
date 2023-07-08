<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Form Siswa</h2>
  <form action="proses_form.php" method="POST">
    <div>
      <label for="nis">NIS:</label>
      <input type="text" id="nis" name="nis" required>
    </div>
    <div>
      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" required>
    </div>
    <div>
      <label for="alamat">Alamat:</label>
      <textarea id="alamat" name="alamat" required></textarea>
    </div>
    <div>
      <label for="jenis_kelamin">Jenis Kelamin:</label>
      <select id="jenis_kelamin" name="jenis_kelamin" required>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
    <div>
      <label for="agama">Agama:</label>
      <input type="text" id="agama" name="agama" required>
    </div>
    <div>
      <input type="submit" value="Submit">
    </div>
  </form>
</body>
</html>