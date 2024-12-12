<?php require "layout/header.php"; ?>
<?php
require_once('database/config.php');
require_once('database/dbhelper.php');
require_once('utils/utility.php');
// Lấy id từ trang index.php truyền sang rồi hiển thị nó
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = 'select * from product where id=' . $id;
    $product = executeSingleResult($sql);
    // Kiểm tra nếu ko có id sp đó thì trả về index.php
    if ($product == null) {
        header('Location: index.php');
        die();
    }
}
?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0&appId=264339598396676&autoLogAppEvents=1" nonce="8sTfFiF4"></script>
<!-- END HEADR -->
<main>
 <style>
             .product-recently .col {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
}

.product-recently .thumbnail {
    width: 100%;       /* Chiếm toàn bộ chiều rộng của phần tử */
    height: 200px;     /* Đặt chiều cao cố định cho ảnh */
    object-fit: cover; /* Đảm bảo ảnh không bị méo và phủ đầy khung */
    margin-bottom: 10px; /* Khoảng cách giữa ảnh và các phần tử dưới ảnh */
}

.product-recently .title p {
    text-align: center;
    margin-top: 10px;
}

.product-recently .price {
    text-align: center;
    margin-top: 5px;
}

.product-recently .more {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
}
.product-restaurants .col {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    padding: 10px; /* Khoảng cách giữa các ô */
}

.product-restaurants .thumbnail {
    width: 100%;       /* Chiếm toàn bộ chiều rộng của phần tử */
    height: 200px;     /* Đặt chiều cao cố định cho ảnh */
    object-fit: cover; /* Đảm bảo ảnh không bị méo và phủ đầy khung */
    margin-bottom: 10px; /* Khoảng cách giữa ảnh và các phần tử dưới ảnh */
}

.product-restaurants .title p {
    text-align: center;
    margin-top: 10px;
}

.product-restaurants .price {
    text-align: center;
    margin-top: 5px;
}

.product-restaurants .more {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
}
.category-image {
    width: 150px; /* Chỉnh chiều rộng ảnh */
    height: auto; /* Tự động điều chỉnh chiều cao để giữ tỷ lệ */
    object-fit: cover; /* Đảm bảo ảnh không bị méo */
}
/* Box containing image and details */
.box {
    display: flex;
    gap: 20px;
    justify-content: center;
    align-items: flex-start;
    margin-bottom: 20px; /* Tăng khoảng cách giữa box và các phần tử khác */
}

.box img {
    width: 300px;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-right: 20px; /* Tạo khoảng cách giữa hình ảnh và nội dung bên cạnh */
}

/* Description text */
.about p {
    font-size: 16px;
    color: #555;
    margin-bottom: 20px;
    line-height: 1.8; /* Tăng khoảng cách giữa các dòng */
    margin-left: 10px; /* Đảm bảo có khoảng cách giữa văn bản và lề */
}

/* Number input and price */
.number {
    margin-top: 20px; /* Tăng khoảng cách trên cho phần số lượng */
    margin-bottom: 15px; /* Tăng khoảng cách dưới phần số lượng */
}

.number span {
    font-size: 16px;
    font-weight: bold;
    margin-right: 10px; /* Tạo khoảng cách giữa chữ "Số lượng" và input */
}

.number input {
    width: 60px;
    padding: 5px;
    font-size: 16px;
    text-align: center;
    border: 1px solid #ddd;
    border-radius: 4px;
}

/* Price display */
.price {
    font-size: 20px;
    font-weight: bold;
    color: #e53935;
    margin-bottom: 20px;
    margin-left: 10px; /* Tạo khoảng cách giữa văn bản giá và lề */
}

.price .gia {
    display: none;
}

/* Buttons */
.add-cart,
.buy-now {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-align: center;
    transition: background-color 0.3s;
    margin-left: 10px; /* Thêm khoảng cách giữa các nút */
}

.add-cart {
    background-color: #4caf50;
    color: #fff;
}

.add-cart:hover {
    background-color: #388e3c;
}

.buy-now {
    background-color: #f57c00;
    color: #fff;
}

