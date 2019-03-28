@extends ('layout')

@section('title', 'Блог - Главная')
@section('content')
    <script>
        var sum = 0;
        while (true) {
            var value = +prompt("Введите слагаемое или нажмите ОК чтобы получить результат." + " "+
                "Текущее значение суммы"+" "+sum);
            if (!value) break; // (*)
            sum += value;
        }
        alert('Сумма: ' + sum);
    </script>
@endsection

@section ('categories')

@endsection

@section ('autors')

@endsection

@section ('search')
    <!-- Search Widget -->
    <div class="card my-4">
        <h5 class="card-header">Поиск</h5>
        <div class="card-body">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Найти">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Искать</button>
                </span>
            </div>
        </div>
    </div>
@endsection

@section ('advertising')
    <!-- Advertising Widget -->
    <div class="card my-4">
        <h5 class="card-header">Рекламный блок</h5>
        <div class="card-body">
            <strong style="color:#ff0000"> Покупайте наших слонов </strong>
        </div>
    </div>
@endsection