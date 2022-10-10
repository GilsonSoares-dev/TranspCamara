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
                                    <p class="card-title">Adicionar Requerimento</p>
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
                                    </div>                                   
                                    <div class="row">
                                        <div class="col-12">
                                            <label style="font-size: 13px;">Ementa</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" style="text-transform: uppercase;"></textarea><br>
                                        </div>
                                    </div>
                                    <div class="row">                                       
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-size: 13px;"></label>
                                                <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#exampleModalScrollable"> Autoria do requerimento</button>
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
        
        <div class="scrolling-inside-modal">
            <!-- Modal -->
            <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div style="background-color: #3F729B;" class="modal-header">
                            <h5 class="modal-title text-white" id="exampleModalScrollableTitle">Autoria do Requerimento
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row" id="table-striped">
                                <div class="col-md-12">

                                    <div class="card">
                                        <table class="table table-responsive table-striped">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th style="width: 10%;" scope="col">Seleção</th>
                                                    <th style="width: 80%;" scope="col">Nome</th>                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck1" />
                                                            <label class="custom-control-label" for="customCheck1"></label>
                                                        </div>
                                                    </td>
                                                    <td>Atanes Batista</td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck2" />
                                                            <label class="custom-control-label" for="customCheck2"></label>
                                                        </div>
                                                    </td>
                                                    <td>Atanes Batista</td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck3" />
                                                            <label class="custom-control-label" for="customCheck3"></label>
                                                        </div>
                                                    </td>
                                                    <td>Atanes Batista</td>
                                                       
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>                          
                            <div class="modal-footer">
                                <div class="col-md-12">
                                    <div class="row justify-content-between">
                                        <div style="margin-left: -29px;" class="col-4 text-left">
                                            <button type="button" class="btn btn-instagram"><i data-feather='check-square'></i> Selecionar Todos
                                            </button>
                                        </div>
                                        <div style="margin-left: -120px;" class="col-4 text-left">
                                            <button type="button" class="btn btn-instagram"><i data-feather='square'></i> Desmarcar Todos
                                            </button>
                                        </div>
                                        
                                        <div style="margin-right: -20px;" class="col-5 text-right">
                                            <button type="button" class="btn btn-instagram"><i data-feather='save'></i> Salvar</button>                                           
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