.buy-now:hover {
    background-color: #e65100;
}

    </style>
    <div class="container">
        <div id="ant-layout">
        <section class="search-quan">
                <i class="fas fa-search"></i>
                <form action="thucdon.php" method="GET">
                    <input name="search" type="text" placeholder="Tìm món hoặc thức ăn">
                </form>
            </section>
        </div>
        <!-- <div class="bg-grey">

        </div> -->
        <!-- END LAYOUT  -->
        <section class="main">
            <section class="oder-product">
                <div class="title">
                    <section class="main-order">
                        <h1><?= $product['title'] ?></h1>
                        <div class="box">
                            <img src="<?='admin/product/'.$product['thumbnail'] ?>" alt="">
                            <div class="about">
                                <p><?= $product['content'] ?></p>
                               
                                <div class="number">
                                    <span class="number-buy">Số lượng</span>
                                    <input id="num" type="number" value="1" min="1" onchange="updatePrice()">
                                </div>

                                <p class="price">Giá: <span id="price"><?= number_format($product['price'], 0, ',', '.') ?></span><span> VNĐ</span><span class="gia none"><?= $product['price'] ?></span></p>
                                <!-- <a class="add-cart" href="" onclick="addToCart(<?= $id ?>)"><i class="fas fa-cart-plus"></i>Thêm vào giỏ hàng</a> -->
                                <button class="add-cart" onclick="addToCart(<?= $id ?>)"><i class="fas fa-cart-plus"></i>Thêm vào giỏ hàng</button>
                                <!-- <a class="buy-now" href="checkout.php" >Mua ngay</a> -->
                                <button class="buy-now" onclick="buyNow(<?= $id ?>)">Mua ngay</button>

                                <script>
                                    function updatePrice() {
                                        var price = document.getElementById('price').innerText; // giá tiền
                                        var num = document.querySelector('#num').value; // số lượng
                                        var gia1 = document.querySelector('.gia').innerText;
                                        var gia = price.match(/\d/g);
                                        gia = gia.join("");
                                        var tong = gia1 * num;
                                        document.getElementById('price').innerHTML = tong.toLocaleString();
                                    }
                                </script>
                            </div>
                        </div>
                        <div class="fb-comments" data-href="http://localhost/PROJECT/details.php" data-width="750" data-numposts="5"></div>

                    </section>
                </div>
                <aside>
                    <h1>Gợi ý cho bạn</h1>
                    <div class="row">
                        <?php
                        $sql = 'select * from product limit 5';
                        $productList = executeResult($sql);
                        $index = 1;
                        foreach ($productList as $item) {
                            echo '
                                    <div class="col">
                                    <a href="details.php?id=' . $item['id'] . '">
                                        <img src="admin/product/'.$item['thumbnail'] . '" alt="">
                                        <div class="about">
                                            <div class="title">
                                                <p>' . $item['title'] . '</p>
                                                <span>Giá: ' . number_format($product['price'], 0, ',', '.') . ' VNĐ' . '</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                ';
                        }
                        ?>
                    </div>
                </aside>
            </section>
            <section class="restaurants">
                <div class="title">
                    <h1>Shop Thú Cưng <span class="green"></h1>
                </div>
                <div class="product-restaurants">
                    <div class="row">
                        <?php
                        $sql = 'select * from product';
                        $productList = executeResult($sql);
                        $index = 1;
                        foreach ($productList as $item) {
                            echo '
                                <div class="col">
                                    <a href="details.php?id=' . $item['id'] . '">
                                        <img class="thumbnail" src="admin/product/' . $item['thumbnail'] . '" alt="">
                                        <div class="title">
                                            <p>' . $item['title'] . '</p>
                                        </div>
                                        <div class="price">
                                            <span>' . number_format($item['price'], 0, ',', '.') . ' VNĐ</span>
                                        </div>
                                        <div class="more">
                                            <div class="star">
                                                <img src="images/icon/icon-star.svg" alt="">
                                                <span>4.6</span>
                                            </div>
                                            <div class="time">
                                                <img src="images/icon/icon-clock.svg" alt="">
                                                <span>15 comment</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                ';
                        }
                        ?>
                    </div>
                </div>
            </section>
        </section>
    </div>
</main>
<?php require_once('layout/footer.php'); ?>
</div>
<script type="text/javascript">
    function addToCart(id) {
        var num = document.querySelector('#num').value; // số lượng
        $.post('api/cookie.php', {
            'action': 'add',
            'id': id,
            'num': num
        }, function(data) {
            location.reload()
        })
    }

    function buyNow(id) {
            $.post('api/cookie.php', {
                'action': 'add',
                'id': id,
                'num': 1
            }, function(data) {
                location.assign("checkout.php");
            })
    }
</script>
</body>

</html>