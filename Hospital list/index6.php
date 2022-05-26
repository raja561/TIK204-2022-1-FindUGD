<!--  <table border="1" cellpadding="10">
        <tr>
            <td>Nama Rumah Sakit</td>
            <td>Jumlah Pasien</td>
        </tr>
        <tr>
            <td>Rumah Sakit Zainal Abidin</td>
            <td>15/30</td>
        </tr>
        <tr>
            <td>Rumah Sakit Cempaka</td>
            <td>15/30</td>
        </tr>
        <tr>
            <td>Rumah Sakit Kesdam Iskandar Muda</td>
            <td>15/30</td>
        </tr>
        <tr>
            <td>RSIA Cempaka Az-Zahra</td>
            <td>15/30</td>
        </tr>
        <tr>
            <td>Rumah Sakit Ibu dan Anak (RSIA) Aceh</td>
            <td>15/30</td>
        </tr>
        <tr>
            <td>Rumah Sakit Bhayangkara Polda Aceh</td>
            <td>15/30</td>
        </tr>
        <tr>
            <td>RSUD Meuraxa </td>
            <td>15/30</td>
        </tr>
        <tr>
            <td>RS Prince Nayef Unsyiah</td>
            <td>15/30</td>
        </tr>
        <tr>
            <td>RS Teungku Fakinah</td>
            <td>15/30</td>
        </tr>
        
    </table> -->

    <?php 
session_start();
//skrip koneksi
$koneksi = new mysqli("localhost","root","","findugd");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="foto_produk/logo.png">
    <title> </title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="bootstrap.min.css">
  <style>
    <style>
    body{ background: url(online-shopping-clipart-clothes-shopping-701475-5432943.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: 37%;
  back
  }

  .header {
  padding: 10px 16px;
  background: #555;
  color: #000000; }

  .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}
  </style>
</head>
<body style= "background-color:#d3d3d3">


<!-- Konten Produk -->
    
  <br>
  <br><br>
  <h1 style="text-align: center;"> DAFTAR RUMAH SAKIT </h1>
  <br>
<div class="container">
<section class="content">
<table style= "background-color:#ffffff" class="table table-bordered">
  <thead>
    <tr>
      <th>Nama Rumah Sakit</th>
      <th>Jumlah Pasien</th>
    </tr>
  </thead>
  <tbody>
  <?php $nomor=1; ?>
  <?php $ambil=$koneksi->query("SELECT * FROM maps"); ?>
  <?php while ($pecah = $ambil->fetch_assoc()) { ?>
    <tr>
      <td><?php echo $pecah['nama_rs']; ?></td>
      <td><?php echo $pecah['jumlah_pasien']; ?> </td>
      
      
    </tr>
  <?php $nomor++; ?>
  <?php } ?>

</tbody>
</table>
    </ul>
      </nav>
  </section>
</div>
</body>
</html>