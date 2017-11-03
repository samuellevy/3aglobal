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

    {!! Form::model($media, [
            'url' => 'admin/midia/' . $media['id'], 'method' => 'PUT', 'files' => true, 'class' => 'form',
            'data-parsley-validate', 'data-parsley-errors-messages-disabled',
            'data-parsley-trigger-after-failure' => 'change'
    ]) !!}
        @include('admin.alert')

        <?php $disabledIfNotAuthor = !empty($media['author_id']) && (Auth::user()->id != $media['author_id'] && Auth::user()->group_id != 1) ? ['disabled' => true, 'title' => 'Desabilitado por ser de autoria de outro usuário'] : [] ?>

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
                <input type="hidden" name="delete_breakpoint_ids" id="delete_breakpoint_ids">
                @for ($i = 0; $i < count($breakpoints); $i++)
                <div class="row removable repeater-item">
                    <input type="hidden" name="breakpoint_ids[{{ $i }}]" value="{{ $breakpoints[$i]->id }}">
                    <div class="form-group col-md-9 col-sm-9">
                        <label class="control-label">Imagem</label> <small>(.gif, .jpg, .png, ou .svg, máx.: 2 MB)</small>
                        <div class="file-block">
                            <input type="file" name="breakpoints[{{ $i }}]" accept="image/gif,image/jpeg,image/png,image/svg+xml">
                            <img @if (!empty($breakpoints[$i])) src="{{ $breakpoints[$i]->url() }}" @endif alt="Selecionar arquivo&hellip;" class="preview">
                        </div>
                    </div>
                    <div class="form-group col-md-3 col-sm-3">
                        <div class="form-group">
                            <label for="min_widths[{{ $i }}]" class="control-label">Largura mín. (px)</label> <small>ideais: 320px e 768px</small>
                            <div>
                                <input type="number" name="min_widths[{{ $i }}]" value="{{ $breakpoints[$i]->min_width }}" min="1" max="3840" required class="form-control" id="min_widths[{{ $i }}]">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-danger remove" data-list="#delete_breakpoint_ids" data-id="{{ $breakpoints[$i]->id }}">
                                <span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span> Remover
                            </button>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-success use-form-template" data-template="#breakpoint-template" data-container="#breakpoints" data-index="{{ count($breakpoints) }}">
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
                    {!! Form::submit('Salvar', $disabledIfNotAuthor + ['class' => 'btn btn-primary']) !!}
                    <small class="updated_at">
                        Última alteração em: {{ $media->updated_at->format('d/m/Y \\à\\s H:i') }}
                        @if (count($media->updateAuthor) > 0)
                        por <a href="{{ url('admin/usuarios/' . $media->updateAuthor->id . '/editar') }}">{{ !empty($media->updateAuthor->name) ? $media->updateAuthor->name : $media->updateAuthor->username }}</a>.
                        @endif
                    </small>
                </div>
            </div>
        </fieldset>
    {!! Form::close() !!}
<?php /*
    {!! Form::open(['url' => 'admin/midia/' . $media->id, 'method' => 'delete', 'class' => 'form form-delete', 'onsubmit' => 'return confirm("Tem certeza que deseja remover?\nOs registros associados também serão removidos.");']) !!}
        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Remover</button>
    {!! Form::close() !!}
    */ ?>
@stop
