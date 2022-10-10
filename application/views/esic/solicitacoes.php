<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">


<?php $this->load->view('includes/header'); ?>
<!-- BEGIN: Body-->
<style>
    .form-group {
        padding-top: 1.5rem;
    }
</style>

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

    <?php $this->load->view("includes/nav_bar") ?>


    <?php $this->load->view("includes/aside") ?>

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">

            <div class="content-body">
                <!-- Conteúdo -->
                <div class="card">
                    <div class="form-group">
                        <div>
                            <div class="alert" role="alert">
                                <div class="alert-body">
                                    <span>E-SIC | Sistema Eletrônico de Serviço de Informação ao Cidadão</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header row">

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Solicitações</h4><br><br>
                                <!---
                                <div class="col-md-2">
                                    <select class="select2 form-control">
                                        <option value="Modalidade">Filtrar Covid</option>
                                        <option value="">Sim</option>
                                        <option value="">Não</option>
                                    </select>
                                </div> 
                                <a href="<?= base_url() ?>index.php/resp_fiscal/nparecertb" class="btn btn-primary">
                                    <i data-feather='plus-circle'></i>
                                    <span>Adicionar</span>
                                </a>
                                --->
                            </div>

                            <section id="basic-examples">
                                <!-- Hoverable rows start -->
                                <div class="row" id="table-hover-row">
                                    <div class="col-md-4">
                                        <div class="card-body">
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i data-feather='search'></i>
                                                    </span>
                                                </div>
                                                <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="Buscar solicitação">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Basic -->
                              
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 170px;">Protocolo</th>
                                                            <th style="width: 120px;">Data</th>
                                                            <th style="width: 120px;">Prazo</th>
                                                            <th >Solicitante</th>                                                           
                                                            <th style="width: 200px;">Situação</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr onclick="window.location.href = '<?= base_url() ?>index.php/esic/d_solicitacao';">
                                                            <td><span class="font-weight-bold">2021043022402019</span></td>
                                                            <td>17/06/2020</td>
                                                            <td><span class="btn btn-sm btn-outline-danger">Expirado</span></td>                                                           
                                                            <td>PALOMA GÉSSICA MARCELINO SILVA</td>
                                                            <td><span class="btn btn-sm btn-outline-warning">Em andamento</span></td>
                                                    </tbody>
                                                    <tbody>
                                                        <tr onclick="window.location.href = '<?= base_url() ?>index.php/esic/d_solicitacao';">
                                                            <td><span class="font-weight-bold">2021043022402019</span></td>
                                                            <td>17/06/2020</td>
                                                            <td><span class="btn btn-sm btn-outline-warning">Concluido</span></td>                                                           
                                                            <td>LOURENÇO DA SILVA DIAS</td>
                                                            <td><span class="btn btn-sm btn-outline-success">Concluido</span></td>
                                                    </tbody>                                                                                                  
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hoverable rows end -->
                            </section>
                        </div>
                    </div>
                </div>
                <!-- Conteúdo -->
            </div>
        </div>
    </div>

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


    <?php $this->load->view("includes/footer") ?>
    <script src="<?= base_url() ?>app-assets/js/scripts/forms/form-select2.js"></script>

</body>
<!-- END: Body-->

</html>