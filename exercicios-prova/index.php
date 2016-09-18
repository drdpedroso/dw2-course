<html>
	<header>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</header>

	<body>
		<?php $conn = mysqli_connect("localhost", "root", "root", "revisao");
		$result = mysqli_query($conn, "SELECT * FROM estado");
		$resul = mysqli_fetch_all($result);

		 ?>
        <form method="post" action="Cadastro.php">
            <input type="text" name="nome" placeholder="Nome" />
						<select name='estado'>
							<?php
								foreach ($resul as $r) {
									echo "<option>$r[2]</option>";
								}
							?>
						</select>

            <input type="submit" name="doCalc" value="Salvar" />
        </form>
	</body>
</html>
