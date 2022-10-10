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
                                        As Despesas são gastos que não se identificam com o processo de transformação ou
                                        produção dos bens e produtos. As despesas estão relacionadas aos valores gastos
                                        com a estrutura administrativa e comercial do órgão.</span>
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
                                <h4 class="card-title">Diárias e Passagens</h4><br><br>


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
                                                <input type="text" id="first-name-icon" class="form-control"
                                                    name="fname-icon" placeholder="Buscar...">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Basic -->
                                    <div style="margin-left: -34px" class="col-md-3">
                                        <div class="form-group">
                                            <select class="select2 form-control">
                                                <option value="Buscar Empenho">Favorecido</option>
                                                <option value="">ELIAN BERNADETE DE FARIA OLIVEIRA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div style="margin-left: -13px" class="col-md-2">
                                        <div class="form-group">
                                            <select class="select2 form-control">
                                                <option value="Modalidade">Matrícula</option>
                                                <option value="">166</option>
                                                <option value="">138</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div style="margin-left: -13px" class="col-md-2">
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
                                    <div style="margin-left: -13px" class="col-md-2">
                                        <div class="form-group">
                                            <button data-toggle="modal" data-target="#filtro-data" type="button"
                                                class="btn btn-outline-instagram"><i data-feather='calendar'></i>
                                                Filtrar Período</button>
                                        </div>
                                    </div>

                                    <div style="margin-left: -106px" class="col-md-1">
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

                                    <div class="col-12">
                                        <div class="card">

                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 140px;">Matrícula</th>
                                                            <th style="width: 40%;">Favorecido</th>
                                                            <th style="width: 20%;">Destino</th>
                                                            <th style="width: 160px;">Período</th>
                                                            <th style="width: 160px;">Valor</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr data-toggle="modal" data-target="#diarias">
                                                            <td><span class="font-weight-bold">166</span></td>
                                                            <td>ELIAN BERNADETE DE FARIA OLIVEIRA</td>
                                                            <td>GOIÂNIA</td>
                                                            <td>15/12/2021</td>
                                                            <td>R$ 60,00</td>
                                                        </tr>
                                                        <tr data-toggle="modal" data-target="#diarias">
                                                            <td><span class="font-weight-bold">138</span></td>
                                                            <td>PRADOS & PRADOS ADVOGADOS ASSOCIADOS</td>
                                                            <td>07/03/2021</td>
                                                            <td>R$ 10.500,00</td>
                                                            <td>R$ 5.250,00</td>
                                                        </tr>
                                                        <tr data-toggle="modal" data-target="#diarias">
                                                            <td><span class="font-weight-bold">138</span></td>
                                                            <td>PRADOS & PRADOS ADVOGADOS ASSOCIADOS</td>
                                                            <td>07/03/2021</td>
                                                            <td>R$ 10.500,00</td>
                                                            <td>R$ 5.250,00</td>
                                                        </tr>
                                                        <tr data-toggle="modal" data-target="#diarias">
                                                            <td><span class="font-weight-bold">138</span></td>
                                                            <td>PRADOS & PRADOS ADVOGADOS ASSOCIADOS</td>
                                                            <td>07/03/2021</td>
                                                            <td>R$ 10.500,00</td>
                                                            <td>R$ 5.250,00</td>
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

    </div>

    <!-- modal filtro por data --->
    <div class="modal fade text-left" id="filtro-data" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div style="background-color: #3F729B;" class="modal-header">
                    <h4 class="modal-title text-white" id="myModalLabel17">Filtrar Período</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body"><br>
                    <div class="row">
                        <div class="col-md-6">
                            <label style="font-size: 13px;" for="">Data Inicial</label>
                            <input type="date" class="form-control" />
                        </div>
                        <div class="col-md-6">
                            <label style="font-size: 13px;" for="">Data Final</label>
                            <input type="date" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-instagram"><i data-feather='search'></i> Buscar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- modal conteúdo da tabela--->
    <div class="modal fade text-left" id="diarias" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div style="background-color: #3F729B;" class="modal-header">
                    <h4 class="modal-title text-white" id="myModalLabel17">Liquidação Nº 14539</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body"><br>
                    <div class="row">
                        <div class="col-md-3">
                            <label style="font-size: 13px;" for="">Matrícula</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-md-9">
                            <label style="font-size: 13px;" for="">Servidor</label>
                            <input type="text" class="form-control" /><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label style="font-size: 13px;" for="">Cargo</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-md-6">
                            <label style="font-size: 13px;" for="">Órgão</label>
                            <input type="text" class="form-control" /><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label style="font-size: 13px;" for="">Destino</label>
                            <input type="text" class="form-control" /><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label style="font-size: 13px;" for="">Saída</label>
                            <input type="date" class="form-control" />
                        </div>
                        <div class="col-md-6">
                            <label style="font-size: 13px;" for="">Chegada</label>
                            <input type="date" class="form-control" /><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label style="font-size: 13px;" for="">Quantidade</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-md-6">
                            <label style="font-size: 13px;" for="">Valor</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label style="font-size: 13px;">Descrição / Histórico</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"
                                    style="text-transform: uppercase;"></textarea><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<!-- END: Body-->

</html>