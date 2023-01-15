<div class="authentication">
    <div class="box">
        <div class="title">Вход</div>
        <div class="subtitle">Пожалуйста, введите ваш e-mail и пароль в поля ниже</div>
        <form action="{{ route('user.login') }}" class="authentication__auth-form" method="POST">
            <div class="auth__box">
                @csrf
                <div class="auth-form__item">
                    <label for="email" class="auth-form__label">E-mail</label>
                    <input type="text" class="auth-form__control" id="email" name="email" value=""
                        placeholder="E-mail">
                    @error('email')
                        <div class="auth-form__error-msg">{{ $message }}</div>
                    @enderror
                </div>
                <div class="auth-form__item">
                    <label for="password" class="auth-form__label">Password</label>
                    <input type="password" class="auth-form__control" id="password" name="password" value=""
                        placeholder="Пароль">
                    @error('password')
                        <div class="auth-form__error-msg">{{ $message }}</div>
                    @enderror
                </div>
                <button class="button" type="submit" name="sendMe" value="1">Войти</button>
            </div>
        </form>
    </div>
</div>
