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
          <li><span class="breadcrumb__link">Thủ tục thanh toán</span></li>
        </ul>
      </section>

      <!--=============== CHECKOUT ===============-->
      <section class="checkout section--lg">
        <div class="checkout__container container grid">
          <div class="checkout__group">
            <h3 class="section__title">Hóa Đơn</h3>

            <form action=""  class="form grid">
              <input type="text" placeholder="Tên" class="form__input">
              <input type="text" placeholder="Địa Chỉ" class="form__input">
              <input type="text" placeholder="Thành phố" class="form__input">
              <input type="text" placeholder="Địa Chỉ Cụ Thể" class="form__input">
              <input type="text" placeholder="Đơn Vị Vận Chuyển" class="form__input">
              <input type="text" placeholder="Số Điện Thoại" class="form__input">
              <input type="text" placeholder="Email" class="form__input">

              <h3 class="checkout__title">Thông Tin Bổ Sung</h3>
              <textarea name="" placeholder="Ghi Chú" id=""  cols="30" rows="10" class="form__input textarea"></textarea>
            </form>
          </div>

          <div class="checkout__group">
            <h3 class="section__title">Tổng</h3>

            <table class="order__table">
              <tr>
                <th colspan="2">Các Sản Phẩm</th>
                <th>Tổng Cộng</th>
              </tr>

              <tr>
                <td><img src="assets/img/product-1-2.jpg" class="order__img" alt=""></td>
                <td>
                  <h3 class="table__title">Áo sơ mi họa tiết nhiều màu sắc</h3>
                  <p class="table__quantity"> x 3</p>
                </td>

                <td>
                  <span class="table__price">₫154.000</span>
                </td>
              </tr>

              <tr>
                <td><img src="assets/img/product-2-2.jpg" class="order__img" alt=""></td>
                <td>
                  <h3 class="table__title">Áo sơ mi họa tiết nhiều màu sắc</h3>
                  <p class="table__quantity"> x 2</p>
                </td>

                <td>
                  <span class="table__price">₫134.000</span>
                </td>
              </tr>

              <tr>
                <td><img src="assets/img/product-7-1.jpg" class="order__img" alt=""></td>
                <td>
                  <h3 class="table__title">Áo sơ mi họa tiết nhiều màu sắc</h3>
                  <p class="table__quantity"> x 1</p>
                </td>

                <td>
                  <span class="table__price">₫144.000</span>
                </td>
              </tr>

              <tr>
                <td><span class="order__subtitle">Tổng</span></td>
                <td colspan="2"><span class="table__price">₫310.000</span></td>
              </tr>

              <tr>
                <td><span class="order__subtitle">Ship</span></td>
                <td colspan="2"><span class="table__price">Free Ship</span></td>
              </tr>

              <tr>
                <td><span class="order__subtitle">Tổng</span></td>
                <td colspan="2"><span class="order__grand-total">₫310.000</span></td>
              </tr>
            </table>

            <div class="payment__methods">
              <h3 class="checkout__title payment__title">Phương Thức Thanh Toán</h3>

              <div class="payment__option flex">
                <input type="radio" name="radio" checked class="payment__input">
                <label for="" class="payment__label">Ngân Hàng</label>
              </div>

              <div class="payment__option flex">
                <input type="radio" name="radio" class="payment__input">
                <label for="" class="payment__label">MoMo</label>
              </div>

              <div class="payment__option flex">
                <input type="radio" name="radio" class="payment__input">
                <label for="" class="payment__label">Thanh Toán Khi Nhận Hàng</label>
              </div>
            </div>

            <button class="btn btn--md">Xác Nhận</button>
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
