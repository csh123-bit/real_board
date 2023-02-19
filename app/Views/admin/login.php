<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
    <h2 class="mt-5">로그인</h2>
    <form method="POST">
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
</html>
<body>
