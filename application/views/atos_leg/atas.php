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
     .custom_tabela{
        font-family: Arial, Serif !important;
        color: #6B6C6B !important;
        font-size: 1rem !important;
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
                                    <span>A Ata de Sessão é o documento redigito durante a sessão da Câmara onde são relatados todos os fatos que ocorrem durante a sessão.</span>
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
                                <h4 class="card-title">Atas de Sessão</h4><br><br>
                            <!--
                                <div class="col-md-2">
                                    <select class="select2 form-control">
                                        <option value="Modalidade">Filtrar Covid</option>
                                        <option value="">Sim</option>
                                        <option value="">Não</option>
                                    </select>
                                </div> -->
                                <a href="<?= base_url() ?>index.php/atos_leg/nata" class="btn btn-primary">
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
                                                <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="Buscar...">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Basic -->
                                    <div style="margin-left: -33px" class="col-md-3 ">
                                        <div class="form-group">
                                            <select class="select2 form-control">
                                                <option value="Modalidade">Autor</option>
                                                <option value="">Vereador 1</option>                                                
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
                                                            <th style="width: 15%;">Tipo de Sessão</th>
                                                            <th style="width: 15%;">Data da Sessão</th>                                                                                                        
                                                            <th style="width: 70%;">Descrição</th>                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr onclick="window.location.href = '<?= base_url() ?>index.php/atos_leg/nata';">                                                          
                                                            <td>Ordinária</td> 
                                                            <td>06/06/2021</td>                                                          
                                                            <td style="text-align: justify;">ATA DA SESSÃO ORDINÁRIA DA CÂMARA MUNICIPAL DE URUANA, REALIZADA NO DIA 23 DE JUNHO DE 2021. REUNIU-SE ORDINARIAMENTE A CÂMARA MUNICIPAL, PRECISAMENTE ÀS 19H15MIN. (DEZENOVE HORAS E QUINZE MINUTOS). SOB A PRESIDÊNCIA DO VEREADOR VICE-PRESIDENTE GILMAR DE MORAIS SANTOS.</td>
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