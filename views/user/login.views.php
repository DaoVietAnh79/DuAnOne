<link rel="stylesheet" href="uploads/css/login.css">
<div id="container4" style="margin-top:100px">
  <div id="title-container4">
    <h1>ĐĂNG NHẬP</h1>
  </div>
<form action="" method="post">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="" name="email" class="form-control" />
    <label class="form-label" for="">Địa chỉ email</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="" name="matKhau" class="form-control" />
    <label class="form-label" for="">Mật khẩu</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Nhớ mật khẩu </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="index.php?type=login&type2=forgot">Quên mật khẩu?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button type="submit" name="btn-login" class="btn btn-primary btn-block mb-4">Đăng nhập</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Bạn chưa có tài khoản? <a href="index.php?type=regis">đăng ký</a></p>
    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-facebook-f"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-google"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-twitter"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-github"></i>
    </button>
  </div>
</form>
</div>
