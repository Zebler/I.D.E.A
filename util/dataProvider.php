<?php
class DataProvider
{
  public static function excuteQuery($sql)
  {
    include('conInfo.php');
    if (!$connection = mysqli_connect($servername, $username, $password, $dbname)) {
      die("couldn't connect to localhost");
    }
    if (!(mysqli_select_db($connection, $dbname))) {
      echo "Khong the ket noi den database";
    }
    if (!(mysqli_query($connection, "set names 'utf8'"))) {
      echo "Khong the set utf8";
    }
    if (!($result = mysqli_query($connection, $sql))) {
      echo "Khong the thuc thi cau truy van";
    }
    if (!(mysqli_close($connection))) {
      echo "Khong the ket noi 404";
    }
    return $result;
  }
  public static function getUserByUsername($username)
  {
    $sql = "select * from taikhoan join nguoiDung on taikhoan.idnguoidung=Nguoidung.idnguoidung
    where username='" . $username . "'";
    return self::excuteQuery($sql);
  }
  public static function getPermissionByRoleID($roleID)
  {
    $sql = "SELECT idquyen FROM quyen where idvaitro = " . $roleID;
    $result = Self::excuteQuery($sql);
    $permissions = array();
    while ($row = $result->fetch_assoc()) {
      array_push($permissions, $row['idquyen']);
    }
    return $permissions;
  }
  public static function isFavorite($proID, $userID)
  {
    $sql = "SELECT * FROM yeuthich where idSanPham = " . $proID . " and idNguoiDung ='" . $userID . "'";
    $result = self::excuteQuery($sql);
    if ($result->num_rows > 0) {
      return true;
    }
    return false;
  }
  public static function getItemInCart($colorID,$itemID, $userID)
  {
    $sql = "SELECT * FROM giohang where idnguoidung = '" . $userID . "' and idSanPham = " . $itemID."and idMau=".$colorID;
    return self::excuteQuery($sql);
  }
  public static function getNewHoaDonId()
  {
    $sql = "SELECT MAX(idHoaDon) FROM hoadon";
    $result = self::excuteQuery($sql);
    if (mysqli_num_rows($result) != 0) {
      return self::excuteQuery($sql)->fetch_assoc()['MAX(idHoaDon)'] + 1;
    }
    return 1;
  }
  public static function getNewPhieuNhapId()
  {
    $sql = "SELECT MAX(idphieunhap) FROM phieunhap";
    $result = self::excuteQuery($sql);
    if (mysqli_num_rows($result) != 0) {
      return self::excuteQuery($sql)->fetch_assoc()['MAX(idphieunhap)'] + 1;
    }
    return 1;
  }
  public static function getNewUserId(){
    $sql="SELECT MAX(idnguoidung) from taikhoan";
    $result=self::excuteQuery($sql);
    if(mysqli_num_rows($result)!=0){
      return self::excuteQuery($sql)->fetch_assoc()['MAX(idnguoidung)'] + 1;
    }
    return 1;
  }
}