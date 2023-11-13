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
          <li><span class="breadcrumb__link">Shop</span></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Giỏ Hàng</span></li>
        </ul>
      </section>

      <!--=============== CART ===============-->
      <section class="cart section--lg container">
        <div class="table__container">
          <table class="table">
            <tr>
              <th>Hình Ảnh</th>
              <th>Tên Sản Phẩm</th>
              <th>Giá</th>
              <th>Số Lượng</th>
              <th>Tổng Tiền</th>
              <th>Xóa</th>
            </tr>

            <tr>
              <td><img src="assets/img/product-1-2.jpg" alt="" class="table__img"></td>
              <td>
                <h3 class="table__title">Áo sơ mi họa tiết nhiều màu sắc</h3>
                <p class="table__description">100% thương hiệu sản phẩm mới và chất lượng cao Cotton và spandex.</p>
              </td>

              <td><span class="table__price">₫129.000</span></td>

              <td><input type="number" value="3" class="quantity"></td>

              <td><span class="table__subtotal">₫179.000</span></td>

              <td><i class="fi fi-rs-trash table__trash"></i></td>
            </tr>

            <tr>
              <td><img src="assets/img/product-2-2.jpg" alt="" class="table__img"></td>
              <td>
                <h3 class="table__title">Áo sơ mi họa tiết nhiều màu sắc</h3>
                <p class="table__description">100% thương hiệu sản phẩm mới và chất lượng cao Cotton và spandex.</p>
              </td>

              <td><span class="table__price">₫129.000</span></td>

              <td><input type="number" value="2" class="quantity"></td>

              <td><span class="table__subtotal">₫258.000</span></td>

              <td><i class="fi fi-rs-trash table__trash"></i></td>
            </tr>

            <tr>
              <td><img src="assets/img/product-6-2.jpg" alt="" class="table__img"></td>
              <td>
                <h3 class="table__title">Áo sơ mi họa tiết nhiều màu sắc</h3>
                <p class="table__description">100% thương hiệu sản phẩm mới và chất lượng cao Cotton và spandex.</p>
              </td>

              <td><span class="table__price">₫129.000</span></td>

              <td><input type="number" value="1" class="quantity"></td>

              <td><span class="table__subtotal">₫129.000</span></td>

              <td><i class="fi fi-rs-trash table__trash"></i></td>
            </tr>
          </table>
        </div>

        <div class="cart__actions">
          <a href="#" class="btn flex btn--md">
            <i class="fi-rs-shuffle"></i> Làm mới giỏ hàng
          </a>

          <a href="#" class="btn flex btn--md">
            <i class="fi-rs-shopping-bag"></i>  Tiếp tục mua
          </a>
        </div>

        <div class="divider">
          <i class="fi fi-rs-fingerprint"></i>
        </div>

        <div class="cart__group grid">
          <div>
            <div class="cart__shipping">
              <h3 class="section__title">Tính Toán Vận Chuyển</h3>

              <form action="" class="form grid">
                <input type="text" placeholder="Quốc Gia" class="form__input">

                <div class="form__group grid">
                  <input type="text" placeholder="Thành Phố" class="form__input">

                  <input type="text" placeholder="Mã Bưu Điện" class="form__input">
                </div>

                <div class="form__btn">
                  <button class="btn flex btn--sm">
                    <i class="fi-rs-shuffle"></i> Cập Nhật
                  </button>
                </div>
              </form>
            </div>

            <div class="cart__coupon">
              <h3 class="section__title">Mã Giảm Giá</h3>

              <form action="" class="coupon__form form grid">
                <div class="form__group grid">
                  <input type="text" class="form__input" placeholder="Nhập Mã Giảm Giá">

                  <div class="form__btn">
                    <button class="btn flex btn--sm">
                      <i class="fi-rs-label"></i> Áp Dụng
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="cart__total">
            <h3 class="section__title">Tổng Số Giỏ Hàng</h3>

            <table class="cart__total-table">
              <tr>
                <td><span class="cart__total-title">Tổng</span></td>
                <td><span class="cart__total-price">₫390.000</span></td>
              </tr>

              <tr>
                <td><span class="cart__total-title">Phí Vận Chuyển</span></td>
                <td><span class="cart__total-price">₫20.000</span></td>
              </tr>

              <tr>
                <td><span class="cart__total-title">Tổng Cộng</span></td>
                <td><span class="cart__total-price">₫410.000</span></td>
              </tr>
            </table>

            <a href="../php/checkout.php" class="btn flex btn-md">
              <i class="fi fi-rs-box-alt"></i> Tiến hành kiểm tra
            </a>
          </div>
        </div>
      </section>

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
