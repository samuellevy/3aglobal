@extends('layouts.admin')

@section('title', 'Mídia')

@section('main')
    @include('admin.alert')

    <div class="page-header">
        <h2>Mídia</h2>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <div class="pull-left">
                <a href="{{ url('admin/midia/criar') }}" class="btn btn-default"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Criar</a>
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

                <form action="{{ url('admin/midia') }}" class="search pull-right">
                    <input type="search" name="q" {!! !empty($query) ? 'value="' . $query . '"' : '' !!} placeholder="Pesquisar" title="" class="form-control">
                    <button type="submit" aria-label="Pesquisar nos registros">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </button>
                </form>
            </div>
        </div>

        <div class="gallery clearfix">
        @foreach ($media as $medium)
            <div class="gallery-media form-group col-md-3 col-sm-4">
                <a href="{{ url('admin/midia/' . $medium->id . '/editar') }}">
                    <figure class="preview">
                        <img src="{{ $medium->url('320x320') }}" alt="{{ $medium->alternative_text }}" title="{{ $medium->description }}">
                    </figure>
                </a>
            </div>
        @endforeach
        </div>

        <div class="panel-footer">
            <nav class="text-center">
                {!! str_replace('/?', '?', $media->render()) !!}
            </nav>
        </div>
    </div>
@stop
