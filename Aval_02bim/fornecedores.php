
<div class="conteudo">
			<?php
require_once 'init.php';
 $PDO = db_connect();
 $sql_count = "SELECT COUNT(*) AS total FROM fornecedores ORDER BY nomeFornecedor ASC";
 
$sql = "SELECT idFornecedor, nomeFornecedor , email, dataFundacao FROM fornecedores ORDER BY nomeFornecedor ASC";
 
 $stmt_count = $PDO->prepare($sql_count);
 $stmt_count->execute();
 $total = $stmt_count->fetchColumn();
 
 $stmt= $PDO->prepare($sql);
 $stmt->execute();

?>
			
			<h2>Lista de Fornecedores</h2>
			<p>Total de Fornecedores: <?php echo $total ?></p>
				<?php if($total > 0): ?>
				<table width="100%" border="1"> 
					<thead>			
						<tr>
							<th>ID</th>
							<th>Nome</th>
							<th>Email</th>
							<th>Data</th>
							<th>Acoes</th>
						</tr>
					</thead>
				<tbody>
				<?php while($fornecedores = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
				<tr>
					<td><?php echo $fornecedores['idFornecedor'] ?></td>
					<td><?php echo $fornecedores['nomeFornecedor'] ?></td>
 					<td><?php echo $fornecedores['email'] ?></td>
					<td><?php echo dateConvert($fornecedores['dataFundacao'])?></td>
					<td>
					<links style="color: #3366CC"onclick="chama(this)" href="form-editf.php?id=<?php echo $fornecedores['idFornecedor']?> ">Editar</links>
					<a onclick="chama(this)" href="deletef.php?id=<?php echo $fornecedores['idFornecedor'] ?> ">Excluir</a>	
				</td>
				</tr>
				 <?php endwhile; ?>
 				</tbody>
					</table>
 			<?php else: ?>
 		<p> Nenhum Fornecedor registrado </p>
 		<?php endif; ?>
 		<br>
 		<p><input type="button" href="form-addf.php" onclick="chama(this)" value="Novo Fornecedor"></input></p>
</div>
