<?php
    //Hàm insert danh muc
    function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
        $sql = "insert into sanpham(name,price,img,mota,iddm) values('$tensp','$giasp','$hinh','$mota','$iddm')";
        pdo_execute($sql);
    }

    //Hàm delete danh muc
    function delete_sanpham($id){
        $sql = "delete from sanpham where id = ".$id;
        pdo_execute($sql);
    }


    //Hàm hiển thị list danh muc
    function loadall_sanpham($kyw,$iddm){
        $sql="select * from sanpham where 1"; 
        
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'";
        }

        if($iddm>0){
            $sql.=" and iddm ='".$iddm."'";
        }

        $sql.=" order by id desc";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    //Hàm hiển thị list danh muc trên trang home
    function loadall_sanpham_home(){
        $sql="select * from sanpham where 1 order by id desc limit 0,9"; 
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    //Hàm hiển thị list danh muc sản phẩm theo top 10
    function loadall_sanpham_top10(){
        $sql="select * from sanpham where 1 order by luotxem desc limit 0,10"; 
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    //Hàm hiển thị tên danh mục
    function load_ten_dm($iddm){
        if($iddm>0){
            $sql = "select * from danhmuc where id = ".$iddm;
            $dm=pdo_query_one($sql);
            extract($dm);
            return $name;
        }else{
            return "";
        }
        
    }


    //Hàm hiển thị list danh muc theo id
    function loadone_sanpham($id){
        $sql = "select * from sanpham where id = ".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }

    //Hàm hiển thị list sản phẩm cùng loại
    function load_sanpham_cungloai($id,$iddm){
        $sql = "select * from sanpham where iddm=".$iddm." AND id <> ".$id;
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

     //Hàm update danh muc
    function update_sanpham($id,$tensp,$giasp,$hinh,$mota,$iddm){
        if($hinh!="")
            $sql = "update sanpham set name='".$tensp."', price='".$giasp."', img='".$hinh."', mota='".$mota."', iddm ='".$iddm."' where id=".$id;
        else
            $sql = "update sanpham set name='".$tensp."', price='".$giasp."', mota='".$mota."', iddm='".$iddm."' where id=".$id;
        pdo_execute($sql);
    }

?>