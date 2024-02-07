<form id="" name="" method="post" action="<?=base_url('user/login')?>" class="custom-search-from" enctype="application/x-www-form-urlencoded">
  <div class="row">
    <div class="col-md-6 border-end py-3">
      <div class="row">
        <div class="form-group col-md-12">
          <label class="d-none">Email or Mobile</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Emailid">
        </div>
        <div class="form-group col-md-12">
          <label class="d-none">Password</label>
          <input type="password" class="form-control" id="pwd" name="password" placeholder="Password">
        </div>
        <div class=clearfix></div>
        <div class="form-group col-lg-12 text-center">
          <button type="submit" id="submit" name="submit" class="btn btn-red btn-sm"  role="button" aria-disabled="false">Log In</button>
          <a href="" class="small d-inline ms-3">Forgot Password</a> </div>
      </div>
    </div>
    <!--div class="col-md-6 py-3"> <a href="#" class="google-login"><span class="google-icon">
      <svg aria-hidden="true" focusable="false" data-prefix="fab"  width="34px" height="34px" data-icon="google" class="svg-inline--fa fa-google fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512"><path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path></svg>
      </span>&nbsp;Continue with Google </a> <br>
      <a href="#" class="facebook-login"><span class="facebook-icon">
      <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-square" class="svg-inline--fa fa-facebook-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="34px" height="34px">
        <path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"></path>
      </svg>
      </span>&nbsp;Continue with Facebook </a>
      <div class=clearfix></div>
    </div-->
  </div>
</form>
