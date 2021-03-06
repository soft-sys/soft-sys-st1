<?php	
session_start();
	include("../cnx/cnx.php");
	$sag=cnx();
	
	$id = $_SESSION['usuario'];
	$query_usu = "SELECT nombre FROM usuarios WHERE id_usuario = '".$id."'";
	$consulta_usu = $sag->query($query_usu);
	if($consulta_usu->num_rows > 0)
	{
		$rs_usu = $consulta_usu->fetch_assoc();
		$nom = $rs_usu["nombre"];
	}
?>

<!DOCTYPE html>
<html lang="es">
	<!-----					COMIENZA DECLARACI�N DE CLASES, JS Y CSS					----->
	<head>
		<?php
			include("../head_menu_css.php");
			include("../head_gen.php");
		?>
		<link rel="stylesheet" href="../css/estilo_administrativo.css" type="text/css" media="screen" />
	</head>
	<!-----					COMIENZA EL CUERPO DEL SISTEMA					----->
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
		
			<!----------     AQUI COMIENZA EL HEADER     ---------->
			<header class="main-header">
				<?php	include("../header.php");	?>
			</header>
			<!----------     AQUI TERMINA EL HEADER
			********************************************************
			AQUI COMIENZA EL MENU     ---------->
			
			<?php	include("../menu.php");	?>
			
			<!----------     AQUI TERMINA EL MENU
			********************************************************
			AQUI COMIENZA LA P�GINA     ---------->
			
			<div class="content-wrapper">
				
				<!----------     TITULO     ---------->
			
				<section class="content-header">
					<center class="titulo">
                                            Cliente informe
					</center>
				</section>
					
				<!----------     TITULO     ---------->
				<section class="content">
					<div class="modal-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered" id="t-infc">
            <thead>
                <tr class="tab_tr">
                    <th scope="col" class="tab_centrar">Estatus</th>
                    <th scope="col" class="tab_centrar">RFC</th>
                    <th scope="col" class="tab_centrar">Direccio&oacute;n</th>
                    <th scope="col" class="tab_centrar">Direccion Informe / Cotizacion</th>
                    <th scope="col" class="tab_centrar">Puntos De Muestreo</th>
                </tr>
            </thead>
            <div class="col-md-4 col-sm-4 col-lg-4 form-search">
                <i class="fas fa-calendar"></i> Busqueda Periodo
                <div class="input-daterange input-group" id="datepicker">
                    <input type="text" class="form-control" name="start" id="start" placeholder="Fecha Inicio"/>
                    <span class="input-group-addon">a</span>
                    <input type="text" class="form-control" name="end" id="end" placeholder="Fecha Fin"/>
                </div>
                <button class="btn-tblinfc-fild btn btn-primary btn-tbl" type="button"><i class="fas fa-filter"></i> Filtrar</button>
            </div>
            <div class="col-md-3 col-sm-3 col-lg-3 form-search">
                <i class="fas fa-search"></i> Busqueda Avanzada 
                <input type="text" name="filter" id="filter" class="form-control" placeholder="Buscar...">
                <button class="fil-list-src-infc btn btn-primary btn-tbl" type="button"><i class="fas fa-filter"></i> Filtrar</button>
            </div>
            <tbody>
                <tr class="tab_td">
                    <th scope="row" class="tab_centrar"><span class="label label-success">Activo</span></th>
                    <td class="tab_centrar"></td>
                    <td class="tab_centrar"></td>
                    <td class="tab_centrar"></td>
                    <td class="tab_centrar"></td>
                </tr>
        </table>
    </div>
</div>
<div class="modal-footer">
        <button type="submit" class="btn btn-success" id="guardarnuevo">Guardar</button>
        <button type="submit" class="btn btn-primary" id="guardarnuevo">Modificar</button>
        <button type="submit" class="btn btn-warning" id="guardarnuevo">Eliminar</button>
</div>
				</section>
			</div>
			
			<!----------     AQUI TERMINA LA P�GINA
			********************************************************
			AQUI COMIENZA LA PIECERA     ---------->
			
			<footer class="main-footer">

			</footer>
			
			<!----------     AQUI TERMINA LA PIECERA     ---------->
		</div>
		<?php	include("../head_menu_js.php");	?>
	</body>
	<!-----					TERMINA EL SISTEMA					----->
</html>