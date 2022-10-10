<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">


<?php $this->load->view('includes/header'); ?>

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

    <?php $this->load->view("includes/nav_bar") ?>


    <?php $this->load->view("includes/aside") ?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Conteúdo -->
                <div class="card">
                    <div class="form-group">
                        <div><br>
                            <div class="alert" role="alert">
                                <div class="alert-body">
                                    <i style="height: 2rem !important;width: 2rem; color:darkorchid" data-feather='alert-triangle'></i>
                                    <span> Detalhes e Download de <strong>Contrato - 006/2021</strong></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section id="input-sizing">
                    <div class="row match-height">
                        <div class="col-md-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Anexos</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <!-- button file upload starts -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p class="card-text">Clique e adicione os anexos, ou apenas arraste e solte os arquivos aqui.</p>
                                                        <button id="clear-dropzone" class="btn btn-outline-primary mb-1">
                                                            <i data-feather='trash-2'></i> Excluir tudo
                                                        </button>
                                                        <button id="clear-dropzone" class="btn btn-outline-primary mb-1">
                                                            <i data-feather='download-cloud'></i><span class="align-middle">Baixar tudo</span></button>
                                                        <form action="#" class="dropzone dropzone-area" id="dpz-btn-select-files">
                                                            <div class="dz-message">Bota os trem aqui.</div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- button file upload ends -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <p class="card-title">Editar Contrato</p>
                                </div>
                                <div>
                                    <hr style="margin-top: -10px;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;" for="">Número</label>
                                                    <div>
                                                        <input type="text" class="form-control" autofocus />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;" for="">Órgão</label>
                                                    <select name="orgao" class="select2 form-control">
                                                        <option value="">Selecione</option>
                                                        <option value="">Fundo Municipal de Assistência Social de Uruana</option>
                                                        <option value="">Fundo Municipal de Saúde de Uruana</option>
                                                    </select>
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
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <label style="font-size: 13px;">Data da Publicação</label>
                                                <input type="date" name="" value="<?=date("Y-m-d")?>" class="form-control">
                                            </div>
                                            <div class="col-3">
                                                <label style="font-size: 13px;">Data da Firmatura</label>
                                                <input type="date" name="" class="form-control">
                                            </div>
                                            <div class="col-3">
                                                <label style="font-size: 13px;">Início da vigência</label>
                                                <input type="date" name="" class="form-control">
                                            </div>
                                            <div class="col-3">
                                                <label style="font-size: 13px;">Final da vigência</label>
                                                <input type="date" name="" class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <label style="font-size: 13px;">Valor total</label>
                                                <input type="text" name="valor_total" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <div class="demo-inline-spacing">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                                        <label class="custom-control-label" for="customCheck1">Covid-19</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck2" />
                                                        <label class="custom-control-label" for="customCheck2">Lei 14.065/2020</label>
                                                        <a href="#" data-toggle="popover" data-placement="top" data-container="body" data-original-title="Atenção!" data-content="Marque essa opção se o procedimento de contratação se deu com base no artigo 1°, I ou II da Lei 14.065/2020 'Alargamento no limite de dispensa a licitação ou pagamento antecipado nas licitações e nos contratos.' "> <i data-feather='help-circle'></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12"><br>
                                                <label style="font-size: 13px;">Descrição / Objeto</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea><br>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div>
                                                    <label style="font-size: 13px;">Fiscal do contrato</label>
                                                    <input type="name" name="" class="form-control"><br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <label style="font-size: 13px;">CPF/CNPJ do contratado</label>
                                                <input type="name" name="" class="form-control">
                                            </div>
                                            <div class="col-8">
                                                <label style="font-size: 13px;">Nome do contrado</label>
                                                <input type="name" name="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12 text-right">
                                        <button type="button" class="btn btn-success"><i data-feather='upload-cloud'></i> Salvar</button>
                                        <button type="button" class="btn btn-danger"><i data-feather='trash-2'></i> Excluir</button>
                                    </div><br>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </section>
    </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php $this->load->view("includes/footer") ?>




</body>
<!-- END: Body-->

</html>