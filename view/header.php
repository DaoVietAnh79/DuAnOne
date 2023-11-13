<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== FLATICON ===============-->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css" />

    <title>Vanh Store</title>
  </head>
  <body>
    <!--=============== HEADER ===============-->
    <header class="header">
      <div class="header__top">
        <div class="header__container container">
          <div class="header__contact">
            <span> (+84) 0339 125 387</span>
            <span> Hưng Yên</span>
          </div>
          <p class="header__alert-news">
            Ưu đãi siêu giá trị - Tiết kiệm nhiều hơn với phiếu giảm giá
          </p>
          <a href="index.php?act=login" class="header__top-action">
            Đăng Nhập / Đăng Ký
          </a>
        </div>
      </div>

      <nav class="nav container">
        <a href="index.php" class="nav__logo">
          <img src="assets/img/Va store.jpg" alt="" class="nav__logo-img">
        </a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="index.php" class="nav__link active-link">Trang Chủ</a>
            </li>

            <li class="nav__item">
              <a href="php/shop.php" class="nav__link">Shop</a>
            </li>

            <li class="nav__item">
              <a href="../php/accounts.php" class="nav__link">Hồ sơ cá nhân</a>
            </li>

            <li class="nav__item">
              <a href="../php/compare.php" class="nav__link">So sánh</a>
            </li>

            <li class="nav__item">
              <a href="index.php?act=login" class="nav__link">Đăng Nhập</a>
            </li>
          </ul>

          <div class="header__search">
            <input type="text" placeholder= "Nhập đồ bạn muốn tìm..." class="form__input"
            />
            <button class="search__btn">
              <img src="assets/img/search.png" alt="">
            </button>
          </div>
        </div>

        <div class="header__user-actions">
          <a href="wishlist.php" class="header__action-btn">
            <img src="assets/img/icon-heart.svg" alt="">
            <span class="count">3</span>
          </a>

          <a href="cart.php" class="header__action-btn">
            <img src="assets/img/icon-cart.svg" alt="">
            <span class="count">3</span>
          </a>
        </div>
      </nav>
    </header>