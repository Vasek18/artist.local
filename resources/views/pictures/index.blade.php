@extends("app")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                @foreach($pictures as $picture)
                    <div class="thumbnail">
                        {{--<img src="..."--}}
                        {{--alt="{{ $picture->name }}"--}}
                        {{--title="{{ $picture->name }}">--}}
                        <div class="caption">
                            <h3>{{ $picture->name }}</h3>
                            <p>
                                <a href="{{ action('PictureController@show', [$picture->id]) }}"
                                   class="btn btn-primary"
                                   role="button">Редактировать
                                </a>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a href="{{ action('PictureController@create') }}"
                       class="btn btn-lg">
                        <span class="glyphicon glyphicon-plus"
                              aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop