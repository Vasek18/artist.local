@extends("app")

@section("content")
    <div class="container">
        <div class="row">
            @foreach($pictures as $picture)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{ $picture->path_to_svg }}"
                             alt="{{ $picture->name }}"
                             title="{{ $picture->name }}">
                        <div class="caption">
                            <h3>{{ $picture->name }}</h3>
                            <p>
                                <a href="{{ action('PictureController@edit', [$picture->id]) }}"
                                   class="btn btn-primary"
                                   role="button">Редактировать
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a href="{{ action('PictureController@create') }}"
                       class="btn btn-lg add-pic-btn"
                    title="Создать">
                        <span class="glyphicon glyphicon-plus"
                              aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop