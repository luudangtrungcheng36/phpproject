<?php 

function insert_danhmuc($tenloai, $motadanhmuc) {
    $sql = "INSERT INTO categories(TenDanhMuc,MoTaDanhMuc) VALUES('$tenloai','$motadanhmuc')";
    pdo_execute($sql);
}

function delete_danhmuc($CategoriesID) {
    $sql = "DELETE FROM categories WHERE CategoriesID=".$CategoriesID;
    pdo_execute($sql);
}

function loadall_danhmuc() {
    $sql = "SELECT * FROM categories ORDER BY CategoriesID desc";
    $dsdanhmuc = pdo_query($sql); 
    return $dsdanhmuc;
}

function loadone_danhmuc($CategoriesID) {
    $sql = "SELECT * FROM categories WHERE CategoriesID=".$CategoriesID;
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_danhmuc($id, $tenloai, $motadanhmuc) {
    $sql = "UPDATE categories set TenDanhMuc='".$tenloai."', MoTaDanhMuc='".$motadanhmuc."' WHERE CategoriesID=".$id;
    pdo_execute($sql);
}

?>