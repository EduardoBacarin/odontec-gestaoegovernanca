<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ODONTEC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f89139718b.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <h1>ODONTEC</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <h2>Serviços:</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <ul>
                        <li>
                            <p class="manutencao">Manutenção</p>
                        </li>
                        <li>
                            <p class="desenvolvimento">Desenvolvimento</p>
                        </li>
                        <li>
                            <p class="gestaosistemas">Gestão de Sistemas</p>
                        </li>
                        <li>
                            <p class="automacao">Automação de Serviços</p>
                        </li>
                        <li>
                            <p class="relatorios">Relatórios</p>
                        </li>
                        <li>
                            <p class="quempode">Quem pode requisitar os serviços?</p>
                        </li>
                        <li>
                            <p class="ondepedir">Onde pedir os serviços?</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="display: none;" id="divmanutencao" class="conteudo">
        <div class="col-md-12 d-flex justify-content-center">
            <p>TEXTO DA MANUTENÇAO</p>
            <p>A manutenção sera realizada de forma agendada em caso de urgencia, e mensal </p>
            <p>como norma da empresa. Recuperação de dados (deletados ou corrompido),</p>
            <p>formataçao, manutenção troca de hardware.</p>
        </div>
    </div>
    <div class="row" style="display: none;" id="divdesenvolvimento" class="conteudo">
        <div class="col-md-12 d-flex justify-content-center">
            <p>TEXTO DO DESENVOLVIMENTO</p>
            <p>Os desenvolvimentos serão todos agendados e com prazos, mediante a pedidos,
                da empresa para a propria empresa, e para os clientes.
            </p>
        </div>
    </div>
    <div class="row" style="display: none;" id="divgestaosistemas" class="conteudo">
        <div class="col-md-12 d-flex justify-content-center">
            <p>TEXTO DA GESTÃO DE SISTEMA</p>
            <p></p>
        </div>
    </div>
    <div class="row" style="display: none;" id="divautomacao" class="conteudo">
        <div class="col-md-12 d-flex justify-content-center">
            <p>TEXTO DA AUTOMAÇÃO DE SERVIÇO</p>
            <p>Transformar serviços repetitivos e demorados, automatizando, e deixando
                mais pratico e rapido.
            </p>
        </div>
    </div>
    <div class="row" style="display: none;" id="divrelatorios" class="conteudo">
        <div class="col-md-12 d-flex justify-content-center">
            <p>TEXTO DO RELATORIO</p>
            <p>Relatorios sao emitidos mensalmentes, e caso tenha necessidade, serão
                implementado novos.
            </p>
        </div>
    </div>
    <div class="row" style="display: none;" id="divquempode" class="conteudo">
        <div class="col-md-12 d-flex justify-content-center">
            <p>QUEMPODE PEDIR?</p>
            <div class="row">
                <div class="col-md-12">
                    <table style="border: solid 1px">
                        <thead>
                            <th style="border: solid 1px">Requisitantes</th>
                            <th style="border: solid 1px">Serviços</th>
                        </thead>
                        <tbody>
                            <td style="border: solid 1px">oi</td>
                            <td style="border: solid 1px">oi</td>
                        </tbody>
                        <tbody>
                            <td style="border: solid 1px">oi</td>
                            <td style="border: solid 1px">oi</td>
                        </tbody>
                        <tbody>
                            <td style="border: solid 1px">oi</td>
                            <td style="border: solid 1px">oi</td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="display: none;" id="divondepedir" class="conteudo">
        <div class="col-md-12 d-flex justify-content-center">
            <p>ONDE PEDIR: </p>
            <p>Os pedidos são feitos atravez de um formulario, que o mesma é controlada
                por um funcionario, que apos as 16:00 hrs tranfere para o sistema
                as requisições, e arquiva os formularios.
            </p>
        </div>
    </div>
</body>
<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</footer>

</html>

<script>
    $('.manutencao').click(function() {
        $('#divmanutencao').show();
        $('#divdesenvolvimento').hide();
        $('#divgestaosistemas').hide();
        $('#divautomacao').hide();
        $('#divrelatorios').hide();
        $('#divquempode').hide();
        $('#divondepedir').hide();

    });
    $('.desenvolvimento').click(function() {
        $('#divmanutencao').hide();
        $('#divdesenvolvimento').show();
        $('#divgestaosistemas').hide();
        $('#divautomacao').hide();
        $('#divrelatorios').hide();
        $('#divquempode').hide();
        $('#divondepedir').hide();
    });
    $('.gestaosistemas').click(function() {
        $('#divmanutencao').hide();
        $('#divdesenvolvimento').hide();
        $('#divgestaosistemas').show();
        $('#divautomacao').hide();
        $('#divrelatorios').hide();
        $('#divquempode').hide();
        $('#divondepedir').hide();
    });
    $('.automacao').click(function() {
        $('#divmanutencao').hide();
        $('#divdesenvolvimento').hide();
        $('#divgestaosistemas').hide();
        $('#divautomacao').show();
        $('#divrelatorios').hide();
        $('#divquempode').hide();
        $('#divondepedir').hide();
    });
    $('.relatorios').click(function() {
        $('#divmanutencao').hide();
        $('#divdesenvolvimento').hide();
        $('#divgestaosistemas').hide();
        $('#divautomacao').hide();
        $('#divrelatorios').show();
        $('#divquempode').hide();
        $('#divondepedir').hide();
    });
    $('.quempode').click(function() {
        $('#divmanutencao').hide();
        $('#divdesenvolvimento').hide();
        $('#divgestaosistemas').hide();
        $('#divautomacao').hide();
        $('#divrelatorios').hide();
        $('#divquempode').show();
        $('#divondepedir').hide();
    });
    $('.ondepedir').click(function() {
        $('#divmanutencao').hide();
        $('#divdesenvolvimento').hide();
        $('#divgestaosistemas').hide();
        $('#divautomacao').hide();
        $('#divrelatorios').hide();
        $('#divquempode').hide();
        $('#divondepedir').show();
    });
</script>