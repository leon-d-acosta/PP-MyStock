<?php 
	session_start();
	include("../php/conect.php");
	$email = $_SESSION['email'];
	$sql = "SELECT id, nombre, marca, unidades FROM stock
				WHERE email = '$email'";
	$select = $conect->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MyStock</title>

	<link rel="shortcut icon" href="../fav.png">
	<link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/3.3.3/css/fixedColumns.dataTables.min.css">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</head>
<body style="background-color: #313542;">
	
	<div class="bar col-12">
		<h1>MyStock</h1>
	</div>

	<div class="fixed">	
		<div class="botones" id="hide">	
			<form action="../php/logout.php">
				<button class="bot_logout btn-outline-danger" type="submit">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
						<path fill-rule="evenodd" d="M3 3.25c0-.966.784-1.75 1.75-1.75h5.5a.75.75 0 010 1.5h-5.5a.25.25 0 00-.25.25v17.5c0 .138.112.25.25.25h5.5a.75.75 0 010 1.5h-5.5A1.75 1.75 0 013 20.75V3.25zm16.006 9.5l-3.3 3.484a.75.75 0 001.088 1.032l4.5-4.75a.75.75 0 000-1.032l-4.5-4.75a.75.75 0 00-1.088 1.032l3.3 3.484H10.75a.75.75 0 000 1.5h8.256z">
						</path>
					</svg>
				</button>
			</form>
			<!--<button type="button" class="bot_up buscar btn-outline-secondary" onclick="buscar()">
 	 			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
 	 				<path fill-rule="evenodd" d="M14.53 15.59a8.25 8.25 0 111.06-1.06l5.69 5.69a.75.75 0 11-1.06 1.06l-5.69-5.69zM2.5 9.25a6.75 6.75 0 1111.74 4.547.746.746 0 00-.443.442A6.75 6.75 0 012.5 9.25z">
 	 				</path>
 	 			</svg>
			</button>-->
			<button class="bot_up btn-outline-primary" type="button" onclick="window.location.href='nuevo.php'">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
					<path fill-rule="evenodd" d="M11.75 4.5a.75.75 0 01.75.75V11h5.75a.75.75 0 010 1.5H12.5v5.75a.75.75 0 01-1.5 0V12.5H5.25a.75.75 0 010-1.5H11V5.25a.75.75 0 01.75-.75z">
					</path>
				</svg>
			</button>
		</div>
		<input class="mas" id="mas" type="button" onclick="menu()" value="+">
	</div>


	<h1 class="empresa_name"><?php echo $_SESSION['empresa']; ?></h1>

	<div class="tabla col-10 table-responsive">
		<table id="tabla" class="table">
			<thead>
				<th class="col-1">ID</th>
				<th class="col-3">Nombre</th>
				<th class="col-3">Marca</th>
				<th class="col-1">Unidades</th>
				<th class="col-2">Actualizar</th>
				
			</thead>
			<tbody>
				<?php while ($row = mysqli_fetch_row($select)) { ?>
				<tr>
					<td> <?php echo $row[0] ?></td>
					<td> <?php echo $row[1] ?></td>
					<td> <?php echo $row[2] ?></td>
					<td> <?php echo $row[3] ?></td>
					<td>
						<a class="btn_edit" href="actualizar.php?id=<?php echo $row[0] ?>">MODIFICAR</a>
						<a class="btn_elim" href="../php/eliminar.php?id=<?php echo $row[0] ?>">BORRAR</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<script src="../js/menu.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script type="text/javascript" src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.3.3/js/dataTables.fixedColumns.min.js"></script>
	<script type="text/javascript">
	$(document).ready( function () {
		var tab = $('#tabla').DataTable({
			orderCellsTop: true,
			fixedHeader: true
		});

		$('#tabla thead tr').clone(true).appendTo('#tabla thead');

		$('#tabla thead tr:eq(1) th').each(function(i) {
			var title = $(this).text();
			$(this).html('<input type="text" placeholder="Buscar..." />');

			$('input', this).on('keyup change', function(){
				if (tab.column(i).search() !== this.value) {
					tab
						.column(i)
						.search(this.value)
						.draw();

				}
			})
		});
});
	</script>
</body>
</html>