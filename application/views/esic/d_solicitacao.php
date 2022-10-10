<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">


<?php $this->load->view('includes/header'); ?>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/app-assets/css/pages/app-chat.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/app-assets/css/pages/app-chat-list.min.css">

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

                <section id="input-sizing">
                    <div class="row match-height">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Mensagens</h4>
                                </div>
                                <hr style="margin-top: -10px;">
                                <div class="card-body">
                                    <div class="active-chat">
                                        <!-- Chat Header -->
                                        <div class="chat-navbar">
                                            <header class="chat-header">
                                                <div class="d-flex align-items-center">
                                                    <div class="sidebar-toggle d-block d-lg-none me-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu font-medium-5">
                                                            <line x1="3" y1="12" x2="21" y2="12"></line>
                                                            <line x1="3" y1="6" x2="21" y2="6"></line>
                                                            <line x1="3" y1="18" x2="21" y2="18"></line>
                                                        </svg>
                                                    </div>
                                                    <div class="avatar avatar-border user-profile-toggle m-0 me-1">
                                                        <img src="app-assets/images/portrait/small/avatar-s-7.jpg" alt="avatar" height="36" width="36">
                                                        <span class="avatar-status-busy"></span>
                                                    </div>
                                                    <h6 class="mb-0">Kristopher Candy</h6>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call cursor-pointer d-sm-block d-none font-medium-2 me-1">
                                                        <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video cursor-pointer d-sm-block d-none font-medium-2 me-1">
                                                        <polygon points="23 7 16 12 23 17 23 7"></polygon>
                                                        <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search cursor-pointer d-sm-block d-none font-medium-2">
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                    </svg>
                                                    <div class="dropdown">
                                                        <button class="btn-icon btn btn-transparent hide-arrow btn-sm dropdown-toggle waves-effect waves-float waves-light" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-medium-2" id="chat-header-actions">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="12" cy="5" r="1"></circle>
                                                                <circle cx="12" cy="19" r="1"></circle>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="chat-header-actions">
                                                            <a class="dropdown-item" href="#">View Contact</a>
                                                            <a class="dropdown-item" href="#">Mute Notifications</a>
                                                            <a class="dropdown-item" href="#">Block Contact</a>
                                                            <a class="dropdown-item" href="#">Clear Chat</a>
                                                            <a class="dropdown-item" href="#">Report</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </header>
                                        </div>
                                        <!--/ Chat Header -->

                                        <!-- User Chat messages -->
                                        <div class="user-chats ps ps--active-y">
                                            <div class="chats">
                                                <div class="chat">
                                                    <div class="chat-avatar">
                                                        <span class="avatar box-shadow-1 cursor-pointer">
                                                            <img src="app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="36" width="36">
                                                        </span>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-content">
                                                            <p>How can we help? We're here for you! 😄</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <span class="avatar box-shadow-1 cursor-pointer">
                                                            <img src="app-assets/images/portrait/small/avatar-s-7.jpg" alt="avatar" height="36" width="36">
                                                        </span>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-content">
                                                            <p>Hey John, I am looking for the best admin template.</p>
                                                            <p>Could you please help me to find it out? 🤔</p>
                                                        </div>
                                                        <div class="chat-content">
                                                            <p>It should be Bootstrap 4 compatible.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="divider">
                                                    <div class="divider-text"><?= date("d/m/Y h:m:s") ?></div>
                                                </div>

                                            </div>
                                            <div class="ps__rail-x" style="left: 0px; bottom: -162px;">
                                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                            </div>
                                            <div class="ps__rail-y" style="top: 162px; right: 0px; height: 653px;">
                                                <div class="ps__thumb-y" tabindex="0" style="top: 130px; height: 523px;"></div>
                                            </div>
                                        </div>
                                        <!-- User Chat messages -->

                                        <!-- Submit Chat form -->

                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" placeholder="Digite aqui sua resposta" name="" id="" cols="30" rows="5"></textarea>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button style="float: right;" type="button" class="btn btn-primary"><i data-feather='send'></i> Enviar</button>
                                                <button type="button" class="btn btn-primary"><i data-feather='paperclip'></i> Anexar arquivos</button>
                                            </div>
                                        </div>
                                        <!---
                                        <form class="chat-app-form" action="javascript:void(0);" onsubmit="enterChat();">
                                            <div class="input-group input-group-merge me-1 form-send-message">
                                                <span class="speech-to-text input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mic cursor-pointer">
                                                        <path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path>
                                                        <path d="M19 10v2a7 7 0 0 1-14 0v-2"></path>
                                                        <line x1="12" y1="19" x2="12" y2="23"></line>
                                                        <line x1="8" y1="23" x2="16" y2="23"></line>
                                                    </svg></span>
                                                <input type="text" class="form-control message" placeholder="Type your message or use speech to text">
                                                <span class="input-group-text">
                                                    <label for="attach-doc" class="attachment-icon form-label mb-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image cursor-pointer text-secondary">
                                                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                                            <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                                            <polyline points="21 15 16 10 5 21"></polyline>
                                                        </svg>
                                                        <input type="file" id="attach-doc" hidden=""> </label></span>
                                            </div>
                                            <button type="button" class="btn btn-primary send waves-effect waves-float waves-light" onclick="enterChat();">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send d-lg-none">
                                                    <line x1="22" y1="2" x2="11" y2="13"></line>
                                                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                                </svg>
                                                <span class="d-none d-lg-block">Send</span>
                                            </button>
                                        </form>
                                        -->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <p class="card-title">e-SIC - Solicitação n° 2021043022402019 </p>
                                </div>
                                <hr style="margin-top: -10px;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-size: 13px;" for="">Identificação</label>
                                                <div>
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-size: 13px;" for="">Número de Identificação</label>
                                                <div>
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label style="font-size: 13px;" for="">Nome/Razão Social</label>
                                                <div>
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label style="font-size: 13px;" for="">Telefone</label>
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
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label style="font-size: 13px;" for="">Data de abertura</label>
                                                <div>
                                                    <input type="date" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label style="font-size: 13px;" for="">Prazo para resposta</label>
                                                <div>
                                                    <input type="date" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label style="font-size: 13px;" for="">Situação</label>
                                                <a href="#" data-toggle="popover" data-placement="top" data-container="body" data-original-title="Atenção!" data-content="A situação é atualizada de forma automática de acordo com o andamento da solicitação."> <i data-feather='help-circle'></i></a>
                                                <select class="select2 form-control">
                                                    <option value="">Em andamento</option>
                                                    <option value="">Concluído</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="demo-inline-spacing">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                                    <label class="custom-control-label" for="customCheck1">Encerrar solicitação</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2" />
                                                    <label class="custom-control-label" for="customCheck2">Solicitação indeferida</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div style="margin-top: 5px;">
                                                <label style="font-size: 13px;" for=""></label>
                                                <button type="button" class="btn btn-block btn-primary"><i data-feather='clock'></i> Estender prazo</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!---
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="">Responder</label>
                                            <textarea class="form-control" name="" id="" cols="30" rows="7"></textarea>
                                        </div>
                                    </div>
                                    --->
                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary"><i data-feather='paperclip'></i>Anexar arquivos</button>
                                    <button type="button" class="btn btn-primary"><i data-feather='trash-2'></i> Excluir todos os anexos</button>
                                    <div style="float: right;" class="btn-group">
                                        <button type="button" class="btn btn-primary waves-effect waves-float waves-light"><i data-feather='save'></i> Salvar</button>                                       
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

    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-chat.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-chat-list.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">

    <script src="app-assets/js/scripts/pages/app-chat.min.js"></script>
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <script src="app-assets/js/core/app.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>


</body>
<!-- END: Body-->

</html>