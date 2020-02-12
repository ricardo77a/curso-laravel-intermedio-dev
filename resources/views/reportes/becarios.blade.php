<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Reporte</title>
		<style>
			#header{
				position: fixed;
				top: -40px;
			}
			#footer{
				position: fixed;
				bottom: -5px;
			}
			#contaier{
				position: fixed;
			}
		</style>		
	</head>
	<body>
		<div id="header">
			<p>Este es un header</p>
		</div>
		<div id="footer">
			<p>Este es un footer</p>
		</div>
		<div class="container">			
			<table>
				@foreach ($becarios as $becario)
					<tr>
						<td>{{ $becario->nombre }}</td>
						<td>{{ $becario->apellido_paterno }}</td>
						<td>{{ $becario->apellido_materno }}</td>
						<td>{{ $becario->nivel }}</td>
					</tr>
				@endforeach
			</table>
		</div>
	</body>
</html>