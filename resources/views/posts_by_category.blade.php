@extends ('layout')

@section('title', 'Посты категории')
@section('content')
    <div class="col-md-8">
        <h1 class="my-4">Все посты категории {{$category->categories}}

        </h1>

    @foreach( $category->posts as $post)
        <!-- Blog Post -->
            <div class="card mb-4">
                <img class="card-img-top" src="{{$post->img}}" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title">{{$post->title}}</h2>
                    <p class="card-text">{{$post->body}}</p>
                    <a href="#" class="btn btn-primary">Читать дальше &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                    Создан: {{$post->created_at}}  <br>
                    Автор: <a href="{{route('posts_by_autor', $post->autors->key)}}"> {{$post->autors->name}} </a>
                    Категории:
                    @foreach($post->categories as $category)
                        <a href="{{route('posts_by_category', $category->key)}}"> {{$category->categories}}   </a>
                    @endforeach
                </div>
            </div>
    @endforeach


    <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
                <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
                <a class="page-link" href="#">Newer &rarr;</a>
            </li>
        </ul>
    </div>

@endsection

@section ('categories')
    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Категории</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">

                        @inject('categories', 'App\Categories_for_sidebar')

                        <div>

                            Категории: <br> {{ $categories->show_categories() }}

                        </div>

                    </ul>
                </div>
            </div>
        </div>
    </div>
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
            Покупайте наших слонов
        </div>
    </div>
@endsection