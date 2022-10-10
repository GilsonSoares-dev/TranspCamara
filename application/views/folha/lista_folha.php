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
                                    <span>Folha de pagamento é o nome dado a uma lista da remuneração paga aos servidores, ou ainda do conjunto de procedimentos trabalhistas efetuado para fazer o pagamento ao servidor ou contratado.</span>
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
                                <h4 class="card-title">Folha de Pagamento</h4><br><br>

                                <div class="col-md-2">
                                    <select class="select2 form-control">
                                        <option value="Modalidade">Filtrar Covid</option>
                                        <option value="">Sim</option>
                                        <option value="">Não</option>
                                    </select>
                                </div>
                                <!---
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
                                    <div style="margin-left: -33px" class="col-md-3 ">
                                        <div class="form-group">
                                            <select class="select2 form-control">
                                                <option value="Modalidade">Lotação</option>
                                                <option value="">Câmara Municipal de Uruana</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div style="margin-left: -12px" class="col-md-2 ">
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

                                    <div style="margin-left: -12px" class="col-md-2 ">
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

                                    <div style="margin-left: -33px" class="col-md-2">
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
                                                            <th style="width: 10%;">Matrícula</th>
                                                            <th style="width: 30%;">Nome</th>
                                                            <th style="width: 25%;">Cargo</th>
                                                            <th style="width: 15%;">Referência</th>
                                                            <th style="width: 15%;">Tipo de Folha</th>
                                                            <th style="width: 20%;">Proventos</th>
                                                            <th style="width: 20%;">Descontos</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr data-toggle="modal" data-target="#large">
                                                            <td><span class="font-weight-bold">5932</span></td>
                                                            <td>ABIGAIL VAZ FERREIRA DE AZEVEDO</td>
                                                            <td>CHEFE DE UNIDADE DO CAPS</td>
                                                            <td>Fevereiro/2021</td>
                                                            <td>Folha Normal</td>
                                                            <td>R$ 2.100,00</td>
                                                            <td>R$ 172,50</td>
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

    <div class="modal-size-lg d-inline-block">
        <!-- Modal -->
        <div class="modal fade text-left" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div style="background-color: #3F729B;" class="modal-header">
                        <h4 class="modal-title text-white" id="myModalLabel17">Matrícula Nº 490</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label style="font-size: 13px;" for="">Servidor</label>
                                    <div>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label style="font-size: 13px;" for="">Cargo</label>
                                    <div>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label style="font-size: 13px;" for="">Função</label>
                                    <div>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label style="font-size: 13px;" for="">Lotação</label>
                                    <div>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label style="font-size: 13px;" for="">Vínculo</label>
                                    <div>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label style="font-size: 13px;" for="">Admissão</label>
                                    <div>
                                        <input type="date" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label style="font-size: 13px;" for="">Decreto</label>
                                    <div>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label style="font-size: 13px;" for="">Carga Horária</label>
                                    <div>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="font-size: 13px;" for="">Tipo de Folha</label>
                                    <div>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="font-size: 13px;" for="">Referência</label>
                                    <div>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <ul class="list-group">
                                    <a style="background-color: #3F729B;" href="javascript:void(0)" class="list-group-item active"><i data-feather='menu'></i> Resumo </a>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span> Salário</span>
                                        <span>R$ 2.100,00</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span> Descontos</span>
                                        <span>R$ 172,50</span>
                                    </li>
                                </ul>
                            </div>
                        </div><br>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
<!-- END: Body-->

</html>