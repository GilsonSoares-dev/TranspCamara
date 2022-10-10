<div class="card-footer">
    <button type="button" class="btn btn-primary"><i data-feather='download'></i> Baixar todos os anexos</button>
    <button type="button" class="btn btn-primary"><i data-feather='trash-2'></i> Excluir todos os anexos</button>
    <div style="float: right;" class="btn-group">
        <button type="button" class="btn btn-primary waves-effect waves-float waves-light"><i data-feather='save'></i> Salvar</button>
        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split waves-effect waves-float waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="javascript:void(0);">Adicionar novo</a>
            <a class="dropdown-item" href="javascript:void(0);">Imprimir comprovante</a>
            <a class="dropdown-item" href="javascript:void(0);">Visualizar</a>
            <a class="dropdown-item" href="javascript:void(0);">Voltar</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label style="font-size: 13px;" for="">Tipo de Relação</label>
            <select class="select2 form-control">
                <option value="">Selecione</option>
                <option value="">Altera</option>
                <option value="">Revoga</option>
                <option value="">Relaciona Assunto</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label style="font-size: 13px;" for="">Lei</label>
            <select class="select2 form-control">
                <option value="">Selecione</option>
                <option value="">Lei xxxx</option>
            </select>
        </div>
    </div>
</div>


<div style="float: right;" class="btn-group">
    <button type="button" class="btn btn-primary waves-effect waves-float waves-light"><i data-feather='save'></i> Salvar</button>
    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split waves-effect waves-float waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="javascript:void(0);">Adicionar novo</a>
        <a class="dropdown-item" href="javascript:void(0);">Imprimir comprovante</a>
        <a class="dropdown-item" href="javascript:void(0);">Visualizar</a>
        <a class="dropdown-item" href="javascript:void(0);">Sair</a>
    </div>
</div>

<div class="col-md-3">
    <div class="form-group">
        <label style="font-size: 13px;" for="">Situação</label>
        <select class="select2 form-control">
            <option value="">Selecione</option>
            <option value="">Em vigor</option>
            <option value="">Adivado</option>
            <option value="">Rescindido</option>
            <option value="">Encerrado</option>
        </select>
    </div>
</div>



value="<?= date("Y-m-d") ?>" 

<td><span class="btn btn-sm btn-outline-success">Em Andamento</span></td>                                                           
