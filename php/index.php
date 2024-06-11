

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relacionamento Medico - HRG</title>
    <link rel="icon" href="view/img/Logobordab.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/selectize.bootstrap5.min.css">
    <link rel="stylesheet" href="../css/multi-select-tag.css">
</head>
<style>
h4{
    font-family:roboto;
}

.form-control{
    font-size: 0.85em;
}
</style>
<body>

    
<!-- Parte do header e nav -->
<?php include '../php/header.php'; ?>

<main class="container-fluid d-flex justify-content-center align-items-center">
    <div class="form-group col-8 mt-5" >
        <form id="occurrenceForm" method="post" onsubmit="return validateForm()">
        <div class="row">
    <div class="col-xl-2 col-md-4 col-12 mt-4">
        <div class="form-group">
            <label style="font-weight: 600;" for="date">Data</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
    </div>

    <div class="col-xl-2 col-md-4 col-12 mb-4 mt-4 ">
        <div class="form-group">
            <label style="font-weight: 600;" for="estado">Status</label>
            <select class="form-control" id="estado" name="estado" required>
                <option value="">Selecione um status...</option>
                <option value="Fechado">Fechado</option>
                <option value="Aberto">Aberto</option>
            </select>
        </div>
    </div>

    <div class="col-xl-8 col-md-12 col-12 mt-4 mb-5 ">
        <label style="font-weight: 600;" for="orgao">Veículo de manifestação</label>
        <div class="row custom-checkboxes">
            <div class="col-sm-3 mb-1">
                <div class="form-control">
                    <input type="checkbox" id="veiculo1" name="veiculo1" value="veiculo1">
                    <label for="veiculo1">Presencial</label>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-control">
                    <input type="checkbox" id="veiculo3" name="veiculo3" value="veiculo3">
                    <label for="veiculo3">WhatsApp</label>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-control">
                    <input type="checkbox" id="veiculo2" name="veiculo2" value="veiculo2">
                    <label for="veiculo2">E-mail</label>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-control">
                    <input type="checkbox" id="veiculo4" name="veiculo4" value="veiculo4">
                    <label style="font-weight: 600;" for="acoes">Outros</label>
                    <textarea class="form-control" id="acoes2" name="acoes2" rows="1" maxlength="500" required></textarea>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-md-4">
        <div class="col-md-12 col-12 mb-5 mr-4 " style="margin-left:5px;">
            <label style="font-weight: 600;" for="orgao">Assuntos Tratados</label>
            <div class="row custom-checkboxes">
                <div class="form-control col-sm-10">
                    <input type="checkbox" id="orgao1" name="orgao1" value="Orgao1">
                    <label for="orgao1">Atualização cadastral do Médico</label>
                </div>
                <div class="form-control col-sm-10">
                    <input type="checkbox" id="orgao2" name="orgao2" value="Orgao2">
                    <label for="orgao2">Atualização de procedimentos</label>
                </div>
                <div class="form-control col-sm-10">
                    <input type="checkbox" id="orgao3" name="orgao3" value="Orgao3">
                    <label for="orgao3">Cadastro Médico</label>
                </div>
                <div class="form-control col-sm-10">
                    <input type="checkbox" id="orgao4" name="orgao4" value="Orgao4">
                    <label for="orgao4">Demandas da Contabilidade</label>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="col-md-12 col-12 mb-5 mt-4 m-3" style="margin-left:5px;">
            <div class="row custom-checkboxes">
                <div class="form-control col-sm-10">
                    <input type="checkbox" id="orgao5" name="orgao5" value="Orgao5">
                    <label for="orgao5">Demandas do Faturamento</label>
                </div>
                <div class="form-control col-sm-10">
                    <input type="checkbox" id="orgao6" name="orgao6" value="Orgao6">
                    <label for="orgao6">Demandas do INCOR</label>
                </div>
                <div class="form-control col-sm-10">
                    <input type="checkbox" id="orgao7" name="orgao7" value="Orgao7">
                    <label for="orgao7">Demandas do RH</label>
                </div>
                <div class="form-control col-sm-10">
                    <input type="checkbox" id="orgao8" name="orgao8" value="Orgao8">
                    <label for="orgao8">Demandas do setor financeiro</label>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="col-md-12 col-12 mb-5 mt-4 m-4" style="margin-left:5px;">
            <div class="row custom-checkboxes">
                <div class="form-control col-sm-10">
                    <input type="checkbox" id="orgao9" name="orgao9" value="Orgao9">
                    <label for="orgao9">Demandas do setor de TI</label>
                </div>
                <div class="form-control col-sm-10">
                    <input type="checkbox" id="orgao10" name="orgao10" value="Orgao10">
                    <label for="orgao10">Estacionamento</label>
                </div>
                <div class="form-control col-sm-10">
                    <input type="checkbox" id="orgao11" name="orgao11" value="Orgao11">
                    <label for="orgao11">Repasse médico</label>
                </div>
                <div class="form-control col-sm-10">
                    <input type="checkbox" id="orgao12" name="orgao12" value="Orgao12">
                    <label for="orgao12">Outros</label><textarea class="form-control" id="acoes3" name="acoes3" rows="1" maxlength="500" required></textarea>
                </div>
            </div>
        </div>
    </div>
