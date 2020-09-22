<div class="input-field">
    <input type="text" name="projetos" value="{{ isset($registro->projetos) ? $registro->projetos : ''}}">
    <label>Projeto</label>
</div>

<div class="input-field">
    <input type="text" name="id_cliente" value="{{ isset($registro->id_cliente) ? $registro->id_cliente : ''}}">
    <label>Cliente</label>
</div>

<div class="input-field">
    <input type="text" name="vl_acordado" value="{{ isset($registro->vl_acordado) ? $registro->vl_acordado : ''}}">
    <label>Valor Acordado</label>
</div>

<div class="input-field">
    <input type="text" name="vl_recebido" value="{{ isset($registro->vl_recebido) ? $registro->vl_recebido : ''}}">
    <label>Valor recebido</label>
</div>

<div class="input-field">
    <input type="text" name="dt_pagamento" value="{{ isset($registro->dt_pagamento) ? $registro->dt_pagamento : ''}}">
    <label>Data de pagamento</label>
</div>

<div class="file-field input-field">
    <div class="btn blue">
        <span>Imagem</span>
        <input type="file" name="imagem">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>

@if(isset( $registro->imagem ))
    <div class="input-field">
        <img width="150" src="{{ asset($registro->imagem) }}">
    </div>
@endif

