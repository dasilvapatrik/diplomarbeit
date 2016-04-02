    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Kontakt-Formular</h2>

                    <h3 class="section-subheading text-muted">					
					<address>
					  <strong>Schule Buchwiesen</strong>, Schönauweg 15, 8052 Zürich<br>
					  Telefon 044 306 41 51 <strong>|</strong> 
					  Fax 044 306 41 58 <strong>|</strong> 
					  <a href="mailto:info@buchwiesen.ch">info@buchwiesen.ch</a> 
					  
					</address></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Bitte Ihr Namen eingeben.">
									<p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="E-Mail" id="email" required data-validation-required-message="Bitte Ihre gültige E-Mail-Adresse eingeben.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Betreff" id="phone" required data-validation-required-message="Bitte ein Betreff eingeben.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Mitteilung" id="message" required data-validation-required-message="Bitte eine Mitteilung eingeben."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Nachricht senden</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
	<!-- Adresse GoogleMaps -->	
	<div class="schattenunten">
		<head> 
		<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script> 
			<script type="text/javascript"> 
				var geocoder; 
				  var map; 
				$(document).ready(function() { 
					 initialize(); 
					});  

				  function initialize() { 
						geocoder = new google.maps.Geocoder(); 
						var latlng = new google.maps.LatLng(-34.397, 150.644); 
						var myOptions = { 
							  zoom: 11, 
							  center: latlng, 
							  /*disableDefaultUI: true*/

							  // Hier Snazzy Maps style einfÃ¼gen
							  styles: [{"stylers":[{"visibility":"on"},{"saturation":-100},{"gamma":0.54}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"color":"#4d4946"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"gamma":0.48}]},{"featureType":"transit.station","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"gamma":7.18}]}]
						} 
						map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); 

						codeAddress(); 
					  } 

				function codeAddress() { 
						var address = "Schönauweg 15,8052 Zürich"; 
						geocoder.geocode( { 'address': address}, function(results, status) { 
						  if (status == google.maps.GeocoderStatus.OK) { 
							map.setCenter(results[0].geometry.location); 
							var marker = new google.maps.Marker({ 
									map: map, 
									position: results[0].geometry.location 
							}); 
						  } else { 
							alert("Geocode was not successful for the following reason: " + status); 
						  } 
					}); 
				  }   
			</script> 
		</head> 
		<body onLoad="initialize()">  
			<div id="map_canvas" style="width: 100%; height: 300px;"></div>  
		</body>
	</div>	