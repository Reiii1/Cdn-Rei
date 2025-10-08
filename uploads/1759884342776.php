<?php
// **********************  1  **************************
// Inisialisasi variabel
$nama = $email = $nomor = $pilihfilm = $jumlah = "";
$namaErr = $emailErr = $nomorErr = $pilihfilmErr = $jumlahErr = "";


// **********************  2  **************************
// Jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // **********************  3  **************************
    // Ambil nilai Nama dari form
    // silakan taruh kode kalian di bawah
    //buatkan validasi yang sesuai
    $nama = $_POST["nama"] ?? "";
    $nama = trim($_POST["nama"]);
    if (empty($nama)) 
    {
     $namaErr = "Nama wajib diisi";
    }
      
    // **********************  4  **************************
    // Ambil nilai Email dari form
    // silakan taruh kode kalian di bawah
    // buatkan validasi yang sesuai
    $email = $_POST["Email"] ?? "";
    if (empty($email)) { 
      $emailErr = "Email wajib diisi";
    } 
     elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) 
    { 
      $emailErr = "Format email tidak valid"; 
    }
 

    // **********************  5  **************************
    // Ambil nilai Nomor HP dari form
    // silakan taruh kode kalian di bawah
    // buatkan validasi yang sesuai
    $nomor = $_POST["nomor"] ?? "";
    if (empty($nomor)) {
    $nomorErr = "Nomor HP wajib diisi"; 
    } 
    elseif(!ctype_digit($nomor))
    {
    $nomorErr = "Nomor HP hanya boleh angka"; }

    // **********************  6  **************************
    // Ambil nilai Film (dropdown)
    // silakan taruh kode kalian di bawah
    // buatkan validasi yang sesuai
    $pilihfilm = $_POST["Piih film"] ?? "";
    if (empty($pilihfilm)) {
      $pilihfilmErr = "Pilih film:";
    }
  

    // **********************  7  **************************
    // Ambil nilai Jumlah Tiket dari form
    // silakan taruh kode kalian di bawah
    // buatkan validasi yang sesuai
    $jumlah = $_POST["jumlah"] ?? "";
    if (empty($jumlah)) {
    $jumlahErr = "Jumlah tiket wajib diisi"; 
    } 
    elseif(!ctype_digit($jumlah))
    {
    $nomorErr = "Jumlah tiket harus angka"; }


}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Pemesanan Tiket Bioskop</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="form-container">
  <!-- **********************  8  **************************
       Tambahkan nilai atribut di dalam src dengan nama file gambar logo bioskop
  -->
  <img src="EAD.png" alt="Logo Bioskop EAD" class="logo">

  <h2>Form Pemesanan Tiket Bioskop</h2>
  <form method="post" action="">
    <!-- Isi atribut value untuk menampilkan nilai variabel di dalam (...)-->
    <label>Nama:</label>
    <input type="text" name="nama" value="<?php echo $nama; ?>">
    <span class="error"><?php echo $namaErr ? "* $namaErr" : "";?></span>

    <!-- Isi atribut value untuk menampilkan nilai variabel di dalam (...)-->
    <label>Email:</label>
    <input type="text" name="email" value="<?php echo $email; ?>">
    <span class="error"><? echo $emailErr ? "*Format email tidak valid" : ""; ?></span>

    <!-- Isi atribut value untuk menampilkan nilai variabel di dalam (...)-->
    <label>Nomor HP:</label>
    <input type="text" name="nomor" value="<?php echo $nomor; ?>">
    <span class="error"><?php echo $nomorErr ? "*Nomor HP hanya boleh angka" : ""; ?></span>

    <label>Pilih Film:</label>
    <select name="film">
      <option value="">-- Pilih Film --</option>
      <option value="Interstellar">Interstellar</option>
      <option value="Inception">Inception</option>
      <option value="Oppenheimer">Oppenheimer</option>
      <option value="Avengers: Endgame">Avengers: Endgame</option>
    </select>
    <span class="error"><?php echo $filmErr; ?></span>

    <!-- Isi atribut value untuk menampilkan nilai variabel di dalam (...)-->
    <label>Jumlah Tiket:</label>
    <input type="text" name="jumlah" value="<?php echo $jumlah; ?>">
    <span class="error"><?php echo $jumlah ? "*Jumlah tiket harus angka" : ""; ?></span>

    <button type="submit">Pesan Tiket</button>
  </form>
  
  <!-- **********************  9  ************************** -->
  <!-- Tampilkan hasil input dalam tabel jika semua valid -->
  <!-- silakan taruh kode kalian di bawah -->
  <?php if ($_SERVER["REQUEST METHOD"] == "POST" && $namaErr)
  
  ?>
</div>
</body>
</html>
