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
					<p><h3 class="card-title" align="center">Avaliação de perfil</h3></p>
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
<!-- Acordeão para Recomendações teóricas - Início... -->
		<div class="container-fluid">
			<div class="card border-0">
				<div class="card-header bg-info">
					<!-- <p><h3 class="card-title" align="center">Recomendações teóricas</h3></p>-->
					<p><h3 class="card-title" align="center">Aquecendo os neurônios</h3></p>
				</div>
				<span class="border border-primary">
					<div class="card-body bg-faded">
						<div class="accordion" id="accordionExample">
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingOne">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								<b>Pergunta nr 1</b>
								</button>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p class="card-text text-justify"><i>Espaço para resposta da pergunta nr 1</i></p>
										<p class="card-text text-justify"><i>Espaço para resposta da pergunta nr 1</i></p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								<b>Pergunta nr 2</b>
								</button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p class="card-text text-justify"><i>Espaço para resposta da pergunta nr 2</i></p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingThree">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								<b>Pergunta nr 3</b>
								</button>
								</h2>
								<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p class="card-text text-justify"><i>Espaço para resposta da pergunta nr 3</i></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</span>
			</div>
		</div>
		<br>
<!-- Acordeão para Recomendações teóricas - Final... -->		
		<!-- Exercitando os músculos  - Início... -->
		<div class="container-fluid">
			<div class="card border-0">
				<div class="card-header bg-info">
					<!-- <p><h3 class="card-title" align="center">Recomendações teóricas</h3></p>-->
					<p><h3 class="card-title" align="center">Exercitando os músculos</h3></p>
				</div>
				<span class="border border-primary">
					<div class="card-text bg-faded">
						<ul><a href="https://endeavor.org.br/formato/ferramentas-e-planilhas/?filter-category%5B%5D=desenvolvimento-pessoal" target="_blank">Ferramenta X</a></ul>
						<ul><a href="https://endeavor.org.br/formato/ferramentas-e-planilhas/?filter-category%5B%5D=desenvolvimento-pessoal" target="_blank">Ferramenta Y</a></ul>
						<ul><a href="https://endeavor.org.br/formato/ferramentas-e-planilhas/?filter-category%5B%5D=desenvolvimento-pessoal" target="_blank">Ferramenta W</a></ul>
						<ul><a href="https://endeavor.org.br/formato/ferramentas-e-planilhas/?filter-category%5B%5D=desenvolvimento-pessoal" target="_blank">Ferramenta Z</a></ul>
						<ul><a href="https://endeavor.org.br/formato/ferramentas-e-planilhas/?filter-category%5B%5D=desenvolvimento-pessoal" target="_blank">Ferramenta ...</a></ul>
					</div>
				</span>
			</div>
		</div>
		<!-- Exercitando os músculos  - Final... -->
		<br><br><br>
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<!-- Informações de configurações gerais... -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!--
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
-->
</body>
</html>