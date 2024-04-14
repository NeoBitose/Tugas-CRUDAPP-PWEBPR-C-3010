<?php

require '../../config/database.php';

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

  public static function create($nama, $deskripsi, $link, $tgl){
    global $conn;
    $query = "insert into portofolio (nama_porto, deskripsi_porto, link_porto, tgl_upload, user_id) VALUES (?,?,?,?,?)";
    $state = $conn->prepare("");
    $state->bind_param("ssssi", $nama, $deskripsi, $link, $tgl, 2);
    $state->execute();
    $result = $state->affected_rows > 0 ? true : false;
    $state->close();
    return $result;
  }

  public static function detail($id){
    global $conn;
    $query = "select * from portofolio WHERE id_porto=".$id;
    $result = mysqli_query($conn, $query);
    if ($result->num_rows > 0) {
      $data = mysqli_fetch_object($result);
    }
    else {
      $data = [];
    }
    return $data;
  }

  public static function update($id, $nama, $deskripsi, $link, $tgl){
    global $conn;
    $state = $conn->prepare("update portofolio set nama_porto=?, deskripsi_porto=?, link_porto=?, tgl_upload=? WHERE id_porto=".$id);
    $state->bind_param("ssss", $nama, $deskripsi, $link, $tgl);
    $state->execute();
    $result = $state->affected_rows > 0 ? true : false;
    $state->close();
    return "Success";
  }

  public static function delete($id){
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