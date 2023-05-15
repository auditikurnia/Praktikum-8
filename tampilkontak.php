<h2>Daftar Kontak</h2>
<table border="1">
    <tr><th>NO</th><th>ID</th><th>NAMA</th><th>GENDER</th><th>EMAIL</th><th>ALAMAT</th><th>KOTA</th><th>PESAN</th></tr>
    <?php
    include 'koneksi.php';
    $contact = mysqli_query($koneksi, "SELECT * from contact");
    $no=1;
    foreach ($contact as $row){
        echo "<tr>
            <td>$no</td>
            <td>".$row['id']."</td>
            <td>".$row['nama']."</td>
            <td>".$row['jkel']."</td>
            <td>".$row['email']."</td>
            <td>".$row['alamat']."</td>
            <td>".$row['kota']."</td>
            <td>".$row['pesan']."</td>
              </tr>";
        $no++;
    }
    ?>
</table>