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

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  "
    data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

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
                                    <span>
                                        Contrato é uma espécie de acordo entre duas ou mais pessoas, cuja finalidade é
                                        adquirir, resguardar, transferir, modificar ou extinguir uma relação jurídica
                                        patrimonial.
                                        É, portanto, ato jurídico que, se realizado em conformidade com as normas
                                        legais, poderá ser entendido como lei entre as partes.</span>
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
                                <h4 class="card-title">Contratos</h4><br><br>

                                <div style="float: right;" class="col-md-2">
                                    <select class="select2 form-control">
                                        <option value="Modalidade">Filtrar Covid</option>
                                        <option value="">Sim</option>
                                        <option value="">Não</option>
                                    </select>
                                </div>
                                <div style="float: right;" class="btn-group">
                                    <button type="button"
                                        class="btn btn-primary waves-effect waves-float waves-light"><i
                                            data-feather='plus-circle'></i> Adicionar</button>
                                    <button type="button"
                                        class="btn btn-primary dropdown-toggle dropdown-toggle-split waves-effect waves-float waves-light"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item"
                                            href="<?= base_url() ?>index.php/contratos/cadContrato">Contrato</a>
                                        <a class="dropdown-item" href="<?= base_url() ?>index.php/contratos/cadAta">Ata
                                            de Registro de Preço</a>
                                        <a class="dropdown-item"
                                            href="<?= base_url() ?>index.php/contratos/cadAditivo">Aditivo</a>
                                        <a class="dropdown-item"
                                            href="<?= base_url() ?>index.php/contratos/cadDistrato">Distrato</a>
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
                                                <input type="text" id="first-name-icon" class="form-control"
                                                    name="fname-icon" placeholder="Buscar...">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Basic -->
                                    <div style="margin-left: -34px" class="col-md-3 ">
                                        <div class="form-group">
                                            <select class="select2 form-control">
                                                <option value="Modalidade">Órgão</option>
                                                <option value="">Prefeitura Municipal de Uruana</option>
                                                <option value="">Fundo Municipal de Saúde de Uruana</option>
                                                <option value="">Fundo Municipal de Assistência Social de Uruana
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div style="margin-left: -13px"  class="col-md-2 ">
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
                                    <div style="margin-left: -13px" class="col-md-2 ">
                                        <div class="form-group">
                                            <select class="select2 form-control">
                                                <option value="Modalidade">Situação</option>
                                                <option value="">Em vigor</option>
                                                <option value="">Aditivado</option>
                                                <option value="">Rescindido</option>
                                                <option value="">Encerrado</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div style="margin-left: -34px" class="col-md-2">
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
                                                            <th style="width: 15%;">Número</th>
                                                            <th style="width: 20%;">Órgão</th>
                                                            <th style="width: 10%;">Publicação</th>
                                                            <th style="width: 50%;">Contratado</th>
                                                            <th style="width: 10%;">Situação</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr
                                                            onclick="window.location.href = '<?= base_url() ?>index.php/contratos/detalheContrato';">
                                                            <td><span class="font-weight-bold">Contrato 127/2021</span>
                                                            </td>
                                                            <td>Fundo Municipal de Saúde</td>
                                                            <td>26/03/2021</td>
                                                            <td>RENAISSENCE CENTRO MÉDICO E LAB. LTDA RENAISSENCE CENTRO
                                                                MÉDICO E LAB. LTDARENAISSENCE CENTRO MÉDICO E LAB.
                                                                LTDARENAISSENCE CENTRO MÉDICO E LAB. LTDA</td>
                                                            <td><span class="btn btn-sm  btn-outline-success">Em
                                                                    vigor</span></td>
                                                        </tr>
                                                        <tr
                                                            onclick="window.location.href = '<?= base_url() ?>index.php/contratos/detalheContrato';">
                                                            <td><span class="font-weight-bold">Contrato 127/2021</span>
                                                            </td>
                                                            <td>Prefeitura Municipal de Uruana</td>
                                                            <td>26/03/2021</td>
                                                            <td>RENAISSENCE CENTRO MÉDICO E LAB. LTDA LTDARENAISSENCE
                                                                CENTRO MÉDICO E LAB.LTDARENAISSENCE CENTRO MÉDICO E LAB.
                                                            </td>
                                                            <td><span
                                                                    class="btn btn-sm btn-outline-danger">Encerrado</span>
                                                            </td>
                                                        </tr>
                                                        <tr
                                                            onclick="window.location.href = '<?= base_url() ?>index.php/contratos/detalheContrato';">
                                                            <td><span class="font-weight-bold">Contrato 127/2021</span>
                                                            </td>
                                                            <td>Fundo Municipal de Saúde</td>
                                                            <td>26/03/2021</td>
                                                            <td>RENAISSENCE CENTRO MÉDICO E LAB. LTDA</td>
                                                            <td><span class="btn btn-sm btn-outline-success">Em
                                                                    vigor</span></td>
                                                        </tr>
                                                        <tr
                                                            onclick="window.location.href = '<?= base_url() ?>index.php/contratos/detalheContrato';">
                                                            <td><span class="font-weight-bold">Contrato 127/2021</span>
                                                            </td>
                                                            <td>Fundo Municipal de Saúde</td>
                                                            <td>26/03/2021</td>
                                                            <td>RENAISSENCE CENTRO MÉDICO E LAB. LTDA</td>
                                                            <td><span class="btn btn-sm btn-outline-success">Em
                                                                    vigor</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hoverable rows end -->
                            </section>
                            <hr>
                            <div class="col-12 col-md-12">
                                <div class="card-body">
                                    <div id="firstLast1-content" class="mb-1">Você está na Página: 3</div>
                                    <ul class="pagination firstLast1-links">
                                        <li class="page-item first"><a href="#" class="page-link">Primeira</a></li>
                                        <li class="page-item prev"><a href="#" class="page-link">Anterior</a></li>
                                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                                        <li class="page-item next"><a href="#" class="page-link">Próxima</a></li>
                                        <li class="page-item last"><a href="#" class="page-link">Última</a></li>
                                    </ul>
                                </div>
                            </div>
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
    <script src="<?= base_url() ?>app-assets/js/scripts/pagination/components-pagination.js"></script>

</body>
<script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
<!-- END: Body-->

</html>