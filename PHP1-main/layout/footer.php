<footer>
  <div class="container">
    <div class="logo">
      <a href=""><img src="images/logo-pets-white.svg" alt=""></a>
      <div class="time" style="padding-left:50%;">
        <a href="https://time.is/Vietnam" id="time_is_link" rel="nofollow"></a>
        <span id="Vietnam_z418" style="font-size:40px"></span>
        <script src="//widget.time.is/t.js"></script>
        <script>
          time_is_widget.init({
            Vietnam_z418: {}
          });
        </script>
      </div>
    </div>
    <div class="link">
      <div class="col">
        <a href="">Về chúng tôi</a>
        <a href="">Chăm sóc thú cưng</a>
        <a href="https://dangthanh.site">Blogs về thú cưng</a>
      </div>
      <div class="col">
        <a href="">Mở cửa hàng thú cưng</a>
        <a href="">Trở thành nhân viên chăm sóc</a>
      </div>
      <div class="col">
        <a href="">Trung tâm hỗ trợ</a>
        <a href="">Câu hỏi thường gặp</a>
      </div>
      <div class="icon">
        <a href=""><i class="fab fa-facebook-square"></i></a>
        <a href=""><i class="fab fa-instagram-square"></i></a>
        <a href=""><i class="fab fa-twitter-square"></i></a>
      </div>
    </div>
    <div class="bottom">
      <a href=""><img src="images/icon/logo-playstore.svg" alt=""></a>
      <a href=""><img src="images/icon/logo-appstore.svg" alt=""></a>
    </div>
  </div>
</footer>

<style>
  footer {
    background-image: url('images/back.png'); /* Thêm ảnh nền */
    background-color: #333; /* Màu nền mới */
    width: 100%;
    margin: 0px auto;
    margin-top: 1rem;
  }

  footer .container {
    width: 90%;
    margin: 0px auto;
    display: flex;
    flex-flow: column;
  }

  footer .container .logo {
    padding: 20px 0;
    display: flex;
    flex-wrap: wrap-reverse;
  }

  footer .container .logo .time{
    color: black;
    font-family: "Bebas Neue", cursive;
  }

  footer .container .link {
    display: grid;
    grid-template-columns: auto auto auto auto;
    padding: 30px 0;
  }

  footer .container .link .col a:hover {
    cursor: pointer;
    color: rgb(224, 247, 222);
  }

  footer .container .link .col a {
    color: black;
    font-weight: bold;
    text-decoration: none;
    padding: 10px 0;
    font-family: "Encode Sans SC", sans-serif;
  }

  footer .container .link .icon a {
    padding: 10px 10px;
    color: black;
    font-weight: bold;
    text-decoration: none;
  }

  footer .container .link .icon a i {
    font-size: 40px;
  }

  footer .container .link .col {
    display: flex;
    flex-flow: column;
  }

  footer .container .link .icon {
    display: flex;
  }

  footer .container .bottom {
    padding: 20px 0;
  }
</style>