<?php
    //Hàm insert danh muc
    function insert_danhmuc($tenloai){
        $sql = "insert into danhmuc(name) values('$tenloai')";
        pdo_execute($sql);
    }

    //Hàm delete danh muc
    function delete_danhmuc($id){
        $sql = "delete from danhmuc where id = ".$id;
        pdo_execute($sql);
    }

    //Hàm hiển thị list danh muc
    function loadall_danhmuc(){
        $sql="select * from danhmuc order by id desc";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }

    //Hàm hiển thị list danh muc theo id
    function loadone_danhmuc($id){
        $sql = "select * from danhmuc where id = ".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }

    //Hàm update danh muc
    function update_danhmuc($id,$tenloai){
        $sql = "update danhmuc set name = '".$tenloai."' where id=".$id;
        pdo_execute($sql);
    }

?>