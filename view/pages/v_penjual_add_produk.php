<html>
<head>
    <title>Dashboard penjual</title>
    <link rel="stylesheet" type="text/css" href="resources/scss/penjual.scss">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body class="body-penjual">
<section id="sideMenu">
    <nav>
        <center><p>Hei <?= $_SESSION['user']; ?> !</p></center>
        <a href="?controller=home&action=homePenjual"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
        <a href="?controller=user&action=showPenjual"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Profile</a>
        <a class="active" href="?controller=produk&action=tampilPenjualProduk"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Produk</a>
        <a href="?controller=transaksi&action=showPenjualTransaksi"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
            Transaksi</a>
        <a href="?controller=home&action=hargaPenjual"><i class="fa fa-line-chart" aria-hidden="true"></i> Harga Pasar</a>
    </nav>
</section>
<header>
    <div class="search-penjual">
        <i class="fa fa-search" aria-hidden="true"></i>
        <input type="text" name="" value="">
    </div>
    <div class="penjual-field">
        <a href="logout.php" onclick="return confirm('Apakah Anda ingin keluar')">
            <div class="penjual-img"></div>
            <i class="fa fa-sign-out" aria-hidden="true"></i>
        </a>
    </div>
</header>
<section id="content-area">
    <div class="heading">
    </div>
    <div class="form-tanam-penjual">
        <form name="formProduk" enctype="multipart/form-data" method="post">
            <input type="hidden" name="controller" value="produk">
            <input type="hidden" name="action" value="tambahPenjualProduk">
            <p>Nama Produk</p>
            <select name="nama_produk">
                <option value="beras">Beras</option>
                <option value="jagung">Jagung</option>
                <option value="kedelai">Kedelai</option>
                <option value="cabe">Cabai</option>
                <option value="bawangmerah">Bawang Merah</option>
                <option value="bawangputih">Bawang Putih</option>
                <option value="kacanghijau">Kacang Hijau</option>
                <option value="kacangtanah">Kacang Tanah</option>
                <option value="kol">Kol</option>
                <option value="tomat">Tomat</option>
                <option value="wortel">Wortel</option>
                <option value="buncis">Buncis</option>
            </select>
            <p>Harga</p>
            <input type="number" name="harga" placeholder="Harga Produk" required >
            <p>Stok</p>
            <input type="number" name="stok" placeholder="Stok Tanaman" required>
            <input name="foto_produk" type="file">
            <input type="submit" value="Simpan" name="input" onclick="return confirm('Apakah data akan di masukkan?')">
        </form>
    </div>
</section>
<script type="text/javascript">
    // var harga = document.forms["formProduk"]["harga"].value;
    // if(harga == ""){
    //     alert("Input harga kosong");
    // }
</script>
</body>

</html>