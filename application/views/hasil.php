<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <title>Hasil</title>

</head>
<body>
    <div class="container">

        <h3>Hasil cek ongkir</h3>
        <strong>Pengiriman dari: </strong>
        <?php echo $hasil->rajaongkir->origin_details->city_name?><br>
        <strong>Tujuan: </strong>
        <?php echo $hasil->rajaongkir->destination_details->city_name?><br>
        <strong>Kurir: </strong>
        <?php echo $hasil->rajaongkir->results[0]->name?><br>
        <strong>Berat: </strong>
        <?php echo ($hasil->rajaongkir->query->weight/1000)?>Kg<br>
        
        <strong>Biaya: </strong><br>
        <?php foreach($hasil->rajaongkir->results[0]->costs as $biaya):?>
           <?php echo $biaya->service?>
           <?php echo "Rp. ". number_format($biaya->cost[0]->value)?> (<?=$biaya->cost[0]->etd?>)<br>
        <?php endforeach?>

    </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</body>
</html>