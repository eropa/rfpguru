<!-- Stored in resources/views/child.blade.php -->
@extends('back.body')

@section('content')

    <div class="row">
        <h1>
            Создание новости
        </h1>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="box box-solid box-default">
                <form  method="POST" action="{{ url('admin/new') }}" >

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Название</label>
                        <input class="form-control form-control-lg"
                               type="text"
                               name="name"
                               placeholder="Название">
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlInput1">ЧПУ(если пустое, то автоматически генерируется)</label>
                    <input class="form-control form-control-lg"
                           type="text"
                           name="url"
                           placeholder="ЧПУ">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Категория</label>
                        <br><select class="js-example-basic-multiple"
                                    name="category"
                                    width="300"
                                    style="width: 300px">
                                <option value="0">Выберите значени</option>
                                @foreach($dataTagnews as $dataTagnew)
                                    <option value="{{ $dataTagnew->id }}">{{ $dataTagnew->name }}</option>
                                @endforeach
                        </select>
                        <script>
                            $(document).ready(function() {
                                $('.js-example-basic-multiple').select2();
                            });
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Дата публикации</label>
                        <input class="form-control form-control-lg"
                               type="datetime-local"
                               name="datepublic"
                               placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Короткий текст</label>
                        <textarea name="editor1"></textarea>
                        <script>
                            CKEDITOR.replace( 'editor1', options );
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Остольной текст</label>
                        <textarea name="editor2"></textarea>
                        <script>
                            CKEDITOR.replace( 'editor2', options );
                        </script>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                           <span class="input-group-btn">
                             <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                               <i class="fa fa-picture-o"></i> Картинка новости
                             </a>
                           </span>
                            <input id="thumbnail" class="form-control"
                                   type="text" name="filepath">
                        </div>
                        <img id="holder" style="margin-top:15px;max-height:100px;">
                    </div>

                    @csrf
                    <button type="submit" class="btn btn-primary">Создать</button>
                </form>
            </div>
        </div>
    </div>

@endsection