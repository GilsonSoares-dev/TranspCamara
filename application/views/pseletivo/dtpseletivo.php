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
                                    <span> Detalhes do <strong>Processo Seletivo 001/2021</strong></span>
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
                                                            <i data-feather='download-cloud'></i><span class="align-middle"> Baixar tudo</span></button>
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
                                    <p class="card-title">Processo Seletivo 001/2021</p>
                                </div>
                                <div>
                                    <hr style="margin-top: -10px;">
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;" for="">Modalidade</label>
                                                    <select class="select2 form-control">
                                                        <option value="">Selecione</option>
                                                        <option value="">Processo Seletivo</option>
                                                        <option value="">Processo Seletivo Simplificado</option>
                                                        <option value="">Processo Seletivo Temporário</option>
                                                        <option value="">Processo Seletivo Simplificado Temporário</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;" for="">Situação</label>
                                                    <select class="select2 form-control">
                                                        <option value="">Selecione</option>
                                                        <option value="" selected>Em andamento</option>
                                                        <option value="">Encerrado</option>
                                                        <option value="">Adiado</option>
                                                        <option value="">Cancelado</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;" for="">Número</label>
                                                    <div>
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;" for="">Ano</label>
                                                    <select class="select2 form-control">
                                                        <option value="Ano">Ano</option>
                                                        <option value="">2017</option>
                                                        <option value="">2018</option>
                                                        <option value="">2019</option>
                                                        <option value="">2020</option>
                                                        <option value="">2021</option>
                                                        <option value="">2022</option>
                                                        <option value="">2023</option>
                                                        <option value="">2024</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label style="font-size: 13px;">Descrição</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea><br>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;" for="">Data de Publicação</label>
                                                    <div>
                                                        <input type="date" value="<?= date("Y-m-d") ?>" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;" for="">Data de Abertura</label>
                                                    <div>
                                                        <input type="date" value="<?= date("Y-m-d") ?>" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;" for="">Data de Encerramento</label>
                                                    <div>
                                                        <input type="date" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <div class="col-12 d-flex justify-content-between">
                                            <button type="button" class="btn btn-primary"><i data-feather='download'></i> Baixar todos os anexos</button>
                                            <div class="position">
                                                <a href="<?= base_url() ?>index.php/pseletivo/edpseletivo" type="button" class="btn btn-warning  text-right"><i data-feather='edit'></i> Editar</a>
                                                <button type="button" class="btn btn-danger  text-right"><i data-feather='x-circle'></i> Excluir</button>
                                            </div>
                                        </div><br>
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