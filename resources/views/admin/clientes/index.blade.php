@extends('layout.site')

@section('titulo', 'Clientes')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de clientes</h3>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Telefone</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registros as $registro)
                        <tr>
                            <td>{{ $registro->cliente }}</td>
                            <td>{{ $registro->fone }}</td>
                            <td><img width="80px" src="{{ $registro->clientes }}"></td>
                            <td>
                                <a class="btn deep-black" onclick="editar()" href="{{ route('admin.clientes.editar', $registro->id) }}">Editar</a>
                                <a class="btn deep-black" onclick="deletar()" href="{{ route('admin.clientes.deletar', $registro->id) }}">Deletar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn blue" href="{{ route('admin.clientes.adicionar') }}">Adicionar</a>
        </div>
    </div>
    <script>
        function editar(){
            alert('Deseja mesmo editar esse cliente?')
        }

        function deletar(){
            alert('Deseja mesmo deletar esse cliente?')
        }
    </script>

@endsection