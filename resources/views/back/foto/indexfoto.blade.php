<!-- Stored in resources/views/child.blade.php -->
@extends('back.body')

@section('content')

    <div class="row">
        <h1>
            Список фотографий фотоальбомов - <b>{{ $albom->name }}</b>
        </h1>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="box box-solid box-default">
                <a class="btn btn-success"
                   href="{{ url('admin/foto/create/'.$albom->id) }}" role="button">+ Добавить</a>
                <table class="table table-hover table-dark">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Название</th>
                        <th scope="col">Фото</th>
                        <th scope="col">Действие</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($fotos as $foto)
                    <tr>
                        <td>
                            {{ $foto->id }}
                        </td>
                        <td>
                            {{ $foto->name }}
                        </td>
                        <td>
                            <img id="holder"
                                 src="{{
                             @asset($foto->fotourl)
                              }}"
                                 style="margin-top:15px;max-height:100px;">
                        </td>
                        <td>
                            <a href="#"
                               class="btn btn-danger"
                               role="button"
                               onclick="event.preventDefault(); document.getElementById('delete{{$foto->id}}').submit();"
                            >
                                Удалить
                            </a>

                            <form id="delete{{$foto->id}}" action="{{ url('admin/foto/'.$foto->id) }}"
                                  method="POST"
                                  style="display: none;">
                                @csrf
                                <input type="hidden" name="foto_albomid" value="{{ $albom->id }}" />
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