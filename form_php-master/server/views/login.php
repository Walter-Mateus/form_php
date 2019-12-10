<form class="auth" action="/login" method="">
    <fieldset>
        <legend>Авторизация</legend>

        <div class="auth__row">
            <label for="useremail">User email</label>
            <input name="email" value="osvaldo@hotmail.com" class="auth__text" type="text" id="useremail" />
            <i class="auth__error auth__error_hide">Not valid email (example@gmail.com)</i>
        </div>

        <div class="auth__row">
            <label for="userpass">User password</label>
            <input name="password" value="34355" class="auth__text" type="text" id="userpass" />
            <i class="auth__error auth__error_hide">Must contain a-z A-Z 0-9 length > 7</i>
        </div>

        <div class="auth__row">
            <button type="submit" id="sendbtn" class="auth__btn">Log in</button>
        </div>
    </fieldset>
</form>
