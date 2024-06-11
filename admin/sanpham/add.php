<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>THÊM SẢN PHẨM</title>
  <link rel="stylesheet" href="/admin/css/addsanpham.css">
  <style>
    .container{
      margin-top: 100px;
      width: 100%;
    }
    .container>h2{
      margin-left: 200px;
      padding: 10px;
      font-size: 45px;
    }
    .mb-3{
      padding: 15px;
      margin-left: 50px;
    }
    #danhmuc{
      width: 600px;
      padding: 10px;
    }
    .mb-3 label{
      font-size: 30px;
    }
    .mb-3 input{
      width: 600px;
      padding: 5px;
    }
    #mota{
      width: 600px;
      resize: none;
    }
    .button{
      margin-left: 100px;
    }
    .btn{
      padding: 15px 50px;
      border-radius: 10px;
      border: none;
      font-size: 20px;
      background-color: aqua;
    }
    .btn:hover{
      background-color: aquamarine;
      filter: grayscale(10%);
    }
  </style>
</head>
<body>
    <div class="container">
      <h2>THÊM MỚI SẢN PHẨM</h2>
          <form action="index.php?act=addsp" method="Post" enctype="multipart/form-data">
            <div class="mb-3">
              <h2>Danh mục</h2>
              <select name="iddm" id="danhmuc">
                <?php
                  foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    echo '<option value ="'.$id.'">'.$name.'</option>';
                  }
                ?>
              </select>         
            </div>

            <div class="mb-3">
              <label class="form-label">Mã sản phẩm:</label> <br>
              <input type="text" class="form-control" id="" name="masp" placeholder="Mã sản phẩm" disabled>         
            </div>
            <div class="mb-3">
              <label  class="form-label">Tên sản phẩm:</label> <br>
              <input type="text" class="form-control" id="" name="tensp" placeholder="tên sản phẩm">
            </div>
            <div class="mb-3">
              <label  class="form-label">Giá:</label><br>
              <input type="text" class="form-control" id="" name="giasp" placeholder="giá sản phẩm">
            </div>
            <div class="mb-3">
              <label  class="form-label">Hình ảnh:</label> <br>
              <input type="file" class="form-control" id="image" name="hinh">
            </div>
            <div class="mb-3">
              <label  class="form-label">Mô tả</label> <br>
              <textarea name="mota" id="mota" cols="30" rows="10"></textarea>
          </div>
          <div class="button">
            <input type="submit" name="submit" class="btn btn-primary"  value="Submit">
            <input type="reset" name="" class="btn btn-primary" value="Nhập lại">
            <a href="index.php?act=listsp"><input type="button" name="" class="btn btn-primary" value="Danh sách"></a>
          </div>
            

            <?php
              if(isset($thongbao)&&($thongbao!=""))
                  echo $thongbao;       
            ?>
          </form>
    
    </div>
</body>
</html>