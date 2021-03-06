<html>
<head>
    <title>Detail Product</title>
    <link rel="stylesheet" href="resources/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
</head>
<body class="body_detail" background="resources/images/banner.jpg">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-between">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php/home/homePembeli">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php/produk/tampilPembeliProduk">Product</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php/keranjang/showCartPembeli">Cart</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="v_contact.php">Transaksi</a>
        </li>
    </ul>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php/user/showPembeli"> <?= $_SESSION['user'] ?> </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php" onclick="return confirm('Apakah Anda ingin keluar')">Logout</a>
        </li>
    </ul>
</nav>
<div class="product-card">
    <form>
        <input type="hidden" name="controller" value="keranjang">
        <input type="hidden" name="action" value="tambahCart">
        <?php
        foreach ($list as $item) {
        ?>
        <input name="id_produk" type="hidden" value="<?= $item['id_produk'] ?>">
        <div class="product-stock">Stok : <?= $item['stok'] ?></div>
        <div class="product-image">
            <img src="gambar/<?= $item['gambar'] ?>" alt="">
        </div>
        <div class="product-details">
            <span class="product-seller">Penjual : <?= $item['nama'] ?></span>
            <h4><a href=""><?= $item['nama_produk'] ?></a></h4>
            <br>
            <div class="product-bottom-details">
                <div class="product-price">Rp. <?= number_format($item['harga'], 0, ".", ".") ?>/kg</div>
                <div class="product-value">
                    <input type="number" name="jumlah" class="form-control" placeholder="Jumlah" max="<?=$item['stok']?>" required>
                </div>
            </div>
            <?php } ?>
            <input type="submit" class="btn btn-primary" value="Beli" style="width: 100%">
        </div>
    </form>
</div>
</body>
</html>