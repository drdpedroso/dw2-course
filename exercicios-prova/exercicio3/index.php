<html>
	<header>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</header>
	<body>
	<?php
		include_once('Produto.php');
		$products = mysqli_fetch_all($result);
	?>
	<div class="table">
		<div class="title">
			<div class='linha'>
				<div class='coluna'>
					Descrição
				</div>
				<div class='coluna'>
					Preço
				</div>
				<div class='coluna'>
					Validade
				</div>
				<div class='coluna'>
					Fornecedor
				</div>
				<div class='coluna'>
					Quantidade
				</div>
			</div>
		</div>

		<?php
			foreach ($products as $p) {
				$toShow = "<div class='linha'>
										<div class='coluna'>
											$p[1]
							      </div>
							      <div class='coluna'>
							         $p[2]
							      </div>
										<div class='coluna'>
											 $p[3]
										</div>
										<div class='coluna'>
											 $p[4]
										</div>
										<div class='coluna'>
											 $p[5]
										</div>
									</div>";
				 echo $toShow;
			}
		?>
	 </div>
	</body>
</html>
