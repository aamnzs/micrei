<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
	<link rel="sortcut icon" href="../dados/img/favicon_micrei.jpeg" type="image/favicon.jpeg"/>
	<title>MICREI</title>
</head>
<?php
include '../dados/inc/esqueleto.php';
?>
<body>
	<!-- Informações básicas acerca do projeto -->
	<div class="container-fluid">
		<div class="card border-0">
			<div class="card-text alert-info text-primary"><p><h3 align="center">Seja muito bem-vindo(a)!</h3></p></div>
			<span class="border border-primary">
				<div class="card-body bg-faded">
					<p class="card-text text-justify">Este é o ambiente de aprendizagem e treinamento para cidadãos interessados em transformar ideias em negócios.</p>
					<p class="card-text text-justify">Disponibilizaremos informações relevantes para quem deseja empreender e encontra-se em dúvida sobre o mundo dos negócios.</p>
					<div>
						<!-- Botão do modal -->
						<div align="center">
						<button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#exampleModal">Conheça nossa motivação</button></div>
						<!-- Modal da opção de boas vindas-->
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
										<p class="card-text text-justify font-italic">Ao formalizar um negócio, pessoas assumem responsabilidades adicionais e iniciam novos estilos de vida.  Dentre as mudanças, destacam-se a necessidade de lidar com vasta e complexa legislação (Federal, Estadual, Distrital e Municipal), excessiva burocracia, elevada carga tributária, concorrência desleal, segurança pública precária, escassez de mão-de-obra qualificada, dificuldade para obtenção de capital de giro, financiamentos etc</p>
										<p class="card-text text-justify font-italic">Conhecer, controlar e gerenciar todas as obrigações principais e acessórias de um empreendimento tem alto custo profissional e pessoal.  Alguns descuidos podem acarretar prejuízos irreversíveis, problemas de saúde, desgastes em  relacionamentos e no convívio familiar.</p>
										<p class="card-text text-justify font-italic">Acreditando no poder contributivo do conhecimento para a evolução das pessoas e seus impactos positivos para a sociedade, decidimos desenvolver e apresentar soluções tecnológicas modernas e de baixo custo para facilitar e aprimorar fases e circunstâncias do  empreendedorismo nacional.</p>
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
	<br>
	<!-- Informações básicas sobre as principais funcionalidades -->
	<div class="container-fluid">
		<div class="card border-0">
			<div class="card-text alert-info text-primary">
				<p><h3 class="card-title" align="center">Nossas áreas de atuações</h3></p>
			</div>
			<span class="border border-primary">
				<div class="card-body bg-faded">
					<p class="card-text text-justify">Começaremos com socialização de conhecimentos básicos e divulgação das principais rotinas e procedimentos que todos devem conhecer antes de encarar o desafio de iniciar ou ampliar negócios.</p>
					<p class="card-text text-justify">Na sequência, apresentaremos ferramentas de apoio administrativo, operacional e gerencial que facilitarão o planejamento, execução, controle e monitoramento de atividades empresariais.</p>
					<!-- Jumbotron - Início -->
					<div class="container-fluid">
						<div class="card-deck">
							<div class="card">
								<div class="card-header text-danger">
									<p><h5 class="card-title" align="center">Mentoria</h5></p>
								</div>
								<div class="card-body">
									<p class="card-text text-center">Vamos prepará-los para fazer o máximo possível sozinho e com segurança.</p>
									<p align="center"><a href="../dados/funcionalidades/mentoria.php" target="_blank"><img src="https://www.imagensanimadas.com/data/media/56/computador-imagem-animada-0111.gif" width="150" border="0" alt="computador-imagem-animada-0111" /></a></p>
									<div class="container-fluid" align="center">
										<button type="button" class="btn btn-outline-info btn-sm"><a href="../dados/funcionalidades/mentoria.php" target="_blank">Aquecendo os neurônios</a></button>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header text-danger">
									<p><h5 class="card-title" align="center">Material de apoio</h5></p>
								</div>
								<div class="card-body">
									<p class="card-text text-center">Disponibilizaremos ferramentas de suporte administrativo, operacional e gerencial.</p>
									<p align="center"><a href="../dados/funcionalidades/ferramentas.php" target="_blank"><img src="https://www.imagensanimadas.com/data/media/411/trabalho-imagem-animada-0011.gif" width="150" border="0" alt="trabalho-imagem-animada-0011" /></a></p>
									<div class="container-fluid" align="center">
										<button type="button" class="btn btn-outline-info btn-sm"><a href="../dados/funcionalidades/mentoria.php" target="_blank">Exercitando  os músculos</a></button>
									</div>
								</div>
							</div>
							<div class="container-fluid">
								<p align="center">Havendo necessidade de ajuda adicional, solicite suporte especializado.</p>
								<p align="center"><a href="../dados/funcionalidades/contato.php" target="_blank"><img src="https://www.imagensanimadas.com/data/media/235/e-mail-imagem-animada-0680.gif" width="150" border="0" alt="e-mail-imagem-animada-0680" /></a></p>
							</div>
						</div>
					</div>
				</span>
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