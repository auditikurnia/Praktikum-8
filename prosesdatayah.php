<?php 
include 'koneksidb.php';
    if (isset($_POST['submit'])) {
        $namaayah = $_POST['namaayah'];
        $tlayah = $_POST['tlayah'];
        $pendayah = $_POST['pendayah'];
        $pekerayah = $_POST['pekerayah'];
        $gajiayah = $_POST['gajiayah'];
        $berkebayah = $_POST['berkebayah'];

      // Menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO dataayah (namaayah, tlayah, pendayah, pekerayah, gajiayah, berkebayah)
                                  VALUES ('$namaayah', '$tlayah', '$pendayah', '$pekerayah', '$gajiayah', '$berkebayah')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Selanjutnya lengkapi formulir data ibu!'); window.location.href='formdataibu.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data gagal ditambahkan!');";
        }
      }
?>