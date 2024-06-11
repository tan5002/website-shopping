<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f6fb401fa7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./view/css/sanpham.css">
    <title>Document</title>
</head>
<body>
<div class="container">
        <?php
            foreach($dssp as $sp){
                extract($sp);
                $hinh=$img_path.$img;
                $linksp="index.php?act=sanphamct&idsp=".$id;
                echo '
                    <div class="container-item">
                        <div class="col">
                            <div class="image">
                                <a href="'.$linksp.'"> <img src="'.$hinh.'" alt="" class="col-md-4 object-fit-scale "></a>
                            </div>
                            <div class="content">
                                <h4 class="fs-3 text-center text-danger">'.$name.'</h4> 
                                <a href="./icons/car"><i class="fa-solid fa-cart-shopping"></i> </a>
                            </div>
                        </div>
                    </div>
                ';
            }
        ?>
</div>

</body>
</html>