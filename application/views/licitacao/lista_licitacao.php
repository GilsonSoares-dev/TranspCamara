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
                                    <span> Licitação é o procedimento administrativo formal regra que se estabelece de forma prévia às
                                        contratações de serviços, aquisições de produtos, ou até mesmo para registrar preços para
                                        contratações futuras.</span>
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
                                <h4 class="card-title">Licitações</h4><br><br>

                                <div class="col-md-2">
                                    <select class="select2 form-control">
                                        <option value="Modalidade">Filtrar Covid</option>
                                        <option value="">Sim</option>
                                        <option value="">Não</option>
                                    </select>
                                </div>
                                <a href="<?= base_url() ?>index.php/licitacoes/cadlicitacao" class="btn btn-primary">
                                    <i data-feather='plus-circle'></i>
                                    <span>Adicionar</span>
                                </a>
                                
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
                                    <div style="margin-left: -34px"  class="col-md-2 ">

                                        <div class="form-group">
                                            <select class="select2 form-control">
                                                <option value="Modalidade">Modalidade</option>
                                                <option value="Pregão Presencial">Pregão Presencial</option>
                                                <option value="Convite">Convite</option>
                                                <option value="Tomada de preços">Tomada de preços</option>
                                                <option value="Dispensa">Dispensa</option>
                                                <option value="Credenciamento">Credenciamento</option>
                                                <option value="Chamada Pública">Chamada Pública</option>
                                                <option value="Inexigibilidade">Inexigibilidade</option>
                                                <option value="Adesão SRP">Adesão SRP</option>
                                                <option value="Concorrência">Concorrência</option>
                                                <option value="Leilão">Leilão</option>
                                                <option value="Pregão eletrônico">Pregão eletrônico</option>
                                                <option value="Indiferente">Indiferente</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div style="margin-left: -13px" class="col-md-2">
                                        <div class="form-group">
                                            <select class="select2 form-control">
                                                <option value="Modalidade">Situação</option>
                                                <option value="">Em andamento</option>
                                                <option value="">Suspensa</option>
                                                <option value="">Adiada</option>
                                                <option value="">Deserta</option>
                                                <option value="">Fracassada</option>
                                                <option value="">Em Prazo Recursal</option>
                                                <option value="">Aguardando Parecer</option>
                                                <option value="">Homologada</option>
                                                <option value="">Encerrada</option>
                                                <option value="">Revogada</option>
                                                <option value="">Anulada</option>
                                                <option value="">Realizada</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div style="margin-left: -13px" class="col-md-2 ">
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
                                    <div style="margin-left: -13px" class="col-md-2 ">
                                        <div class="form-group">
                                            <select class="select2 form-control">
                                                <option value="Modalidade">Órgão</option>
                                                <option value="">Prefeitura Municipal de Uruana</option>
                                                <option value="">Fundo Municipal de Saúde de Uruana</option>
                                                <option value="">Fundo Municipal de Assistência Social de Uruana</option>
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
                                                            <th style="width: 11%;">Modalidade</th>
                                                            <th style="width: 10%;">Número</th>
                                                            <th style="width: 12%;">Valor Estimado</th>
                                                            <th style="width: 10%;">Publicação</th>
                                                            <th style="width: 42%;">Descrição</th>
                                                            <th style="width: 12%;">Situação</th> 
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr onclick="window.location.href = '<?= base_url() ?>index.php/licitacoes/detalheLicitacao';">

                                                            <td><span class="font-weight-bold">Pregão Presencial</span></td>
                                                            <td>002/2021</td>
                                                            </td>
                                                            <td>R$ 1.160.000,00</td>
                                                            <td>26/03/2021</td>
                                                            <td>OBJETO: CONTRATAÇÃO DE EMPRESA ESPECIALIZADA PARA REALIZAÇÃO DE PROCEDIMENTOS CIRURGICOS, DESTINADOS À ATENER OS PACIENTES DO MUNICIPIO DE RIALMA – GO, CONFORME AS NECESSIDADES DA SECRETARIA MUNICIPAL DE SAÚDE.</td>
                                                            <td><span class="btn btn-sm  btn-outline-success">Em andamento</span></td>
                                                        <tr  onclick="window.location.href = '<?= base_url() ?>index.php/licitacoes/detalheLicitacao';">
                                                            <td><span class="font-weight-bold">Pregão Presencial</span></td>
                                                            <td>002/2021</td>
                                                            </td>
                                                            <td>R$ 1.160.000,00</td>
                                                            <td>26/03/2021</td>
                                                            <td>OBJETO: CONTRATAÇÃO DE EMPRESA ESPECIALIZADA PARA REALIZAÇÃO DE PROCEDIMENTOS CIRURGICOS, DESTINADOS À ATENER OS PACIENTES DO MUNICIPIO DE RIALMA – GO, CONFORME AS NECESSIDADES DA SECRETARIA MUNICIPAL DE SAÚDE.</td>
                                                            <td><span class="btn btn-sm  btn-outline-danger">Cancelado</span></td>
                                                        </tr>
                                                        <tr  onclick="window.location.href = '<?= base_url() ?>index.php/licitacoes/detalheLicitacao';">
                                                            <td><span class="font-weight-bold">Pregão Presencial</span></td>
                                                            <td>002/2021</td>
                                                            </td>
                                                            <td>R$ 1.160.000,00</td>
                                                            <td>26/03/2021</td>
                                                            <td>OBJETO: CONTRATAÇÃO DE EMPRESA ESPECIALIZADA PARA REALIZAÇÃO DE PROCEDIMENTOS CIRURGICOS, DESTINADOS À ATENER OS PACIENTES DO MUNICIPIO DE RIALMA – GO, CONFORME AS NECESSIDADES DA SECRETARIA MUNICIPAL DE SAÚDE.</td>
                                                            <td><span class="btn btn-sm  btn-outline-warning">Suspenso</span></td>
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

</body>
<!-- END: Body-->

</html>