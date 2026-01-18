@extends('layouts.app')
@section('title', 'Профиль автора')

@section('content')
<div class="card shadow-sm mb-4">
    <div class="card-body p-4">
        <div class="d-flex flex-column flex-md-row gap-3 align-items-md-center">
            <img class="avatar-lg border" src="https://i.pravatar.cc/200?img=5" alt="Аватар">
            <div class="flex-grow-1">
                <h1 class="h3 mb-1">Мария Кузнецова</h1>
                <p class="text-muted mb-0">
                    Люблю домашнюю еду без сложных ингредиентов. Тестирую рецепты, чтобы они получались
                    с первого раза. Подсказываю замены и делюсь маленькими хитростями.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="d-flex align-items-center justify-content-between mb-3">
    <h2 class="h5 mb-0">Рецепты автора</h2>
    <span class="text-muted small">Всего: 10</span>
</div>

<div class="row g-3">
    {{-- 1 --}}
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body pb-2">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <img class="avatar border" src="https://i.pravatar.cc/88?img=5" alt="Аватар">
                    <div class="lh-sm">
                        <div class="fw-semibold">Мария Кузнецова</div>
                        <div class="text-muted small">Автор рецепта</div>
                    </div>
                </div>
                <h5 class="card-title mb-2 clamp-2">Паста карбонара без сливок</h5>
                <div class="d-flex flex-wrap gap-2 mb-2">
                    <span class="badge text-bg-success">Сложность: Легко</span>
                    <span class="badge text-bg-secondary">Время: 20 мин</span>
                </div>
            </div>
            <img class="recipe-img" src="https://images.unsplash.com/photo-1523986371872-9d3ba2e2f5f5?auto=format&fit=crop&w=1200&q=80" alt="Фото блюда">
            <div class="card-body pt-3">
                <p class="card-text text-muted">Классическая карбонара: яйца, пекорино, гуанчале и много перца. Покажу технику, чтобы соус был шелковистым и не свернулся.</p>
                <a href="/recipe" class="btn btn-outline-primary">Читать полностью</a>
            </div>
        </div>
    </div>

    {{-- 2 --}}
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body pb-2">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <img class="avatar border" src="https://i.pravatar.cc/88?img=7" alt="Аватар">
                    <div class="lh-sm">
                        <div class="fw-semibold">Игорь Лебедев</div>
                        <div class="text-muted small">Автор рецепта</div>
                    </div>
                </div>
                <h5 class="card-title mb-2 clamp-2">Борщ с запечённой свёклой</h5>
                <div class="d-flex flex-wrap gap-2 mb-2">
                    <span class="badge text-bg-warning">Сложность: Средне</span>
                    <span class="badge text-bg-secondary">Время: 90 мин</span>
                </div>
            </div>
            <img class="recipe-img" src="https://images.unsplash.com/photo-1604908177453-7462950a6a92?auto=format&fit=crop&w=1200&q=80" alt="Фото блюда">
            <div class="card-body pt-3">
                <p class="card-text text-muted">Запекаем свёклу, чтобы вкус был насыщеннее и цвет ярче. Подробно про бульон, зажарку и баланс кислоты.</p>
                <a href="/recipe" class="btn btn-outline-primary">Читать полностью</a>
            </div>
        </div>
    </div>

    {{-- 3 --}}
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body pb-2">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <img class="avatar border" src="https://i.pravatar.cc/88?img=12" alt="Аватар">
                    <div class="lh-sm">
                        <div class="fw-semibold">Анна Смирнова</div>
                        <div class="text-muted small">Автор рецепта</div>
                    </div>
                </div>
                <h5 class="card-title mb-2 clamp-2">Том-ям с креветками</h5>
                <div class="d-flex flex-wrap gap-2 mb-2">
                    <span class="badge text-bg-warning">Сложность: Средне</span>
                    <span class="badge text-bg-secondary">Время: 35 мин</span>
                </div>
            </div>
            <img class="recipe-img" src="https://images.unsplash.com/photo-1604908554162-45c76a1b3b6f?auto=format&fit=crop&w=1200&q=80" alt="Фото блюда">
            <div class="card-body pt-3">
                <p class="card-text text-muted">Острый тайский суп: лайм, лемонграсс, кокосовое молоко и паста. Укажу, чем заменить редкие ингредиенты.</p>
                <a href="/recipe" class="btn btn-outline-primary">Читать полностью</a>
            </div>
        </div>
    </div>

    {{-- 4 --}}
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body pb-2">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <img class="avatar border" src="https://i.pravatar.cc/88?img=22" alt="Аватар">
                    <div class="lh-sm">
                        <div class="fw-semibold">Ольга Петрова</div>
                        <div class="text-muted small">Автор рецепта</div>
                    </div>
                </div>
                <h5 class="card-title mb-2 clamp-2">Сырники с ванилью</h5>
                <div class="d-flex flex-wrap gap-2 mb-2">
                    <span class="badge text-bg-success">Сложность: Легко</span>
                    <span class="badge text-bg-secondary">Время: 25 мин</span>
                </div>
            </div>
            <img class="recipe-img" src="https://images.unsplash.com/photo-1541592106381-b31e9677c0e5?auto=format&fit=crop&w=1200&q=80" alt="Фото блюда">
            <div class="card-body pt-3">
                <p class="card-text text-muted">Нежные сырники без лишней муки. Расскажу, какой творог брать и как жарить, чтобы внутри было кремово.</p>
                <a href="/recipe" class="btn btn-outline-primary">Читать полностью</a>
            </div>
        </div>
    </div>

    {{-- 5 --}}
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body pb-2">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <img class="avatar border" src="https://i.pravatar.cc/88?img=31" alt="Аватар">
                    <div class="lh-sm">
                        <div class="fw-semibold">Дмитрий Орлов</div>
                        <div class="text-muted small">Автор рецепта</div>
                    </div>
                </div>
                <h5 class="card-title mb-2 clamp-2">Стейк на сковороде и соус чимичурри</h5>
                <div class="d-flex flex-wrap gap-2 mb-2">
                    <span class="badge text-bg-danger">Сложность: Сложно</span>
                    <span class="badge text-bg-secondary">Время: 40 мин</span>
                </div>
            </div>
            <img class="recipe-img" src="https://images.unsplash.com/photo-1551183053-bf91a1d81141?auto=format&fit=crop&w=1200&q=80" alt="Фото блюда">
            <div class="card-body pt-3">
                <p class="card-text text-muted">Правильный прогрев, корочка и отдых мяса. Чимичурри на зелени и чесноке делает вкус ярче.</p>
                <a href="/recipe" class="btn btn-outline-primary">Читать полностью</a>
            </div>
        </div>
    </div>

    {{-- 6 --}}
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body pb-2">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <img class="avatar border" src="https://i.pravatar.cc/88?img=44" alt="Аватар">
                    <div class="lh-sm">
                        <div class="fw-semibold">Светлана Волкова</div>
                        <div class="text-muted small">Автор рецепта</div>
                    </div>
                </div>
                <h5 class="card-title mb-2 clamp-2">Шакшука на завтрак</h5>
                <div class="d-flex flex-wrap gap-2 mb-2">
                    <span class="badge text-bg-success">Сложность: Легко</span>
                    <span class="badge text-bg-secondary">Время: 18 мин</span>
                </div>
            </div>
            <img class="recipe-img" src="https://images.unsplash.com/photo-1551183053-bf91a1d81141?auto=format&fit=crop&w=1200&q=80" alt="Фото блюда">
            <div class="card-body pt-3">
                <p class="card-text text-muted">Томаты, специи и яйца. Быстро, сытно и красиво. Подскажу, как сделать соус гуще и ароматнее.</p>
                <a href="/recipe" class="btn btn-outline-primary">Читать полностью</a>
            </div>
        </div>
    </div>

    {{-- 7 --}}
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body pb-2">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <img class="avatar border" src="https://i.pravatar.cc/88?img=16" alt="Аватар">
                    <div class="lh-sm">
                        <div class="fw-semibold">Алексей Морозов</div>
                        <div class="text-muted small">Автор рецепта</div>
                    </div>
                </div>
                <h5 class="card-title mb-2 clamp-2">Греческий салат с фетой</h5>
                <div class="d-flex flex-wrap gap-2 mb-2">
                    <span class="badge text-bg-success">Сложность: Легко</span>
                    <span class="badge text-bg-secondary">Время: 10 мин</span>
                </div>
            </div>
            <img class="recipe-img" src="https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?auto=format&fit=crop&w=1200&q=80" alt="Фото блюда">
            <div class="card-body pt-3">
                <p class="card-text text-muted">Хрустящие овощи, оливки и фета. Заправка из оливкового масла и лимона делает вкус ярким и свежим.</p>
                <a href="/recipe" class="btn btn-outline-primary">Читать полностью</a>
            </div>
        </div>
    </div>

    {{-- 8 --}}
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body pb-2">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <img class="avatar border" src="https://i.pravatar.cc/88?img=28" alt="Аватар">
                    <div class="lh-sm">
                        <div class="fw-semibold">Екатерина Зорина</div>
                        <div class="text-muted small">Автор рецепта</div>
                    </div>
                </div>
                <h5 class="card-title mb-2 clamp-2">Лимонный кекс с глазурью</h5>
                <div class="d-flex flex-wrap gap-2 mb-2">
                    <span class="badge text-bg-warning">Сложность: Средне</span>
                    <span class="badge text-bg-secondary">Время: 60 мин</span>
                </div>
            </div>
            <img class="recipe-img" src="https://images.unsplash.com/photo-1499636136210-6f4ee915583e?auto=format&fit=crop&w=1200&q=80" alt="Фото блюда">
            <div class="card-body pt-3">
                <p class="card-text text-muted">Нежный кекс с цедрой и соком лимона. Глазурь хрустит и даёт яркий цитрусовый аромат.</p>
                <a href="/recipe" class="btn btn-outline-primary">Читать полностью</a>
            </div>
        </div>
    </div>

    {{-- 9 --}}
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body pb-2">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <img class="avatar border" src="https://i.pravatar.cc/88?img=9" alt="Аватар">
                    <div class="lh-sm">
                        <div class="fw-semibold">Никита Фомин</div>
                        <div class="text-muted small">Автор рецепта</div>
                    </div>
                </div>
                <h5 class="card-title mb-2 clamp-2">Фо-бо: вьетнамский суп</h5>
                <div class="d-flex flex-wrap gap-2 mb-2">
                    <span class="badge text-bg-danger">Сложность: Сложно</span>
                    <span class="badge text-bg-secondary">Время: 150 мин</span>
                </div>
            </div>
            <img class="recipe-img" src="https://images.unsplash.com/photo-1540648639573-8c848de23f0a?auto=format&fit=crop&w=1200&q=80" alt="Фото блюда">
            <div class="card-body pt-3">
                <p class="card-text text-muted">Долго, но стоит того: ароматный бульон, рисовая лапша и тонкая говядина. Разберём специи и подачу.</p>
                <a href="/recipe" class="btn btn-outline-primary">Читать полностью</a>
            </div>
        </div>
    </div>

    {{-- 10 --}}
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body pb-2">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <img class="avatar border" src="https://i.pravatar.cc/88?img=19" alt="Аватар">
                    <div class="lh-sm">
                        <div class="fw-semibold">Полина Соколова</div>
                        <div class="text-muted small">Автор рецепта</div>
                    </div>
                </div>
                <h5 class="card-title mb-2 clamp-2">Запечённый лосось с лимоном</h5>
                <div class="d-flex flex-wrap gap-2 mb-2">
                    <span class="badge text-bg-success">Сложность: Легко</span>
                    <span class="badge text-bg-secondary">Время: 25 мин</span>
                </div>
            </div>
            <img class="recipe-img" src="https://images.unsplash.com/photo-1519708227418-c8fd9a32b7a2?auto=format&fit=crop&w=1200&q=80" alt="Фото блюда">
            <div class="card-body pt-3">
                <p class="card-text text-muted">Сочный лосось без пересушивания: правильная температура, быстрый маринад и лимон для свежести.</p>
                <a href="/recipe" class="btn btn-outline-primary">Читать полностью</a>
            </div>
        </div>
    </div>
</div>
@endsection
