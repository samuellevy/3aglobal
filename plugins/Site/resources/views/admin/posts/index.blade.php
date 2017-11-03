@extends('layouts.admin')

@section('title', 'Blog')

@section('main')
    @include('admin.alert')

    <div class="page-header">
        <h2>Blog</h2>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <div class="pull-left">
                <a href="{{ url('admin/posts/criar') }}" class="btn btn-default"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Criar</a>
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

                <form action="{{ url('admin/posts') }}" class="search pull-right">
                    <input type="search" name="q" {!! !empty($query) ? 'value="' . $query . '"' : '' !!} placeholder="Pesquisar" title="" class="form-control">
                    <button type="submit" aria-label="Pesquisar nos registros">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </button>
                </form>
            </div>
        </div>

        <table class="table table-striped">
            <tr>
                <th class="symbol">Ativo</th>
                <th>Título</th>
                <th class="hidden-xs hidden-sm hidden-md">Descrição</th>
                <th class="hidden-xs hidden-sm">Publicado em</th>
                <th>Data</th>
                <th class="actions"></th>
            </tr>

        @foreach ($posts as $post)
            <tr>
                <td class="symbol">
                    @if ($post->active)
                        <span class="glyphicon glyphicon-ok-circle text-success" aria-hidden="true" aria-label="Ativo"></span>
                    @else
                        <span class="glyphicon glyphicon-ban-circle text-danger" aria-hidden="true" aria-label="Inativo"></span>
                    @endif
                </td>
                <td>{{ $post->title }}</td>
                <td class="hidden-xs hidden-sm hidden-md">{{ $post->description }}</td>
                <td class="hidden-xs hidden-sm">{{ $post->published_in->format('d/m/Y \\à\\s H:i') }}</td>
                <td>{{ $post->created_at->format('d/m/Y \\à\\s H:i') }}</td>
                <td class="actions clearfix">
                    <div class="pull-left">
                        <a href="{{ url('admin/posts/' . $post->id . '/editar') }}" class="btn btn-xs btn-warning"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar</a>
                    </div>
                    <div class="pull-left">
                        {!! Form::open(['url' => 'admin/posts/' . $post->id, 'method' => 'delete', 'onsubmit' => 'return confirm("Tem certeza que deseja remover?\nAs fotos associadas também serão removidas.");']) !!}
                            <button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Remover</button>
                        {!! Form::close() !!}
                    </div>
                </td>
            </tr>
        @endforeach
        </table>

        <div class="panel-footer">
            <nav class="text-center">
                {!! str_replace('/?', '?', $posts->render()) !!}
            </nav>
        </div>
    </div>
@stop
