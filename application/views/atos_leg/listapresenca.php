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
<style>
.custom_tabela {
    font-family: Arial, Serif !important;
    color: #6B6C6B !important;
    font-size: 1rem !important;
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
                                    <span>A Lista de Presença de Sessão demonstra a assiduidade do parlamentar nas
                                        sessões da Câmara Municipal.</span>
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
                                <h4 class="card-title">Lista de Presença de Sessão</h4><br><br>
                                <!--
                                <div class="col-md-2">
                                    <select class="select2 form-control">
                                        <option value="Modalidade">Filtrar Covid</option>
                                        <option value="">Sim</option>
                                        <option value="">Não</option>
                                    </select>
                                </div> -->
                                <a href="<?= base_url() ?>index.php/atos_leg/novalista" class="btn btn-primary">
                                    <i data-feather='plus-circle'></i>
                                    <span>Adicionar</span>
                                </a>
                            </div>

                            <section id="basic-examples">
                                <!-- Hoverable rows start -->
                                <div class="row" id="table-hover-row">
                                    <div class="col-md-3">
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
                                    <div style="margin-left: -33px" class="col-md-3 ">
                                        <div class="form-group">
                                            <select class="select2 form-control">
                                                <option value="Modalidade">Vereadores</option>
                                                <option value="">Aline Aparecida Ribeiro Alves</option>
                                                <option value="">Antonio Alves da Costa Neto</option>
                                                <option value="">Antonio Fabio Moreira</option>
                                                <option value="">Atanes Batista</option>
                                                <option value="">Geraldo Santana da Silva</option>
                                                <option value="">Gilmar de Morais Santos</option>
                                                <option value="">Jorge José Fernandes</option>
                                                <option value="">Euclides Serafim de Lima Junior</option>
                                                <option value="">Rafael Maia Moura de Castro</option>

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
                                                <table class="table table-hover table-striped custom_tabela">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 20%;">Data da Sessão</th>
                                                            <th style="width: 60%;">Vereadores Presentes</th>
                                                            <th style="width: 30%;">Tipo de Sessão</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr data-toggle="modal" data-target="#exampleModalScrollable">
                                                            <td>06/06/2021</td>
                                                            <td>Atanes Batista</td>
                                                            <td style="text-align: justify;">Ordinária</td>
                                                        </tr>
                                                        <tr data-toggle="modal" data-target="#exampleModalScrollable">
                                                            <td>06/06/2021</td>
                                                            <td>Atanes Batista</td>
                                                            <td style="text-align: justify;">Ordinária</td>
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
                <!-- Modal -->
                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div style="background-color: #3F729B;" class="modal-header">
                                <h5 class="modal-title text-white" id="exampleModalScrollableTitle">Vereadores Presentes na Sessão</h5>
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
                                                        <th style="width: 10%;" scope="col">N°</th>
                                                        <th style="width: 90%;" scope="col">Nome</th>
                                                        <th style="width: 0%;" scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Atanes Batista</td>
                                                        <td><a class="icone_lixo"
                                                                style="width: 18px; height:auto; margin-top: 10;"
                                                                data-feather=''></a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Gilmar Morais dos Santos</td>
                                                        <td><a class="icone_lixo"
                                                                style="width: 18px; height:auto; margin-top: 10;"
                                                                data-feather=''></a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Jorge José Fernandes</td>
                                                        <td><a class="icone_lixo"
                                                                style="width: 18px; height:auto; margin-top: 10;" data-feather=''></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="modal-footer">
                                    <div class="col-md-12">
                                        <div class="row justify-content-between">
                                            <div style="margin-left: -29px;" class="col-5 text-left"></div>
                                            <div style="margin-right: -36px;" class="col-5 text-right">                                              
                                                <button type="button" class="btn btn-instagram" data-dismiss="modal"><i data-feather='x-circle'></i>Fechar</button>
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

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


    <?php $this->load->view("includes/footer") ?>
    <script src="<?= base_url() ?>app-assets/js/scripts/forms/form-select2.js"></script>

</body>
<!-- END: Body-->

</html>