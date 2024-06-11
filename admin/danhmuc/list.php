<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .table{
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }
        thead{
            text-align: center;
        }
        .btn{
            text-align: center;
        }
        thead th{
            padding: 5px;
            font-size: 40px;
        }
        .btn{
            padding: 10px 30px;
            margin-left: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
            border: none;
            background-color: aqua;
            border-radius: 10px;
            font-size: 20px;
        }
        #show td{
            font-size: 20px;
        }
        .btn:hover{
            background-color: darkgray;
        }
    </style>
</head>
<body>
    

<div class="container">
    <h2>DANH SÁCH LOẠI HÀNG</h2>
    
    <div class="row">
        <table class="table" border="1">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Mã loại</th>
                <th scope="col">Tên loại</th>
                <th scope="col">Hành động</th>
                </tr>
            </thead>
            <?php
                foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    $suadm ="index.php?act=suadm&id=".$id;
                    $xoadm ="index.php?act=xoadm&id=".$id;
                    echo '<tr id="show">
                            <th scope="row"><input type="checkbox" name="#" id=""></th>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>
                                <a href="'.$suadm.'"><input type="button" value="sửa" class="btn btn-primary "> </a>
                                <a href="'.$xoadm.'"><input type="button" value="xóa" class="btn btn-danger "> </a>
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
        <a href="index.php?act=adddm"><input type="button" name="" class="btn btn-primary m-2" value="Nhập thêm"></a>
    </div> 
</div>
</body>
</html>