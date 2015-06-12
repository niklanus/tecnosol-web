<?php $pageTitle = "Tecnosol - Contacto" ?>
<?php include_once("includes/header.php") ?>

<div class="service">
	<div class="service__bg service__bg--contact" id="js-contact-bg"></div>
	<div class="service__container service__container--contact">
		<div class="service__content-main service__content-main--contact">
			<h2 class="service__title service__title--sub">Formulario de contacto</h2>
			
			<div class="contact-form" id="contact-form">
				<div class="contact-form-body">
					<input name="contact-name" type="text" placeholder="Nombre" required="true" autofocus>
					<input name="contact-email" type="email" placeholder="Email" required="true">
					<input name="contact-tel" type="tel" placeholder="Teléfono">
					<textarea name="contact-msg" placeholder="Su mensaje..." required="true"></textarea>
					<input class="btn btn-success btn-lg" id="contact-submit" type="submit" value="Enviar">
				</div>
			</div>
		</div>
	</div>
</div>


<script>
	function initialize(){
		var myLatlng = new google.maps.LatLng(-34.6040801,-58.46780130000002);
		var myLatlngCenter = new google.maps.LatLng(-34.60865436015576,-58.46780130000002);
		var mapOptions = {
			center: myLatlngCenter,
			zoom: 16,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			disableDefaultUI: true
		};
		var map = new google.maps.Map(document.getElementById("js-contact-bg"), mapOptions);
		/*var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			title: 'Tecnosol'
		});*/
	}

	function loadScript() {
		var script = document.createElement('script');
		script.type = 'text/javascript';
		script.src = 'http://maps.googleapis.com/maps/api/js?key=AIzaSyBN5l2KRXtun3ErzrPtiVoyYw6nLBdxkvs&sensor=false&callback=initialize';
		document.body.appendChild(script);
	}

	$(window).on("load",function(){
		loadScript();
	});
</script>

<?php include_once("includes/footer.php") ?>