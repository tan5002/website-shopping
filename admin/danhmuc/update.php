<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sửa danh mục</title>
</head>
<body>
  

<div class="container">
  <h2>Update Danh mục</h2>
      <form action="index.php?act=updatedm" method="Post">
        <div class="mb-3">
          <label class="form-label">Tên loại:</label>
          <input type="text" class="form-control" id="" name="maloai" placeholder="Mã loại" disabled>         
        </div>
        <div class="mb-3">
          <label  class="form-label">Tên loại:</label>
          <input type="text" class="form-control" id="" name="tenloai" placeholder="tên loại" value="<?php if(isset($name)&&($name!="")) echo $name;?>">
        </div>
        
        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
        <input type="submit" name="update" class="btn btn-primary" value="update">
        <input type="reset"  class="btn btn-primary" value="Nhập lại">
        <a href="index.php?act=listdm"><input type="button" name="" class="btn btn-primary" value="Danh sách"></a>

        <?php
          if(isset($thongbao)&&($thongbao!=""))
              echo $thongbao;       
        ?>
      </form>
 
</div>

</body>
</html>