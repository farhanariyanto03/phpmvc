<div class="container">
    <h4 class="text-center">FORM LOGIN</h4>
    <hr>
    <form action="http://localhost/phpmvc/public/login/cekLogin" method="post">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda" value="">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
        <a href="http://localhost/phpmvc/public/register/" class="btn btn-success">Register</a>
    </form>
</div>