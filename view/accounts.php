    <!--=============== MAIN ===============-->
    <main class="main">
      <!--=============== BREADCRUMB ===============-->
      <section class="breadcrumb">
        <ul class="breadcrumb__list flex container">
          <li><a href="index.php" class="breadcrumb__link">Trang Chủ</a></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Hồ sơ cá nhân</span></li>
        </ul>
      </section>

      <!--=============== ACCOUNTS ===============-->
      <section class="accounts section--lg">
        <div class="accounts__container container grid">
          <div class="account__tabs">
            <p class="account__tab active-tab" data-target="#dashboard">
              <i class="fi fi-rs-settings-sliders"></i> Bảng điều khiển
            </p>

            <p class="account__tab" data-target="#orders">
              <i class="fi fi-rs-shopping-bag"></i> Đơn Mua
            </p>

            <p class="account__tab" data-target="#update-profile">
              <i class="fi fi-rs-user"></i> Cập Nhật Hồ Sơ
            </p>

            <p class="account__tab" data-target="#address">
              <i class="fi fi-rs-marker"></i> Địa Chỉ
            </p>

            <p class="account__tab" data-target="#change-password">
              <i class="fi fi-rs-user"></i> Bảo Mật
            </p>

            <p class="account__tab">
              <i class="fi fi-rs-exit"></i> Đăng Xuất
            </p>
          </div>

          <div class="tabs__content">
            <div class="tab__content active-tab" content id="dashboard">
              <h3 class="tab__header">Xin Chào Vanh !</h3>

                <div class="tab__body">
                  <p class="tab__description">
                    Bạn cần hỗ trợ gì thì hãy liên hệ với chúng tôi!
                  </p>
                </div>
            </div>

            <div class="tab__content" content id="orders">
              <h3 class="tab__header">Đơn mua của bạn</h3>

                <div class="tab__body">
                  <table class="placed__order-table">
                    <tr>
                      <th>Đơn Mua</th>
                      <th>Ngày</th>
                      <th>Trạng Thái</th>
                      <th>Tổng</th>
                      <th>Chi Tiết</th>
                    </tr>

                    <tr>
                      <td>#1375</td>
                      <td>Thứ 3, 06/06/2023</td>
                      <td>Đang Xử Lí</td>
                      <td>₫179.000</td>
                      <td><a href="#" class="view__order">Xem</a></td>
                    </tr>

                    <tr>
                      <td>#12468</td>
                      <td>Thứ 5, 26/05/2023</td>
                      <td>Thành Công</td>
                      <td>₫169.000</td>
                      <td><a href="#" class="view__order">Xem</a></td>
                    </tr>

                    <tr>
                      <td>#150205</td>
                      <td>Thứ 2, 20/05/2023</td>
                      <td>Hoàn Thành</td>
                      <td>₫199.000</td>
                      <td><a href="#" class="view__order">Xem</a></td>
                    </tr>
                  </table>
                </div>
            </div>

            <div class="tab__content" content id="update-profile">
              <h3 class="tab__header">Cập Nhật Thông Tin</h3>

                <div class="tab__body">
                  <form action="" class="form grid">
                    <input type="text" placeholder="Họ và Tên" class="form__input">

                    <div class="form__btn">
                      <button class="btn btn--md">Lưu</button>
                    </div>
                  </form>
                </div>
            </div>

            <div class="tab__content" content id="address">
            <h3 class="tab__header">Địa Chỉ</h3>

              <div class="tab__body">
                <address class="address">
                  51 Ngọa Long,
                  Minh Khai, Bắc Từ Liêm, Hà Nội
                </address>
                <a href="index.php" class="exit">Exit</a>
              </div>
            </div>

            <div class="tab__content" content id="change-password">
              <h3 class="tab__header">Bảo Mật</h3>

                <div class="tab__body">
                  <form action="" class="form grid">
                    <input type="password" placeholder="Mật Khẩu Hiện Tại" class="form__input">
                    <input type="password" placeholder="Mật Khẩu Mới" class="form__input">
                    <input type="password" placeholder="Nhập Lại Mật Khẩu Mới" class="form__input">

                    <div class="form__btn">
                      <button class="btn btn--md">Lưu</button>
                    </div>
                  </form>
                </div>
            </div>
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