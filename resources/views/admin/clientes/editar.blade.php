@extends('layout.site')

@section('titulo', 'Editar cliente')

@section('conteudo')
    <div class="container">
        <h3 class="center">editando o cliente</h3>
        <div class="row">
            <form class="" action="{{ route('admin.clientes.atualizar',$registro->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <input type="hidden" name="_method" value="put">
                @include('admin.clientes._form')

                <button class="btn green">Atualizar</button>
            
            </form>
        </div>
    </div>
@endsection