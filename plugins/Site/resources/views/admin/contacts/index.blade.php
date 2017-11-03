@extends('layouts.admin')

@section('title', 'Contato')

@section('main')
    @include('admin.alert')

    <div class="page-header">
        <h2>Contato</h2>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading clearfix">
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

                <form action="{{ url('admin/contatos') }}" class="search pull-right">
                    <input type="search" name="q" {!! !empty($query) ? 'value="' . $query . '"' : '' !!} placeholder="Pesquisar" title="" class="form-control">
                    <button type="submit" aria-label="Pesquisar nos registros">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </button>
                </form>
            </div>
        </div>

        <table class="table table-striped">
            <tr>
                <th class="hidden-xs hidden-sm hidden-md">E-mail</th>
                <th>Unidade</th>
                <th>Departamento/Assunto</th>
                <th class="hidden-xs hidden-sm hidden-md">Data</th>
                <th class="actions"></th>
            </tr>

        @foreach ($contacts as $contact)
            <tr @if ($contact->read === false) {!! 'style="font-weight: bold"' !!} @endif>
                <td class="hidden-xs hidden-sm hidden-md">{{ $contact->email }}</td>

                @if (count($contact->unit) > 0)
                <td>{{ $contact->unit->name }}</td>
                @else
                <td>Internacional</td>
                @endif

                @if (count($contact->department) > 0)
                <td>{{ $contact->department->name }}</td>
                @elseif (count($contact->subject) > 0)
                <td>{{ $contact->subject->name }}</td>
                @else
                <td></td>
                @endif

                <td class="hidden-xs hidden-sm hidden-md">{{ $contact->created_at->format('d/m/Y \\à\\s H:i') }}</td>
                <td class="actions clearfix">
                    <div class="pull-left">
                        <a href="{{ url('admin/contatos/' . $contact->id) }}" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Ver</a>
                    </div>
                    <div class="pull-left">
                        {!! Form::open(['url' => 'admin/contatos/' . $contact->id, 'method' => 'delete', 'onsubmit' => 'return confirm("Tem certeza que deseja remover?");']) !!}
                            <button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Remover</button>
                        {!! Form::close() !!}
                    </div>
                </td>
            </tr>
        @endforeach
        </table>

        <div class="panel-footer">
            <nav class="text-center">
                {!! str_replace('/?', '?', $contacts->render()) !!}
            </nav>
        </div>
    </div>
@stop
