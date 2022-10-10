<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">


<?php $this->load->view('includes/header'); ?>
<style>
    .card_custom {
        border: 1px solid rgba(34, 41, 47, 0.125);
        border-radius: 5px;
        border-color: #D3D3D3;
        margin-bottom: 2rem;
        box-shadow: 0 4px 24px 0 rgb(34 41 47 / 10%);
        -webkit-transition: all 0.3s ease-in-out, background 0s, color 0s, border-color 0s;
        transition: all 0.3s ease-in-out, background 0s, color 0s, border-color 0s;
    }

    .card_custom:hover {
        background-color: #F0F8FF !important;
    }
</style>
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
                                    <span> e-SIC - Serviço de Informação ao Cidadão
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section id="input-sizing">
                    <div class="row match-height">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">e-SIC - Serviço de Informação ao Cidadão</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <!-- button file upload starts -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p align="justify">
                                                            A Lei Federal nº 12.527/2011 garante ao cidadão o direito constitucional de acesso às informações públicas.<br><br>
                                                            O e-SIC é um Sistema Eletrônico do Serviço de Informações ao Cidadão
                                                            e permite que qualquer pessoa, física ou jurídica, encaminhe pedidos
                                                            de acesso a informação para órgãos e entidades do Poder Executivo e ou
                                                            Legislativo Municipal.
                                                        </p><br>
                                                        <p align="justify">
                                                            Para fazer a solicitação pessoalmente, basta fazer o <strong>download</strong> do formulário
                                                            de requerimento de informações e entregar no endereço do <strong>SIC Presencial</strong> informado a baixo.
                                                        </p><br>
                                                        <h4 class="card-title">e-SIC Físico</h4>
                                                        <p>
                                                            <strong>Setor:</strong> Prefeitura - Dep. de Ouvidoria<br>
                                                            <strong>Endereço:</strong> Praça João Rocha Borges, s/n, Centro<br>
                                                            <strong>Responsável:</strong> A definir<br>
                                                            <strong>E-mail:</strong> ouvidoria@uruana.go.gov.br<br>
                                                            <strong>Expediente:</strong> Segunda à Sexta 08h às 11h e 13h às
                                                            17h<br>
                                                            <strong>Telefone:</strong> (62) 3344-1100
                                                        </p><br>
                                                        <p align="justify">
                                                            Caso queira solicitar o pedido de forma presencial, baixe o <strong>Formulário de Requerimento</strong>.<br>
                                                        </p>

                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <button type="button" class="btn btn-primary"><i data-feather='download'></i> Pessoa Física</button>
                                                                <button type="button" class="btn btn-primary"><i data-feather='download'></i> Pessoa Jurídica</button>
                                                            </div>
                                                        </div><br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- button file upload ends -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <p class="card-title">Bem vindo à Ouvidoria</p>
                                </div>
                                <div>
                                    <hr style="margin-top: -10px;">
                                    <div class="card-body">
                                        <div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <a href="#" data-toggle="modal" data-target="#large">
                                                        <div class="card_custom text-center">
                                                            <div class="card-body">
                                                                <div class="avatar bg-light-info p-50 mb-1">
                                                                    <div class="avatar-content">
                                                                        <i class="fa fa-info-circle fa-2x" aria-hidden="true"></i>
                                                                    </div>
                                                                </div>
                                                                <h4 class="font-weight">SIC</h4>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="<?= base_url() ?>index.php/esic/denuncia">
                                                        <div class="card_custom text-center">
                                                            <div class="card-body">
                                                                <div class="avatar bg-light-warning p-50 mb-1">
                                                                    <div class="avatar-content">
                                                                        <i class="fa fa-bullhorn fa-2x" class="font-large-1"></i>
                                                                    </div>
                                                                </div>
                                                                <h4 class="font-weight">Denúnica</h4>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="<?=base_url()?>index.php/esic/elogio">
                                                        <div class="card_custom text-center">
                                                            <div class="card-body">
                                                                <div class="avatar bg-light-danger p-50 mb-1">
                                                                    <div class="avatar-content">
                                                                    <i class="fa fa-thumbs-up fa-2x" aria-hidden="true"></i></i>
                                                                    </div>
                                                                </div>
                                                                <h4 class="font-weight">Elogio</h4>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="<?= base_url() ?>index.php/esic/sugestao">
                                                        <div class="card_custom text-center">
                                                            <div class="card-body">
                                                                <div class="avatar bg-light-primary p-50 mb-1">
                                                                    <div class="avatar-content">
                                                                    <i class="fa fa-heart fa-2x" aria-hidden="true"></i>
                                                                    </div>
                                                                </div>
                                                                <h4 class="font-weight">Sugestão</h4>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="<?= base_url() ?>index.php/esic/reclamacao">
                                                        <div class="card_custom text-center hover-overlay" style="">
                                                            <div class="card-body">
                                                                <div class="avatar bg-light-secondary p-50 mb-1">
                                                                    <div class="avatar-content">
                                                                    <i class="fa fa-thumbs-down fa-2x" aria-hidden="true"></i>
                                                                    </div>
                                                                </div>
                                                                <h4 class="font-weight">Reclamação</h4>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="<?= base_url() ?>index.php/esic/solicitacao">
                                                        <div class="card_custom text-center">
                                                            <div class="card-body">
                                                                <div class="avatar bg-light-success p-50 mb-1">
                                                                    <div class="avatar-content">
                                                                        <i class="fa fa-question-circle fa-2x" aria-hidden="true"></i>
                                                                    </div>
                                                                </div>
                                                                <h4 class="font-weight">Solicitação</h4>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p align="justify">
                                                        O e-SIC (Sistema Eletrônico do Serviço de Informações ao
                                                        Cidadão)
                                                        permite que qualquer pessoa, física ou jurídica, encaminhe
                                                        pedidos de acesso a informação
                                                        para órgãos e entidades do Poder Executivo e ou Legislativo
                                                        Municipal permitindo que acompanhe
                                                        o prazo e receba a resposta da solicitação realizada. O cidadão
                                                        ainda pode entrar com recursos
                                                        e apresentar reclamações sem burocracia. <br><br>

                                                        Caso prefira fazer ou entregar a sua solicitação pessoalmente, faça o download do <strong>formulário de requerimento de informações</strong> e entregue no endereço do SIC Presencial informado ao lado.
                                                    </p><br>
                                                </div>



                                                <div class="col-md-12">
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#large"><i class="fa fa-info-circle" aria-hidden="true"></i> Solicitar informação</button>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_acompanhamento"><i class="fa fa-search" aria-hidden="true"></i> Acompanhar solicitação
                                                    </button>
                                                </div>


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


    <div class="modal-size-lg d-inline-block">
        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade text-left" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
            <div class="modal-dialog  modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title text-white" id="myModalLabel17">e-SIC - Solicitar Informação</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-success" role="alert">
                            <div class="alert-body">Em atendimento ao Decreto Federal Nº 7.724/2012, é necessário que o requerente
                                informe seu nome, número de um documento válido e que especifique de forma clara e precisa a informação requerida.</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4">
                                <label style="font-size: 13px;">Tipo de Atendimento *</label>
                                <select name="tipo_atendimento" class=" select2 form-control" required="">
                                    <option value="">Selecione</option>
                                    <option value="Denúncia">Denúncia</option>
                                    <option value="Elogio">Elogio</option>
                                    <option value="Sugestão">Sugestão</option>
                                    <option value="Reclamação">Reclamação</option>
                                    <option value="Solicitação">Solicitação</option>
                                    <option value="Ouvidoria">Ouvidoria</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label style="font-size: 13px;">Tipo do Documento *</label>
                                <select required="" name="tipo_documento" class="select2 form-control">
                                    <option value="">Selecione</option>
                                    <option value="CPF">CPF</option>
                                    <option value="CNPJ">CNPJ</option>
                                    <option value="RG">RG</option>
                                    <option value="CNH">CNH</option>
                                    <option value="OUTRO">OUTRO </option>
                                </select>
                            </div>
                            <div class="col-lg-5">
                                <label style="font-size: 13px;" class="">Número do documento: *</label>
                                <input required="" type="text" name="numero_documento" class="form-control" placeholder=""><br>
                            </div>
                            <div class="col-lg-8">
                                <label style="font-size: 13px;" class="">Requerente:</label>
                                <input type="text" name="requerente" class="form-control" placeholder="" style="text-transform: uppercase;"><br>
                            </div>
                            <div class="col-lg-4">
                                <label style="font-size: 13px;" class="">Data deNascimento:</label>
                                <input type="date" name="data_nascimento" class="form-control" placeholder="">
                            </div>
                            <div class="col-lg-3">
                                <label style="font-size: 13px;">Sexo</label>
                                <select name="sexo" class="select2 form-control">
                                    <option value="">Selecione</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                    <option value="Não especificar">Não especificar</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label style="font-size: 13px;">País *</label>
                                <select required="" name="pais" class="select2 form-control">
                                    <option value="">Selecione</option>
                                    <option value="Brasil">Brasil</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <label style="font-size: 13px;">UF *</label>
                                <select required="" name="uf" class="select2 form-control">
                                    <option value="">UF</option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BH</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MS">MS</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>
                                </select><br>
                            </div>
                            <script language="JavaScript">
                                function mascara(t, mask) {
                                    var i = t.value.length;
                                    var saida = mask.substring(1, 0);
                                    var texto = mask.substring(i)
                                    if (texto.substring(0, 1) !=
                                        saida) {
                                        t.value += texto.substring(0,
                                            1);
                                    }
                                }
                            </script>
                            <div class="col-lg-3">
                                <label style="font-size: 13px;" class="">CEP: *</label>
                                <input required="" type="text" name="cep" class="form-control" onkeypress="mascara(this, '#####-###')" maxlength="9">
                            </div>
                            <div class="col-lg-7">
                                <label style="font-size: 13px;" class="">Endereço</label>
                                <input type="text" name="endereco" class="form-control" placeholder="" autocomplete="off">
                            </div>
                            <div class="col-lg-5">
                                <label style="font-size: 13px;">Raça</label>
                                <select name="raca" class="select2 form-control">
                                    <option value="">Selecione</option>
                                    <option value="Branco">Branco</option>
                                    <option value="Pardo">Pardo</option>
                                    <option value="Preto">Preto</option>
                                    <option value="Amarelo">Amarelo</option>
                                    <option value="Indígena">Indígena</option>
                                    <option value="Não especificar">Não especificar</option>
                                </select><br>
                            </div>
                            <div class="col-lg-5">
                                <label style="font-size: 13px;">Escolaridade *</label>
                                <select required="" name="escolaridade" id="escolaridade" class="select2 form-control">
                                    <option value="">Selecione</option>
                                    <option value="Não Alfabetizado">Não Alfabetizado</option>
                                    <option value="Ensino Fundamental">Ensino Fundamental</option>
                                    <option value="Ensino Médio">Ensino Médio</option>
                                    <option value="Ensino Superior">Ensino Superior</option>
                                    <option value="Mestrado">Mestrado</option>
                                    <option value="Doutorado">Doutorado</option>
                                    <option value="Pós-doutorado">Pós-doutorado</option>
                                    <option value="Não especificar">Não especificar</option>
                                </select>
                            </div>
                            <div class="col-lg-7">
                                <label style="font-size: 13px;" class="">Profissão</label>
                                <input type="text" name="profissao" class="form-control"><br>
                            </div>
                            <div class="col-lg-12">
                                <label style="font-size: 13px;" class="">E-mail</label>
                                <input type="email" name="email" id="email" class="form-control"><br>
                            </div>
                            <div class="col-lg-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                    <label style="font-size: 13px;" class="custom-control-label" for="customCheck1">Quero receber notificações sobre esta solicitação por e-mail</label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2" />
                                    <label style="font-size: 13px;" class="custom-control-label" for="customCheck2">Quero manter meus dados pessoais em sigilo</label>
                                </div><br>
                            </div>

                            <div class="col-lg-12">
                                <label style="font-size: 13px;" for="exampleTextarea">Escreva sua solicitação</label>
                                <textarea name="solicitacao" class="form-control" rows="5"></textarea><br>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group form-group-last row">
                                    <div class="col-lg-12">
                                        <div class="dropzone dropzone-multi" id="kt_dropzone_4">
                                            <div class="dropzone-panel">
                                                <a class="dropzone-select btn btn-label-brand btn-bold btn-sm dz-clickable">Anexar arquivos</a>
                                                <a class="dropzone-upload btn btn-label-brand btn-bold btn-sm">Enviar todos</a>
                                                <a class="dropzone-remove-all btn btn-label-brand btn-bold btn-sm">Remover todos</a>
                                            </div>
                                            <div class="dropzone-items">
                                            </div>
                                        </div>
                                        <span class="form-text text-muted">Envio máximo de 5 arquivos.</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i data-feather='x-circle'></i> Cancelar</button>
                        <button type="button" class="btn btn-success" data-dismiss="modal"><i data-feather='send'></i> Enviar solicitação</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-size-lg d-inline-block">

        <!-- Modal -->
        <div class="modal fade text-left" id="modal_acompanhamento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
            <div class="modal-dialog modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title text-white" id="myModalLabel17">Acompanhar Solicitação</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="">

                        <div class="modal-body">

                            <div class="alert alert-success" role="alert">
                                <div class="alert-body">Digite o Código de Acompanhamento para verificar o status de sua solicitação.</div>
                            </div>
                            <div class="col-lg-12">
                                <label style="font-size: 13px;" class="">Código do Protocolo</label>
                                <input type="text" name="" class="form-control" placeholder="" autocomplete="off" autofocus required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i data-feather='x-circle'></i> Cancelar</button>
                            <button type="submit" class="btn btn-success"><i class="fa fa-search" aria-hidden="true"></i> Buscar solicitação</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view("includes/footer") ?>
    <div class="modal fade text-left" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title text-white" id="myModalLabel17">e-SIC - Solicitar Informação</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-success" role="alert">
                        <div class="alert-body">Em atendimento ao Decreto Federal Nº 7.724/2012, é necessário que o requerente
                            informe seu nome, número de um documento válido e que especifique de forma clara e precisa a informação requerida.</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-4">
                            <label style="font-size: 13px;">Tipo de Atendimento *</label>
                            <select name="tipo_atendimento" class=" select2 form-control" required="">
                                <option value="">Selecione</option>
                                <option value="Denúncia">Denúncia</option>
                                <option value="Elogio">Elogio</option>
                                <option value="Sugestão">Sugestão</option>
                                <option value="Reclamação">Reclamação</option>
                                <option value="Solicitação">Solicitação</option>
                                <option value="Ouvidoria">Ouvidoria</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label style="font-size: 13px;">Tipo do Documento *</label>
                            <select required="" name="tipo_documento" class="select2 form-control">
                                <option value="">Selecione</option>
                                <option value="CPF">CPF</option>
                                <option value="CNPJ">CNPJ</option>
                                <option value="RG">RG</option>
                                <option value="CNH">CNH</option>
                                <option value="OUTRO">OUTRO </option>
                            </select>
                        </div>
                        <div class="col-lg-5">
                            <label style="font-size: 13px;" class="">Número do documento: *</label>
                            <input required="" type="text" name="numero_documento" class="form-control" placeholder=""><br>
                        </div>
                        <div class="col-lg-8">
                            <label style="font-size: 13px;" class="">Requerente:</label>
                            <input type="text" name="requerente" class="form-control" placeholder="" style="text-transform: uppercase;"><br>
                        </div>
                        <div class="col-lg-4">
                            <label style="font-size: 13px;" class="">Data deNascimento:</label>
                            <input type="date" name="data_nascimento" class="form-control" placeholder="">
                        </div>
                        <div class="col-lg-3">
                            <label style="font-size: 13px;">Sexo</label>
                            <select name="sexo" class="select2 form-control">
                                <option value="">Selecione</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                                <option value="Não especificar">Não especificar</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label style="font-size: 13px;">País *</label>
                            <select required="" name="pais" class="select2 form-control">
                                <option value="">Selecione</option>
                                <option value="Brasil">Brasil</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <label style="font-size: 13px;">UF *</label>
                            <select required="" name="uf" class="select2 form-control">
                                <option value="">UF</option>
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AP">AP</option>
                                <option value="AM">AM</option>
                                <option value="BA">BH</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MT">MT</option>
                                <option value="MS">MS</option>
                                <option value="MG">MG</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PR">PR</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RS">RS</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="SC">SC</option>
                                <option value="SP">SP</option>
                                <option value="SE">SE</option>
                                <option value="TO">TO</option>
                            </select><br>
                        </div>
                        <script language="JavaScript">
                            function mascara(t, mask) {
                                var i = t.value.length;
                                var saida = mask.substring(1, 0);
                                var texto = mask.substring(i)
                                if (texto.substring(0, 1) !=
                                    saida) {
                                    t.value += texto.substring(0,
                                        1);
                                }
                            }
                        </script>
                        <div class="col-lg-3">
                            <label style="font-size: 13px;" class="">CEP: *</label>
                            <input required="" type="text" name="cep" class="form-control" onkeypress="mascara(this, '#####-###')" maxlength="9">
                        </div>
                        <div class="col-lg-7">
                            <label style="font-size: 13px;" class="">Endereço</label>
                            <input type="text" name="endereco" class="form-control" placeholder="" autocomplete="off">
                        </div>
                        <div class="col-lg-5">
                            <label style="font-size: 13px;">Raça</label>
                            <select name="raca" class="select2 form-control">
                                <option value="">Selecione</option>
                                <option value="Branco">Branco</option>
                                <option value="Pardo">Pardo</option>
                                <option value="Preto">Preto</option>
                                <option value="Amarelo">Amarelo</option>
                                <option value="Indígena">Indígena</option>
                                <option value="Não especificar">Não especificar</option>
                            </select><br>
                        </div>
                        <div class="col-lg-5">
                            <label style="font-size: 13px;">Escolaridade *</label>
                            <select required="" name="escolaridade" id="escolaridade" class="select2 form-control">
                                <option value="">Selecione</option>
                                <option value="Não Alfabetizado">Não Alfabetizado</option>
                                <option value="Ensino Fundamental">Ensino Fundamental</option>
                                <option value="Ensino Médio">Ensino Médio</option>
                                <option value="Ensino Superior">Ensino Superior</option>
                                <option value="Mestrado">Mestrado</option>
                                <option value="Doutorado">Doutorado</option>
                                <option value="Pós-doutorado">Pós-doutorado</option>
                                <option value="Não especificar">Não especificar</option>
                            </select>
                        </div>
                        <div class="col-lg-7">
                            <label style="font-size: 13px;" class="">Profissão</label>
                            <input type="text" name="profissao" class="form-control"><br>
                        </div>
                        <div class="col-lg-12">
                            <label style="font-size: 13px;" class="">E-mail</label>
                            <input type="email" name="email" id="email" class="form-control"><br>
                        </div>
                        <div class="col-lg-12">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                <label style="font-size: 13px;" class="custom-control-label" for="customCheck1">Quero receber notificações sobre esta solicitação por e-mail</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2" />
                                <label style="font-size: 13px;" class="custom-control-label" for="customCheck2">Quero manter meus dados pessoais em sigilo</label>
                            </div><br>
                        </div>

                        <div class="col-lg-12">
                            <label style="font-size: 13px;" for="exampleTextarea">Escreva sua solicitação</label>
                            <textarea name="solicitacao" class="form-control" rows="5"></textarea><br>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group form-group-last row">
                                <div class="col-lg-12">
                                    <div class="dropzone dropzone-multi" id="kt_dropzone_4">
                                        <div class="dropzone-panel">
                                            <a class="dropzone-select btn btn-label-brand btn-bold btn-sm dz-clickable">Anexar arquivos</a>
                                            <a class="dropzone-upload btn btn-label-brand btn-bold btn-sm">Enviar todos</a>
                                            <a class="dropzone-remove-all btn btn-label-brand btn-bold btn-sm">Remover todos</a>
                                        </div>
                                        <div class="dropzone-items">
                                        </div>
                                    </div>
                                    <span class="form-text text-muted">Envio máximo de 5 arquivos.</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i data-feather='x-circle'></i> Cancelar</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal"><i data-feather='send'></i> Enviar solicitação</button>

                </div>
            </div>
        </div>
    </div>

</body>
<!-- END: Body-->

</html>