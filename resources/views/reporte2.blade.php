
<h1>Esta es la ruta del reporte de Citas en PDF</h1>

<?php 
// Este archivo contiuene una plantilla de ejeplo de cracion de reportes en pdf
$html = "
        <!DOCTYPE html>
	    <html>
		<head>
			<style>
			    @page {
			        size: auto;
			        odd-header-name: encabezado;
			      
			        odd-footer-name: pie;
			    }
			</style>
        </head>
        <body>
        <img src='img/cobac.png' width='50' height='50' style=' ' >
        <br>
            <div>
                <section>
                   
                    <article>
                        <p> dolor sit amet, consectetur adipisicing elit. Eligendi doloremque cum libero voluptatem incidunt dicta aperiam odio quis nemo totam possimus ad magni voluptatum, perferendis minus veniam sed porro eaque.</p>
                    </article>
                </section>
            
                <table table border='1'  >
                    <thead >
                        <tr >
                            <th>Administrar</th>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Día</th>
                            <th>Hora</th>
                            <th>Barbero</th>
                            

                        </tr>
                    </thead>
            
                </table>
            </div>
         
            <pageheader name='encabezado'
                content-center='Reporte de Citas PDF '
                header-style='font-weight: bold; color: ; font-size: 14pt;' line='off;'
             />
          
            <pageheader name='encabezado2'
             content-center='Reporte de Citas '
            header-style='font-weight: bold; color: ; font-size: 14pt;' line='off;' />
          
            

	        <pagefooter name='pie' content-left='Elaborado por: $usuario'
	        content-right='$fecha_hora' footer-style='font-family: serif; font-size: 8pt;
            font-weight: bold; font-style: italic; color: #000000;' />
        </body>";
                