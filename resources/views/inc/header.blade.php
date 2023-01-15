<header class="header">
    <div class="box">
        <div class="logo">
            <a href="/">
                <div class="logo__title">LOTO<br><b>AUTO</b></div> 
            </a>
            <span class="logo__caption">Ваш выбор<br>в мире лотерей</span>
        </div>
        <div class="header__userbar">
            @auth
                <a href="/logout" class="userbar__item">Выход</a>
            @endauth
            @guest
                <a href="/login" class="userbar__item">Вход</a>
                <a href="/registration" class="userbar__item">Регистрация</a>
            @endguest
        </div>
        <div class="hot-line">
            <b>Горячая линия:</b>
            <a href="tel:+380990020305">
                +380 99 002 03 05
            </a>
        </div>
    </div>
</header>
