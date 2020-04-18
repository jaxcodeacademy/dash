<? 
$slug = 'page-signup';
include '_head.php'; 
?>
  <body>

<? include '_navbar.php'; ?>

    <div class="content content-fixed content-auth">
      <div class="container">
        <div class="media align-items-stretch justify-content-center ht-100p">
          <div class="sign-wrapper mg-lg-r-50 mg-xl-r-60">
            <div class="pd-t-20 wd-100p">
              <h4 class="tx-color-01 mg-b-5">Create New Account</h4>
              <p class="tx-color-03 tx-16 mg-b-40">It's free to signup and only takes a minute.</p>

              <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" placeholder="Enter your email address">
              </div>
              <div class="form-group">
                <div class="d-flex justify-content-between mg-b-5">
                  <label class="mg-b-0-f">Password</label>
                </div>
                <input type="password" class="form-control" placeholder="Enter your password">
              </div>
              <div class="form-group">
                <label>Firstname</label>
                <input type="text" class="form-control" placeholder="Enter your firstname">
              </div>
              <div class="form-group">
                <label>Lastname</label>
                <input type="text" class="form-control" placeholder="Enter your lastname">
              </div>
              <div class="form-group tx-12">
                By clicking <strong>Create an account</strong> below, you agree to our terms of service and privacy statement.
              </div><!-- form-group -->

              <button class="btn btn-brand-02 btn-block">Create Account</button>
              <div class="divider-text">or</div>
              <button class="btn btn-outline-facebook btn-block">Sign Up With Facebook</button>
              <button class="btn btn-outline-twitter btn-block">Sign Up With Twitter</button>
              <div class="tx-13 mg-t-20 tx-center">Already have an account? <a href="page-signin.php">Sign In</a></div>
            </div>
          </div><!-- sign-wrapper -->
          <div class="media-body pd-y-30 pd-lg-x-50 pd-xl-x-60 align-items-center d-none d-lg-flex pos-relative">
            <div class="mx-lg-wd-500 mx-xl-wd-550">
              <img src="https://via.placeholder.com/1280x1225" class="img-fluid" alt="">
            </div>
            <div class="pos-absolute b-0 r-0 tx-12">
              Social media marketing vector is created by <a href="https://www.freepik.com/pikisuperstar" target="_blank">pikisuperstar (freepik.com)</a>
            </div>
          </div><!-- media-body -->
        </div><!-- media -->
      </div><!-- container -->
    </div><!-- content -->

<? include '_footer.php'; ?>