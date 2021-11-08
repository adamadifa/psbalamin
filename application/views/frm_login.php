<div class="col-md-6">
<div class="login-box-body">
    <p class="login-box-msg">Silahkan Login Menggunakan Username dan Password</p>
    <form action="<?php echo base_url() ?>auth/loginuser" method="post">
        <div class="form-group has-feedback">
          <input type="text" name="username" class="form-control" placeholder="Masukan Username">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Masukan Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" name="submit" class="btn btn-success btn-block btn-flat">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
    </form>
</div>
</div>
<div class="col-md-4">
    Silahkan Masukan Username dan Password 
    <br>
    Username = NISN<br>
    Password = Password yang telah di buat pada saat registrasi
    
</div>