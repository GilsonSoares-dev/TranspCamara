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

                <section id="input-sizing">
                    <div class="row match-height">
                        <div class="col-md-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Anexos</h4>
                                </div>
                                <hr style="margin-top: -10px;">
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
                                    <p class="card-title">Nova Renúncia </p>
                                </div>
                                <hr style="margin-top: -10px;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label style="font-size: 13px;" for="">Tributo</label>
                                                <div>
                                                    <input type="text" class="form-control" autofocus />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
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
                                        <div class="col-md-3 ">
                                            <label style="font-size: 13px;" for="">&nbsp; </label>
                                            <div class="form-group">
                                                <button style="width:220px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#default"><i data-feather='file-text'></i> Prenúncio de Renúncia</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
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
                <div style="background-color: #3F729B;" class="modal-header">
                    <h4 class="modal-title text-white" id="myModalLabel1">Prenúncio de Renúncia</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <div class="row" id="table-striped">
                            <div class="col-md-12">
                                <div class="card">
                                    <table class="table table-responsive table-striped">
                                        <thead class="thead-light">
                                            <tr>
                                                <th style="width: 40%;" scope="col">Exercíco</th>
                                                <th style="width: 70%;" scope="col">Valor</th>
                                                <th style="width: 10%;" scope="col">Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">2021</th>
                                                <td>R$ 125.335,14</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck10">
                                                        <label class="custom-control-label" for="customCheck10"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2020</th>
                                                <td>R$ 125.335,14</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                        <label class="custom-control-label" for="customCheck11"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2019</th>
                                                <td>R$ 125.335,14</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck12">
                                                        <label class="custom-control-label" for="customCheck12"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label style="font-size: 13px;">Exercício</label>
                                <input type="text" class=" form-control">
                            </div>
                            <div class="col-md-4">
                                <label style="font-size: 13px;">Valor</label>
                                <input type="text" class=" form-control">
                            </div>
                            <div style="margin-top: 26px;" class="col-md-4">
                                <button type="button" class="btn btn-instagram"><i data-feather='plus-circle'></i> Adicionar exercício</button>
                            </div>

                        </div><br>
                       
                        <div class="modal-footer">
                            <div class="col-md-12">
                                <div class="row justify-content-between">
                                <div class="margin-right: -39px; ">
                                    <button type="button col-5" class="btn btn-instagram"><i data-feather='check-circle'></i> Selecionar todos</button>
                                    <button type="button" class="btn btn-instagram"><i data-feather='trash-2'></i> Remover todos</button>
                                 </div>
                                   
                                    <div style="margin-right: -39px;" class="col-5 text-right">
                                        <button type="button" class="btn btn-instagram"><i data-feather='save'></i> Salvar</button>
                                        <button type="button" class="btn btn-instagram" data-dismiss="modal"><i data-feather='x-circle'></i> Cancelar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Basic trigger modal end -->

</html>