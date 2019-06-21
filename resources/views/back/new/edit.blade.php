<!-- Stored in resources/views/child.blade.php -->
@extends('back.body')

@section('content')

    <div class="row">
        <h1>
            Редактирование новости
        </h1>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="box box-solid box-default">
                <form  method="POST" action="{{ url('admin/new/'.$new->id) }}" >

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Название</label>
                        <input class="form-control form-control-lg"
                               type="text"
                               name="name"
                               value="{{ $new->name }}"
                               placeholder="Название">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">ЧПУ(если пустое, то автоматически генерируется)</label>
                        <input class="form-control form-control-lg"
                               type="text"
                               name="url"
                               value="{{ $new->urls }}"
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
                                <option value="{{ $dataTagnew->id }}"
                                @if( $dataTagnew->id==$new->tagnews_id)
                                    selected
                                @endif
                                >{{ $dataTagnew->name }}</option>
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
                               <?php
                               $date=$new->datapublic;
                               $date_for_database = date ("Y-m-d", strtotime($date));
                               $date_for_time = date ("H:i", strtotime($date));
                               $date_for_database=$date_for_database.'T'.$date_for_time ;
                               ?>
                               value="{{ $date_for_database }}"
                               placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Короткий текст</label>
                        <textarea name="editor1">


                            {!! $new->textsmall !!}
                        </textarea>
                        <script>
                            CKEDITOR.replace( 'editor1' , options);
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Остольной текст</label>
                        <textarea name="editor2">
                            {!! $new->textfull !!}
                        </textarea>
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
                            <input id="thumbnail"
                                   class="form-control"
                                   type="text" name="filepath"
                                    value="{{ $new->fotonew }}">
                        </div>
                        <img id="holder"
                             src="{{
                             @asset($new->fotonew)
                              }}"
                             style="margin-top:15px;max-height:100px;">
                    </div>

                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-primary">Обновить</button>
                </form>
            </div>
        </div>
    </div>

@endsection