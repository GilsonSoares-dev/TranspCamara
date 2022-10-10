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
                                    <span>Convênio administrativo se refere a acordos firmados entre uma entidade da administração pública federal e uma entidade pública estadual, distrital ou municipal da administração direta ou indireta ou entidades particulares sem fins lucrativos.</span>
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
                                <h4 class="card-title">Convênios</h4><br><br>

                                <div class="col-md-2">
                                    <select class="select2 form-control">
                                        <option value="Modalidade">Filtrar Covid</option>
                                        <option value="">Sim</option>
                                        <option value="">Não</option>
                                    </select>
                                </div>
                                <div style="float: right;" class="btn-group">
                                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light"><i data-feather='plus-circle'></i> Adicionar</button>
                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split waves-effect waves-float waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="<?= base_url() ?>index.php/convenios/cadConvenio" >Convênio</a>
                                        <a class="dropdown-item" href="<?= base_url() ?>index.php/convenios/aditivo_convenio">Aditivo</a>                                       
                                    </div>
                                </div>
                            </div>

                            <section id="basic-examples">
                                <!-- Hoverable rows start -->
                                <div class="row" id="table-hover-row">
                                    <div class="col-md-2">
                                        <div class="card-body">
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i data-feather='search'></i>
                                                    </span>
                                                </div>
                                                <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="Buscar...">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Basic -->
                                    <div class="col-md-3 ">
                                        <div class="form-group">
                                            <select class="select2 form-control">
                                                <option value="Modalidade">Tipo</option>
                                                <option value="">Original</option>
                                                <option value="">Aditivo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 ">
                                        <div class="form-group">
                                            <select class="select2 form-control">
                                                <option value="Modalidade">Período</option>
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
                                    <div class="col-md-2 ">
                                        <div class="form-group">
                                            <select class="select2 form-control">
                                                <option value="Modalidade">Situação</option>
                                                <option value="">Em vigor</option>
                                                <option value="">Encerrado</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="card-body">
                                            <select class="select2 form-control">
                                                <option value="Modalidade">Exportar</option>
                                                <option value="">PDF</option>
                                                <option value="">XLS</option>
                                                <option value="">DOC</option>
                                                <option value="">CSV</option>
                                                <option value="">TXT</option>
                                                <option value="">XML</option>
                                                <option value="">JSON</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card">

                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 12%;">Número</th>
                                                            <th style="width: 12%;">Concedente</th>
                                                            <th style="width: 15%;">Conveniado</th>
                                                            <th style="width: 47%;">Descrição</th>
                                                            <th style="width: 13%;">Situação</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr onclick="window.location.href = '<?= base_url() ?>index.php/convenios/detalheConvenio';">
                                                            <td><span class="font-weight-bold">Aditivo 127/2021</span></td>
                                                            <td>Fundo Municipal de Saúde</td>
                                                            <td>RENAISSENCE CENTRO MÉDICO E LAB.</td>
                                                            <td>RENAISSENCE CENTRO MÉDICO E LAB. LTDA RENAISSENCE CENTRO MÉDICO E LAB. LTDARENAISSENCE CENTRO MÉDICO E LAB. LTDARENAISSENCE CENTRO MÉDICO E LAB. LTDA</td>
                                                            <td><span class="btn btn-sm btn-outline-success">Em Andamento</span></td>
                                                        </tr>
                                                        <tr onclick="window.location.href = '<?= base_url() ?>index.php/convenios/detalheConvenio';">
                                                            <td><span class="font-weight-bold">Convênio 127/2021</span></td>
                                                            <td>Prefeitura Municipal de Uruana</td>
                                                            <td>RENAISSENCE CENTRO MÉDICO E LAB.</td>
                                                            <td>RENAISSENCE CENTRO MÉDICO E LAB. LTDA LTDARENAISSENCE CENTRO MÉDICO E LAB.LTDARENAISSENCE CENTRO MÉDICO E LAB.</td>
                                                            <td><span class="btn btn-sm btn-outline-danger">Encerrado</span></td>
                                                        </tr>
                                                        <tr onclick="window.location.href = '<?= base_url() ?>index.php/convenios/detalheConvenio';">
                                                            <td><span class="font-weight-bold">Convênio 127/2021</span></td>
                                                            <td>Fundo Municipal de Saúde</td>
                                                            <td>RENAISSENCE CENTRO MÉDICO E LAB.</td>
                                                            <td>RENAISSENCE CENTRO MÉDICO E LAB. LTDA</td>
                                                            <td><span class="btn btn-sm btn-outline-success">Em Andamento</span></td>                                                           
                                                        </tr>
                                                        <tr onclick="window.location.href = '<?= base_url() ?>index.php/convenios/detalheConvenio';">
                                                            <td><span class="font-weight-bold">Convênio 127/2021</span></td>
                                                            <td>Fundo Municipal de Saúde</td>
                                                            <td>RENAISSENCE CENTRO MÉDICO E LAB.</td>
                                                            <td>RENAISSENCE CENTRO MÉDICO E LAB. LTDA</td>
                                                            <td><span class="btn btn-sm btn-outline-success">Em Andamento</span></td>
                                                        </tr>
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