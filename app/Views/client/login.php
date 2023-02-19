<?= $this->extend('client/layout/layout.php') ?>

<?= $this->section('content') ?>


<body>

<div class="container mt-5">
  <h2 class="mt-5">로그인</h2>
  <form method="POST" action="/client/client/signin_proc">
    <div class="form-group">
      <label for="user_id">Email:</label>
      <input type="text" class="form-control" id="user_id" placeholder="아이디" name="user_id" required>
    </div>
    <div class="form-group">
      <label for="user_password">Password:</label>
      <input type="password" class="form-control" id="user_password" placeholder="비밀번호" name="user_password" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>

<?= $this->endSection() ?>