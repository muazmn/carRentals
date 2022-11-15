<div class="d-flex justify-content-center ketua">
    <div class="borang" style="padding-top: 20px;">
        <div class="register">
            <h4>LOGIN PAGE</h4>
            <span class="bapakHr">
                <hr class="hr">
            </span>
        </div>
        <div class="col formm">
            <!-- style="width: 68vw; height:340px; -->
            <form action="<?= BASEURL; ?>/Log/login" method="post" class="pb-6">
                <div class="kotakLogin">
                    <div class="form-group pb-3">
                        <div class="input-group usernameLog smallInput1">
                            <span class="input-group-text border-0 bg-body text-muted fw-bold">Username</span>
                            <label for="password"></label>
                            <input name="username" type="text" id="username" class="form-control border-0 border-bottom inputluar2 inputdalam2 password1" placeholder="username" required>
                        </div>
                    </div>
                    <div class="form-group pb-4 ">
                        <div class="input-group passwordLog smallInput1">
                            <span class="input-group-text border-0 bg-body text-muted fw-bold">Password</span>
                            <label for="password"></label>
                            <input name="password" type="password" id="password" class="form-control border-0 border-bottom inputluar2 inputdalam2 password1" placeholder="Password" required>
                            <!-- <div class="ps-4"> -->
                            <!-- </div> -->
                            <!-- <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div> -->
                        </div>
                    </div>

                    <div class="form-check checkboxPass rounded-0">
                        <!-- <span class="input-group-text" onclick="password_show_hide();"> -->
                        <label>
                            <input class="form-check-input" type="checkbox" value="" id="checkboxPass" onclick="password_show_hide2();" />
                            <p>show Password</p>
                        </label>
                        <i class="fas fa-eye" id="show_eye"></i>
                        <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                        </span>
                    </div>
                    <div class="container penutupLogin">
                        <button class="btn bayang btn-primary ms-3" name="login" type="submit" name="login">SIGN IN</button>
                        <!-- <button type="submit" class="btn btn-primary btn-block rounded-pill mt-3" name="login" style="width: 300px;">login</button> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>