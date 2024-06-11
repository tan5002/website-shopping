<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANH SÁCH LOẠI HÀNG</title>
    <style>
        .container{
            width: 100%;
            margin-top: 100px;
        }
        .container h2{
            font-size: 40px;
        }
        select{
            margin-top: 30px;
            width: 400px;
            padding: 10px;
        }
        #choose{
            width: 70px;
            padding: 10px;
            margin-left: 50px;
        }
        .table{
            margin-top: 50px;
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }
        .table thead tr th{
            font-size: 30px;
        }
        #show td{
            padding: 20px;
            font-size: 20px;
        }
        .btn{
            padding: 10px 40px;
            margin-left: 40px;
            margin-top: 30px;
            border-radius: 10px;
            border: none;
            background-color: aqua;
            font-weight: bolder;
            font-size: 20px;
        }
        .btn:hover{
            background-color: aquamarine;
        }
    </style>
</head>
<body>
    
<div class="container">
    <h2>DANH SÁCH LOẠI HÀNG</h2>
    
    <form action="index.php?act=listsp" method="post">
        <!-- <input type="text" name = "kyw"> -->
        <select name="iddm">
            <option value="0" selected>Tất cả</option>
            <?php
              foreach($listdanhmuc as $danhmuc){
                extract($danhmuc);
                echo '<option value ="'.$id.'" >'.$name.'</option>';
              }
            ?>
          </select>   
        <input type="submit" name="listok" value="GO" id="choose">
    </form>

    <div class="row">
        <table class="table" border="1">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Mã loại</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Hình</th>
                <th scope="col">Giá</th>
                <th scope="col">Lượt xem</th>
                <th scope="col">Hành động</th>
                </tr>
            </thead>
            <?php
                foreach($listsanpham as $sanpham){
                    extract($sanpham);
                    $suasp ="index.php?act=suasp&id=".$id;
                    $xoasp ="index.php?act=xoasp&id=".$id;

                    $hinhpath="../upload/".$img;
                    if(is_file($hinhpath)){
                        $hinh="<img src='".$hinhpath."' height='80'>";
                    }else{
                        $hinh="no photo";
                    }


                    echo '<tr id="show">
                            <th scope="row"><input type="checkbox" name="" id=""></th>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$hinh.'</td>
                            <td>'.$price.'</td>
                            <td>'.$luotxem.'</td>
                            <td>
                                <a href="'.$suasp.'"><input type="button" value="sửa" class="btn btn-primary"> </a>
                                <a href="'.$xoasp.'"><input type="button" value="xóa" class="btn btn-danger"> </a>
                            </td>
                          </tr>';
                }
            ?>   
        </table>
    </div>
    <div class="row">
        <input type="button" name="" class="btn btn-primary " value="Chọn tất cả">
        <input type="button" name="" class="btn btn-primary " value="Bỏ tất cả">
        <input type="button" name="" class="btn btn-primary " value="Xóa các mục đã chọn">
        <a href="index.php?act=addsp"><input type="button" name="" class="btn btn-primary m-2" value="Nhập thêm"></a>
    </div>
        
    
</div>

</body>
</html>