<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    *{
    margin: 0;
    padding: 0;
    }
    nav{
        text-align: center;
        width: 100%;
        height: 80px;
        display: grid;
        grid-template-columns: 1fr 0.3fr 1fr;
    }
    #title h3{
        color: #C8A764;
    }
    #title h1{
        color: #C8A764;
        font-size: 30px;
    }
    #menu{
        display: flex;
        align-items: center;
        justify-content: center;
        justify-content: space-around;
    }
    #menu a{
        color: black;
        text-decoration: none;
        font-size: 20px;
    }
  </style>
</head>
<body>
<nav>
    <div id="menu">
      <a href="index.php?act=adddm">THÊM DANH MỤC</a>
      <a href="index.php?act=addsp">THÊM SẢN PHẨM</a>
      <a href="index.php?act=dskh">KHÁCH HÀNG</a>
    </div>
    <div id="title">
      <p>
        <h3>the</h3>
        <h1>COCOON</h1>
        <h3>VIET NAME</h3>
      </p>
    </div>
    <div id="menu">
      <a href="index.php?act=thongke">THỐNG KÊ</a>
      <a href="index.php?act=dsbl">BÌNH LUẬN</a>
      <a href="index.php?act=discount">GIẢM GIÁ</a>
    </div>
  </nav>
</body>