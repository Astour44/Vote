
<form class="formbox" action="./api/reg.php" method="post" id="regForm">
<h2>註冊會員</h2>
    <table>
        <tr>
            <td>帳號：</td>
            <td><input type="text" name="account" ></td>
        </tr>
        <tr>
            <td>密碼：</td>
            <td><input type="password" name="password" ></td>
        </tr>
        <tr>
            <td>信箱：</td>
            <td><input type="text" name="email" ></td>
        </tr>
        <tr>
            <td>姓名：</td>
            <td><input type="text" name="name" ></td>
        </tr>
        <tr>
            <td>生日：</td>
            <td><input type="date" name="birthday" ></td>
        </tr>
        <tr>
            <td>性別：</td>
            <td><input type="text" name="gender" ></td>
        </tr>
    </table>
    <div><input type="submit" value="確認送出"> </div>
</form>