<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<link rel="sortcut icon" href="../dados/img/favicon_micrei.jpeg" type="image/favicon.jpeg"/>
<title>Contato</title>
</head>
<?php
include '../esqueleto.php';
?>
<body>
<!-- Informações básicas acerca do projeto -->
<div class="container-fluid">
    <div class="card border-0">
        <div class="card-text alert-info text-primary"><p><h3 align="center">Ambiente para interação</h3></p></div>
        <div class="card-body bg-faded">
            <h6 align="center"><font color="#FF0000"><b><i>Página em construção!!</i></b></font></h6>
            <p class="card-text"></p>
            <form class="row g-3">
                <div class="container">
                    <div class="container-fluid" align="center">
                        <div class="col-md-6">
                            <!--    <label for="validationServer01" class="form-label">Prenome</label> -->
                            <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Digite aqui seu primeiro nome"required>
                        </div><br>
                        <div class="col-md-6">
                            <!--    <label for="validationServer02" class="form-label">Sobrenome</label> -->
                            <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Digite aqui seu sobrenome" required>
                        </div><br>
                        <div class="col-md-6">
                            <!--    <label for="validationServer03" class="form-label">Email</label> -->
                            <input type="email" class="form-control is-valid" id="validationServer03" placeholder="Digite aqui seu e-mail" required>
                        </div><br>
                        <div class="col-md-6">
                            <!--    <label for="validationServer01" class="form-label">Motivo</label> -->
                            <select class="form-select form-control is-valid" id="validation" align="center" required>
                                <option  value="nenhum">Selecione o motivo do seu contato</option>
                                <option value="duvidas">Dúvidas</option>
                                <option value="sugestoes">Sugestões</option>
                                <option value="erros">Erros percebidos</option>
                                <option value="outros">Outros motivos ...</option>
                            </select>
                        </div><br>
                        <div class="col-md-6">
                            <textarea class="form-control is-valid" id="validationTextarea" placeholder="Descreva detalhadamente suas dúvidas, sugestões, erros percebidos ou outros motivos..." required></textarea>
                        </div><br>

                        <div class="col-md-6">
                            <div class="d-grid gap-4 d-md-flex justify-content-md-between">
                                <button class="btn btn-primary" type="submit">Enviar</button>
                                <button class="btn btn-primary" type="reset">Cancelar</button>
                            </div>
                        </div>
<!--
                                <p class="card-text"><h6 align="center">Se preferir, ligue ou envie mensagem para</h6></p>
                                <p class="card-text"><h6 align="center">Arildo Alves de Menezes</h6></p>
                                <p align="center"><img src="../img/whatsapp.png" border="0" alt="Whatsapp" width="30">+55 (61) 98189 5600</p>
                            -->
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="ha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>