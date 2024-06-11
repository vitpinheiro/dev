
    // Definindo a função enviarFormulario
    function enviarFormulario() {
        var date = document.getElementById("date").value;
        var orgao1 = document.getElementById("orgao1").checked;
        var orgao2 = document.getElementById("orgao2").checked;
        var nome = document.getElementById("nome").value;
        var registro = document.getElementById("registro").value;
        var estado = document.getElementById("estado").value;
        var orgao = document.getElementById("orgao").value;
        var celular = document.getElementById("celular").value;
        var nascimento = document.getElementById("nascimento").value;
        var email = document.getElementById("email").value;
        var descricaoEspecialidades = document.getElementById("descricaoEspecialidades").value;
        var descricao = document.getElementById("descricao").value;
        var acoes = document.getElementById("acoes").value;

        // Aqui você pode fazer a validação dos campos se necessário

        // Exemplo de validação simples
        if (nome.trim() === "" || email.trim() === "") {
            Swal.fire({
                title: "Erro no registro",
                text: "Preencha todos os campos obrigatórios",
                icon: "error"
            });
            return;   
            // Aborta o envio do formulário se houver campos obrigatórios vazios
        }

        // Se todos os campos estiverem preenchidos, você pode prosseguir com o envio do formulário
        $.ajax({
            url: 'enviarindexbanco.php', // Substitua 'seu_arquivo_php.php' pelo caminho do seu arquivo PHP de destino
            method: 'POST',
            data: {
                date: date,
                orgao1: orgao1,
                orgao2: orgao2,
                nome: nome,
                registro: registro,
                estado: estado,
                orgao: orgao,
                celular: celular,
                nascimento: nascimento,
                email: email,
                descricaoEspecialidades: descricaoEspecialidades,
                descricao: descricao,
                acoes: acoes
            },
            success: function (response) {
                Swal.fire({
                    title: "Registro enviado com sucesso!",
                    text: response,
                    icon: "success"
                });
            },
            error: function (error) {
                Swal.fire({
                    title: "Erro",
                    text: "Ocorreu um erro ao enviar o registro.",
                    icon: "error"
                });
                console.error('Erro na solicitação AJAX:', error);
            }
        });
    }

    
    var enviarButton = document.getElementById("enviarButton");

    enviarButton.addEventListener("click", function() {
       
        enviarFormulario();
    });
;
