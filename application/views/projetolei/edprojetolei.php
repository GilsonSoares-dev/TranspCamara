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
                                    <span> Editar <strong>Projeto de Lei 001/2021</strong></span>
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
                                    <p class="card-title">Projeto de Lei 001/2021</p>
                                </div>
                                <hr style="margin-top: -10px;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label style="font-size: 13px;" for="">Número</label>
                                                <div>
                                                    <input type="text" class="form-control" autofocus />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label style="font-size: 13px;" for="">Data de Publicação</label>
                                                <div>
                                                    <input type="date" value="<?= date("Y-m-d") ?>" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-size: 13px;" for="">Assunto</label>
                                                <div>
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-size: 13px;" for="">Autor</label>
                                                <select class="select2 form-control">
                                                    <option value="">Selecione</option>
                                                    <option value="">NOME DO AUTOR</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-size: 13px;" for="">Relator</label>
                                                <select class="select2 form-control">
                                                    <option value="">Selecione</option>
                                                    <option value="">NOME DO RELATOR</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label style="font-size: 13px;">Ementa</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" style="text-transform: uppercase;" ></textarea><br>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label style="font-size: 13px;" for="">Situação</label>
                                                <select class="select2 form-control">
                                                    <option value="">Selecione</option>
                                                    <option value="">Em análise</option>
                                                    <option value="">Aprovado</option>
                                                    <option value="">Recusado</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-size: 13px;"></label>
                                                <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#exampleModalScrollable"> Autores do projeto</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="card-footer">
                                    <div class="col-12 d-flex justify-content-between">
                                        <button type="button" class="btn btn-primary"><i data-feather='download'></i> Baixar todos os anexos</button>
                                        <div class="position">
                                            <a href="<?= base_url() ?>index.php/projetolei" type="button" class="btn btn-secondary  text-right"><i data-feather='corner-down-left'></i> Voltar</a>
                                            <button type="button" class="btn btn-success  text-right"><i data-feather='upload-cloud'></i> Salvar</button>
                                        </div>
                                    </div><br>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </section>
        <div class="scrolling-inside-modal">
            <!-- Modal -->
            <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Autores do Projeto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row" id="table-striped">
                                <div class="col-12">
                                    <div class="card">

                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <span class="font-weight-bold">Angular Project</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="font-weight-bold">Angular Project</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="font-weight-bold">Angular Project</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="font-weight-bold">Angular Project</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="font-weight-bold">Angular Project</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label style="font-size: 13px;">Novo autor</label>
                                    <select class=" form-control">
                                        <option value="">Selecione</option>
                                        <option value="">Vereador tal</option>
                                        <option value="">tal</option>
                                        <option value="">tal</option>
                                        <option value="">Vereador tal</option>
                                        <option value="">tal</option>
                                        <option value="">tal</option>
                                        <option value="">Vereador tal</option>
                                        <option value="">tal</option>
                                        <option value="">tal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="col-12">
                                    <div class="row justify-content-between">
                                        <div class="col-5 text-left">
                                            <button type="button" class="btn btn-primary"><i data-feather='user-plus'></i> Adicionar Autor</button>
                                        </div>
                                        <div class="col-5 text-right">
                                            <button type="button" class="btn btn-success"><i data-feather='upload-cloud'></i> Salvar</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i data-feather='plus-circle'></i> Cancelar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conteúdo -->
        </div>
    </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php $this->load->view("includes/footer") ?>




</body>
<!-- END: Body-->

</html>
