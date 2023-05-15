<?php 
include 'koneksidb.php';
    if (isset($_POST['submit'])) {
        $namaibu = $_POST['namaibu'];
        $tlibu = $_POST['tlibu'];
        $pendibu = $_POST['pendibu'];
        $pekeribu = $_POST['pekeribu'];
        $gajiibu = $_POST['gajiibu'];
        $berkebibu = $_POST['berkebibu'];

      // Menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO dataibu (namaibu, tlibu, pendibu, pekeribu, gajiibu, berkebibu)
                                  VALUES ('$namaibu', '$tlibu', '$pendibu', '$pekeribu', '$gajiibu', '$berkebibu')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Seluruh data berhasil disimpan!'); window.location.href='formregist.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data gagal ditambahkan!!');";
        }
      }
?>