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
                                    <span> Detalhes e Download de <strong>PREGÃO PRESENCIAL - 006/2021</strong></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section id="input-sizing">
                    <div class="row match-height">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card card-browser-states">
                                <div class="card-header">
                                    <div>
                                        <h4 class="card-title">Anexos</h4>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <div class="browser-states">
                                        <div class="media">
                                            <img src="<?= base_url() ?>app-assets/images/icons/pdf.png" class="rounded mr-1" height="30" alt="Mozila Firefox" />
                                            <h6 class="align-self-center mb-0">Edital Pregão Presencial</h6>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="font-weight-bold text-body-heading mr-1">
                                                <div class="dropdown chart-dropdown">
                                                    <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-toggle="dropdown"></i>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a style="color: #5E5873;"class="dropdown-item" href="javascript:void(0);"><i data-feather='eye'></i> Visualizar</a>
                                                        <a style="color: #5E5873;" class="dropdown-item" href="javascript:void(0);"><i data-feather='download-cloud'></i> Baixar</a>
                                                        <a style="color: #5E5873;" class="dropdown-item" href="javascript:void(0);"><i data-feather='x-circle'></i> Excluir</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="browser-state-chart-warning"></div>
                                        </div>
                                    </div>
                                    <div class="browser-states">
                                        <div class="media">
                                        <img src="<?= base_url() ?>app-assets/images/icons/pdf.png" class="rounded mr-1" height="30" alt="Mozila Firefox" />
                                            <h6 class="align-self-center mb-0">Ata de Registro de Preços</h6>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="font-weight-bold text-body-heading mr-1">
                                                <div class="dropdown chart-dropdown">
                                                    <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-toggle="dropdown"></i>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a style="color: #5E5873;"class="dropdown-item" href="javascript:void(0);"><i data-feather='eye'></i> Visualizar</a>
                                                        <a style="color: #5E5873;" class="dropdown-item" href="javascript:void(0);"><i data-feather='download-cloud'></i> Baixar</a>
                                                        <a style="color: #5E5873;" class="dropdown-item" href="javascript:void(0);"><i data-feather='x-circle'></i> Excluir</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="browser-state-chart-warning"></div>
                                        </div>
                                    </div>
                                    <div class="browser-states">
                                        <div class="media">
                                        <img src="<?= base_url() ?>app-assets/images/icons/pdf.png" class="rounded mr-1" height="30" alt="Mozila Firefox" />
                                            <h6 class="align-self-center mb-0">Termo de Homologação </h6>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="font-weight-bold text-body-heading mr-1">
                                                <div class="dropdown chart-dropdown">
                                                    <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-toggle="dropdown"></i>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a style="color: #5E5873;"class="dropdown-item" href="javascript:void(0);"><i data-feather='eye'></i> Visualizar</a>
                                                        <a style="color: #5E5873;" class="dropdown-item" href="javascript:void(0);"><i data-feather='download-cloud'></i> Baixar</a>
                                                        <a style="color: #5E5873;" class="dropdown-item" href="javascript:void(0);"><i data-feather='x-circle'></i> Excluir</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="browser-state-chart-warning"></div>
                                        </div>
                                    </div>
                                    <div class="browser-states">
                                        <div class="media">
                                        <img src="<?= base_url() ?>app-assets/images/icons/pdf.png" class="rounded mr-1" height="30" alt="Mozila Firefox" />
                                            <h6 class="align-self-center mb-0">Termo de Adjudicação</h6>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="font-weight-bold text-body-heading mr-1">
                                                <div class="dropdown chart-dropdown">
                                                    <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-toggle="dropdown"></i>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a style="color: #5E5873;"class="dropdown-item" href="javascript:void(0);"><i data-feather='eye'></i> Visualizar</a>
                                                        <a style="color: #5E5873;" class="dropdown-item" href="javascript:void(0);"><i data-feather='download-cloud'></i> Baixar</a>
                                                        <a style="color: #5E5873;" class="dropdown-item" href="javascript:void(0);"><i data-feather='x-circle'></i> Excluir</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="browser-state-chart-warning"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <p class="card-title">Pregão Presencial - 006/2021</p>
                                </div>
                                <div>
                                    <hr style="margin-top: -10px;">
                                    <div class="card-body">
                                        <div class="row">
                                            
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;" for="">Órgão</label>
                                                    <select name="orgao" class="select2 form-control">
                                                        <option value="">Selecione</option>
                                                        <option value="">Fundo Municipal de Assistência Social de Uruana</option>
                                                        <option value="">Fundo Municipal de Saúde de Uruana</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;" for="">Situação</label>
                                                    <select class="select2 form-control">
                                                        <option value="">Selecione</option>
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
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;" for="">Modalidade</label>
                                                    <select name="modalidade" class=" select2 form-control">
                                                        <option value="">Selecione</option>
                                                        <option value="1">Pregão Presencial</option>
                                                        <option value="2">Convite</option>
                                                        <option value="3">Tomada de Preços</option>
                                                        <option value="4">Dispensa</option>
                                                        <option value="5">Credenciamento</option>
                                                        <option value="6">Chamada Pública</option>
                                                        <option value="7">Inexigibilidade</option>
                                                        <option value="8">Adesão ao SRP</option>
                                                        <option value="9">Concorrência</option>
                                                        <option value="10">Leião</option>
                                                        <option value="11">Pregão Eletrônico</option>
                                                        <option value="12">Chamamento Público</option>
                                                        <option value="13">Outros</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label style="font-size: 13px;">Publicação</label>
                                                <input type="date" name="data_publicacao" class="form-control">
                                            </div>
                                            <div class="col-3">
                                                <label style="font-size: 13px;">Data de abertura</label>
                                                <input type="date" class="form-control" name="data_abertura">
                                            </div>
                                            <div class="col-2">
                                                <label style="font-size: 13px;">Hora de abertura</label>
                                                <input type="time" class="form-control" name="hora_abertura">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <label style="font-size: 13px;">Valor estimado</label>
                                                <input type="text" name="valor_estimado" class="form-control">
                                            </div>
                                            <div class="col-3">
                                                <label style="font-size: 13px;">Valor total</label>
                                                <input type="text" name="valor_total" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <div class="demo-inline-spacing">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                                        <label class="custom-control-label" for="customCheck1">Covid-19</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck2" />
                                                        <label class="custom-control-label" for="customCheck2">Lei 14.065/2020</label>
                                                        <a href="#" data-toggle="popover" data-placement="top" data-container="body" data-original-title="Atenção!" data-content="Marque essa opção se o procedimento de contratação se deu com base no artigo 1°, I ou II da Lei 14.065/2020 'Alargamento no limite de dispensa a licitação ou pagamento antecipado nas licitações e nos contratos.' "> <i data-feather='help-circle'></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12"><br>
                                                <label style="font-size: 13px;">Descrição / Objeto</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea><br>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;" for="">CPF/CNPJ do Vencedor</label>
                                                    <div>
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;" for="">Nome do Vencedor</label>
                                                    <div>
                                                        <input type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="card-footer">
                                                <div class="col-md-12">
                                                    <button type="button" class="btn btn-primary"><i data-feather='download'></i> Baixar anexos</button>
                                                    <button type="button" class="btn btn-primary"><i data-feather='trash-2'></i> Excluir anexos</button>
                                                    <div style="float: right;" class="btn-group">
                                                        <button type="button" class="btn btn-primary waves-effect waves-float waves-light"><i data-feather='save'></i> Salvar</button>
                                                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split waves-effect waves-float waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="javascript:void(0);">Adicionar novo</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Imprimir comprovante</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Visualizar</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Voltar</a>
                                                        </div>
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

</html>