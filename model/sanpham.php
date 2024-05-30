<?php 

function insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm) {
    $sql = "INSERT INTO products(TenSanPham,GiaBan,HinhAnhSanPham,Mota,CategoryID) VALUES('$tensp','$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}

function delete_sanpham($id) {
    $sql = "DELETE FROM products WHERE ProductID=".$id;
    pdo_execute($sql);
}

function loadall_sanpham_home($iddm=0) {
    $sql = "SELECT * FROM products WHERE 1 ORDER BY ProductID DESC LIMIT 0,9";
    $dssanpham = pdo_query($sql); 
    return $dssanpham;
}

function loadall_sanpham($keysearch="",$iddm=0) {
    $sql = "SELECT * FROM products WHERE 1";
    if($iddm > 0) {
        $sql.=" AND CategoryID = '".$iddm."'";
    }
    if($keysearch != "") {
        $sql.=" AND TenSanPham like '%".$keysearch."%'";
    }
    $sql.=" ORDER BY ProductID DESC";
    $dssanpham = pdo_query($sql); 
    return $dssanpham;
}


function loadone_sanpham($id=0) {
    $sql = "SELECT * FROM products WHERE ProductID=".$id;
    $sp = pdo_query_one($sql);
    return $sp;
}

function load_sanpham_cungloai($id,$iddm) {
    $sql = "SELECT * FROM products WHERE CategoryID=".$iddm." AND ProductID <>".$id;
    $listspcungloai = pdo_query($sql);
    return $listspcungloai;
}

function update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh) {
    if($hinh != "")
        $sql = "UPDATE products set CategoryID='".$iddm."', TenSanPham='".$tensp."', GiaBan='".$giasp."', Mota='".$mota."', HinhAnhSanPham='".$hinh."' WHERE ProductID=".$id;
    else 
        $sql = "UPDATE products set CategoryID='".$iddm."', TenSanPham='".$tensp."', GiaBan='".$giasp."', Mota='".$mota."' WHERE ProductID=".$id;
    pdo_execute($sql);
}

?>