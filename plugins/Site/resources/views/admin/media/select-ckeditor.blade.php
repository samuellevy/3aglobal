@extends('layouts.admin_popup')

@section('title', 'Selecionar imagem')

@section('main')
<div class="media-modal">
    <script id="media-template" type="text/x-handlebars-template">
        @{{#each results}}
        <div class="ckeditor-media form-group col-md-3 col-sm-4">
            <a href="@{{../base}}/admin/midia/@{{id}}/editar" data-id="@{{id}}" data-img="@{{../base}}/content/@{{file_name}}" title="@{{description}}">
                <figure class="preview">
                    <img src="@{{../base}}/content/320x320/@{{file_name}}" alt="@{{alternative_text}}">
                </figure>
            </a>
        </div>
        @{{/each}}
    </script>

    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <div class="pull-left">
                <a href="{{ url('admin/midia/criar') }}" target="_blank" class="btn btn-default"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Criar</a>
                <button type="button" class="btn btn-default refresh" data-form="#media-search">
                    <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Atualizar
                </button>
            </div>
            <div class="pull-right">
                <div class="pull-left">
                    <small class="results">
                    @if ($totalCount === 0)
                        Nenhum resultado
                    @elseif ($totalCount === 1)
                        1 resultado
                    @elseif ($currentCount === $totalCount)
                        {{ $totalCount }} resultados
                    @else
                        Exibindo {{ $currentCount }} de {{ $totalCount }} resultados
                    @endif
                    </small>
                </div>

                <form action="{{ url('admin/midia') }}" data-action="{{ url('admin/midia') }}" class="ajax search pull-right" id="media-search" data-template="#media-template" data-container="#gallery-results" data-scope=".media-modal" data-search="">
                    <input type="search" name="q" {!! !empty($query) ? 'value="' . $query . '"' : '' !!} placeholder="Pesquisar" title="" class="form-control">
                    <button type="submit" aria-label="Pesquisar nos registros">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </button>
                </form>
            </div>
        </div>

        <div class="gallery clearfix" id="gallery-results" data-name="{{ $fieldName }}" data-resize-url="{{ url('admin/midia/recortar') }}" data-sizes="{{ $sizes }}">
            <div class="loading" style="display: none">Carregando&hellip;</div>
            <div class="results">
            @foreach ($media as $medium)
                <div class="ckeditor-media form-group col-md-3 col-sm-4">
                    <a href="{{ url('admin/midia/' . $medium->id . '/editar') }}" data-id="{{ $medium->id }}" data-img="{{ $medium->url() }}" title="{{ $medium->description }}">
                        <figure class="preview">
                            <img src="{{ $medium->url('320x320') }}" alt="{{ $medium->alternative_text }}">
                        </figure>
                    </a>
                </div>
            @endforeach
            </div>
        </div>

        <div class="panel-footer">
            <nav class="text-center">
                {!! str_replace('/?', '?', $media->render()) !!}
            </nav>
        </div>
    </div>
</div>
@stop
