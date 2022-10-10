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
                                    <span> Detalhes e Download da <strong>Lei 11.111/2021</strong></span>
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
                                                        <form action="#" class="dropzone dropzone-area" id="dpz-btn-select-files">
                                                            <p style="font-size: 15px" class="dz-message">Arraste ou clique para anexar os arquivos</p>
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
                                    <p class="card-title">Lei 11.111/2021</p>
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
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;" for="">Categoria</label>
                                                    <select class="select2 form-control">
                                                        <option value="">Selecione</option>
                                                        <option value="">Lei Ordinária</option>
                                                        <option value="">Lei Orgânica</option>
                                                        <option value="">Lei de Diretrizes Orçamentárias</option>
                                                        <option value="">Lei Orçamentária Anual</option>
                                                        <option value="">Plano Plurianual</option>
                                                        <option value="">Código Tributário</option>
                                                        <option value="">Código de Postura</option>
                                                        <option value="">Estatuto do Servidor</option>
                                                        <option value="">Regimento Interno</option>
                                                        <option value="">Plano Diretor</option>
                                                        <option value="">LAI</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;" for="">Data de Publicação</label>
                                                    <div>
                                                        <input type="date"  class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="demo-inline-spacing">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                                        <label class="custom-control-label" for="customCheck1">Referente à Covid-19</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-12">
                                                <label style="font-size: 13px;">Ementa</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea><br>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="card-footer">
                                    <button type="button" class="btn btn-primary"><i data-feather='download'></i> Baixar todos os anexos</button>
                                    <button type="button" class="btn btn-primary"><i data-feather='trash-2'></i> Excluir todos os anexos</button>
                                    <a style="margin-left: 352px" href="<?= base_url() ?>index.php/resp_fiscal/planejamento" type="button" class="btn btn-primary waves-effect waves-float waves-light"><i data-feather='arrow-left'></i> Voltar</a>
                                    <div style="float: right;" class="btn-group">
                                        <button type="button" class="btn btn-primary waves-effect waves-float waves-light"><i data-feather='save'></i> Salvar</button>                               
                                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split waves-effect waves-float waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0);">Adicionar novo</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Imprimir comprovante</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Visualizar</a>
                                            <a class="dropdown-item" href="<?= base_url() ?>index.php/resp_fiscal/planejamento">Voltar</a>
                                        </div>
                                    </div>
                                </div>                                 
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