<!-- BEGIN: Main Menu-->
<style>

.fonte_miuda{
    font-size: 13px !important;
}



</style>

<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="../../../html/ltr/vertical-menu-template-semi-dark/index.html">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">MENU</h2>
                </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">

        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">


            <li class=" nav-item"><a href="<?= base_url() ?>index.php"><i data-feather="home"></i><span class="menu-title fonte_miuda" data-i18n="Email">Início</span></a>
            </li>

            <li class=" nav-item"><a href="<?= base_url() ?>index.php/licitacoes"><i class="fa fa-gavel"></i><span class="menu-title fonte_miuda" data-i18n="Email">Licitações</span></a></li>
            <li class=" nav-item"><a href="<?= base_url() ?>index.php/contratos"><i data-feather='file-text'></i><span class="menu-title fonte_miuda" data-i18n="Chat">Contratos</span></a></li>
            <li class=" nav-item"><a href="app-calender.html"><i class="fa fa-balance-scale"></i><span class="menu-title fonte_miuda" data-i18n="Calender">Legislação</span></a>
                <ul class="menu-content">  
                <li><a href="<?= base_url() ?>index.php/legislativo/mocao"><i data-feather='circle'></i><span class=" fonte_miuda" data-i18n="Second Level">Moção</span></a>
                    </li>                            
                    <li><a href="<?= base_url() ?>index.php/legislativo/resolucao"><i data-feather='circle'></i><span class=" fonte_miuda" data-i18n="Second Level">Resolução</span></a>
                    </li>
                    <li><a href="<?= base_url() ?>index.php/legislativo/emendas"><i data-feather='circle'></i><span class=" fonte_miuda" data-i18n="Second Level">Emenda</span></a>
                    </li>
                    <li><a href="<?= base_url() ?>index.php/leis"><i data-feather='circle'></i><span class=" fonte_miuda" data-i18n="Second Level">Leis</span></a>
                    </li>
                    <li><a href="<?= base_url() ?>index.php/decretos"><i data-feather='circle'></i></i><span class=" fonte_miuda" data-i18n="Second Level">Decretos</span></a>
                    </li>
                    <li><a href="<?= base_url() ?>index.php/portarias"><i data-feather='circle'></i></i><span class=" fonte_miuda" data-i18n="Second Level">Portarias</span></a>
                    </li>
            </li>


        </ul>
        <li class=" nav-item"><a href="<?= base_url() ?>"><i class="fa fa-file"></i><span class="menu-title fonte_miuda" data-i18n="Todo">Atos Leg.</span></a>
            <ul class="menu-content">
                <li><a href="<?= base_url() ?>index.php/atos_leg/projetolei"><i data-feather='circle'></i><span class=" fonte_miuda" data-i18n="Second Level">Projeto de Lei</span></a>
                </li>
                <li><a href="<?= base_url() ?>index.php/atos_leg/projetoresolucao"><i data-feather='circle'></i></i><span class=" fonte_miuda" data-i18n="Second Level">Projetos de Resoluções</span></a>
                </li>
                <li><a href="<?= base_url() ?>index.php/atos_leg/autografolei"><i data-feather='circle'></i><span class="menu-item fonte_miuda" data-i18n="Second Level">Autógrafo de Lei</span></a>
                </li>
                <li><a href="<?= base_url() ?>index.php/atos_leg/requerimentos"><i data-feather='circle'></i><span class=" fonte_miuda" data-i18n="Second Level">Requerimentos</span></a>
                </li>
                <li><a href="<?= base_url() ?>index.php/atos_leg/atas"><i data-feather='circle'></i><span class=" fonte_miuda" data-i18n="Second Level">Atas de Sessão</span></a>
                </li>
                <li><a href="<?= base_url() ?>index.php/atos_leg/pcomissoes"><i data-feather='circle'></i><span class=" fonte_miuda" data-i18n="Second Level">Parecer de Comissões</span></a>
                </li>
                <li><a href="<?= base_url() ?>index.php/atos_leg/oficios"><i data-feather='circle'></i><span class=" fonte_miuda" data-i18n="Second Level">Ofícios</span></a>
                </li>
                <li><a href="<?= base_url() ?>index.php/atos_leg/listapresenca"><i data-feather='circle'></i></i><span class=" fonte_miuda" data-i18n="Second Level">Lista de Presença</span></a>
                </li>
                <li><a href="<?= base_url() ?>index.php/atos_leg/pautasessao"><i data-feather='circle'></i></i><span class=" fonte_miuda" data-i18n="Second Level">Pauta de Sessões</span></a>
                </li>
            </ul>
        </li>

        <li class=" nav-item"><a href="<?= base_url() ?>index.php/despesas"><i class="fa fa-database"></i><span class="menu-title fonte_miuda" data-i18n="Todo">Despesas</span></a>
            <ul class="menu-content">
                <li><a href="<?= base_url() ?>index.php/despesas/"><i data-feather='circle'></i><span class=" fonte_miuda" data-i18n="Second Level">Despesas</span></a>
                </li>  
                <li><a href="<?= base_url() ?>index.php/despesas/diarias"><i data-feather='circle'></i><span class=" fonte_miuda" data-i18n="Second Level">Diárias e Passagens</span></a>
                </li>  
                <li><a href="<?= base_url() ?>index.php/despesas/duodecimos"><i data-feather='circle'></i><span class=" fonte_miuda" data-i18n="Second Level">Duodécimos</span></a>
                </li>              
            </ul>
        </li>
        
        <li class=" nav-item"><a href="<?= base_url() ?>index.php/folha"><i class="fa fa-users"></i><span class="menu-title fonte_miuda" data-i18n="Todo">Folha de Pag.</span></a></li>



        <li class=" nav-item"><a href="<?= base_url() ?>index.php/esic/solicitacoes"><i class="fa fa-info-circle"></i><span class="menu-title fonte_miuda" data-i18n="Todo">e-SIC</span></a></li>
        </li>
        <li class=" nav-item"><a href="app-calender.html"><i class="fa fa-users"></i><span class="menu-title fonte_miuda" data-i18n="Calender">Resp. Fiscal</span></a>
            <ul class="menu-content">
                <li><a class="d-flex align-items-center" href="<?= base_url() ?>index.php/resp_fiscal"></i><span class=" fonte_miuda" data-i18n="Second Level">Prestação de Contas</span></a></li>
                <li><a class="d-flex align-items-center" href="<?= base_url() ?>index.php/resp_fiscal/rreo"></i><span class=" fonte_miuda" data-i18n="Second Level">Rel. Resumido de <br> Exec. Orçamentária</span></a></li>
                <li><a class="d-flex align-items-center" href="<?= base_url() ?>index.php/resp_fiscal/rgf"></i><span class=" fonte_miuda" data-i18n="Second Level">Relatório de Gestão <br> Fiscal</span></a></li>
                <li><a class="d-flex align-items-center" href="<?= base_url() ?>index.php/resp_fiscal/planejamento"></i><span class=" fonte_miuda" data-i18n="Second Level">Planejamento <br> Orçamentário</span></a></li>
                <li><a class="d-flex align-items-center" href="<?= base_url() ?>index.php/resp_fiscal/renuncia"></i><span class=" fonte_miuda" data-i18n="Second Level">Renúncias Fiscais</span></a></li>
                <li><a class="d-flex align-items-center" href="<?= base_url() ?>index.php/resp_fiscal/parecertb"></i><span class=" fonte_miuda" data-i18n="Second Level">Parecer do Tribunal <br> de Contas</span></a></li>
        </li>
        </ul>
        </li>
        <li class=" nav-item"><a><i class="fa fa-bullhorn"></i><span class="menu-title fonte_miuda" data-i18n="Calender">Ouvidoria</span></a>
            <ul class="menu-content">
                <li><a href="<?= base_url() ?>index.php/esic/ouvidoria"><i data-feather='circle'></i></i><span class=" fonte_miuda" data-i18n="Second Level">SIC</span></a>
                </li>
                <li><a href="<?= base_url() ?>index.php/esic/reclamacao"><i data-feather='circle'></i></i><span class=" fonte_miuda" data-i18n="Second Level">Reclamações</span></a>
                </li>
                <li><a href="<?= base_url() ?>index.php/esic/sugestao"><i data-feather='circle'></i></i><span class=" fonte_miuda" data-i18n="Second Level">Sugestões</span></a></li>
                <li><a href="<?= base_url() ?>index.php/esic/denuncia"><i data-feather='circle'></i></i><span class=" fonte_miuda" data-i18n="Second Level">Denúncias</span></a></li>
                <li><a href="<?= base_url() ?>index.php/esic/elogio"><i data-feather='circle'></i></i><span class=" fonte_miuda" data-i18n="Second Level">Elogios</span></a></li>
                <li><a href="<?= base_url() ?>index.php/esic/solicitacao"><i data-feather='circle'></i></i><span class=" fonte_miuda" data-i18n="Second Level">Solicitações</span></a></li>
        </li>
        </ul>
        </li>
        <li class=" nav-item"><a href="app-calender.html"><i class="fa fa-list-alt"></i><span class="menu-title fonte_miuda" data-i18n="Calender">Concursos</span></a>
            <ul class="menu-content">
                <li><a class="d-flex align-items-center" href="<?= base_url() ?>index.php/concursos/"></i><span class=" fonte_miuda" data-i18n="Second Level">Concursos <br> Públicos</span></a>
                </li>
                <li><a class="d-flex align-items-center" href="<?= base_url() ?>index.php/eleicoes/"></i><span class=" fonte_miuda" data-i18n="Second Level">Eleição de <br> Conselhos Municipais</span></a>
                </li>
                <li><a class="d-flex align-items-center" href="<?= base_url() ?>index.php/pseletivo/"></i><span class=" fonte_miuda" data-i18n="Second Level">Processos <br> Seletivos</span></a></li>
        </li>
        </ul>
        </li>
        </li>
        <li  class=" navigation-header"><span>Site Oficial</span>
        </li>
        <li class=" nav-item"><a href="<?= base_url() ?>index.php/"><i data-feather='globe'></i><span class="menu-title fonte_miuda" data-i18n="Todo">Página</span></a></li>
        </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->