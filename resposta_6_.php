<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Relatório de Pedidos</title>
	<style type="text/css">
		table {
			border-collapse: collapse;
			width: 100%;
		}

		table th, table td {
			padding: 8px;
			text-align: center;
			border: 1px solid #ddd;
		}

		table th {
			background-color: #eee;
			color: #333;
			font-weight: bold;
		}

		table tr:nth-child(even) {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
	<h1>Relatório de Pedidos</h1>
	<table>
		<thead>
			<tr>
				<th>ID do Pedido</th>
				<th>Nome do Cliente</th>
				<th>Total do Pedido</th>
				<th>Data do Pedido</th>
			</tr>
		</thead>
		<tbody>
			<?php
				// Conecta ao banco de dados
				$servername = "localhost";
				$username = "seu_usuario";
				$password = "sua_senha";
				$dbname = "seu_banco_de_dados";

				$conn = new mysqli($servername, $username, $password, $dbname);
				if ($conn->connect_error) {
				    die("Falha na conexão: " . $conn->connect_error);
				}

				// Seleciona todos os pedidos
				$sql = "SELECT orders.order_id, user.user_name, orders.order_total, orders.order_date FROM orders INNER JOIN user ON orders.order_user_id = user.user_id";
				$result = $conn->query($sql);

				// Exibe os pedidos em uma tabela
				if ($result->num_rows > 0) {
				    while($row = $result->fetch_assoc()) {
				        echo "<tr>";
				        echo "<td>" . $row["order_id"] . "</td>";
				        echo "<td>" . $row["user_name"] . "</td>";
				        echo "<td>" . $row["order_total"] . "</td>";
				        echo "<td>" . date("d/m/Y H:i:s", strtotime($row["order_date"])) . "</td>";
				        echo "</tr>";
				    }
				} else {
				    echo "<tr><td colspan='4'>Nenhum pedido encontrado.</td></tr>";
				}

				// Fecha a conexão com o banco de dados
				$conn->close();
			?>
		</tbody>
	</table>
</body>
</html>
