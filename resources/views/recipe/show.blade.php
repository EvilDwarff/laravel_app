@extends('layouts.app')
@section('title', 'Паста карбонара без сливок')

@section('content')
<div class="row g-4">
    <div class="col-12 col-lg-7">
        <div class="card shadow-sm overflow-hidden">
            <img src="https://images.unsplash.com/photo-1523986371872-9d3ba2e2f5f5?auto=format&fit=crop&w=1600&q=80"
                 class="w-100" style="height: 420px; object-fit: cover;" alt="Фото блюда">
        </div>
    </div>

    <div class="col-12 col-lg-5">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <img class="avatar border" src="https://i.pravatar.cc/88?img=5" alt="Аватар">
                    <div class="lh-sm">
                        <div class="fw-semibold">Мария Кузнецова</div>
                        <a class="small text-decoration-none" href="/author">Перейти в профиль</a>
                    </div>
                </div>

                <h1 class="h3 mb-2">Паста карбонара без сливок</h1>

                <div class="d-flex flex-wrap gap-2 mb-3">
                    <span class="badge text-bg-success">Сложность: Легко</span>
                    <span class="badge text-bg-secondary">Время: 20 мин</span>
                </div>

                <hr>

                <div class="text-muted">
                    <p>
                        Карбонара — это не сливочный соус. В классическом варианте кремовую текстуру дают яйца и сыр,
                        а вкус собирается на гуанчале (или панчетте), чёрном перце и правильной температуре.
                    </p>
                    <p>
                        Важный момент: пасту нужно смешивать с соусом вне огня, добавляя немного воды от варки,
                        чтобы эмульсия получилась гладкой. Если перегреть — яйца превратятся в омлет.
                    </p>
                    <p>
                        Ингредиенты (на 2 порции): спагетти 200 г, гуанчале/бекон 120 г, желтки 3 шт,
                        пекорино/пармезан 60–70 г, чёрный перец, соль по вкусу.
                    </p>
                    <p>
                        Кратко по шагам: обжарьте гуанчале до хруста, сварите пасту аль денте,
                        смешайте желтки с сыром и перцем, добавьте пасту и жир со сковороды,
                        подливайте воду от варки до нужной консистенции.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
