<!DOCTYPE html>
<html lang="en">
<head>
  <title>THÊM DANH MỤC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
  .container{
    margin-top: 100px;
    width: 100%;
    height: 500px;
    margin: 0 auto;
  }
  .container #title{
    font-size: 40px;
    margin-left: 100px;
  }
  .mb-3{
    margin-top: 50px;
    margin-left: 100px;
    padding: 10px;
    display: flex;
    flex-direction: column;
    justify-items: center;
  }
  .mb-3 label{
    font-size: 25px;
  }
  .mb-3 input{
    margin-top: 10px;
    padding: 10px;
    width: 80%;
  }
  .button{
    text-align: center;
    display: flex;
    justify-content: space-evenly;

  }
  .btn{
    margin-top: 30px;
    padding: 10px 30px;
    border-radius: 10px;
    background-color: aqua;
    font-weight: bolder;
    font-size: 20px;
  }
</style>
<body>
<div class="container">
  <h2 id="title">Add Danh mục</h2>
      <form action="index.php?act=adddm" method="Post">
        <div class="mb-3">
          <label class="form-label">Mã loại:</label> 
          <input type="text" class="form-control" id="" name="maloai" placeholder="Mã loại" disabled>         
        </div>
        <div class="mb-3">
          <label  class="form-label">Tên loại:</label> 
          <input type="text" class="form-control" id="" name="tenloai" placeholder="tên loại">
        </div>
        <div class="button">
          <input type="submit" name="submit" class="btn btn-primary" value="Submit">
          <input type="reset" name="" class="btn btn-primary" value="Nhập lại">
          <a href="index.php?act=listdm"><input type="button" name="" class="btn btn-primary" value="Danh sách"></a>
        </div>
        

        <?php
          if(isset($thongbao)&&($thongbao!=""))
              echo $thongbao;       
        ?>
      </form>
</div>

</body>
</html>
