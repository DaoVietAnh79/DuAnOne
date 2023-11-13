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
          <li><span class="breadcrumb__link">Sản Phẩm Yêu Thích</span></li>
        </ul>
      </section>

      <!--=============== WISHLIST ===============-->
      <section class="wishlist section--lg container">
        <div class="table__container">
          <table class="table">
            <tr>
              <th>Hình Ảnh</th>
              <th>Tên Sản Phẩm</th>
              <th>Giá</th>
              <th>Tình Trạng</th>
              <th>Hoạt Động</th>
              <th>Xóa</th>
            </tr>

            <tr>
              <td><img src="assets/img/product-1-2.jpg" alt="" class="table__img"></td>
              <td>
                <h3 class="table__title">Áo sơ mi họa tiết nhiều màu sắc</h3>
                <p class="table__description">100% thương hiệu sản phẩm mới và chất lượng cao Cotton và spandex.</p>
              </td>

              <td><span class="table__price">₫129.000</span></td>

              <td><span class="table__stock">Trong Kho</span></td>

              <td><a href="" class="btn btn btn--sm">Thêm Vào Giỏ</a></td>

              <td><i class="fi fi-rs-trash table__trash"></i></td>
            </tr>

            <tr>
              <td><img src="assets/img/product-2-2.jpg" alt="" class="table__img"></td>
              <td>
                <h3 class="table__title">Áo sơ mi họa tiết nhiều màu sắc</h3>
                <p class="table__description">100% thương hiệu sản phẩm mới và chất lượng cao Cotton và spandex.</p>
              </td>

              <td><span class="table__price">₫129.000</span></td>

              <td><span class="table__stock">Trong Kho</span></td>

              <td><a href="" class="btn btn btn--sm">Thêm Vào Giỏ</a></td>

              <td><i class="fi fi-rs-trash table__trash"></i></td>
            </tr>

            <tr>
              <td><img src="assets/img/product-6-2.jpg" alt="" class="table__img"></td>
              <td>
                <h3 class="table__title">Áo sơ mi họa tiết nhiều màu sắc</h3>
                <p class="table__description">100% thương hiệu sản phẩm mới và chất lượng cao Cotton và spandex.</p>
              </td>

              <td><span class="table__price">₫129.000</span></td>

              <td><span class="table__stock">Trong Kho</span></td>

              <td><a href="" class="btn btn btn--sm">Thêm Vào Giỏ</a></td>

              <td><i class="fi fi-rs-trash table__trash"></i></td>
            </tr>
          </table>
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
