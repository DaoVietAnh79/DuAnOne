<?php
include "view/header.php";
?>

    <!--=============== MAIN ===============-->
    <main class="main">
      <!--=============== BREADCRUMB ===============-->
      <section class="breadcrumb">
        <ul class="breadcrumb__list flex container">
          <li><a href="index.php" class="breadcrumb__link">Trang Chủ</a></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Thời Trang</span></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Áo Sơ Mi</span></li>
        </ul>
      </section>

      <!--=============== DETAILS ===============-->
      <section class="details section--lg">
        <div class="details__container container grid">
          <div class="details__group">
            <img src="assets/img/product-8-1.jpg" alt="" class="details__img">

            <div class="details__small-images grid">
              <img src="assets/img/product-8-2.jpg" class="details__small-img" alt="">

              <img src="assets/img/product-8-1.jpg" class="details__small-img" alt="">
              
              <img src="assets/img/product-8-2.jpg" class="details__small-img" alt="">
              
            </div>
          </div>

          <div class="details__group">
            <div class="h3 details__title">Áo Sơ Mi</div>
            <p class="details__brand">Thương hiệu: <span>adidas</span></p>

            <div class="details__price flex">
              <span class="new__price">₫129.000</span>
              <span class="old__price">₫175.000</span>
              <span class="save__price">Giảm 15%</span>
            </div>

            <p class="short__description">
              100% thương hiệu sản phẩm mới và chất lượng cao 
              Cotton và spandex.
              Chiếc áo này được làm từ chất liệu cotton siêu mềm mại, mặc rất thoải mái. Thích hợp cho bạn mặc ở nhà hoặc đi chơi.
              Áo sơ mi rộng, thoải mái, đơn giản phù hợp với thanh thiếu niên.
            </p>

            <ul class="product__list">
              <li class="list_item flex">
                <i class="fi-rs-crown"></i> Bảo hành thương hiệu AL Jazeera 1 năm
              </li>

              <li class="list_item flex">
                <i class="fi-rs-refresh"></i> Chính sách hoàn trả trong 30 ngày
              </li>
              
              <li class="list_item flex">
                <i class="fi-rs-credit-card"></i> Tiền mặt khi giao hàng có sẵn
              </li>
            </ul>

            <div class="details__color flex">
              <span class="details__color-title">Màu</span>

              <ul class="color__list">
                <li>
                  <a href="#" class="color__link" style="background-color: hsl(37, 100%, 65%);"></a>
                </li>

                <li>
                  <a href="#" class="color__link" style="background-color: hsl(353, 100%, 67%);"></a>
                </li>

                <li>
                  <a href="#" class="color__link" style="background-color: hsl(49, 100%, 60%);"></a>
                </li>

                <li>
                  <a href="#" class="color__link" style="background-color: hsl(304, 100%, 78%);"></a>
                </li>

                <li>
                  <a href="#" class="color__link" style="background-color: hsl(126, 61%, 52%);"></a>
                </li>
              </ul>
            </div>

            <div class="details__size flex">
              <span class="details__size-title">Size</span>

              <ul class="size__list">
                <li>
                  <a href="#" class="size__link size-active">M</a>
                </li>
                
                <li>
                  <a href="#" class="size__link">L</a>
                </li>

                <li>
                  <a href="#" class="size__link">XL</a>
                </li>

                <li>
                  <a href="#" class="size__link">XXL</a>
                </li>
              </ul>
            </div>

            <div class="details__action">
              <input type="number" class="quantity" value="3" />

              <a href="#" class="btn btn--sm">Thêm vào giỏ hàng</a>
              <a href="#" class="details__action-btn">
                <i class="fi fi-rs-heart"></i>
              </a>
            </div>

            <ul class="details__meta">
              <li class="meta__list flex"><span>Mã:</span> FWM15VKT</li>
              <li class="meta__list flex"><span>Loại:</span> Vải</li>
              <li class="meta__list flex"><span>Sẵn Có:</span> Các mặt hàng còn hàng</li>
            </ul>
          </div>
        </div>
      </section>

      <!--=============== DETAILS TAB ===============-->
      <section class="details__tab"></section>

      <!--=============== PRODUCTS ===============-->
      <section class="products"></section>

      <!--=============== NEWSLETTER ===============-->
      <section class="newsletter section">
        <div class="newsletter__container container grid">
          <h3 class="newsletter__title flex">
            <img src="assets/img/icon-email.svg" alt="" class="newsletter__icon">
            Đăng ký để nhận thêm nhiều ưu đãi
          </h3>

          <p class="newsletter__description">
            ...và nhận phiếu giảm giá 35% cho lần mua sắm đầu tiên.
          </p>

          <form action="" class="newsletter__form">
            <input type="text" placeholder="Nhập email của bạn" class="newsletter__input">
            <button type="submit" class="newsletter__btn">ĐăngKý</button>
          </form>
        </div>
      </section>
    </main>

<?php
include "view/footer.php";
?>
