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
          <li><span class="breadcrumb__link">So Sánh</span></li>
        </ul>
      </section>

      <!--=============== COMPARE ===============-->
      <section class="compare container section--lg">
        <table class="compare__table">
          <tr>
            <th>Hình Ảnh</th>
            <td><img src="assets/img/product-2-1.jpg" class="compare__img" alt=""></td>            
            <td><img src="assets/img/product-4-1.jpg" class="compare__img" alt=""></td>
            <td><img src="assets/img/product-7-1.jpg" class="compare__img" alt=""></td>
          </tr>

          <tr>
            <th>Tên</th>
            <td><h3 class="table__title">Áo sơ mi họa tiết nhiều màu</h3></td>
            <td><h3 class="table__title">Quần ống rộng</h3></td>
            <td><h3 class="table__title">Áo Sweater</h3></td>
          </tr>

          <tr>
            <th>Giá</th>
            <td><span class="table__price">₫179.000</span></td>
            <td><span class="table__price">₫179.000</span></td>
            <td><span class="table__price">₫179.000</span></td>
          </tr>

          <tr>
            <th>Đặc tính</th>
            <td><p>
              Sợi thun Cotton có nguồn gốc từ sợi quả bông, chuyên sâu hơn gọi là sợi Xenluloxo (sợi bông). 
              Vải thun chất liệu Cotton 100% có khả năng thấm hút mồ hôi tốt, thích hợp với khí hậu nhiệt đới 
              của Việt Nam, tuy nhiên giá thành cao nhất. Có thể gọi là hàng cao cấp mới dùng chất liệu vải thun này
            </p></td>

            <td><p>
              Sợi thun Cotton có nguồn gốc từ sợi quả bông, chuyên sâu hơn gọi là sợi Xenluloxo (sợi bông). 
              Vải thun chất liệu Cotton 100% có khả năng thấm hút mồ hôi tốt, thích hợp với khí hậu nhiệt đới 
              của Việt Nam, tuy nhiên giá thành cao nhất. Có thể gọi là hàng cao cấp mới dùng chất liệu vải thun này
            </p></td>

            <td><p>
              Sợi thun Cotton có nguồn gốc từ sợi quả bông, chuyên sâu hơn gọi là sợi Xenluloxo (sợi bông). 
              Vải thun chất liệu Cotton 100% có khả năng thấm hút mồ hôi tốt, thích hợp với khí hậu nhiệt đới 
              của Việt Nam, tuy nhiên giá thành cao nhất. Có thể gọi là hàng cao cấp mới dùng chất liệu vải thun này
            </p></td>
          </tr>

          <tr>
            <th>Màu Sắc</th>
            <td><ul class="color__list comapre__color">
              <li>
                <a href="#" class="color__link" style="background-color: hsl(37, 100%, 65%);"></a>
              </li>

              <li>
                <a href="#" class="color__link" style="background-color: hsl(353, 100%, 67%);"></a>
              </li>

              <li>
                <a href="#" class="color__link" style="background-color: hsl(49, 100%, 60%);"></a>
              </li>
            </ul></td>

            <td><ul class="color__list comapre__color">
              <li>
                <a href="#" class="color__link" style="background-color: hsl(37, 100%, 65%);"></a>
              </li>

              <li>
                <a href="#" class="color__link" style="background-color: hsl(353, 100%, 67%);"></a>
              </li>

              <li>
                <a href="#" class="color__link" style="background-color: hsl(49, 100%, 60%);"></a>
              </li>
            </ul></td>

            <td><ul class="color__list comapre__color">
              <li>
                <a href="#" class="color__link" style="background-color: hsl(37, 100%, 65%);"></a>
              </li>

              <li>
                <a href="#" class="color__link" style="background-color: hsl(353, 100%, 67%);"></a>
              </li>

              <li>
                <a href="#" class="color__link" style="background-color: hsl(49, 100%, 60%);"></a>
              </li>
            </ul></td>
          </tr>

          <tr>
            <th>Tồn kho</th>
            <td><span class="table__stock">Hết Hàng</span></td>
            <td><span class="table__stock">Hết Hàng</span></td>
            <td><span class="table__stock">Hết Hàng</span></td>
          </tr>

          <tr>
            <th>Trọng Lượng</th>
            <td><span class="table__weight">150 gram</span></td>
            <td><span class="table__weight">150 gram</span></td>
            <td><span class="table__weight">150 gram</span></td>
          </tr>

          <tr>
            <th>Kích Thước</th>
            <td><span class="dimension">N/A</span></td>
            <td><span class="dimension">N/A</span></td>
            <td><span class="dimension">N/A</span></td>
          </tr>

          <tr>
            <th>Mua</th>
            <td><a href="" class="btn btn--sm">Thêm Vào Giỏ Hàng</a></td>
            <td><a href="" class="btn btn--sm">Thêm Vào Giỏ Hàng</a></td>
            <td><a href="" class="btn btn--sm">Thêm Vào Giỏ Hàng</a></td>
          </tr>

          <tr>
            <th>Xóa</th>
            <td><i class="fi fi-rs-trash table__trash"></i></td>
            <td><i class="fi fi-rs-trash table__trash"></i></td>
            <td><i class="fi fi-rs-trash table__trash"></i></td>
          </tr>
        </table>
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
include "view/header.php";
?>
