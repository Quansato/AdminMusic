<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
    body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background: #460526;
   
}

.sidenav {
    height: 100%;
    background-color: #460526;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 5%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 50%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
    </style>
    
</head>
<body>
<div class="sidenav">
         <div class="login-main-text">
            <h2>Admin<br> Music Page</h2>
            <p>Login or register from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form method="post">
               @csrf
                  <div class="form-group">
                     <label>Tên đăng nhập</label>
                     <input type="text" class="form-control" name="email" placeholder="Tên đăng nhập">
                  </div>
                  <div class="form-group">
                     <label>Mật khẩu</label>
                     <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                  </div>
                  <div class="col-md-12">
                  <input type="checkbox" name="remember_me" id="" >
                  <label for="">Lưu thông tin</label>
                  </div>
                  <a href="" class="col-md-6 col-sm-12">Quên mật khẩu?</a>
                  <button type="submit" name="submit" class="btn btn-primary col-md-6 col-sm-12 ml-5">Login</button>
               </form>
            </div>
         </div>
      </div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>



