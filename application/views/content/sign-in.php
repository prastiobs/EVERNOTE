<head>
    <title>Welcome Back</title>
  	<link rel="icon" type="image/gif/png" href="<?php echo base_url() ?>assets/img/evernote.png">
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/additional-2.css') ?>">  
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</head>

<body>

<div class="container d-flex justify-content-center">
    <div class="wrap text-center">
        <div class="main-form">
            <img src="<?php echo base_url() ?>assets/img/signup-logo.png" alt="" style="padding-top: 50px;">
            <p class="font-weight-light">Remember everything important.</p>
            <div class="d-flex justify-content-center">
                <button onclick="window.location.href = 'home.html';" class="btn-google" style="padding: 5px 70px">
                        <img src="<?php echo base_url() ?>assets/img/google-logo.png" alt="" style="padding-right: 5px; padding-top: 2px">
                        Continue with Google
                </button>
            </div>
            <div class="or">
                <span>or</span>
            </div>
            <form style="margin-top: 30px" method='POST' action="<?php echo base_url() ?>index.php/C_main/loginForm">
                <div class="form-group my-0">
                    <input name='email' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
                </div>
                <div class="form-group my-0" style="padding-bottom: 50px">
                    <input name='password' type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                </div>
                <button type="submit" class="btn-submit">Sign in</button>
            </form>
            <div class="checkbox" style="margin-top: 40px">
                <label><input type="checkbox" value=""> Remember me for 30 days</label>
                <br>
                <a href="">Forgot password?</a>
            </div>
            <div class="signin">
                <p class="py-0 my-0">Don't have an account?</p>
                <a href="<?php echo base_url('register') ?>" style="text-decoration: none">Create account</a>
            </div>
        </div>
    </div>
</div>

</body>