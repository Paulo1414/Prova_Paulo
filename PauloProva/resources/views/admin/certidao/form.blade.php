<div class="form-group">
    <label for="titulo">Tipo de Certidao</label>
    <input type="text" class="form-control" id="TipoCertidao" name="tipoCertidao"
           value="{{$certidao->tipoCertidao ?? ''}}">
</div>
<div class="form-group">
    <label for="descricao">Nome dos envolvidos</label>
    <input type="text" class="form-control" id="nomeEnvolvidos" name="nomeEnvolvidos"
           value="{{$certidao->nomeEnvolvidos ?? ''}}">
</div>
<div class="form-group">
    <label for="valor">Data do Certidao</label>
    <input type="text" class="form-control" id="dataCertidao" name="dataCertidao"
           value="{{$certidao->dataCertidao ?? ''}}">
</div>
           <div class="form-group">
            <label for="valor">Nome do Tabeliao</label>
            <input type="text" class="form-control" id="nomeTabeliao" name="nomeTabeliao"
                   value="{{$certidao->nomedoTabeliao ?? ''}}">

           </div>

      

          