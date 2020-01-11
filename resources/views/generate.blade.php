<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DB</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

</head>

<body>
<!-- Форма создания задачи... -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel-body">
            <!-- Форма новой задачи -->
            <form action="{{ url('/generate') }}" method="POST" class="form-horizontal">
                <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            <!-- Имя задачи -->
                <div class="form-group">
                    <label for="task" class="col-sm-3 control-label">Количество генерируеміх данных</label>
                    <div class="col-sm-6">
                        <input type="text" name="number" id="number" value="{{$number }}"
                               class="form-control">
                    </div>
                </div>

                <!-- Кнопка добавления задачи -->
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-save"></i> Save
                        </button>
                    </div>
                </div>
            </form>

            <div class="form-group">
                <label for="task" class="col-sm-3 control-label"></label>
                <div class="col-sm-2">
                    @foreach($number as $g)

                        {{'Имя'.$g->name}}.<br>

                    @endforeach
                </div>
            </div>

        </div>

    </div>


</div>

</body>


</html>

