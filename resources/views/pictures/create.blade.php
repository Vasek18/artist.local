@extends("app")

@push('scripts')
<script src="/js/draw.js"></script>
@endpush

@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Создать рисунок</div>
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
                              action="{{ action('PictureController@store') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class=" control-label"
                                       for="name">Название
                                </label>
                                <input type="text"
                                       class="form-control"
                                       name="name"
                                       value="{{ old('name') }}"
                                       required
                                       id="name">
                            </div>
                            <div class="form-group">
                                <label class=" control-label"
                                       for="svg">Картинка
                                </label>
                                <div>
                                    <canvas width="726"
                                            height="600"
                                            id="picture"
                                            class="draw"></canvas>
                                    <input type="hidden"
                                           class="form-control"
                                           name="svg"
                                           value="{{ old('svg') }}"
                                           id="svg">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-5">
                                    <button type="submit"
                                            class="btn btn-primary"
                                            name="create">Создать
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