<?php
require_once 'config/database.php';

class PortofolioModel{

  static function read(){
    global $conn;
    $query = "select * from portofolio join user on portofolio.user_id = user.id_user";
    $result = mysqli_query($conn, $query);
    $data = array();
    if ($result->num_rows > 0) {
      while($a = $result->fetch_array()) {
        $data[]=$a;
      }
    }
    return $data;
  }

  static function create($nama, $deskripsi, $link, $tgl, $gambar, $id=2){
    global $conn;
    $query = "insert into portofolio (nama_porto, deskripsi_porto, link_porto, tgl_upload, gambar_porto, user_id) values (?,?,?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssssi", htmlspecialchars($nama), htmlspecialchars($deskripsi), htmlspecialchars($link), htmlspecialchars($tgl), $gambar, $id);
    $stmt->execute();
    $result = $stmt->affected_rows > 0 ? true : false;
    $stmt->close();
    return $result;
  }

  static function detail($id){
    global $conn;
    $query = "select * from portofolio WHERE id_porto=".$id;
    $result = mysqli_query($conn, $query);
    if ($result->num_rows > 0) {
      while($a = $result->fetch_array()) {
        $data[]=$a;
      }
    }
    else { 
      $data = [];
    }
    return $data;
  }

  static function update($id, $nama, $deskripsi, $link, $tgl, $file){
    global $conn;
    if ($file != null) {
      $stmt = $conn->prepare("update portofolio set nama_porto=?, deskripsi_porto=?, link_porto=?, tgl_upload=?, gambar_porto=? WHERE id_porto=".$id);
      $stmt->bind_param("sssss", htmlspecialchars($nama), htmlspecialchars($deskripsi), htmlspecialchars($link), htmlspecialchars($tgl), $file);
      $stmt->execute();
      $result = $stmt->affected_rows > 0 ? true : false;
      $stmt->close();
      return $result;
    } 
    else {
      $stmt = $conn->prepare("update portofolio set nama_porto=?, deskripsi_porto=?, link_porto=?, tgl_upload=? WHERE id_porto=".$id);
      $stmt->bind_param("ssss", htmlspecialchars($nama), htmlspecialchars($deskripsi), htmlspecialchars($link), htmlspecialchars($tgl));
      $stmt->execute();
      $result = $stmt->affected_rows > 0 ? true : false;
      $stmt->close();
      return $result;
    }
  }

  static function delete($id){
    global $conn;
    $query = "delete from portofolio where id_porto=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->affected_rows > 0 ? true : false;
    $stmt->close();
    return $result;
  }
}