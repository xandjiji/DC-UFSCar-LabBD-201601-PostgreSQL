<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <title>BD</title>

  <!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
	<a href="../index.php"> <- Voltar</a>
	<h1>Atividades Complementares</h1>
	<table>
		<tr>
			<td>Codigo</td>
			<td>Creditos</td>
			<td>Nome</td>
		</tr>
		<?php
			require_once('../info.php');
			$result = getAtividadeComplementar();
			while ($row = pg_fetch_array($result)){
				?> 
			<tr>
				<td><?php echo $row['codigo']; ?></td>
				<td><?php echo $row['creditos']; ?></td>
				<td><?php echo $row['nome']; ?></td>
			</tr>
			<?php
			}
		?>
	</table>
</body>
</html>
