<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cek BMI</title>

</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8" ="black">
                <form>
    <h2 class="text-center mb-5">Form Pasien</h2>
    <form action="CekBMI.php" method="GET">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama_lengkap" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Berat Badan</label> 
    <div class="col-8">
      <input id="berat" name="berat_" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Tinggi Badan</label> 
    <div class="col-8">
      <input id="tinggi" name="tinggi_" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Umur</label> 
    <div class="col-8">
      <input id="umur" name="umur_" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class=”form-check mr-auto”>
        <input class="form-check-input" type="radio" id="laki" name="jenis_kelamin" value="Laki-Laki">
        <label class="form-check-label mr-5" for="laki">
          Laki-Laki
        </label>
        <input class="form-check-input" type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
        <label class="form-check-label" for="perempuan">
          Perempuan
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
                </div>
				<div class="col-md-2">
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once "ClassBMI.php"; ?>

<div class="container">
    <h3 class="text-center mb-5">Data BMI Pasien</h2>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Gender</th>
                <th scope="col">Umur</th>
                <th scope="col">Berat</th>
                <th scope="col">Tinggi</th>
                <th scope="col">BMI</th>
                <th scope="col">Hasil</th>
</tr>
</thead>
<tbody>
    <?php
    $nomor = 1;
    foreach ($ar_pasien as $pasien) {
        echo '<tr><td>' . $nomor . '</td>';
        echo '<td>' . $pasien['nama'] . '</td>';
        echo '<td>' . $pasien['kelamin'] . '</td>';
        echo '<td>' . $pasien['umur'] . '</td>';
        echo '<td>' . $pasien['berat'] . '</td>';
        echo '<td>' . $pasien['tinggi'] . '</td>';
        $BMI = $pasien["berat"] / (($pasien["tinggi"] / 100) ** 2);
        echo '<td>' . number_format($BMI, 1) . '</td>';
        $status = new bmiPasien();
        echo $status->statusBMI($BMI);
        echo '</tr>';
        $nomor++;
    }
    ?>
</body>
</html>