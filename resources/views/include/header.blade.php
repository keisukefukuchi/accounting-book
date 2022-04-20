<header>
    @guest
        <div class="header-left">
            <h1 class="header-title">家計簿アプリ</h1>
        </div>
        <div class="header-right">
            <a href="">ログイン</a>
            <a href="">新規登録</a>
        </div>
    @endguest
    @auth
        <div class="header-left">
            <h1 class="header-title">家計簿アプリ</h1>
        </div>
        <div class="header-right">
            <a href="">ログイン</a>
            <a href="">新規登録</a>
        </div>
    @endauth
</header>

<style>
    header {
        display: flex;
        background-color: black;
        height: 70px;
        clear: white;
    }

    .header-title {
        color: white
    }

</style>
