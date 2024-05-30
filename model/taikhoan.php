<?php

function insert_taikhoan($email,$tentaikhoan,$pass) {
    $sql = "INSERT INTO accounts(Email,TenTaiKhoan,Password) VALUES('$email','$tentaikhoan','$pass')";
    pdo_execute($sql);
}

function check_user($user, $pass) {
    $sql = "SELECT * FROM accounts WHERE TenTaiKhoan='".$user."' AND Password='".$pass."'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function update_taikhoan($id, $email, $password, $diachi, $sodienthoai) {
    $sql = "UPDATE accounts set Email='".$email."', Password='".$password."', Address='".$diachi."', PhoneNumber='".$sodienthoai."' WHERE AccountID=".$id;
    pdo_execute($sql);
}

?>