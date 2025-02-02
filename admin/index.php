<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "header.php";
    //controller
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch($act){
            /*Controller danh muc */
            case 'adddm':
                //kiểm tra xem người dùng có kích vào nút Submit hay không
                if(isset($_POST['submit'])&&($_POST['submit'])){
                    $tenloai=$_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao="Thêm thành công";
                }

                include "danhmuc/add.php";
                break;
            case 'listdm': 
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;

            case 'xoadm':
                if(isset($_GET['id'])&& ($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            
            case 'suadm':
                if(isset($_GET['id'])&& ($_GET['id']>0)){
                    $dm=loadone_danhmuc($_GET['id']);
                }
                include "danhmuc/update.php";
                break;

            case 'updatedm':
                if(isset($_POST['update'])&&($_POST['update'])){
                    $tenloai=$_POST['tenloai'];
                    $id = $_POST['id'];
                    update_danhmuc($id,$tenloai);
                    $thongbao="Update thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;

            /*Controller cho sản phẩm */
            case 'addsp':
                //kiểm tra xem người dùng có kích vào nút Submit hay không
                if(isset($_POST['submit'])&&($_POST['submit'])){
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES["hinh"]["name"];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);

                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                        //
                    }else{
                        //
                    }


                    insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                    $thongbao="Thêm thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                //var_dump($listdanhmuc);    
                include "sanpham/add.php";
                break;
            case 'listsp': 
                if(isset($_POST['listok'])&&($_POST['listok'])){
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                }else{
                    $kyw = '';
                    $iddm = 0;
                }

                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($kyw,$iddm);
                include "sanpham/list.php";
                break;

            case 'xoasp':
                if(isset($_GET['id'])&& ($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
                }
                $listsanpham = loadall_sanpham("",0);

                
                include "sanpham/list.php";
                break;
            
            case 'suasp':
                if(isset($_GET['id'])&& ($_GET['id']>0)){
                    $sanpham=loadone_sanpham($_GET['id']);
                }

                $listdanhmuc = loadall_danhmuc();
                include "sanpham/update.php";
                break;

            case 'updatesp':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id=$_POST['id'];
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES["hinh"]["name"];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);

                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                        //
                    }else{
                        //
                    }
                    
                    update_sanpham($id,$tensp,$giasp,$hinh,$mota,$iddm);
                    $thongbao="Update thành công";
                }

                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham("",0);
                include "sanpham/list.php";
                break;
            case 'dskh':
                include "khachhang.php";
                break;
            case 'thongke':
                include "thongke.php";
                break;
            case 'dsbl':
                include "comment.php";
                break;
            case 'discount':
                include "discount.php";
                break;
            default: 
                include "home.php";
                break;
        }
    }
    include "footer.php";
?>