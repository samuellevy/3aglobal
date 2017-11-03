@extends('layouts.admin')

@section('title', 'Usuários')

@section('main')
    @include('admin.alert')

    <div class="page-header">
        <h2>Usuários</h2>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <div class="pull-left">
                <a href="{{ url('admin/usuarios/criar') }}" class="btn btn-default"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Criar</a>
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

                <form action="{{ url('admin/usuarios') }}" class="search pull-right">
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
                <th class="symbol">Notificações</th>
                <th>Grupo</th>
                <th>Usuário</th>
                <th class="hidden-xs hidden-sm hidden-md">Nome</th>
                <th class="hidden-xs hidden-sm hidden-md">E-mail</th>
                <th class="actions"></th>
            </tr>

        @foreach ($users as $user)
            <tr>
                <td class="symbol">
                    @if ($user->active)
                        <span class="glyphicon glyphicon-ok-circle text-success" aria-hidden="true" aria-label="Ativo"></span>
                    @else
                        <span class="glyphicon glyphicon-ban-circle text-danger" aria-hidden="true" aria-label="Inativo"></span>
                    @endif
                </td>
                <td class="symbol">
                    @if ($user->receive_notifications)
                        <span class="glyphicon glyphicon-ok-circle text-success" aria-hidden="true" aria-label="Ativo"></span>
                    @else
                        <span class="glyphicon glyphicon-ban-circle text-danger" aria-hidden="true" aria-label="Inativo"></span>
                    @endif
                </td>
                <td>{{ $user->group->name }}</td>
                <td>{{ $user->username }}</td>
                <td class="hidden-xs hidden-sm hidden-md">{{ $user->name }}</td>
                <td class="hidden-xs hidden-sm hidden-md">{{ $user->email }}</td>
                <td class="actions clearfix">
                    <div class="pull-left">
                        <a href="{{ url('admin/usuarios/' . $user->id . '/editar') }}" class="btn btn-xs btn-warning"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar</a>
                    </div>
                    <div class="pull-left">
                        <?php $disabledIfSameUser = Auth::user()->id === $user['id'] ? 'disabled title="Desabilitado por ser o usuário atual"' : '' ?>
                        {!! Form::open(['url' => 'admin/usuarios/' . $user->id, 'method' => 'delete', 'onsubmit' => 'return confirm("Tem certeza que deseja remover?");']) !!}
                            <button type="submit" class="btn btn-xs btn-danger" {!! $disabledIfSameUser !!}><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Remover</button>
                        {!! Form::close() !!}
                    </div>
                </td>
            </tr>
        @endforeach
        </table>

        <div class="panel-footer">
            <nav class="text-center">
                {!! str_replace('/?', '?', $users->render()) !!}
            </nav>
        </div>
    </div>
@stop
