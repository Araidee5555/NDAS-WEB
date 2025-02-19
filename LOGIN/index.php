
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container" id="signup" style="display: none;">
    <h1 class="form-title">ลงทะเบียน</h1>
    <form method="post" action="register.php">
      <div class="input-group">
         <i class="fas fa-user"></i>
         <input type="text" name="fName" id="fName" placeholder="First Name" required>
         <label for="fname">First Name</label>
      </div>
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="email">Email</label>
    </div>
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <label for="password">Password</label>
      </div>
      <input type="submit" class="btn" value="ลงทะเบียน" name="signUp">
    </form>

    <div class="links">
      <p>มีบัญชีแล้ว?</p>
      <button id="signInButton">ลงชื่อเข้าใช้</button>
    </div>
  </div>

  <div class="container" id="signIn">
    <h1 class="form-title">ลงชื่อเข้าใช้</h1>
    <form method="post" action="register.php">
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="email">Email</label>
    </div>
      <div class="input-group">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" id="password" placeholder="Password" required>
          <label for="password">Password</label>
      </div>
      <p class="recover">
        <a href="#">
          กู้คืนรหัสผ่าน</a>
      </p>
     <input type="submit" class="btn" value="ลงชื่อเข้าใช้" name="signIn">
    </form>

    <div class="links">
      <p>ยังไม่มีบัญขี?</p>
      <button id="signUpButton">ลงทะเบียน</button>
    </div>
  </div>
  <script src="script.js"></script>
</body>       
</html>
