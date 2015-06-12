<?php $pageTitle = "Tecnosol - NOC (Network Operation Center)" ?>
<?php include_once("includes/header.php") ?>

<div class="service">
	<div class="service__bg service__bg--noc"></div>
	<div class="service__container">
		<h1 class="service__title service__title--main">NOC (Network <br>Operation Center)</h1>

		<div class="service__content-decoration"></div>
		<div class="service__content-featured">
			<p class="service__featured-text">Tenemos desarrollado un modelo de operaciones que se basa en la experiencia y el conocimiento, para mejorar la productividad de nuestros clientes. Contamos con una plataforma multi OS, basada en software libre Ubuntu, Oracle VM Virtual Box y una selección de productos probados y adecuados para dar prestaciones óptimas en todos los ámbitos.</p>
		</div>
		<div class="service__content-main">
			<p class="service__text">Capaz de albergar soluciones Microsoft Windows Server, completamente compatible con los sistemas de escritorio más populares del mercado, Microsoft Windows Desktop, Mac OSX, Linux. Buscamos en la robustez de los sistemas basados en Unix y de distribución libre, la base para atender todos los servicios que los sistemas informáticos que una empresa pueda requerir con la máxima flexibilidad y solidez. Esta plataforma nos permite heredar toda sistemas existentes e incorporarlos a una estructura definida y documentada, aplicando pautas organizacionales y mapa de la información.</p>

			<h2 class="service__title service__title--sub">Infrestructura Head End</h2>

			<p class="service__text"><strong>Ubuntu Linux:</strong> La plataforma Linux Ubuntu Server LTS, fue seleccionada para la base de nuestra plataforma principalmente por su estabilidad. La edición Servidor de soporte extendido de Ubuntu cuenta con mejor soporte para virtualización, automatización y actualizaciones de mantenimiento. La actual edición 14.04.1 de característica LTS, prevé soporte hasta abril del 2019</p>
			<p class="service__text"><strong>Microsoft Windows Server y Microsoft SQL Server:</strong> Microsoft Windows Server es una falange crucial en la pequeña y mediana empresa. De la mano de Microsoft SQL Server son los captores del mercado de los sistemas de gestión, es por eso que ocupa un lugar exacto en la plataforma que proponemos, ya sea como servidor protagónico o virtual, se consiguió brindarle exclusividad en el logrando excelente performance, en el entorno más estable evitándole relación con el hardware.</p>
			<p class="service__text"><strong>Oracle VirtualBox:</strong> Se escogió Oracle VM VirtualBox para la virtualización de los sistemas por sus características comerciales y su respaldo, ya que es gratuito y aún así proviene de un desarrollador muy reconocido en el mundo de los sistemas (Oracle). En pos de una mejor gestión de los sistemas de nuestros clientes, se buscó independizar los Servidores o Servicios, lo que permite manejar mejor los recursos que cada uno necesita y que los distintos sistemas operen con autonomía respecto de los otros sistemas, de esta forma si un Servicio se ve afectado no altera a los otros y su recuperación es más rápida. Esta plataforma de virtualización corre sobre Linux Ubuntu Server LTS. Esto permite crear equipos virtuales con todas las características de los equipos físicos y suman la bondad de ser independientes del hardware, se alojan en un sistema de archivos especial de tipo lógico. Esto permite generar copias de respaldo del sistema en su integridad de forma más simple y su puesta en marcha sobre una nueva plataforma de virtualización es inmediata.</p>
			
			<h2 class="service__title service__title--sub">Servidor de archivos</h2>
			<p class="service__text">Samba es la opción más eficiente, flexible, escalable y económica para Servidor de Archivos, cuenta con la doble capa de seguridad que otorga el Linux a la estructura desde el OS y luego desde el Samba mismo. Permite la optimización de los recursos de Proceso y de Almacenamiento sin límites con el Sistema de Archivos Ext4 Jornaled que incorpora los Gigas necesarios a un punto del Árbol en la Res, independientemente de las particiones de los Discos Rígidos dentro del equipo.</p>

			<h2 class="service__title service__title--sub">Servidor de Resguardo</h2>
			<p class="service__text">Cada sistema tiene sus características y requerimientos, la solución que encontramos con mejor adecuación es por medio de Discos Rígidos. Con un esquema de rotación y amplia capacidad de almacenamiento en base a un costo en recursos programado, da lugar a un histórico de Backups anual. Al plan de tareas se sumarán los respaldos de las Máquinas Virtuales.Esta solución basada en la centralización de los datos nos da tiempos óptimos, excelente performance y la posibilidad de manejar grandes volúmenes de información.</p>

			<h2 class="service__title service__title--sub">Servidor de VPN</h2>
			<p class="service__text">Proponemos integrar estas redes periféricas a la red de Red Central a través de la implementación de Túneles VPN, de forma tal que los usuarios puedan interactuar como si estuvieran en la misma ubicación física, a través de este sistema de cables virtuales, dispuestos por medio de túneles de encriptación que dan lugar a conexiones privadas a través de la red pública, lo que conlleva las siguientes ventajas:</p>
			<ul class="service__list">
				<li>Centralización de los Datos aplicando una correcta estructura jerárquica de niveles, lo que permite ejercer mejor control.</li>
				<li>Posibilidad de compartir directorios y archivos en tiempo real.</li>
				<li>Posibilidad de trabajar contra los servidores de Red Central (Cámaras IP, bkp, etc). Extendido a todas las locaciones.</li>
				<li>Posibilidad de tomar control por RDP (Remote Desktop Protocol) de cualquier PC de la Oficina Central y otras locaciones.</li>
				<li>Liberación de recursos del correo (las cuentas de mail son limitadas).</li>
			</ul>
			
			<p class="service__text">Idealmente para implementar una VPN sólida y simple se debiera desarrollar equipos preparados para tal fin: Routers con VPN, pre configurados que se envían a los puntos remotos, se colocan entre el Modem del ISP y las PCs, automáticamente establecería Túnel VPN con Red Central y gestionaría la Red Remota Interna LAN (Local Area Network) por medio del DHCP, que otorga una conección a cada equipo dándole una dirección en la red global de la empresa.</p>

			<p class="service__text">Implementando VPN ya sea en modalidad de Túnel VPN o Cliente VPN que permiten la conexión permanente o regular con la Red Central, se mejora la capacidad organizacional de la información de la empresa y se incorpora a más usuarios a un modo de trabajo uniforme,  digitado y centralizado, permitiendo englobar en un solo sistema de archivos todas las ramificaciones del árbol.</p>
			


		</div>
	</div>
</div>

<?php include_once("includes/footer.php") ?>