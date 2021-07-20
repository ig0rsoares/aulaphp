<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>.::Programação Web::.</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div class="topo">
		<img src="img/topo_aula.png" alt="Topo">
	</div>
	<br><br><br><br>
	<h1>ORÇAMENTO</h1><hr><br>

	<div class="conteudo">
	<?php
			$data = $_POST["data"];
			$garantia = $_POST["garantia"];
			$servico = $_POST["servico"];
			$aparelho = $_POST["aparelho"];
			$cliente = $_POST["cliente"];

			echo "<h1>ORÇAMENTO</h1><br>";
			echo "Data do orçamento $data<br>";
			echo "Serviço a ser excutado : $servico<br>";

			switch ($garantia){
					case '1':
						$taxa = 10;
						break;
					case '2':
						$taxa = 20;
						break;
					case '3':
						$taxa = 30;
						break;		
			}
			switch ($servico){
				case 'Formatacao':
					$valor = 120;
					break;
				case 'Troca de Peças':
					$valor = 80;
					break;
				}
		
			
			
			$total = ($valor+$taxa);
			switch ($servico){
					case 'Formatacao':
						echo "Olá SR(a): $cliente <br> O Valor do seu orçamento é R$ $total,00<br>
							  O tempo de garantia do serviço é $garantia meses.<br> Obrigado!";
						break;
					case 'Troca de Peças':
						echo "Olá SR(a) $cliente <br> O Valor do seu orçamento é R$ $total,00<br>
						O tempo de garantia do serviço é $garantia meses.<br> Obrigado!";
						break;
					case 'Outros':
						echo "Olá SR(a) $cliente <br> Favor consultar um de nossos vendedores.<br> Obrigado!";
						break;		
			}
		
		?>
		<br><br>

		<p>Assinatura:________________________________________________</p><br>
		<p>Data:___/___/___</p><br>
		<p>Ao assinar você concorda com todos os termos de serviço e garantia.</p><br>
		<form>
			<input type="button" value="Imprimir Orçamento" onclick="window.print()" >
		</form>
		


		<a href="index.html"> << voltar</a>		
		
	</div>

	<footer>
		<h3>Todos os direitos reservados - Desenvolvido por TecTreinamentos</h3>
	</footer>




</body>
</html>