

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
</style>
<body>

    
<!-- Parte do header e nav -->
<?php include '../php/header.php'; ?>

<main class="container-fluid d-flex justify-content-center align-items-center">
    <div class="form-group col-8 mt-5" >
        <form id="occurrenceForm" method="post" onsubmit="return validateForm()">
        <div class="row ">
    <div class="col-xl-2 col-md-4 mt-1">
        <div class="form-group">
            <label style="font-weight: 600;" for="date">Data</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        
<div class="col-xl-12 col-md-12 mb-4 mt-4 mb-5" >
    <div class="form-group">
        <label style="font-weight: 600;" for="estado">Status</label>
        <select class="form-control" id="estado" name="estado" required>
            <option value="">Selecione um status...</option>
            <option value="">Fechado</option>
            <option value="">Aberto</option>
        </select>
    </div>
</div>

    </div>
    
    <div class="col-xl-7  col-md-12 mb-5 mr-4" style="margin-left:5px;" >
    <label style="font-weight: 600;" for="orgao">Assunto Tratado</label>
    <div class="row custom-checkboxes">
        <div class="form-control col-sm-10 mt-2">
            <input type="checkbox" id="orgao1" name="orgao1" value="Orgao1">
            <label for="orgao1" >Admissão / Contrato de Prestador de Serviços</label>
        </div>
        <div class="form-control col-sm-10 mt-2">
            <input type="checkbox" id="orgao2" name="orgao2" value="Orgao2">
            <label for="orgao2" >Atualização de Dados</label>
        </div>
        <div class="form-control col-sm-10 mt-2">
            <input type="checkbox" id="orgao3" name="orgao3" value="Orgao3">
            <label for="orgao3" >Repasse</label>
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
