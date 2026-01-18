@extends('layouts.app')
@section('title', 'Регистрация')

@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-5">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                <h1 class="h4 mb-3">Регистрация</h1>

                <form>
                    <div class="mb-3">
                        <label class="form-label">Имя</label>
                        <input type="text" class="form-control" placeholder="Иван" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="mail@example.com" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Пароль</label>
                        <input type="password" class="form-control" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Подтверждение пароля</label>
                        <input type="password" class="form-control" required>
                    </div>

                    <button class="btn btn-primary w-100">Создать аккаунт</button>

                    <div class="text-center mt-3">
                        <span class="text-muted">Уже есть аккаунт?</span>
                        <a href="/login">Войти</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
