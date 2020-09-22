@extends('layout.site')

@section('titulo', 'Projetos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de projetos</h3>
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Projeto</th>
                        <th>Cliente</th>
                        <th>Valor acordado</th>
                        <th>valor recebido</th>
                        <th>data de pagamento</th>
                        <th>Imagem</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($registros as $registro)
                        <tr>
                            <td>{{ $registro->projeto }}</td>
                            <td>{{ $registro->cliente }}</td>
                            <td>{{ $registro->vl_acordado }}</td>
                            <td>{{ $registro->vl_recebido }}</td>
                            <td>{{ $registro->dt_pagamento }}</td>
                            <td><img width="80px" src="{{ asset ($registro->imagem) }}" alt="{{ $registro->cliente }}"></td>
                            <td>
                                <a class="btn green" onclick="editar()" href="{{ route('admin.projetos.editar', $registro->id) }}">Editar</a>
                                <a class="btn red" onclick="deletar()" href="{{ route('admin.projetos.deletar', $registro->id) }}">Deletar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn blue" href="{{ route('admin.projetos.adicionar') }}">Adicionar</a>
        </div>
    </div>
    <script>
        function editar(){
            alerta('Deseja mesmo editar esse projeto?')
        }

        function deletar(){
            alert('Deseja mesmo deletar esse projeto?')
        }
    </script>

@endsection