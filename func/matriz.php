<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<meta charset="UTF-8">
			<title>Perfil</title>
		</head>
		<body>
			<?php
			include '../inc/esqueleto.php';
			?>
			<!-- Funcionalidade "Avaliação de perfil e habilidades" -->
			<div class="container-fluid">
				<div class="card border-0">
					<div class="card-header bg-warning text-primary">
						<p><h3 class="card-title" align="center"><marquee behavior="alternate" width="100%" scrollamount="5" onmouseover="this.stop()" onmouseout="this.start()">Avaliação de perfil</marquee></h3></p>
					</div>
					<span class="border border-primary">
						<div class="card-body bg-faded">
							<p class="card-text text-justify">Autoconhecimento possibilita identificação de  habilidades, valores, interesses, pontos fracos, pontos fortes etc</p>
							<p class="card-text text-justify">Esta análise detectará necessidades de capacitações adicionais e contribuirá para a definição de metas visando ao alcance de desejos pessoais e profissionais.</p>
						</div>
					</span>
				</div>
			</div>
			<br>
			<!-- Acordeão das perguntas frequentes... -->
			<div class="container-fluid">
				<div class="card border-0">
					<div class="card-header bg-info">
						<p><h3 class="card-title" align="center">Preparação teórica</h3></p>
					</div>
					<span class="border border-primary">
						<div class="card-body bg-faded">
						<!-- Exemplo de Acordeão -->
						      <div class="accordion" id="accordionExample">
						        <div class="accordion-item">
						          <h2 class="accordion-header" id="headingOne">
						          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          <strong>Pergunta nr 1</strong>
						          </button>
						          </h2>
						          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
						            <div class="accordion-body">
						              <p class="card-text text-justify">Espaço para resposta da pergunta nr 1</p>
						            </div>
						          </div>
						        </div>
						        <div class="accordion-item">
						          <h2 class="accordion-header" id="headingTwo">
						          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          <strong>Pergunta nr 2</strong>
						          </button>
						          </h2>
						          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
						            <div class="accordion-body">
						              <p class="card-text text-justify">Espaço para resposta da pergunta nr 2</p>
						            </div>
						          </div>
						        </div>
						        <div class="accordion-item">
						          <h2 class="accordion-header" id="headingThree">
						          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          <strong>Pergunta nr 3</strong>
						          </button>
						          </h2>
						          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
						            <div class="accordion-body">
						              <p class="card-text text-justify">Espaço para resposta da pergunta nr 3</p>
						            </div>
						          </div>
						        </div>
						      </div>
						</div>
					</span>
				</div>
			</div>
			<br>
			<!-- Ferramentas de gestão... -->
			<div class="container-fluid">
				<div class="card border-0">
					<div class="card-header bg-info">
						<p><h3 class="card-title" align="center">Preparação prática</h3></p>
					</div>
					<span class="border border-primary">
						<div class="card-body bg-faded">
							<p class="card-text text-justify">Ferramenta de gestão X</p>
							<div>
								<!-- Botão do modal -->
								<button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#exampleModal">Conheça a ferramenta...</button>
								<!-- Modal da opção de boas vindas-->
								<div class="modal fade" id="exampleModalfuncx" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelfuncx" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title text-danger font-italic" id="exampleModalLabel">A motivação</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
													<p class="card-text text-justify font-italic">O alto índice de falências nos mais variados negócios demonstra que os cidadãos não se preparam  adequadamente para empreender.</p>
													<p class="card-text text-justify font-italic">Ao formalizar um negócio, pessoas assumem responsabilidades adicionais e iniciam novos estilos de vida.  Dentre as mudanças, destacam-se a necessidade de lidar com vasta e complexa legislação (Federal, Estadual, Distrital e Municipal), excessiva burocracia, elevada carga tributária, concorrência desleal, segurança pública precária, escassez de mão-de-obra qualificada, dificuldade para acesso e obtenção de créditos etc</p>
													<p class="card-text text-justify font-italic">Conhecer, controlar e gerenciar todas as obrigações principais e acessórias de um empreendimento tem alto custo financeiro e pessoal.  Alguns descuidos podem acarretar prejuízos irreversíveis, problemas de saúde, desgastes em  relacionamentos e no convívio familiar.</p>
													<p class="card-text text-justify font-italic">Considerando o poder do conhecimento na evolução das pessoas e seus impactos positivos para a sociedade, apresentamos soluções tecnológicas simples e prática para a gestão de negócios.</p>
													<h6><p class="card-text text-sm-right font-italic">Tão importante quanto o sucesso é evitar o fracasso!</p></h6>
											</div>
										
										</div>
									</div>
								</div>
							</div>
						</div>
					</span>
				</div>
			</div>
			<br><br><br>
		</body>
	</html>