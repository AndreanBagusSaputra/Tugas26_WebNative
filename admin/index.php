<?php
    include_once 'koneksi.php'; 
    include_once 'models/Produk.php';
    include_once 'models/Jenis_Produk.php';
    include_once 'models/Pelanggan.php';
    include_once 'models/Pesanan.php';
    include_once 'models/Kartu.php';
    include_once 'models/Member.php';

    $sesi = $_SESSION['MEMBER'];
    if(isset($sesi)){
    
    include_once 'top.php';
    include_once 'menu.php';
    
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1></h1>
                <?php
                    // algoritma menangkap url agar masuk kedalam index
                    $url = $_GET['url'];
                    if($url == 'dashboard'){
                        include_once 'dashboard.php';
                    } elseif (!empty($url)){
                        include_once ''.$url.'.php';
                    } else { 'dashboard.php';
                    }
                ?>
            </div>
        </main>
    </div>

    <?php
        include_once 'bottom.php';

} else {
    echo '<script> alert("Anda tidak boleh masuk");history.back();</script>' ;
}    
?>