<?php
include_once 'top.php';
include_once 'menu.php';
?>

<div>
<div class="container-fluid px-4">
    <h1>Selamat Datang Di Halaman Admin</h1>

    <?php
    error_reporting(0);
        //membuat logik sederhana untuk mengarahkan url ke file
        //yang mempunyai extension.php
        $url = $_GET['url'];
        if ($url == 'login'){
            include_once 'login.php';
        }elseif ($url == 'dashboard'){
            include_once 'dashboard.php';
        }elseif ($url == 'about'){
            include_once 'about.php';
        }elseif ($url == 'contact'){
            include_once 'contact.php';
        }elseif ($url == 'data'){
            include_once 'data.php';
        }elseif (!empty($url)){
            include_once "" .$url. ".php"; 
        }else {
            'dashboard.php';
        }
        ?>
</div>
</div>



<?php
include_once 'bottom.php';
?>