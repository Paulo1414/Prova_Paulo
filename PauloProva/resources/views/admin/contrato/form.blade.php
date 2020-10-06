<div class="form-group">
    <label for="titulo">Tipo do Contrato</label>
    <input type="text" class="form-control" id="TipoContrato" name="tipoContrato"
           value="{{$contrato->tipoContrato ?? ''}}">
</div>
<div class="form-group">
    <label for="descricao">Nome dos envolvidos</label>
    <input type="text" class="form-control" id="nomeEnvolvidos" name="nomeEnvolvidos"
           value="{{$contrato->nomeEnvolvidos ?? ''}}">
</div>
<div class="form-group">
    <label for="valor">Data do Contrato</label>
    <input type="text" class="form-control" id="dataContrato" name="dataContrato"
           value="{{$contrato->dataContrato ?? ''}}">
</div>
           <div class="form-group">
            <label for="valor">Valor</label>
            <input type="text" class="form-control" id="valor" name="valor"
                   value="{{$contrato->valor ?? ''}}">

           </div>

      

          