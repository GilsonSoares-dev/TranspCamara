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
                                    <span><strong>PAINEL DE CONTROLE DE INFORMAÇÕES</strong></span> - Aqui é gerada toda a estatística do Sistema de Informação ao Cidadão e Ouvidoria Presencial.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section id="input-sizing">
                    <div class="row match-height">
                        <div class="col-md-3 col-12">
                            <div class="card">
                                <div class="card-header" style="background-color: #3F729B;"  >
                                    <p style="font-size: 15px" class="card-title text-white"><i class="fa fa-assistive-listening-systems" aria-hidden="true"></i> Estatísticas da Ouvidoria</p>
                                </div>
                                <div>
                                    <hr style="margin-top: -10px;">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <span> Solicitação.</span>
                                                <span class="badge badge-success badge-pill">0</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <span> Reclamação</span>
                                                <span class="badge badge-success badge-pill">0</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <span> Sugestão</span>
                                                <span class="badge badge-success badge-pill">0</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <span> Elogio</span>
                                                <span class="badge badge-success badge-pill">0</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <span> Denúncia</span>
                                                <span class="badge badge-success badge-pill">0</span>
                                            </li>
                                        </ul>
                                    </div>
                                   
                                    <div class="col-12 text-right" style="margin-top: 95px">
                                        <button type="button" class="btn btn-instagram"><i data-feather='printer'></i> Imprimir estatísticas</button>
                                    </div><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="card">
                                <div class="card-header" style="background-color: #3F729B;" >
                                    <p style="font-size: 15px" class="card-title text-white"><i class="fa fa-bullhorn" aria-hidden="true"></i> Estatísticas do e-SIC</p>
                                </div>
                                <div>
                                    <hr style="margin-top: -10px;">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <span> Aguardando.</span>
                                                <span class="badge badge-info badge-pill">0</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <span> Em andamento</span>
                                                <span class="badge badge-info badge-pill">0</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <span> Respondido</span>
                                                <span class="badge badge-info badge-pill">0</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <span> Deferido</span>
                                                <span class="badge badge-info badge-pill">0</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <span> Indeferido</span>
                                                <span class="badge badge-info badge-pill">0</span>
                                            </li>
                                        </ul>
                                    </div>
                                
                                    <div class="col-12 text-right" style="margin-top: 95px">
                                        <button type="button" class="btn btn-instagram"><i data-feather='printer'></i> Imprimir estatísticas</button>
                                    </div><br>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header" style="background-color: #3F729B;" >
                                    <p style="font-size: 15px" class="card-title text-white"><i class="fa fa-user-circle" aria-hidden="true"></i> Infomações da Ouvidoria Presencial</p>
                                </div>
                                <div>
                                    <hr style="margin-top: -10px;">
                                    <div class="card-body">
                                        <div class="alert alert-warning" role="alert">
                                            <div class="alert-body">As informações aqui cadastradas serão exibidas no local de endereço e informações do e-SIC Físico.</div>
                                        </div>

                                        <form action="">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label style="font-size: 13px;" for="">Setor/Departamento</label>
                                                        <div>
                                                            <input type="text" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label style="font-size: 13px;" for="">Endereço</label>
                                                        <div>
                                                            <input type="text" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label style="font-size: 13px;" for="">Responsável</label>
                                                        <div>
                                                            <input type="text" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label style="font-size: 13px;" for="">E-mail</label>
                                                        <div>
                                                            <input type="text" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label style="font-size: 13px;" for="">Expediente</label>
                                                        <div>
                                                            <input type="text" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label style="font-size: 13px;" for="">Telefone</label>
                                                        <div>
                                                            <input type="text" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <hr>
                                    <div class="col-12 text-right">
                                        <button type="button" class="btn btn-instagram"><i data-feather='upload-cloud'></i> Salvar</button>
                                        <button type="button" class="btn btn-instagram"><i data-feather='edit'></i> Editar</button>
                                        <button type="reset" class="btn btn-instagram"><i class="fa fa-paint-brush" aria-hidden="true"></i> Limpar campos</button>
                                    </div><br>
                                </div>
                                </form>
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

</html>