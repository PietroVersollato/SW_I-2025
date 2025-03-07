<?php
    $nota01 = $_GET ['cnota1'];
    $nota02 = $_GET ['cnota2'];
    $nota03 = $_GET ['cnota3'];
    $media = ($nota01+$nota02+$nota03)/3;
    echo "Sua média é: $media";
?>