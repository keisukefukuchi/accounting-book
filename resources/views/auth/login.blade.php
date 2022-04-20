@extends('layouts.app')

@section('title', 'ログイン')

@section('content')
    @include('include.header')
    <div class="container">
        <h1><a href="/">memo</a></h1>
        <div>
            <div>
                <h2>ログイン</h2>
                <div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <label for="email">メールアドレス</label>
                            <input type="text" id="email" name="email" required value="{{ old('email') }}">
                        </div>
                        <div>
                            <label for="password">パスワード</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <input type="hidden" name="remember" id="remember" value="on">
                        <div class="text-left">
                            <a href="">パスワードを忘れた方</a>
                        </div>
                        <button type="submit">ログイン</button>
                    </form>
                    <div>
                        <a href="">ユーザー登録はこちら</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
