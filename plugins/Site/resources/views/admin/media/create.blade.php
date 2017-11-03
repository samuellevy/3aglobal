@extends('layouts.admin')

@section('title', 'Mídia')

@section('main')
    <script id="breakpoint-template" type="text/x-handlebars-template">
        <div class="row removable repeater-item">
            <div class="form-group col-md-9 col-sm-9">
                <label class="control-label">Imagem</label> <small>(.gif, .jpg, .png, ou .svg, máx.: 2 MB)</small>
                <div class="file-block">
                    <input type="file" name="breakpoints[@{{i}}]" accept="image/gif,image/jpeg,image/png,image/svg+xml">
                    <img alt="Selecionar arquivo&hellip;" class="preview">
                </div>
            </div>
            <div class="form-group col-md-3 col-sm-3">
                <div class="form-group">
                    <label for="min_widths[@{{i}}]" class="control-label">Largura mín. (px)</label> <small>ideais: 320px e 768px</small>
                    <div>
                        <input type="number" name="min_widths[@{{i}}]" min="1" max="3840" required class="form-control" id="min_widths[@{{i}}]">
                    </div>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-danger remove">
                        <span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span> Remover
                    </button>
                </div>
            </div>
        </div>
    </script>

    {!! Form::open([
            'url' => 'admin/midia', 'method' => 'POST', 'files' => true, 'class' => 'form',
            'data-parsley-validate', 'data-parsley-errors-messages-disabled',
            'data-parsley-trigger-after-failure' => 'change'
    ]) !!}
        @include('admin.alert')

        <fieldset>
            <legend>Mídia</legend>

            <div class="form-group">
                {!! Form::label('media', 'Imagem', ['class' => 'control-label']) !!} <small>(.gif, .jpg, .png, ou .svg, máx.: 2 MB)</small>
                <div class="file-block">
                    {!! Form::file('media', ['accept' => 'image/gif,image/jpeg,image/png,image/svg+xml']) !!}
                    <img @if (!empty($media)) src="{{ $media->url() }}" @endif alt="Selecionar arquivo&hellip;" class="preview">
                </div>
            </div>
            <div class="form-group" id="breakpoints">
                <h4>Breakpoints</h4>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-success use-form-template" data-template="#breakpoint-template" data-container="#breakpoints" data-index="0">
                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Adicionar
                </button>
            </div>

            <div class="form-group">
                {!! Form::label('alternative_text', 'Texto alternativo', ['class' => 'control-label']) !!} <small>(máx.: 255 caracteres)</small>
                <div>
                    {!! Form::text('alternative_text', Input::old('alternative_text'), ['maxlength' => '255', 'class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Descrição', ['class' => 'control-label']) !!} <small>(máx.: 160 caracteres)</small>
                <div>
                    {!! Form::text('description', Input::old('description'), ['maxlength' => '160', 'class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <div>
                    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
        </fieldset>
    {!! Form::close() !!}
@stop
