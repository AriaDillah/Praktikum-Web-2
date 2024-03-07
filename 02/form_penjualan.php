<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penjualan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    


    <style>
        body {
            background-color: #FFFF00;
            margin-top: 50px;
        }
        .container {
            background-color: #00FFFF;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #000000;
            margin-bottom: 30px;
            text-align: center;
        }
        label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .harga-list {
            border: 1px solid #000000;
            border-radius: 8px;
            padding: 10px;
        }

        .hasil-input {
        margin-top: 20px;
        padding: 20px;
        background-color: #228B22;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .hasil-input h3 {
        color: #808080;
        margin-bottom: 20px;
        text-align: center;
    }
    .hasil-input p {
        font-size: 18px;
        margin-bottom: 10px;
    }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Pemesanan</h2>
        <div class="row">
            <div class="col-md-6">
                <form method="post">
                    <div class="form-group row">
                        <label for="name" class="col-4 col-form-label">Pembeli :</label> 
                        <div class="col-8">
                            <input id="name" name="name" placeholder="Nama Pembeli" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label> 
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="PULPEN" required="required"> 
                                <label for="produk_0" class="custom-control-label">PULPEN</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="PENSIL" required="required"> 
                                <label for="produk_1" class="custom-control-label">PENSIL</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="SPIDOL" required="required"> 
                                <label for="produk_2" class="custom-control-label">SPIDOL</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah Produk</label> 
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah Produk" type="number" class="form-control" required="required">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="harga-list">
                    <h4>Daftar Harga</h4>
                    <ul>
                        <li>PULPEN - Rp. 3.500</li>
                        <li>PENSIL - Rp. 2.000</li>
                        <li>SPIDOL - Rp. 5.000  </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        // Menangkap data input
        $name = $_POST['name'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];
        $PULPEN = 3500 * $jumlah;
        $PENSIL = 2000 * $jumlah;
        $SPIDOL = 5000 * $jumlah;

        echo "<br>Nama Pembeli : " . $name;
        echo "<br>Produk Pilihan : " . $produk;
        echo "<br>Jumlah Produk : " . $jumlah;

        switch ($produk) {
            case "PULPEN" : 
                echo "<br>Total Belanja : " . $PULPEN;
                break;
            case "PENSIL" : 
                echo "<br>Total Belanja : " . $PENSIL;
                break;
            case "SPIDOL" : 
                echo "<br>Total Belanja : " . $SPIDOL;
                break;
        }
    }
    ?>
</body>
</html>