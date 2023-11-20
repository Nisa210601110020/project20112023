<?php 

if (isset($_GET['submit'])) {
    var_dump($_GET);
    // echo $_GET['nama'];
} else {
    echo 'AKSES DENIED!';
}

?>