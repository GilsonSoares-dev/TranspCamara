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
                                    <span> Editar Renúncia Fiscal: <strong>REFIS</strong></span>
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
                                    <p class="card-title">Editar Renúncia: <strong>REFIS</strong> </p>
                                </div>
                                <hr style="margin-top: -10px;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-size: 13px;" for="">Tributo</label>
                                                <div>
                                                    <input type="text" class="form-control" autofocus />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <label style="font-size: 13px;" for="">Modalidade</label>
                                                <select class="select2 form-control">
                                                    <option value="">Selecione</option>
                                                    <option value="">Renúncia de Receita</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label style="font-size: 13px;" for="">Programa/Beneficiário</label>
                                                <div>
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label style="font-size: 13px;" for="">Compensação</label>
                                                <div>
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 ">
                                            <div class="form-group">
                                                <label style="font-size: 13px;" for="">Lei regulamentadora</label>
                                                <select class="select2 form-control">
                                                    <option value="">Selecione</option>
                                                    <option value="">Lei 2014/2021</option>
                                                    <option value="">Lei 2014/2021</option>
                                                    <option value="">Lei 2014/2021</option>
                                                    <option value="">Lei 2014/2021</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label style="font-size: 13px;" for="">Ano</label>
                                                <div>
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label style="font-size: 13px;" for="">Valor</label>
                                                <div>
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 ">
                                        <label style="font-size: 13px;" for="">&nbsp; </label>
                                            <div class="form-group">
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#default"><i data-feather='file-text'></i> Prenúncio de Renúncia</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="col-12 d-flex justify-content-between">
                                        <button type="button" class="btn btn-primary"><i data-feather='download'></i> Baixar todos os anexos</button>
                                        <div class="position">
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
    </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php $this->load->view("includes/footer") ?>





</body>
<!-- END: Body-->
<!-- Basic trigger modal -->
<div class="basic-modal">
    <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Prenúncio de Renúncia</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-hover table-responsive table-striped">
                        <thead>
                            <tr>
                                <th style="width: 40%;">Ano</th>
                                <th style="width: 5%;">Valor</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2021</td>
                                <td>R$ 5.250,00</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Basic trigger modal end -->

</html>