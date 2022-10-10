<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html class="loading" lang="pt-br" data-textdirection="ltr">


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
                                    <span>Receita é a entrada monetária que ocorre em uma entidade ou patrimônio, em geral sob a forma de dinheiro ou de créditos representativos de direitos.</span>
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
                                <h4 class="card-title">Receitas</h4><br><br>
                                <!---
                                <div class="col-md-2">
                                    <select class="select2 form-control">
                                        <option value="Modalidade">Filtrar Covid</option>
                                        <option value="">Sim</option>
                                        <option value="">Não</option>
                                    </select>
                                </div>
                                
                                <a href="<?= base_url() ?>index.php/portarias/cadPortaria" class="btn btn-primary">
                                    <i data-feather='plus-circle'></i>
                                    <span>Adicionar</span>
                                </a>
                                --->
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
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <select class="select2 form-control">
                                                <option value="Modalidade">Órgão</option>
                                                <option value="">Prefeitura Municipal de Uruana</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <select class="select2 form-control">
                                                <option value="Modalidade">Mês</option>
                                                <option value="">Janeiro</option>
                                                <option value="">Fevereiro</option>
                                                <option value="">Março</option>
                                                <option value="">Abril</option>
                                                <option value="">Maio</option>
                                                <option value="">Junho</option>
                                                <option value="">Julho</option>
                                                <option value="">Agosto</option>
                                                <option value="">Setembro</option>
                                                <option value="">Outubro</option>
                                                <option value="">Novembro</option>
                                                <option value="">Dezembro</option>
                                            </select>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <select class="select2 form-control">
                                                <option value="Modalidade">Ano</option>
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
                                    
                                    <div class="col-md-1">
                                        <div class="form-group">
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
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <select class="select2 form-control">
                                                <option value="Modalidade">Filtrar Covid</option>
                                                <option value="">Sim</option>
                                                <option value="">Não</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card">

                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 12%;">Código</th>
                                                            <th style="width: 56%;">Descrição</th>
                                                            <th style="width: 12%;">Previsão</th>
                                                            <th style="width: 20%;">Arrecadação no Mês</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><span class="font-weight-bold">1.0.0.0.00.0.0</span></td>
                                                            <td>Imposto sobre a Propriedade Predial e Territorial Urbana - Multas e Juros Territorial Urbana - Multas e Juros</td>
                                                            <td>R$ 203.300,00</td>
                                                            <td>R$ 2.867.676,72</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="font-weight-bold">1.0.0.0.00.0.0</span></td>
                                                            <td>Imposto sobre a Propriedade Predial e Territorial Urbana - Multas e Juros Territorial Urbana - Multas e Juros</td>
                                                            <td>R$ 203.300,00</td>
                                                            <td>R$ 2.867.676,72</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="font-weight-bold">1.0.0.0.00.0.0</span></td>
                                                            <td>Imposto sobre a Propriedade Predial e Territorial Urbana - Multas e Juros Territorial Urbana - Multas e Juros</td>
                                                            <td>R$ 203.300,00</td>
                                                            <td>R$ 2.867.676,720</td>
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