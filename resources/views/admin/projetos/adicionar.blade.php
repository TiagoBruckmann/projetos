@extends('layout.site')

@section('titulo', 'Adicionar Projeto')

@section('conteudo')
    <div class="container">
        <h3 class="center">Adicionando projeto</h3>
        <div>
            <form action="{{ route('admin.projetos.salvar') }}" method="psot" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('admin.projetos._form')

                <button class="btn green">Salvar</button>
            </form>
        </div>
    </div>

@endsection