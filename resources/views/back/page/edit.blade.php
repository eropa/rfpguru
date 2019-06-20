<!-- Stored in resources/views/child.blade.php -->
@extends('back.body')

@section('content')

    <div class="row">
        <h1>
            Редактировать страницу страницы
        </h1>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="box box-solid box-default">
                <form  method="POST" action="{{ url('admin/page/'.$page->id) }}" >

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Название</label>
                        <input class="form-control form-control-lg"
                               type="text"
                               name="name"
                               value="{{ $page->name }}"
                               placeholder="Название">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">ЧПУ(если пустое, то автоматически генерируется)</label>
                        <input class="form-control form-control-lg"
                               type="text"
                               name="url"
                               value="{{ $page->slug }}"
                               placeholder="ЧПУ">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Категория</label>
                        <br><select class="js-example-basic-multiple"
                                    name="category"
                                    width="300"
                                    style="width: 300px">
                            <option value="0">Выберите значени</option>
                            @foreach($datasModels as $datasModel)
                                <option value="{{ $datasModel->id }}"
                                @if($datasModel->id==$page->tagpage)
                                        selected
                                        @endif
                                >{{ $datasModel->name }}</option>
                            @endforeach
                        </select>
                        <script>
                            $(document).ready(function() {
                                $('.js-example-basic-multiple').select2();
                            });
                        </script>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">текст</label>
                        <textarea name="editor1">
                              {!! $page->texthtml !!}
                        </textarea>
                        <script>
                            CKEDITOR.replace( 'editor1', options );
                        </script>
                    </div>


                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-primary">Обновить</button>
                </form>
            </div>
        </div>
    </div>

@endsection