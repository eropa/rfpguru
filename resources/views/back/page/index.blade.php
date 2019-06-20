<!-- Stored in resources/views/child.blade.php -->
@extends('back.body')

@section('content')

    <div class="row">
        <h1>
            Список страниц
        </h1>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="box box-solid box-default">
                <a class="btn btn-success"
                   href="{{ url('admin/page/create') }}" role="button">+ Добавить</a>
                <table class="table table-hover table-dark">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Название</th>
                        <th scope="col">Категория</th>
                        <th scope="col">Действие</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datas as $data)
                        <tr>
                            <td>{{ $data->id }}</td>



                            <td><a href="{{ url('admin/page/'.$data->id.'/edit') }}">
                                    {{ $data->name }}
                                </a>
                            </td>
                            <td>
                                <?php
                                $namedata=\App\ModelsTagpage::find($data->tagpage );
                                echo $namedata->name;
                                ?>
                            </td>
                            <td>
                                <a href="#"
                                   onclick="event.preventDefault(); document.getElementById('delete{{$data->id}}').submit();"
                                >
                                    Удалить
                                </a>

                                <form id="delete{{$data->id}}" action="{{ url('admin/page/'.$data->id) }}"
                                      method="POST"
                                      style="display: none;">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete" />
                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection