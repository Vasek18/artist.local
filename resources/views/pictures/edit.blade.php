@extends("app")

@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Редактировать рисунок "{{ $picture->name }}"</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Ошибки!</strong> :<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form role="form"
                              method="POST"
                              action="{{ action('PictureController@update', [$picture->id]) }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label class=" control-label"
                                       for="name">Название
                                </label>
                                <input type="text"
                                       class="form-control"
                                       name="name"
                                       value="{{ $picture->name }}"
                                       required
                                       id="name">
                            </div>
                            {{-- <div class="form-group">
                                 <label class=" control-label"
                                        for="code">Код
                                 </label>
                                 <input type="text"
                                        class="form-control"
                                        name="code"
                                        value="{{ old('code') }}"
                                        required
                                        id="code">
                             </div>--}}
                            <div class="form-group">
                                <label class=" control-label"
                                       for="pic_json">Картинка
                                </label>
                                <canvas width="500"
                                        height="500"></canvas>
                                <input type="hidden"
                                       class="form-control"
                                       name="pic_json"
                                       value="{{ $picture->pic_json }}"
                                       id="pic_json">
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit"
                                            class="btn btn-primary"
                                            name="create">Изменить
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop