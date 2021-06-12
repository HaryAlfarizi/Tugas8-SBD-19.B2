<html>
   <head>
      <title>Menampilkan Data Tabel MySQL</title>
      <style>
         body {font-family:tahoma, arial}
         table {border-collapse: collapse}
         th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030}
         th {background: #CCCCCC; font-size: 12px; border-color:#B0B0B0}
      </style>
   </head>
   <body>
      <center><h1>Database Penjualan</h1></center>
     <center> <h3>Tabel Transaksi</h3></center>
      <center><table></center>
         <thead>
            <tr>
               <th>Id Transaksi</th>
               <th>Id Barang</th>
               <th>Id Pembeli</th>
               <th>Tanggal</th>
               <th>Keterangan</th>

            </tr>
         </thead>
         <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM transaksi';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['id_transaksi'] ?></td>
               <td><?php echo $row['id_barang'] ?></td>
               <td><?php echo $row['id_pembeli'] ?></td>
               <td><?php echo $row['tanggal'] ?></td>
               <td><?php echo $row['keterangan'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <center><h3>Tabel Pembeli</h3></center>
      <center><table></center>
         <thead>
            <tr>
               <th>Id Pembeli</th>
               <th>Nama Pembeli</th>
               <th>JK</th>
               <th>No Telp</th>
               <th>Alamat</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM pembeli';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['id_pembeli'] ?></td>
               <td><?php echo $row['nama_pembeli'] ?></td>
               <td><?php echo $row['jk'] ?></td>
               <td><?php echo $row['no_telp'] ?></td>
               <td><?php echo $row['alamat'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      </table>
    
   </body>
</html>