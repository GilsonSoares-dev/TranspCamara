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
                        <div class="col-md-5">
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
                                                            <div class="col-md-12">
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

                        <div class="col-md-7 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <p class="card-title">Solicitação</p>
                                </div>
                                <div>
                                    <hr style="margin-top: -10px;">
                                    <div class="card-body">
                                        <div class="alert alert-success" role="alert">
                                            <div class="alert-body">A solicitação é um meio de requerer a execução de algum serviço ou reparo competentes à Administração Pública municipal.</div>
                                        </div>
                                        <hr>
                                        <form action="">
                                            <div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label style="font-size: 13px;" for="">Setor/Departamento</label>
                                                            <div>
                                                                <input type="text" class="form-control" autofocus />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="form-group">
                                                            <label style="font-size: 13px;" for="">Assunto</label>
                                                            <div>
                                                                <input type="text" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label style="font-size: 13px;" for="">Identificação</label>
                                                            <select name="" class="select2 form-control">
                                                                <option value="">Selecione</option>
                                                                <option value="">Anônimo</option>
                                                                <option value="">CPF</option>
                                                                <option value="">RG</option>
                                                                <option value="">CNPJ</option>
                                                                <option value="">CNH</option>
                                                                <option value="">Registro Profissional</option>
                                                                <option value="">Outro</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label style="font-size: 13px;" for="">Número do documento*</label>
                                                            <div>
                                                                <input type="text" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label style="font-size: 13px;" for="">Manifestante*</label>
                                                            <div>
                                                                <input type="text" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label style="font-size: 13px;" for="">E-mail*</label>
                                                            <div>
                                                                <input type="text" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label style="font-size: 13px;" for="">Telefone*</label>
                                                            <div>
                                                                <input type="text" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label style="font-size: 13px;" for="">Data de Nascimento*</label>
                                                            <div>
                                                                <input type="date" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label style="font-size: 13px;" for="">Raça*</label>
                                                            <select name="" class="select2 form-control">
                                                                <option value="">Selecione</option>
                                                                <option value="">Branco</option>
                                                                <option value="">Preto</option>
                                                                <option value="">Amarelo</option>
                                                                <option value="">Pardo</option>
                                                                <option value="">Indígena</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label style="font-size: 13px;" for="">Sexo*</label>
                                                            <select name="" class="select2 form-control">
                                                                <option value="">Selecione</option>
                                                                <option value="">Masculino</option>
                                                                <option value="">Feminino</option>
                                                                <option value="">Não especificar</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label style="font-size: 13px;" for="">Escolaridade*</label>
                                                            <select name="" class="select2 form-control">
                                                                <option value="">Selecione</option>
                                                                <option value="">Sem instrução formal</option>
                                                                <option value="">Ensino Fundamental</option>
                                                                <option value="">Ensino Médio</option>
                                                                <option value="">Ensino Superior</option>
                                                                <option value="">Pós-graduação</option>
                                                                <option value="">Mestrado</option>
                                                                <option value="">Doutorado</option>
                                                                <option value="">Pós-doutorado</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label style="font-size: 13px;" for="">Profissão*</label>
                                                            <div>
                                                                <input type="text" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label style="font-size: 13px;" for="">Endereço*</label>
                                                            <div>
                                                                <input type="text" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
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
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label style="font-size: 13px;" for="">CEP*</label>
                                                            <div>
                                                                <input type="text" name="cep" class="form-control" onkeypress="mascara(this, '#####-###')" maxlength="9" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label style="font-size: 13px;" for="">País*</label>
                                                            <select name="" class="select2 form-control">
                                                                <option value="">Selecione</option>
                                                                <option value="Brasil" selected="selected">Brasil</option>
                                                                <option value="Afeganistão">Afeganistão</option>
                                                                <option value="África do Sul">África do Sul</option>
                                                                <option value="Albânia">Albânia</option>
                                                                <option value="Alemanha">Alemanha</option>
                                                                <option value="Andorra">Andorra</option>
                                                                <option value="Angola">Angola</option>
                                                                <option value="Anguilla">Anguilla</option>
                                                                <option value="Antilhas Holandesas">Antilhas Holandesas</option>
                                                                <option value="Antárctida">Antárctida</option>
                                                                <option value="Antígua e Barbuda">Antígua e Barbuda</option>
                                                                <option value="Argentina">Argentina</option>
                                                                <option value="Argélia">Argélia</option>
                                                                <option value="Armênia">Armênia</option>
                                                                <option value="Aruba">Aruba</option>
                                                                <option value="Arábia Saudita">Arábia Saudita</option>
                                                                <option value="Austrália">Austrália</option>
                                                                <option value="Áustria">Áustria</option>
                                                                <option value="Azerbaijão">Azerbaijão</option>
                                                                <option value="Bahamas">Bahamas</option>
                                                                <option value="Bahrein">Bahrein</option>
                                                                <option value="Bangladesh">Bangladesh</option>
                                                                <option value="Barbados">Barbados</option>
                                                                <option value="Belize">Belize</option>
                                                                <option value="Benim">Benim</option>
                                                                <option value="Bermudas">Bermudas</option>
                                                                <option value="Bielorrússia">Bielorrússia</option>
                                                                <option value="Bolívia">Bolívia</option>
                                                                <option value="Botswana">Botswana</option>
                                                                <option value="Brunei">Brunei</option>
                                                                <option value="Bulgária">Bulgária</option>
                                                                <option value="Burkina Faso">Burkina Faso</option>
                                                                <option value="Burundi">Burundi</option>
                                                                <option value="Butão">Butão</option>
                                                                <option value="Bélgica">Bélgica</option>
                                                                <option value="Bósnia e Herzegovina">Bósnia e Herzegovina</option>
                                                                <option value="Cabo Verde">Cabo Verde</option>
                                                                <option value="Camarões">Camarões</option>
                                                                <option value="Camboja">Camboja</option>
                                                                <option value="Canadá">Canadá</option>
                                                                <option value="Catar">Catar</option>
                                                                <option value="Cazaquistão">Cazaquistão</option>
                                                                <option value="Chade">Chade</option>
                                                                <option value="Chile">Chile</option>
                                                                <option value="China">China</option>
                                                                <option value="Chipre">Chipre</option>
                                                                <option value="Colômbia">Colômbia</option>
                                                                <option value="Comores">Comores</option>
                                                                <option value="Coreia do Norte">Coreia do Norte</option>
                                                                <option value="Coreia do Sul">Coreia do Sul</option>
                                                                <option value="Costa do Marfim">Costa do Marfim</option>
                                                                <option value="Costa Rica">Costa Rica</option>
                                                                <option value="Croácia">Croácia</option>
                                                                <option value="Cuba">Cuba</option>
                                                                <option value="Dinamarca">Dinamarca</option>
                                                                <option value="Djibouti">Djibouti</option>
                                                                <option value="Dominica">Dominica</option>
                                                                <option value="Egito">Egito</option>
                                                                <option value="El Salvador">El Salvador</option>
                                                                <option value="Emirados Árabes Unidos">Emirados Árabes Unidos</option>
                                                                <option value="Equador">Equador</option>
                                                                <option value="Eritreia">Eritreia</option>
                                                                <option value="Escócia">Escócia</option>
                                                                <option value="Eslováquia">Eslováquia</option>
                                                                <option value="Eslovênia">Eslovênia</option>
                                                                <option value="Espanha">Espanha</option>
                                                                <option value="Estados Federados da Micronésia">Estados Federados da Micronésia</option>
                                                                <option value="Estados Unidos">Estados Unidos</option>
                                                                <option value="Estônia">Estônia</option>
                                                                <option value="Etiópia">Etiópia</option>
                                                                <option value="Fiji">Fiji</option>
                                                                <option value="Filipinas">Filipinas</option>
                                                                <option value="Finlândia">Finlândia</option>
                                                                <option value="França">França</option>
                                                                <option value="Gabão">Gabão</option>
                                                                <option value="Gana">Gana</option>
                                                                <option value="Geórgia">Geórgia</option>
                                                                <option value="Gibraltar">Gibraltar</option>
                                                                <option value="Granada">Granada</option>
                                                                <option value="Gronelândia">Gronelândia</option>
                                                                <option value="Grécia">Grécia</option>
                                                                <option value="Guadalupe">Guadalupe</option>
                                                                <option value="Guam">Guam</option>
                                                                <option value="Guatemala">Guatemala</option>
                                                                <option value="Guernesei">Guernesei</option>
                                                                <option value="Guiana">Guiana</option>
                                                                <option value="Guiana Francesa">Guiana Francesa</option>
                                                                <option value="Guiné">Guiné</option>
                                                                <option value="Guiné Equatorial">Guiné Equatorial</option>
                                                                <option value="Guiné-Bissau">Guiné-Bissau</option>
                                                                <option value="Gâmbia">Gâmbia</option>
                                                                <option value="Haiti">Haiti</option>
                                                                <option value="Honduras">Honduras</option>
                                                                <option value="Hong Kong">Hong Kong</option>
                                                                <option value="Hungria">Hungria</option>
                                                                <option value="Ilha Bouvet">Ilha Bouvet</option>
                                                                <option value="Ilha de Man">Ilha de Man</option>
                                                                <option value="Ilha do Natal">Ilha do Natal</option>
                                                                <option value="Ilha Heard e Ilhas McDonald">Ilha Heard e Ilhas McDonald</option>
                                                                <option value="Ilha Norfolk">Ilha Norfolk</option>
                                                                <option value="Ilhas Cayman">Ilhas Cayman</option>
                                                                <option value="Ilhas Cocos (Keeling)">Ilhas Cocos (Keeling)</option>
                                                                <option value="Ilhas Cook">Ilhas Cook</option>
                                                                <option value="Ilhas Feroé">Ilhas Feroé</option>
                                                                <option value="Ilhas Geórgia do Sul e Sandwich do Sul">Ilhas Geórgia do Sul e Sandwich do Sul</option>
                                                                <option value="Ilhas Malvinas">Ilhas Malvinas</option>
                                                                <option value="Ilhas Marshall">Ilhas Marshall</option>
                                                                <option value="Ilhas Menores Distantes dos Estados Unidos">Ilhas Menores Distantes dos Estados Unidos</option>
                                                                <option value="Ilhas Salomão">Ilhas Salomão</option>
                                                                <option value="Ilhas Virgens Americanas">Ilhas Virgens Americanas</option>
                                                                <option value="Ilhas Virgens Britânicas">Ilhas Virgens Britânicas</option>
                                                                <option value="Ilhas Åland">Ilhas Åland</option>
                                                                <option value="Indonésia">Indonésia</option>
                                                                <option value="Inglaterra">Inglaterra</option>
                                                                <option value="Índia">Índia</option>
                                                                <option value="Iraque">Iraque</option>
                                                                <option value="Irlanda do Norte">Irlanda do Norte</option>
                                                                <option value="Irlanda">Irlanda</option>
                                                                <option value="Irã">Irã</option>
                                                                <option value="Islândia">Islândia</option>
                                                                <option value="Israel">Israel</option>
                                                                <option value="Itália">Itália</option>
                                                                <option value="Iêmen">Iêmen</option>
                                                                <option value="Jamaica">Jamaica</option>
                                                                <option value="Japão">Japão</option>
                                                                <option value="Jersey">Jersey</option>
                                                                <option value="Jordânia">Jordânia</option>
                                                                <option value="Kiribati">Kiribati</option>
                                                                <option value="Kuwait">Kuwait</option>
                                                                <option value="Laos">Laos</option>
                                                                <option value="Lesoto">Lesoto</option>
                                                                <option value="Letônia">Letônia</option>
                                                                <option value="Libéria">Libéria</option>
                                                                <option value="Liechtenstein">Liechtenstein</option>
                                                                <option value="Lituânia">Lituânia</option>
                                                                <option value="Luxemburgo">Luxemburgo</option>
                                                                <option value="Líbano">Líbano</option>
                                                                <option value="Líbia">Líbia</option>
                                                                <option value="Macau">Macau</option>
                                                                <option value="Macedônia">Macedônia</option>
                                                                <option value="Madagáscar">Madagáscar</option>
                                                                <option value="Malawi">Malawi</option>
                                                                <option value="Maldivas">Maldivas</option>
                                                                <option value="Mali">Mali</option>
                                                                <option value="Malta">Malta</option>
                                                                <option value="Malásia">Malásia</option>
                                                                <option value="Marianas Setentrionais">Marianas Setentrionais</option>
                                                                <option value="Marrocos">Marrocos</option>
                                                                <option value="Martinica">Martinica</option>
                                                                <option value="Mauritânia">Mauritânia</option>
                                                                <option value="Maurícia">Maurícia</option>
                                                                <option value="Mayotte">Mayotte</option>
                                                                <option value="Moldávia">Moldávia</option>
                                                                <option value="Mongólia">Mongólia</option>
                                                                <option value="Montenegro">Montenegro</option>
                                                                <option value="Montserrat">Montserrat</option>
                                                                <option value="Moçambique">Moçambique</option>
                                                                <option value="Myanmar">Myanmar</option>
                                                                <option value="México">México</option>
                                                                <option value="Mônaco">Mônaco</option>
                                                                <option value="Namíbia">Namíbia</option>
                                                                <option value="Nauru">Nauru</option>
                                                                <option value="Nepal">Nepal</option>
                                                                <option value="Nicarágua">Nicarágua</option>
                                                                <option value="Nigéria">Nigéria</option>
                                                                <option value="Niue">Niue</option>
                                                                <option value="Noruega">Noruega</option>
                                                                <option value="Nova Caledônia">Nova Caledônia</option>
                                                                <option value="Nova Zelândia">Nova Zelândia</option>
                                                                <option value="Níger">Níger</option>
                                                                <option value="Omã">Omã</option>
                                                                <option value="Palau">Palau</option>
                                                                <option value="Palestina">Palestina</option>
                                                                <option value="Panamá">Panamá</option>
                                                                <option value="Papua-Nova Guiné">Papua-Nova Guiné</option>
                                                                <option value="Paquistão">Paquistão</option>
                                                                <option value="Paraguai">Paraguai</option>
                                                                <option value="País de Gales">País de Gales</option>
                                                                <option value="Países Baixos">Países Baixos</option>
                                                                <option value="Peru">Peru</option>
                                                                <option value="Pitcairn">Pitcairn</option>
                                                                <option value="Polinésia Francesa">Polinésia Francesa</option>
                                                                <option value="Polônia">Polônia</option>
                                                                <option value="Porto Rico">Porto Rico</option>
                                                                <option value="Portugal">Portugal</option>
                                                                <option value="Quirguistão">Quirguistão</option>
                                                                <option value="Quênia">Quênia</option>
                                                                <option value="Reino Unido">Reino Unido</option>
                                                                <option value="República Centro-Africana">República Centro-Africana</option>
                                                                <option value="República Checa">República Checa</option>
                                                                <option value="República Democrática do Congo">República Democrática do Congo</option>
                                                                <option value="República do Congo">República do Congo</option>
                                                                <option value="República Dominicana">República Dominicana</option>
                                                                <option value="Reunião">Reunião</option>
                                                                <option value="Romênia">Romênia</option>
                                                                <option value="Ruanda">Ruanda</option>
                                                                <option value="Rússia">Rússia</option>
                                                                <option value="Saara Ocidental">Saara Ocidental</option>
                                                                <option value="Saint Martin">Saint Martin</option>
                                                                <option value="Saint-Barthélemy">Saint-Barthélemy</option>
                                                                <option value="Saint-Pierre e Miquelon">Saint-Pierre e Miquelon</option>
                                                                <option value="Samoa Americana">Samoa Americana</option>
                                                                <option value="Samoa">Samoa</option>
                                                                <option value="Santa Helena, Ascensão e Tristão da Cunha">Santa Helena, Ascensão e Tristão da Cunha</option>
                                                                <option value="Santa Lúcia">Santa Lúcia</option>
                                                                <option value="Senegal">Senegal</option>
                                                                <option value="Serra Leoa">Serra Leoa</option>
                                                                <option value="Seychelles">Seychelles</option>
                                                                <option value="Singapura">Singapura</option>
                                                                <option value="Somália">Somália</option>
                                                                <option value="Sri Lanka">Sri Lanka</option>
                                                                <option value="Suazilândia">Suazilândia</option>
                                                                <option value="Sudão">Sudão</option>
                                                                <option value="Suriname">Suriname</option>
                                                                <option value="Suécia">Suécia</option>
                                                                <option value="Suíça">Suíça</option>
                                                                <option value="Svalbard e Jan Mayen">Svalbard e Jan Mayen</option>
                                                                <option value="São Cristóvão e Nevis">São Cristóvão e Nevis</option>
                                                                <option value="São Marino">São Marino</option>
                                                                <option value="São Tomé e Príncipe">São Tomé e Príncipe</option>
                                                                <option value="São Vicente e Granadinas">São Vicente e Granadinas</option>
                                                                <option value="Sérvia">Sérvia</option>
                                                                <option value="Síria">Síria</option>
                                                                <option value="Tadjiquistão">Tadjiquistão</option>
                                                                <option value="Tailândia">Tailândia</option>
                                                                <option value="Taiwan">Taiwan</option>
                                                                <option value="Tanzânia">Tanzânia</option>
                                                                <option value="Terras Austrais e Antárticas Francesas">Terras Austrais e Antárticas Francesas</option>
                                                                <option value="Território Britânico do Oceano Índico">Território Britânico do Oceano Índico</option>
                                                                <option value="Timor-Leste">Timor-Leste</option>
                                                                <option value="Togo">Togo</option>
                                                                <option value="Tonga">Tonga</option>
                                                                <option value="Toquelau">Toquelau</option>
                                                                <option value="Trinidad e Tobago">Trinidad e Tobago</option>
                                                                <option value="Tunísia">Tunísia</option>
                                                                <option value="Turcas e Caicos">Turcas e Caicos</option>
                                                                <option value="Turquemenistão">Turquemenistão</option>
                                                                <option value="Turquia">Turquia</option>
                                                                <option value="Tuvalu">Tuvalu</option>
                                                                <option value="Ucrânia">Ucrânia</option>
                                                                <option value="Uganda">Uganda</option>
                                                                <option value="Uruguai">Uruguai</option>
                                                                <option value="Uzbequistão">Uzbequistão</option>
                                                                <option value="Vanuatu">Vanuatu</option>
                                                                <option value="Vaticano">Vaticano</option>
                                                                <option value="Venezuela">Venezuela</option>
                                                                <option value="Vietname">Vietname</option>
                                                                <option value="Wallis e Futuna">Wallis e Futuna</option>
                                                                <option value="Zimbabwe">Zimbabwe</option>
                                                                <option value="Zâmbia">Zâmbia</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label style="font-size: 13px;" for="">UF*</label>
                                                            <select name="" class="select2 form-control">
                                                                <option value="">Selecione</option>
                                                                <option value="AC">Acre</option>
                                                                <option value="AL">Alagoas</option>
                                                                <option value="AP">Amapá</option>
                                                                <option value="AM">Amazonas</option>
                                                                <option value="BA">Bahia</option>
                                                                <option value="CE">Ceará</option>
                                                                <option value="DF">Distrito Federal</option>
                                                                <option value="ES">Espirito Santo</option>
                                                                <option value="GO">Goiás</option>
                                                                <option value="MA">Maranhão</option>
                                                                <option value="MS">Mato Grosso do Sul</option>
                                                                <option value="MT">Mato Grosso</option>
                                                                <option value="MG">Minas Gerais</option>
                                                                <option value="PA">Pará</option>
                                                                <option value="PB">Paraíba</option>
                                                                <option value="PR">Paraná</option>
                                                                <option value="PE">Pernambuco</option>
                                                                <option value="PI">Piauí</option>
                                                                <option value="RJ">Rio de Janeiro</option>
                                                                <option value="RN">Rio Grande do Norte</option>
                                                                <option value="RS">Rio Grande do Sul</option>
                                                                <option value="RO">Rondônia</option>
                                                                <option value="RR">Roraima</option>
                                                                <option value="SC">Santa Catarina</option>
                                                                <option value="SP">São Paulo</option>
                                                                <option value="SE">Sergipe</option>
                                                                <option value="TO">Tocantins</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="demo-inline-spacing">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                                                <label class="custom-control-label" for="customCheck1">Receber notificações sobre esta denúnica por e-mail.</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12"><br>
                                                        <label style="font-size: 13px;">Descreva sua denúncia</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 text-left">
                                                        <button type="file" class="btn btn-primary"><i data-feather='paperclip'></i> Anexar arquivos</button>
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        <button type="file" class="btn btn-primary"><i data-feather='send'></i> Enviar solicitação</button>
                                                    </div>
                                                </div>

                                        </form>
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