</div>


         
            <div class="border p-3">
            <div class="row">
            <h4 style="font-weight: bold;">DADOS DO PROFISSIONAL</h4>
                <div class="col-xl-6 col-md-6 mt-3">
                    <label style="font-weight: 600;" for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" maxlength="80" required>
                </div>
                <div class="col-xl-3 col-md-6 mt-3">
                    <label style="font-weight: 600;" for="registro">CRM</label>
                    <input type="text" class="form-control" id="registro" name="registro" maxlength="12" required>
                </div>

                <div class="col-xl-3 col-md-6 mt-3">
                    <div class="form-group">
                        <label style="font-weight: 600;" for="orgao">Órgão</label>
                        <select class="form-control" id="orgao" name="orgao" required>
                            <option value="">Selecione...</option>
                            <option value="Orgao1">CRM-AC</option>
                            <option value="Orgao2">CRM-AL</option>
                            <option value="Orgao1">CRM-AP</option>
                            <option value="Orgao2">CRM-AM</option>
                            <option value="Orgao1">CRM-BA</option>
                            <option value="Orgao2">CRM-CE</option>
                            <option value="Orgao1">CRM-DF</option>
                            <option value="Orgao2">CRM-ES</option>
                            <option value="Orgao1">CRM-GO</option>
                            <option value="Orgao2">CRM-MA</option>
                            <option value="Orgao1">CRM-MT</option>
                            <option value="Orgao2">CRM-MS</option>
                            <option value="Orgao1">CRM-MG</option>
                            <option value="Orgao2">CRM-PA</option>
                            <option value="Orgao1">CRM-PB</option>
                            <option value="Orgao2">CRM-PR</option>
                            <option value="Orgao1">CRM-PE</option>
                            <option value="Orgao2">CRM-PI</option>
                            <option value="Orgao1">CRM-RJ</option>
                            <option value="Orgao2">CRM-RN</option>
                            <option value="Orgao1">CRM-RS</option>
                            <option value="Orgao2">CRM-RO</option>
                            <option value="Orgao1">CRM-RR</option>
                            <option value="Orgao2">CRM-SC</option>
                            <option value="Orgao1">CRM-SP</option>
                            <option value="Orgao2">CRM-SE</option>
                            <option value="Orgao1">CRM-TO</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mt-3">
                    <label style="font-weight: 600;" for="celular">Cpf</label>
                    <input type="tel" class="form-control" id="celular" name="celular" required placeholder="999.999.999-99">
                </div>
               

                <div class="col-xl-3 col-md-6 mt-3">
                    <div class="form-group">
                        <label style="font-weight: 600;" for="date">Data de Nascimento</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mt-3">
                    <label style="font-weight: 600;" for="celular">Telefone</label>
                    <input type="tel" class="form-control" id="celular" name="celular" required placeholder="(99) 9 9999-9999">
                </div>
                <div class="col-xl-3 col-md-6 mt-3">
                    <label style="font-weight: 600;" for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <div class="invalid-feedback">
                        Por favor, insira um e-mail válido.
                    </div>
                </div>
                 
                <div class="col-xl-12 col-md-6 mt-3 mb-4">
                    <label style="font-weight: 600;" for="descricao">Especialidade(s)</label>
                    <textarea class="form-control" id="descricao-especialidades" name="descricao-especialidades" rows="3" maxlength="1000" required></textarea>
                </div>
                </div>
                </div>
                <br>
               
                <div class="border p-3 mt-4">
                <h4 style="font-weight: bold;">DESCRIÇÃO DO ATENDIMENTO</h4>
                <div class="col-xl-12 col-md-6 mt-3">
                    <label style="font-weight: 600;" for="descricao">Descrição</label>
                    <textarea class="form-control" id="descricao" name="descricao" rows="3" maxlength="1000" required></textarea>
                </div>

                <div class="col-xl-12 col-md-6 mt-3 mb-3">
                    <label style="font-weight: 600;" for="acoes">Ações previstas</label>
                    <textarea class="form-control" id="acoes" name="acoes" rows="3" maxlength="1000" required></textarea>
                </div>
            </div>
      
            <div class="d-flex justify-content-center align-items-center mt-4" >
            <button style="width:120px; font-weight: bold;" type="button" id="enviarButton" class="btn btn-primary">Enviar</button>
            </div>


        </form>
        <br>
    </div>  
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="js/indexenviar.js"></script>
</body>
</html>
