<!-- Stored in resources/views/child.blade.php -->
@extends('back.body')

@section('content')

    <div class="row">
        <h1>
            Список новостей
        </h1>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="box box-solid box-default">
                <a class="btn btn-success"
                   href="{{ url('admin/new/create') }}" role="button">+ Добавить</a>
                <table class="table table-hover table-dark">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Дата пуб.</th>
                        <th scope="col">Название</th>
                        <th scope="col">Категория</th>
                        <th scope="col">Действие</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->datapublic }}</td>
                                <td>{{ $data->name }}</td>
                                <td>
                                    <?php
                                        $namedata=\App\ModelsTagnew::find($data->tagnews_id );
                                        echo $namedata->name;
                                    ?>
                                </td>
                                <td>Просмотр / Удаление</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection