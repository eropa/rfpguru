<!-- Stored in resources/views/child.blade.php -->
@extends('back.body')

@section('content')

    <div class="row">
        <h1>
            Список групп новостей
        </h1>
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="box box-solid box-default">
            <a class="btn btn-success"
               href="{{ url('admin/tagnew/create') }}" role="button">+ Добавить</a>
            <table class="table table-hover table-dark">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Название</th>
                    <th scope="col">Действие</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dataTagnews as $dataTagnew)
                    <tr>
                        <th scope="row">{{ $dataTagnew->id }}</th>
                        <td>
                            <a href="{{ url('admin/tagnew/'.$dataTagnew->id.'/edit') }}">
                                {{ $dataTagnew->name }}
                            </a>
                        </td>
                        <td>
                                <a href="#"
                                   onclick="event.preventDefault(); document.getElementById('delete{{$dataTagnew->id}}').submit();"
                                >
                                    Удалить
                                </a>

                                <form id="delete{{$dataTagnew->id}}" action="{{ url('admin/tagnew/'.$dataTagnew->id) }}"
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