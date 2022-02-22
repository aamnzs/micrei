<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <link rel="sortcut icon" href="../dados/img/favicon_micrei.jpeg" type="image/favicon.jpeg"/>
        <title>Ferramental</title>
    </head>
    <?php
    include '../esqueleto.php';
    ?>
    <body>
        <!-- Tópicos para FERRAMENTAS DE APOIO -->
        <div class="container-fluid">
            <div class="card border-0">
                <div class="card-text alert-info text-primary"><p><h3 align="center">F E R R A M E N T A L</h3></p>
                    <div><h6 align="center"><font color="#FF0000"><b><i>Página em construção!!</i></b></font></h6>
                        <p class="card-text text-center">Neste espaço encontrarás ferramentas de apoio administrativo, operacional e gerencial para utilização em conformidade com suas necessidades e ramos de atuações</p>
                    </div>
                    <div class="container-fluid" style="margin-top:25px"></div>  
                    <div class="container-fluid" align="center">
                        <form name="funcionalidade">
                            <select name="funcionalidades" class="col-md-6 form-control is-valid"  id="func" aria-label="Default select example" required>
                                <option value="nenhum" selected>Escolha uma ferramenta de apoio...</option>
                                
<!--<option value="___matriz_ferramentas.html">Teste Matriz FERRAMENTAS</option> -->

                                <option value="ferr_diagnosticar.html">Diagnosticar (Diagrama de Ishikawa / Técnica dos 5 porquês / Método FMEA)</option>
                                <option value="ferr_priorizar.html">Priorizar (Matriz GUT / Matriz B.A.S.I.C.O / Diagrama de Pareto)</option>
                                <option value="ferr_resolver.html">Resolver (Método MASP / Ciclo PDCA / Árvore de Problemas e Oportunidades)</option>
                                <option value="ferr_melhorar.html">Melhorar (5 Ss / DMAIC / SIPOC)</option>
                                <option value="ferr_padronizar.html">Padronizar (Ficha Técnica de Produto / Contrato de Posicionamento / POP - Procedimento Operacional Padrão)</option>
                                <option value="ferr_implementar.html">Implementar (Metas SMART / Benchmarking / Gráfico de Gantt)</option>
                                <option value="ferr_decidir.html">Decidir (Perdas e Ganhos - Trade-Off / Método PDCP / Diagrama de dispersão)</option>
                                <option value="ferr_analisar.html">Analisar (Gráfico de tendência / Q de Yule / DRE - Demonstrativo de Resultados do Exercício)</option>
                                <option value="ferr_avaliar.html">Avaliar (Matriz BCG / SERVQUAL / Diagnóstico de Gestão Empresarial)</option>
                                <option value="ferr_planejar.html">Planejar (Model Business Canvas / Análise SWOT / Forças de Porter)</option>
                                <option value="ferr_executar.html">Executar (5W2H / Kanban / Diagrama em Setas)</option>
                                <option value="ferr_organizar.html">Organizar (Organograma / Fluxograma / Diagrama de Afinidades)</option>
                                <option value="ferr_valorizar.html">Valorizar (Pesquisa de Clima Organizacional / Job to be done / Missão, Visão e Valores)</option>
                                <option value="ferr_criar.html">Criar (Effectuation / Brainstorming / Design Thinking)</option>
                                <option value="ferr_controlar.html">Controlar (CEP - Controle Estatístico de Processos / KPI - Key Performance Indicator / BSC - Balanced Scorecard)</option>
                                <option value="ferr_verificar.html">Verificar (Folha de verificação / Histograma / Checklist)</option>
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
                    </div>
                </div>
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