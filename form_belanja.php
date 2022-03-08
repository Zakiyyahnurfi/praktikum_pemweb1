<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div style="margin-top: 50px;" class="container-fluid">
	<div class="row">
		<div class="col-md-6"><form action="form_belanja.php" method="POST">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah Beli</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
    <button name="proses" value="proses" type="submit" class="btn btn-success">Proses</button>
    </div>
  </div>
</form>
</div>
		<div class="col-md-6">
        <table class="table table-sm">
  <thead>
    <tr style="background-color: DodgerBlue;">
      <th scope="col" style="color: white;">Daftar Harga</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">TV : 4.200.000</th>
    </tr>
    <tr>
      <th scope="row">Kulkas : 3.100.000</th>
    </tr>
    <tr>
      <th scope="row">Mesin Cuci : 3.800.000</th>
    </tr>
  </tbody>
  <tfoot>
  <tr style="background-color: DodgerBlue;">
      <th scope="col" style="color: white;">Harga Dapat Berubah Setiap Saat</th>
    </tr>
</tfoot>
</table>
    </div>
	</div>
</div>

<?php

$proses = $_POST["proses"];
$customer = $_POST["customer"];
$produk = $_POST["produk"];
$jumlah = $_POST["jumlah"];
$total = 0;

if ($produk == "TV") {
    $total = $jumlah * 4200000;
} elseif ($produk == "Kulkas") {
    $total = $jumlah * 3100000;
} elseif ($produk == "Mesin Cuci") {
    $total = $jumlah * 3800000;
}

echo '<br> Nama Customer :' .$customer;
echo '<br> Produk Pilihan :' .$produk;
echo '<br> Jumlah :' .$jumlah;
echo '<br> Total Belanja :' .$total;


$bayar = $total
?>
</body>
</html>