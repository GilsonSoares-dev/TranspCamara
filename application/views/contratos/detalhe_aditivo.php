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
                                    <span> Detalhes do <strong>1° Termo Aditivo de Contrato</strong></span>
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
                                    <p class="card-title">1° Termo Aditivo</p>
                                </div>
                                <div>
                                    <hr style="margin-top: -10px;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;" for="">Órgão</label>
                                                    <select name="orgao" class="select2 form-control">
                                                        <option value="">Selecione</option>
                                                        <option value="">Câmara Municipal de Uruana</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;" for="">Situação</label>
                                                    <select name="orgao" class="select2 form-control">
                                                        <option value="">Selecione</option>
                                                        <option value="">Em Andamento</option>
                                                        <option value="">Encerrado</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;" for="">Contrato Original</label>
                                                    <select name="orgao" class="select2 form-control">
                                                        <option value="">Selecione</option>
                                                        <option value="">Contrato 001/2021</option>
                                                        <option value="">Contrato 002/2021</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-3">
                                                <label style="font-size: 13px;">Valor do Contrato</label>
                                                <input type="text" name="valor_total" class="form-control">
                                            </div>
                                            <div class="col-3">
                                                <label style="font-size: 13px;">Valor do Aditivo</label>
                                                <input type="text" name="valor_total" class="form-control">
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
                                            <div class="col-12">
                                                <label style="font-size: 13px;">Descrição / Objeto</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea><br>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <label style="font-size: 13px;">Fiscal do contrato</label>
                                                <input type="text" name="" class="form-control"><br>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-3">
                                                <label style="font-size: 13px;">CPF/CNPJ do contratado</label>
                                                <input type="text" name="" class="form-control"><br>
                                            </div>
                                            <div class="col-9">
                                                <label style="font-size: 13px;">Nome do contrato</label>
                                                <input type="text" name="" class="form-control"><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="col-12 d-flex justify-content-between">
                                            <button type="button" class="btn btn-primary"><i data-feather='download'></i> Baixar todos os anexos</button>
                                            <div class="position">
                                                <a href="<?= base_url() ?>index.php/contratos/editaAditivo" type="button" class="btn btn-warning  text-right"><i data-feather='edit'></i> Editar</a>
                                                <button type="button" class="btn btn-danger  text-right"><i data-feather='x-circle'></i> Excluir</button>
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