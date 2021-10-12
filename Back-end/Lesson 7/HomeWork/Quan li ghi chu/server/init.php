<?php
    require_once('./db/config.php');
    // $conn = mysqli_connect(HOST,USERNAME,PASSWORD);
    // mysqli_set_charset($conn, 'utf8');
    // $sql = "create database if not exists db_notes";
    // mysqli_query($conn,$sql);
      $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
      mysqli_set_charset($conn,'utf8');
      $sql = "create table if not exists users(
          id int unique AUTO_INCREMENT,
          fullname varchar(50),
          email varchar(50) PRIMARY KEY,
          birthday date,
          address varchar(50)
      )";
      mysqli_query($conn,$sql);
      $sql = "create table if not exists note(
          id int PRIMARY KEY AUTO_INCREMENT,
          user_id int,
          title varchar(50),
          content varchar(100),
          created_at datetime,
          updated_at datetime,
          FOREIGN KEY (user_id)
          REFERENCES users(id)
      )";
      mysqli_query($conn,$sql);
      mysqli_close($conn);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Khởi tạo dữ liệu</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <h1>Khởi tạo database và 2 bảng:</h1>
    <form method="post">
        <button class="btn btn-primary">Xác nhận</button>
    </form>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>