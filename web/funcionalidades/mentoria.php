<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <link rel="sortcut icon" href="../dados/img/favicon_micrei.jpeg" type="image/favicon.jpeg"/>
        <title>Mentoria</title>
    </head>
    <?php
    include '../esqueleto.php';
    ?>
    <body>
        <!-- Tópicos para Mentoria -->
        <div class="container-fluid">
            <div class="card border-0">
                <div class="card-text alert-info text-primary"><p><h3 align="center">Ambiente de Mentoria</h3></p></div>
                <div class="card-body bg-faded">
                    <h6 align="center"><font color="#FF0000"><b><i>Página em construção!!</i></b></font></h6>
                    <p class="card-text text-justify">Nos tópicos seguintes, descreveremos o que precisarás saber durante as principais etapas da jornada de um empreendedor.</p>
                    <p class="card-text text-justify">Instigaremos seu raciocínio com perguntas e respostas, orientações de usos, exemplos práticos e material de apoio.</p>
                    
                    <div class="container-fluid" align="center">
                        <form name="funcionalidade">
                            <select name="funcionalidades" class="col-md-6 form-control is-valid"  id="func" aria-label="Default select example" required>
                                <option value="nenhum" selected>Escolha uma funcionalidade...</option>
                                <option value="func_perfil.html">Avaliação de perfil</option>
                                <option value="func_ideias.html">Avaliação e seleção de ideias</option>
                                <option value="func_atividades.html">Seleção de atividades e modelos de negócios</option>
                                <option value="func_local.html">Localização do empreendimento</option>
                                <option value="func_planejamento.html">Planejamento estratégico</option>
                                <option value="func_processos.html">Principais processos de trabalhos</option>
                                <option value="func_investimentos.html">Captação de investimentos</option>
                                <option value="func_formalizar.html">Formalização do empreendimento</option>
                                <option value="func_colaboradores.html">Seleção e contratação de colaboradores</option>
                                <option value="func_ferramentas.html">Ferramentas de apoio gerencial</option>
                            </select>
                        </form>
                        
                        <script type="text/javascript">
                        var urlMenu = document.getElementById('func');
                        urlMenu.onchange = function() {
                        var userOption = this.options[this.selectedIndex];
                        if (userOption.value != "nenhum") {
                        window.open (userOption.value, "iframefunc", "");
                        }
                        }
                        </script>
                        
                        <div class="container-fluid" align="center">
                            <a href="contato.php" target="iframefunc"></a><br>
                            <iframe
                            width="100%"
                            style="height: 100vh"
                            frameborder="0"
                            name="iframefunc"
                            ></iframe>
                        </div>
                        
                        <!--
                        <p class="card-text text-justify"></p>
                        <li><a href="#" class="text-danger" target="_blank">Base para perfil</a></li>
                        <li><a href="../funcionalidades/perfil.php" target="_blank">Avaliação de perfil</a></li>
                        <li><a href="#" target="_blank">Formação e seleção de ideias</a></li>
                        <li><a href="#" target="_blank">Informações sobre o negócio</a></li>
                        <li><a href="#" target="_blank">Definição do modelo de negócios</a></li>
                        <li><a href="#" target="_blank">Localização</a></li>
                        <li><a href="#" target="_blank">Principais processos de trabalho</a></li>
                        <li><a href="#" target="_blank">Mercado, Finanças e Marketing</a></li>
                        <li><a href="#" target="_blank">Captação de investimentos</a></li>
                        <li><a href="#" target="_blank">Capital de giro</a></li>
                        <li><a href="#" target="_blank">Abertura/Fechamento de empresas</a></li>
                        <li><a href="#" target="_blank">Compras, vendas e prestação de serviços</a></li>
                        <li><a href="#" target="_blank">Desenvolvimento pessoal</a></li>
                        <li><a href="#" target="_blank">Ferramentas e planilhas</a></li>
                        <li><a href="#" target="_blank">Defina metas</a></li>
                        <li><a href="#" target="_blank">Reserve tempo diário para aprender</a></li>
                        <li><a href="#" target="_blank">Traçe estratégias</a></li>
                        <li><a href="#" target="_blank">Amplie sua rede de contatos</a></li>
                        <li><a href="#" target="_blank">Notas Fiscais</a></li>
                        <li><a href="#" target="_blank">Calendário de obrigações</a></li>
                        -->
                        <!-- Opções acima com Links ativos
                        <p class="card-text text-justify"></p>
                        <li><a href="https://endeavor.org.br/formato/ferramentas-e-planilhas/?filter-category%5B%5D=desenvolvimento-pessoal" class="text-danger" target="_blank">Base para perfil.php</a></li>
                        <li><a href="../dados/funcionalidades/perfil.php" target="_blank">Avaliação de perfil</a></li>
                        <li><a href="https://endeavor.org.br/" target="_blank">Formação e seleção de ideias</a></li>
                        <li><a href="https://capital.endeavor.org.br/linhas-de-credito/" target="_blank">Informações sobre o negócio</a></li>
                        <li><a href="https://endeavor.org.br/" target="_blank">Definição do modelo de negócios</a></li>
                        <li><a href="https://capital.endeavor.org.br/linhas-de-credito/" target="_blank">Localização</a></li>
                        <li><a href="https://capital.endeavor.org.br/linhas-de-credito/" target="_blank">Principais processos de trabalho</a></li>
                        <li><a href="https://www.sebrae.com.br/sites/PortalSebrae/ideias/como-montar-uma-academia-de-ginastica,80387a51b9105410VgnVCM1000003b74010aRCRD" target="_blank">Mercado, Finanças e Marketing</a></li>
                        <li><a href="https://capital.endeavor.org.br/linhas-de-credito/" target="_blank">Captação de investimentos</a></li>
                        <li><a href="https://capital.endeavor.org.br/linhas-de-credito/" target="_blank">Capital de giro</a></li>
                        <li><a href="https://endeavor.org.br/leis-e-impostos/checklist-abertura-e-fechamento-de-empresas/" target="_blank">Abertura/Fechamento de empresas</a></li>
                        <li><a href="https://endeavor.org.br/formato/ferramentas-e-planilhas/?filter-category%5B%5D=vendas" target="_blank">Compras, vendas e prestação de serviços</a></li>
                        <li><a href="https://endeavor.org.br/formato/ferramentas-e-planilhas/?filter-category%5B%5D=vendas" target="_blank">Desenvolvimento pessoal</a></li>
                        <li><a href="https://endeavor.org.br/formato/ferramentas-e-planilhas/?utm_source=menu-site&utm_medium=referencia&utm_campaign=menu-dropdown" target="_blank">Ferramentas e planilhas</a></li>
                        <li><a href="https://capital.endeavor.org.br/linhas-de-credito/" target="_blank">Defina metas</a></li>
                        <li><a href="https://capital.endeavor.org.br/linhas-de-credito/" target="_blank">Reserve tempo diário para aprender</a></li>
                        <li><a href="https://capital.endeavor.org.br/linhas-de-credito/" target="_blank">Traçe estratégias</a></li>
                        <li><a href="https://capital.endeavor.org.br/linhas-de-credito/" target="_blank">Amplie sua rede de contatos</a></li>
                        <li><a href="https://capital.endeavor.org.br/linhas-de-credito/" target="_blank">Notas Fiscais</a></li>
                        <li><a href="https://capital.endeavor.org.br/linhas-de-credito/" target="_blank">Calendário de obrigações</a></li>
                        -->
                    </div>
                </div>
        </div><br>
            <!-- JavaScript (Opcional) -->
            <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="ha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>