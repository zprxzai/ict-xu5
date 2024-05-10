<?php
$utama = (isset($_GET['u'])) ? $_GET['u'] : 'beranda' ;
switch ($utama) {
    case 'beranda' : default:
    include ('beranda.php');
    break;
    case 'produk':
    include ('produk/produk.php');
    break;
    case 'beli':
    include ('beli/index.php');
    break;
    case 'budaya':
    include ('budaya/budaya.php');
    break;
    case 'monas':
        include ('produk/monas.php');
    break;
    case 'istana':
        include ('produk/istana.php');
    break;
    case 'kotatua':
        include ('produk/kotatua.php');
    break;
    case 'kesenian':
        include ('produk/kesenian.php');
    break;
    case 'wayang':
        include ('produk/wayang.php');
    break;
    case 'stasiun':
        include ('produk/stasiun.php');
    break;
}
