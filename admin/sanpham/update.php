<?php
    if(is_array($sanpham)){
        extract($sanpham);
        
    }
    $hinhpath="../upload/".$img;
      if(is_file($hinhpath)){
          $hinh="<img src='".$hinhpath."' height='180'>";
        }else{
                $hinh="no photo";
              }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .container{
      margin-top: 100px;
      width: 100%;
    }
    .container h2{
      font-size: 40px;
      margin-left: 100px;
    }
    #box{
      margin-top: 5px;
      margin-left: 200px;
      padding: 10px;
      width: 60%;
    }
    #box1{
      width: 20%;
      margin-left: 200px;
    }
    .mb-3{
      padding: 10px;
    }
    .mb-3 label{
      margin-left: 170px;
      font-size: 30px;
    }
    .mb-3 #button{
      padding: 10px 30px;
      margin-left: 220px;
      border-radius: 10px;
      font-size: 20px;
      background-color: aqua;
      border: none;
      font-weight: bold;
    }
  </style>
</head>
<body>
  
<div class="container">
  <h2>THÊM MỚI SẢN PHẨM</h2>
      <form action="index.php?act=updatesp" method="Post" enctype="multipart/form-data">
        <div class="mb-3">
          <select name="iddm" id="box">
            <option value="0" selected>Tất cả</option>
            <?php
              foreach($listdanhmuc as $danhmuc){
                extract($danhmuc);
                if($iddm==$id) $s ="selected"; else $s="";
                echo '<option value ="'.$id.'" '.$s.'>'.$name.'</option>';
              }
            ?>
          </select>
        </div>
        <div class="mb-3">
          <?php
             extract($sanpham);
          ?>
          <label  class="form-label">Tên sản phẩm:</label> <br>
          <input type="text" class="form-control"  name="tensp" value="<?=$name?>" id="box">
        </div>
        <div class="mb-3">
          <label  class="form-label">Giá:</label><br>
          <input type="text" class="form-control"  name="giasp" value="<?=$price?>" id="box">
        </div>
        <div class="mb-3">
          <label  class="form-label">Hình ảnh:</label> <br>
          <input type="file" class="form-control" name="hinh" id="box1">
          <?=$hinh?>
        </div>
        <div class="mb-3">
          <label  class="form-label">Mô tả</label> <br>
          <textarea name="mota"  cols="30" rows="10" id="box"><?=$mota?></textarea>
      </div>
      <div class="mb-3">
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="submit" name="capnhat" class="btn btn-primary" value="Cập nhật" id="button">
        <input type="reset" name="nhaplai" class="btn btn-primary" value="Nhập lại"  id="button">
        <a href="index.php?act=listsp"><input type="button" name="" class="btn btn-primary" value="Danh sách"  id="button"></a>
      </div>
        <?php
          if(isset($thongbao)&&($thongbao!=""))
              echo $thongbao;       
        ?>
        
      </form>
 
</div>

</body>
</html>