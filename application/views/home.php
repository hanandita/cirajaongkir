<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <title>Test Raja Ongkir</title>

    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.autosearch').select2();
        });
    </script>
</head>
<body>
    <div class="container">
        <h1>ini home</h1>
        <form method="POST" action="<?php echo site_url('Home/cekongkir')?>">
            <div class="form-group">
                <label>PIlih asal kota</label>
                <select class="form-control autosearch" name="asal">
                    <option>Pilih Kota</option>
                        <?php if($kota) :?>
                            <?php foreach($kota->rajaongkir->results as $kt) : ?>
                                <option value="<?php echo $kt->city_id ?>"><?php echo $kt->city_name?></option>
                            <?php endforeach?>
                        <?php endif?>
                </select>
            </div>
            <div class="form-group">
                <label >Pilih Tujuan Kota</label>
                <select class="form-control autosearch" name="tujuan">
                    <option>Pilih Kota</option>
                        <?php if($kota) :?>
                            <?php foreach($kota->rajaongkir->results as $kt) : ?>
                                <option value="<?php echo $kt->city_id ?>"><?php echo $kt->city_name?></option>
                            <?php endforeach?>
                        <?php endif?>
                </select>
            </div>
            <div class="form-group">
                <label>Berat Paket</label>
                <input type="text" name="berat" class="form-control">
            </div>
            <div class="form-group">
                <label>PIlih Jenis Kurir</label>
                <select class="form-control" name="kurir">
                    <option value="">Pilih Kurir</option>
                    <option value="jne">JNE</option>
                    <option value="pos">POS</option>
                    <option value="tiki">TIKI</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Cek Ongkir" class="btn btn-primary" name="submit">
            </div>
        </form>
    </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</body>
</html>