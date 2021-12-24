
</form>
<div class="formbox">
    <h2>會員登入</h2>
    <form action="./api/check_login.php" method="post">
        <table id="loginForm d-flex justify-content-center"">
            <tr>
                <td class="far fa-envelope">帳號:</td>
                <td><input type="text" name="account"></td>
            </tr>
            <tr>
                <td class="fas fa-address-card">密碼:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="登入">
                    <input type="reset" value="重罝">
                </td>

            </tr>
            <!-- <div class="form-header">
                <h1><i class="fas fa-book-open"></i></h1>
            </div>
            <form action="form-body">
                <div class="form-group">
                    <label for="email"><i class="far fa-envelope">Email</i></label>
                    <input type="text" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="username"><i class="fas fa-address-card">User&ensp;</i></label>
                    <input type="text" name="username" id="username">
                </div> -->
    </form>
</div>
</div>