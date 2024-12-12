<?php require('layout/header.php') ?>
<style>
    main {
        font-family: "Encode Sans SC", sans-serif;
    }

    .row img {
        max-width: 100%;
    }

    .search-quan {
        margin: 20px 0;
        display: flex;
        align-items: center;
    }

    .search-quan input {
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 100%;
    }

    .main {
        margin-top: 30px;
    }

    h3 {
        color: #333;
        font-size: 24px;
        margin-bottom: 10px;
    }

    p {
        font-size: 16px;
        line-height: 1.6;
        color: #555;
    }
</style>
<main>
    <div class="container">
        <div id="ant-layout">
            <section class="search-quan">
                <i class="fas fa-search"></i>
                <form action="thucdon.php" method="GET">
                    <input name="search" type="text" placeholder="Tìm đồ cho thú cưng">
                </form>
            </section>
            <section class="main">
                <div class="row">
                    <h3>Shop Thú Cưng là gì?</h3>
                    <p>Tại Shop Thú Cưng, chúng tôi hiểu rằng vật nuôi là một phần quan trọng trong gia đình bạn. Vì vậy, chúng tôi cung cấp các sản phẩm tốt nhất, từ thức ăn, đồ chơi, phụ kiện cho đến các dịch vụ chăm sóc thú cưng. Chúng tôi cam kết mang đến những sản phẩm chất lượng, giúp thú cưng của bạn luôn khỏe mạnh và hạnh phúc.</p>
                </div>
                <div class="row">
                    <h3>Shop Thú Cưng hoạt động như thế nào?</h3>
                    <p>Shop Thú Cưng hoạt động từ 8h đến 21h mỗi ngày, cung cấp các sản phẩm và dịch vụ chăm sóc cho thú cưng. Bạn có thể đặt mua trực tuyến hoặc đến cửa hàng để mua sắm trực tiếp các sản phẩm yêu thích cho thú cưng của mình.</p>
                </div>
                <div class="row">
                    <img src="images/bg/petshop.jpg" alt="Shop Thú Cưng Image">
                    <h3>Những sản phẩm nào có sẵn cho thú cưng của tôi?</h3>
                    <p>Để xem danh sách các sản phẩm cho thú cưng có sẵn tại Shop Thú Cưng, bạn chỉ cần truy cập trang web của chúng tôi hoặc ứng dụng Shop Thú Cưng. Hệ thống sẽ hiển thị các sản phẩm gần nhất hoặc bạn có thể tìm kiếm các mặt hàng theo loại hoặc thương hiệu.</p>
                </div>
            </section>
        </div>
    </div>
</main>

<?php require('layout/footer.php') ?>
