<?php
    function hoadon($tong){
        $sql = "INSERT INTO hoadon(tongtien) VALUES ('$tong')";
        pdo_execute($sql);
    }

    function hoadonct($soluong){
        $sql = "INSERT INTO hoadonct(soluong) VALUES ('$soluong')";
        pdo_execute($sql);
    }
?>