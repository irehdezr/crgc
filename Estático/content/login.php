<link href="/css/login.css" rel="stylesheet">
<body style="background-image:url('img/fondo_grano_cafe.jpg');">
     <div class="container">
        <div class="login-box">
            <div name="login-box-header">
                <div class="login-logo">
                    <!--Imagen del Logo-->
                </div>
                <nav class="navbar navbar-inverse">
                    <h1 style="color:white; text-align:center;">Welcome</h1>
                </nav>
            </div>
            <div class="login-box-body">
                <form action="inicio.php" method="post">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="User name" name="user" id="user" required></input>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password" required></input>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-md-offset-6 col-lg-1 col-lg-offset-6">
                            <div class="checkbox">
                                <label>
                                    <div class='col-md-1 col-lg-1'>Re</div>
                            </label>
                            </div>
                        </div>
                        <div class="col-md-1 col-md-offset-2 col-lg-1 col-lg-offset-2">
                            <input name="login" id="btn_login" type="submit" value="Login" class="btn btn-success pull-rigth" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>