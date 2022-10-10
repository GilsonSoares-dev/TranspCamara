<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html class="loading" lang="pt-br" data-textdirection="ltr">
<?php $this->load->view('includes/header'); ?>
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">
    </style>
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

                <section id="input-sizing">
                    <div class="row match-height">
                        <div class="col-md-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Anexos</h4>
                                </div>
                                <hr style="margin-top: -10px;">
                                <div class="card-body">
                                    <div class="row">
                                        <!-- button file upload starts -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p class="card-text">Clique e adicione os anexos, ou apenas arraste e solte os arquivos aqui.</p>
                                                        <form action="#" class="dropzone dropzone-area" id="dpz-btn-select-files">
                                                            <p style="font-size: 15px" class="dz-message">Arraste ou clique para anexar os arquivos</p>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- button file upload ends -->
                                    </div>
                                    <div class="card-footer">
                                    <div class="col-md-12">
                                    <div class="btn-group">
                                    <a style="margin-top: 160px" class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i data-feather='plus-circle'></i>  Contrato</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="<?= base_url() ?>index.php/contratos/cadContrato">Vincular contrato </a>
                                        <a class="dropdown-item" href="" >Ata de Registro de Preços</a>
                                    </div>
                                </div>                                  
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <p class="card-title">Nova Licitação</p>
                                </div>
                                <div>
                                    <hr style="margin-top: -10px;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;" for="">Lei Base</label>
                                                    <select name="orgao" class="select2 form-control">
                                                        <option value="">Selecione</option>
                                                        <option value="">Lei n° 8.666/1993</option>
                                                        <option value="">Lei n° 10.520/2002</option>
                                                        <option value="">Lei n° 14.133/2021</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;" for="">Órgão</label>
                                                    <select name="orgao" class="select2 form-control">
                                                        <option value="">Selecione</option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;" for="">Modalidade</label>
                                                    <select name="modalidade" class=" select2 form-control">
                                                        <option value="">Selecione</option>
                                                        <option value="1">Preção Presencial</option>
                                                        <option value="1">Regime Diferenciado de Contratação</option>
                                                        <option value="2">Convite</option>
                                                        <option value="3">Tomada de Preços</option>
                                                        <option value="4">Dispensa</option>
                                                        <option value="5">Credenciamento</option>
                                                        <option value="6">Chamada Pública</option>
                                                        <option value="7">Inexigibilidade</option>
                                                        <option value="8">Adesão ao SRP</option>
                                                        <option value="9">Concorrência</option>
                                                        <option value="10">Leilão</option>
                                                        <option value="11">Pregão Eletrônico</option>                                                      
                                                        <option value="12">Chamamento Público</option>  
                                                        <option value="13">Indiferente</option>                              
                                                        <option value="14">OUTROS</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;">N° da Licitação</label>
                                                    <input type="text" name="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;" for="">Ano</label>
                                                    <select class="select2 form-control">
                                                        <option value="">Selecione</option>
                                                        <option value="">2021</option>
                                                        <option value="">2020</option>
                                                        <option value="">2019</option>
                                                        <option value="">2018</option>
                                                        <option value="">2017</option>
                                                        <option value="">2016</option>
                                                        <option value="">2015</option>
                                                        <option value="">2014</option>
                                                        <option value="">2013</option>
                                                        <option value="">2012</option>
                                                        <option value="">2011</option>
                                                        <option value="">2010</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;" for="">Realização de Contrato</label>
                                                    <select class="select2 form-control">
                                                        <option value="">Selecione</option>
                                                        <option value="">Sim</option>
                                                        <option value="">Não</option>
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
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="demo-inline-spacing">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                                            <label class="custom-control-label" for="customCheck1">Referente à Covid-19</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck2" />
                                                            <label class="custom-control-label" for="customCheck2">Lei 14.065/2020</label>
                                                            <a href="#" data-toggle="popover" data-placement="top" data-container="body" data-original-title="Atenção!" data-content="Marque essa opção se o procedimento de contratação se deu com base no artigo 1°, I ou II da Lei 14.065/2020 'Alargamento no limite de dispensa a licitação ou pagamento antecipado nas licitações e nos contratos.' "> <i data-feather='help-circle'></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12"><br>
                                                <div class="form-group">
                                                    <label style="font-size: 13px;">Descrição / Objeto</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" style="text-transform: uppercase;"></textarea><br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;">Data de publicação</label>
                                                    <input type="date" name="data_publicacao" value="<?= date("Y-m-d") ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;">Data de abertura</label>
                                                    <input type="date" class="form-control" value="<?= date("Y-m-d") ?>" name="data_abertura">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;">Data de fechamento</label>
                                                    <input type="date" class="form-control" value="<?= date("Y-m-d") ?>" name="data_abertura">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;">Hora de abertura</label>
                                                    <input type="time" class="form-control" name="hora_abertura"><br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label style="font-size: 13px;">Valor estimado R$</label>
                                                    <input type="text" name="valor_estimado" class="form-control" onKeyPress="return(moeda(this,'.',',',event))">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox" style="margin-top: 32px;">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck15" />
                                                        <label class="custom-control-label" for="customCheck15">Sem valor definido</label>
                                                    </div>
                                                </div>
                                            </div>                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-primary"><i data-feather='refresh-ccw'></i> Anexos</button>  
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable"><i data-feather='user-plus'></i> Cadastrar Vencedores</button>
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
                </section>
                <div class="scrolling-inside-modal">
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div style="background-color: #3F729B;" class="modal-header">
                                    <h5 class="modal-title text-white" id="exampleModalScrollableTitle">Vencedores da Licitação</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label style="font-size: 13px;">CPF/CNPJ</label>
                                            <input type="text" class="form-control" >
                                        </div>
                                        <div class="col-md-5">
                                            <label style="font-size: 13px;">Contratado</label>
                                            <input type="text" class="form-control" autofocus>
                                        </div>
                                        <div class="col-md-3">
                                            <label style="font-size: 13px;">Valor Total</label>
                                            <input type="text" class="form-control" onKeyPress="return(moeda(this,'.',',',event))"><br>
                                        </div>
                                        <div class="col-md-1">
                                            <label style="font-size: 13px;">Ação</label>
                                            <a class="icone_lixo" style="width: 18px; height:auto; margin-top: 10;" data-feather='trash-2'></a><br>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label style="font-size: 13px;">Descrição</label>
                                            <input type="text" name="" class="form-control">
                                        </div>
                                        <div class="col-md-2">
                                            <label style="font-size: 13px;">Quantidade</label>
                                            <input type="text" name="" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <label style="font-size: 13px;">Valor Unitário</label>
                                            <input type="text" name="" class="form-control" onKeyPress="return(moeda(this,'.',',',event))"><br><br>
                                        </div>
                                        <div class="col-md-1">
                                            <a class="icone_lixo" style="width: 18px; height:auto; margin-top: 33;" data-feather='trash-2'></a><br>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <div>   
                                            <button type="button" class="btn btn-instagram"><i data-feather='file-text'></i> Adicionar Contratado</button>
                                            <button type="button" class="btn btn-instagram"><i data-feather='plus-circle'></i> Adicionar Itens</button>
                                        </div>
                                        <button type="button" class="btn btn-instagram"><i data-feather='save'></i> Salvar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Conteúdo -->
                </div>
            </div>
        </div>
        <!-- END: Content-->
        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>
        <?php $this->load->view("includes/footer") ?>

        <script language="javascript">   
        function moeda(a, e, r, t) {
            let n = ""
            , h = j = 0
            , u = tamanho2 = 0
            , l = ajd2 = ""
            , o = window.Event ? t.which : t.keyCode;
            if (13 == o || 8 == o)
                return !0;
            if (n = String.fromCharCode(o),
            -1 == "0123456789".indexOf(n))
                return !1;
            for (u = a.value.length,
            h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++)
                ;
            for (l = ""; h < u; h++)
                -1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
            if (l += n,
            0 == (u = l.length) && (a.value = ""),
            1 == u && (a.value = "0" + r + "0" + l),
            2 == u && (a.value = "0" + r + l),
            u > 2) {
                for (ajd2 = "",
                j = 0,
                h = u - 3; h >= 0; h--)
                    3 == j && (ajd2 += e,
                    j = 0),
                    ajd2 += l.charAt(h),
                    j++;
                for (a.value = "",
                tamanho2 = ajd2.length,
                h = tamanho2 - 1; h >= 0; h--)
                    a.value += ajd2.charAt(h);
                a.value += r + l.substr(u - 2, u)
            }
            return !1
        }
    </script>  
</body>
<!-- END: Body-->

</html>