<!-- Stored in resources/views/child.blade.php -->
@extends('back.body')

@section('content')

    <div class="row">
        <h1>
            Список групп страниц
        </h1>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="box box-solid box-default">
                <a class="btn btn-success"
                   href="{{ url('admin/tagpage/create') }}" role="button">+ Добавить</a>
                <table class="table table-hover table-dark">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Название</th>
                        <th scope="col">ЧПУ</th>
                        <th scope="col">Действие</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($dataTagpages as $dataTagpage)
                        <tr>
                            <th scope="row">{{ $dataTagpage->id }}</th>
                            <td>
                                <a href="{{ url('admin/tagpage/'.$dataTagpage->id.'/edit') }}">
                                    {{ $dataTagpage->name }}
                                </a>
                            </td>
                            <td>{{ $dataTagpage->slug }}</td>
                            <td>
                                <a href="#"
                                   onclick="event.preventDefault(); document.getElementById('delete{{$dataTagpage->id}}').submit();"
                                >
                                    Удалить
                                </a>

                                <form id="delete{{$dataTagpage->id}}" action="{{ url('admin/tagpage/'.$dataTagpage->id) }}"
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