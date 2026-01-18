@extends('layouts.app')
@section('title', 'Вход')

@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-5">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                <h1 class="h4 mb-3">Вход</h1>

                <form>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="mail@example.com" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Пароль</label>
                        <input type="password" class="form-control" required>
                    </div>

                    <button class="btn btn-primary w-100">Войти</button>

                    <div class="text-center mt-3">
                        <span class="text-muted">Нет аккаунта?</span>
                        <a href="/register">Зарегистрироваться</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
