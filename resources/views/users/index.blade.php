@extends('layouts.app')
@section('content')
<h1>Lista de Usuários</h1>
<section id="inicio">
    <div>
        <button>
            <a href="{{ route('users.create') }}">Cadastrar</a>
        </button>
    </div>
    <br /><br />
    <table>
        <thead>
            <tr>
                <th width="20%">Name </th>
                <th width="20%"> E-mail </th>
                <th width="20%" colspan="2">Ação</th>
            </tr>
        </thead>
        @foreach ($users as $user)
        <tbody>
            <tr>
                <td width="20%">{{ $user->name }}</td>
                <td width="20%">{{ $user->email }}</td>
                <!-- action -->
                <td width="20%">
                    <div class="buttonTable">
                        <button><a href="{{ route('users.edit', $user->id) }}">Editar</a></button>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </div>
                </td>
            </tr>

        </tbody>
        @endforeach
    </table>

</section>
@endsection
