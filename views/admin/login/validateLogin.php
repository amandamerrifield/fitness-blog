<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
    <div class="card card-signin my-5">
        <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <form class="form-signin" action="index.php?controller=login&action=validateLogin" method="POST">
                <div class="form-label-group">
                    <label for="inputUsername">Username</label>
                    <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Username"
                           required autofocus>
                </div>
                <div class="form-label-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password"
                           required>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Remember password</label>
                </div>
                <button class="btn btn-lg btn-info btn-block text-uppercase" type="submit">Login</button>
            </form>

            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="index.php?controller=users&action=register">New around here? Sign up</a>
            <a class="dropdown-item" href="">Forgot password?</a
        </div>
    </div>
</div>
</div>    