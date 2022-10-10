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
                <div class="card">
                    <div class="form-group">
                        <div><br>
                            <div class="alert" role="alert">
                                <div class="alert-body">
                                    <i style="height: 2rem !important;width: 2rem; color:darkorchid" data-feather='alert-triangle'></i>
                                    <span> Detalhes do Processo Nº <strong>2021000270</strong></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section id="input-sizing">
                    <div class="row match-height">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <p class="card-title">Processo Nº 2021000270</p>
                                </div>
                                <div>
                                    <hr style="margin-top: -10px;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;" for="">Empenho</label>
                                                    <div>
                                                        <input type="text" class="form-control" autofocus />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;" for="">Favorecido</label>
                                                    <div>
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;" for="">CPF/CNPJ</label>
                                                    <div>
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <label style="font-size: 13px;">Cargo</label>
                                                <input type="text" name="" class="form-control">
                                            </div>
                                            <div class="col-4">
                                                <label style="font-size: 13px;">Período</label>
                                                <input type="text" name="" class="form-control">
                                            </div>
                                            <div class="col-4">
                                                <label style="font-size: 13px;">Destino</label>
                                                <input type="text" name="" class="form-control"><br>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-3">
                                                <label style="font-size: 13px;">Quantidade</label>
                                                <input type="text" name="" class="form-control">
                                            </div>
                                            <div class="col-3">
                                                <label style="font-size: 13px;">Valor</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12"><br>
                                                <label style="font-size: 13px;">Descrição / Histórico</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea><br>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <label style="font-size: 13px;">Função</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="col-4">
                                                <label style="font-size: 13px;">Subfunção</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="col-4">
                                                <label style="font-size: 13px;">Unidade</label>
                                                <input type="text" class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <label style="font-size: 13px;">Programa</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="col-3">
                                                <label style="font-size: 13px;">Elemento</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="col-3">
                                                <label style="font-size: 13px;">Ação</label>
                                                <input type="text" class="form-control"><br>
                                            </div>
                                            <div class="col-3">
                                                <label style="font-size: 13px;">Fonte</label>
                                                <input type="text" class="form-control"><br>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 text-right">
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#default"><i data-feather='file-text'></i> Movimentação</button>
                                            </div><br>
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
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Movimentação</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-hover table-responsive table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10%;">Data</th>
                                <th style="width: 10%;">Número</th>
                                <th style="width: 10%;">Movimento</th>
                                <th style="width: 10%;">Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr onclick="window.location.href = '<?= base_url() ?>index.php/despesas/detalheDespesas';">
                                <td>07/03/2021</td>
                                <td>125</td>
                                <td>Pagamento</td>
                                <td>R$ 5.250,00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Basic trigger modal end -->

</html>