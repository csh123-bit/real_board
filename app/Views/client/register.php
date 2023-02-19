<?= $this->extend('client/layout/layout.php') ?>

<?= $this->section('content') ?>


<body>

<div class="container mt-5">
  <h2>회원가입</h2>
  <form method="POST">
    <div class="form-group">
      <label for="user_email">이메일:</label>
      <input type="email" class="form-control" id="user_email" placeholder="이메일" name="user_email" required>
    </div>
    <!-- <div class="form-group">
      <label for="user_id">아이디:</label>
      <input type="text" class="form-control" id="user_id" placeholder="아이디" name="user_id" required>
    </div> -->
    <div class="form-group">
      <label for="user_name">이름:</label>
      <input type="text" class="form-control" id="user_name" placeholder="이름" name="user_name" required>
    </div>
    <div class="form-group">
      <label for="user_phonenumber">전화번호:</label>
      <input type="text" class="form-control" id="user_phonenumber" placeholder="전화번호" name="user_phonenumber" required>
    </div>
    <div class="form-group">
      <label for="user_password">비밀번호:</label>
      <input type="password" class="form-control" id="user_password" placeholder="비밀번호" name="user_password" required>
    </div>
    <div class="form-group">
      <label for="user_password_check">비밀번호 확인:</label>
      <input type="password" class="form-control" id="user_password_check" placeholder="비밀번호" name="user_password_check" required>
    </div>

    <div class="form-group">
      <label for="user_address">주소:</label>
      <input type="text" class="form-control" id="user_address" placeholder="주소" name="user_address">
    </div>
    <button type="submit" class="btn btn-primary">등록</button>
  </form>
</div>

</body>

<?= $this->endSection() ?>