@extends("app")

@push('scripts')
<script src="/js/draw.js"></script>
@endpush

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
                                       for="svg">Картинка
                                </label>
                                <canvas width="726"
                                        height="600"
                                        id="picture"
                                        class="draw"></canvas>
                                <input type="hidden"
                                       class="form-control"
                                       name="path_to_pic"
                                       value="{{ $picture->path_to_svg }}"
                                       id="path_to_pic">
                                <input type="hidden"
                                       class="form-control"
                                       name="svg"
                                       value="{{ $picture->svg }}"
                                       id="svg">
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