@extends('layouts.admin')

@section('title', 'Post')

@section('main')
    {!! Form::model($post, [
            'url' => 'admin/posts/' . $post['id'], 'method' => 'PUT', 'class' => 'form',
            'data-parsley-validate', 'data-parsley-errors-messages-disabled',
            'data-parsley-trigger-after-failure' => 'change'
    ]) !!}
        @include('admin.alert')

        <fieldset>
            <legend>Post</legend>

            <div class="row">
                <div class="form-group col-md-3 col-sm-3">
                    <div class="checkbox">
                        {!! Form::hidden('active', false) !!}
                        <label>
                            {!! Form::checkbox('active') !!} Ativo
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-9 col-sm-9">
                    {!! Form::label('published_in_date', 'Publicado em', ['class' => 'control-label']) !!}
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            {!! Form::input('date', 'published_in_date', Input::old('published_in_date'), ['maxlength' => '10', 'placeholder' =>  'ex.: ' . date('Y-m-d'), 'class' => 'form-control']) !!}
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            {!! Form::input('time', 'published_in_time', Input::old('published_in_time'), ['maxlength' => '5', 'placeholder' =>  'ex.: ' . date('H:i'), 'class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('image_id', 'Imagem', ['class' => 'control-label']) !!} <small>(resolução ideal: 231x169, obrigatório)</small>
                <div class="file-block no-upload">
                    <input type="text" name="image_id" id="hidden-image_id" value="{{ $post->image_id }}" required style="display: none">
                    <img @if (count($post->image)) src="{{ $post->image->url() }}" @endif alt="Selecionar imagem&hellip;" class="preview open-modal" id="image_id" data-href="{{ url('admin/midia/selecionar') }}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    {!! Form::label('title', 'Título', ['class' => 'control-label']) !!} <small>(máx.: 64 caracteres, obrigatório)</small>
                    <div>
                        {!! Form::text('title', Input::old('title'), ['maxlength' => '64', 'required', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group col-md-6">
                    {!! Form::label('slug', 'Slug', ['class' => 'control-label']) !!} <small>(máx.: 64 caracteres, único)</small>
                    <div>
                        {!! Form::text('slug', Input::old('slug'), ['maxlength' => '64', 'class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    {!! Form::label('category_id', 'Categoria', ['class' => 'control-label']) !!} <small>(obrigatório)</small>
                    <div>
                        {!! Form::select('category_id', $categories, Input::old('category_id'), ['data-size' => '5', 'data-live-search' => 'true', 'required', 'class' => 'form-control selectpicker']) !!}
                    </div>
                </div>
                <div class="form-group col-md-8">
                    {!! Form::label('description', 'Descrição', ['class' => 'control-label']) !!} <small>(máx.: 160 caracteres, obrigatório)</small>
                    <div>
                        {!! Form::text('description', Input::old('description'), ['maxlength' => '160', 'required', 'class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('content', 'Conteúdo', ['class' => 'control-label']) !!} <small>(obrigatório)</small>
                <div>
                    {!! Form::textarea('content', Input::old('content'), ['required', 'class' => 'form-control ckeditor']) !!}
                </div>
            </div>

            <div class="form-group">
                <div>
                    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
                    <small class="updated_at">Última alteração em: {{ $post->updated_at->format('d/m/Y \\à\\s H:i') }} por <a href="{{ url('admin/usuarios/' . $post->updateAuthor->id . '/editar') }}">{{ !empty($post->updateAuthor->name) ? $post->updateAuthor->name : $post->updateAuthor->username }}</a>.</small>
                </div>
            </div>
        </fieldset>
    {!! Form::close() !!}

    <script src="{{ url('assets/vendor/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('content', {
            filebrowserImageBrowseUrl: '{{ url('admin/midia/selecionar/ckeditor') }}',
            filebrowserWindowWidth: '1280',
            filebrowserWindowHeight: '720'
        });
    </script>
@stop
