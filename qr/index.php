<?php

include "QR_BarCode.php";

$qr = new QR_BarCode(); 

$qr->url("api.whatsapp.com/send?phone=6285669435805"); 


$qr->qrCode();


$qr->qrCode(350,'barcode.png');

?>