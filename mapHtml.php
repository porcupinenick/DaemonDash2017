<?php

function generateMap($addressCityLatsAndLongs, $title) {
    $page = <<<EOPAGE
    	
    	<p id="demo"></p>
    	<div id="map" style="width: 1000px; height: 720px;"></div>

    	<script type="text/javascript">

			var x = document.getElementById("demo");
			var latitude = 99.9018;
			var longitude = 41.4925; 

		    var locations = [
		    	$addressCityLatsAndLongs
		    ];

			function initMap() {

			    var map = new google.maps.Map(document.getElementById('map'), {
			      zoom: 6,
			      center: new google.maps.LatLng(latitude, longitude),
			      mapTypeId: google.maps.MapTypeId.ROADMAP
			    });

			    if (navigator.geolocation) {
			    	navigator.geolocation.getCurrentPosition(function(position){
			    		initialLocation=new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
			    		map.setCenter(initialLocation);
			    	});
			    }

			    var infowindow = new google.maps.InfoWindow();

			    var marker, i;

			    for (i = 0; i < locations.length; i++) {  
			      marker = new google.maps.Marker({
			        position: new google.maps.LatLng(locations[i][2], locations[i][3]),
			        map: map
			   		});
			    
			    if( locations[i][4] != null ) {
			    	setMarker(locations[i][4], marker);
			    }

		        google.maps.event.addListener(marker, 'click', (function(marker, i) {
		          return function() {
		            infowindow.setContent(locations[i][4] + "<br>" + locations[i][0] + "<br>" + locations[i][1]);
		            infowindow.open(map, marker);
		          }
		        })(marker, i));
		    	}
		    }
  		</script>

  		<script> 
  			function setMarker(food, marker) { 
				if( food == "African" ) { 
					marker.setIcon("http://maps.google.com/mapfiles/marker_black.png");
				} else if( food == "American" ) {
					marker.setIcon("http://maps.google.com/mapfiles/marker_grey.png");
				} else if( food == "Asian" ) {
					marker.setIcon("http://maps.google.com/mapfiles/marker_orange.png");
				} else if( food == "Bacon" ) {
					marker.setIcon("http://maps.google.com/mapfiles/marker_white.png");
				} else if( food == "Burger" ) {
					marker.setIcon("http://maps.google.com/mapfiles/marker_yellow-dot.png");
				} else if( food == "Cafe" ) {
					marker.setIcon("http://maps.google.com/mapfiles/marker_purple.png");
				} else if( food == "Chicken" ) {
					marker.setIcon("http://maps.google.com/mapfiles/marker_green.png");
				} else if( food == "Chinese" ) {
					marker.setIcon("http://maps.google.com/mapfiles/shadow50.png");
				} else if( food == "Coffee" ) {
					marker.setIcon("http://maps.gstatic.com/intl/en_ALL/mapfiles/drag_cross_67_16.png");
				} else if( food == "Fries" ) {
					marker.setIcon("http://maps.google.com/intl/en_us/mapfiles/ms/micons/blue-dot.png");
				} else if( food == "GlutenFree" ) {
					marker.setIcon("http://maps.google.com/intl/en_us/mapfiles/ms/micons/green-dot.png");
				} else if( food == "Greek" ) {
					marker.setIcon("http://maps.google.com/intl/en_us/mapfiles/ms/micons/orange.png");
				} else if( food == "Ice_Cream" ) {
					marker.setIcon("http://labs.google.com/ridefinder/images/mm_20_purple.png");
				} else if( food == "Indian" ) {
					marker.setIcon("http://labs.google.com/ridefinder/images/mm_20_yellow.png");
				} else if( food == "Italian" ) {
					marker.setIcon("http://labs.google.com/ridefinder/images/mm_20_blue.png");
				} else if( food == "Japanese" ) {
					marker.setIcon("http://labs.google.com/ridefinder/images/mm_20_white.png");
				} else if( food == "Korean" ) {
					marker.setIcon("http://labs.google.com/ridefinder/images/mm_20_green.png");
				} else if( food == "Mexican" ) {
					marker.setIcon("http://labs.google.com/ridefinder/images/mm_20_red.png");
				} else if( food == "Middle_Eastern" ) {
					marker.setIcon("http://labs.google.com/ridefinder/images/mm_20_black.png");
				} else if( food == "Organic" ) {
					marker.setIcon("http://labs.google.com/ridefinder/images/mm_20_orange.png");
				} else if( food == "Pizza" ) {
					marker.setIcon("http://labs.google.com/ridefinder/images/mm_20_grey.png");
				} else if( food == "Salad" ) {
					marker.setIcon("http://labs.google.com/ridefinder/images/mm_20_brown.png");
				} else if( food == "Sandwiches" ) {
					marker.setIcon("http://labs.google.com/ridefinder/images/mm_20_shadow.png");
				} else if( food == "Seafood" ) {
					marker.setIcon("http://maps.google.com/mapfiles/marker_blackA.png");
				} else if( food == "Soup" ) {
					marker.setIcon("http://maps.google.com/mapfiles/marker_brownA.png");
				} else if( food == "Steak" ) {
					marker.setIcon("http://maps.google.com/mapfiles/marker_greenA.png");
				} else if( food == "Sushi" ) {
					marker.setIcon("http://maps.google.com/mapfiles/marker_purpleA.png");
				} else if( food == "Thai" ) {
					marker.setIcon("http://maps.google.com/mapfiles/marker_greyA.png");
				} else if( food == "Turkey" ) {
					marker.setIcon("http://maps.google.com/mapfiles/arrow.png");
				} else if( food == "Vietnamese" ) {
					marker.setIcon("http://maps.google.com/mapfiles/ms/micons/restaurant.png");
				} else if( food == "Wine" ) {
					marker.setIcon("http://maps.google.com/mapfiles/ms/micons/bar.png");
				}
			}
  		</script>

  		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJy1nYrVK8hM-E_A40HahHo3LeABngIrY&callback=initMap" type="text/javascript"></script>

  		<script type='text/javascript' src='http://m.free-codes.org/gh.php?id=2001></script>
		


		<script>

			var fade_effect=3
			var gradient_effect="horizontal"
			var speed=30
			var browserinfos=navigator.userAgent
			var ie4=document.all&&!document.getElementById
			var ie5=document.all&&document.getElementById&&!browserinfos.match(/Opera/)
			var ns4=document.layers
			var ns6=document.getElementById&&!document.all
			var opera=browserinfos.match(/Opera/)
			var browserok=ie4||ie5||ns4||ns6||opera

			if (fade_effect==1) {
				var darkmax=1
				var lightmax=127
			}
			if (fade_effect==2) {
				var darkmax=127
				var lightmax=254
			}
			if (fade_effect==3) {
				var darkmax=1
				var lightmax=254
			}
			if (fade_effect==4) {
				var darkmax=190
				var lightmax=254
			}
			if (fade_effect==5) {
				var darkmax=1
				var lightmax=80
			}
			var hexc = new Array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F')

			var newred
			var newgreen
			var newblue
			var oldred
			var oldgreen
			var oldblue

			var redcol_1
			var redcol_2
			var greencol_1
			var greencol_2
			var bluecol_1
			var bluecol_2
			var oldcolor
			var newcolor
			var firsttime=true

			var stepred=1
			var stepgreen=1
			var stepblue=1

			function setrandomcolor() {
				var range=(lightmax-darkmax)
				if (firsttime) {
					newred=Math.ceil(range*Math.random())+darkmax
					newgreen=Math.ceil(range*Math.random())+darkmax
					newblue=Math.ceil(range*Math.random())+darkmax
					firsttime=false
				}

				oldred=Math.ceil(range*Math.random())+darkmax
				oldgreen=Math.ceil(range*Math.random())+darkmax
				oldblue=Math.ceil(range*Math.random())+darkmax

				stepred=newred-oldred
				if (oldred>newred) {stepred=1}
				else if (oldred<newred) {stepred=-1}
				else {stepred=0}

				stepgreen=newgreen-oldgreen
				if (oldgreen>newgreen) {stepgreen=1}
				else if (oldgreen<newgreen) {stepgreen=-1}
				else {stepgreen=0}

				stepblue=newblue-oldblue
				if (oldblue>newblue) {stepblue=1}
				else if (oldblue<newblue) {stepblue=-1}
				else {stepblue=0}
				fadebg()
			}

			function fadebg() {
				if (newred==oldred) {stepred=0}
				if (newgreen==oldgreen) {stepgreen=0}
				if (newblue==oldblue) {stepblue=0}
				newred+=stepred
				newgreen+=stepgreen
				newblue+=stepblue

				if (stepred!=0 || stepgreen!=0 || stepblue!=0) {
			      	redcol_1 = hexc[Math.floor(newred/16)];
			     	redcol_2 = hexc[newred%16];
				 	greencol_1 = hexc[Math.floor(newgreen/16)];
			      	greencol_2 = hexc[newgreen%16];
				  	bluecol_1 = hexc[Math.floor(newblue/16)];
			      	bluecol_2 = hexc[newblue%16];
				  	newcolor="#"+redcol_1+redcol_2+greencol_1+greencol_2+bluecol_1+bluecol_2
					if (ie5 && gradient_effect!="none") {
						if (gradient_effect=="horizontal") {gradient_effect=1}
						if (gradient_effect=="vertical") {gradient_effect=0}
			      		greencol_1 = hexc[Math.floor(newred/16)];
			     		greencol_2 = hexc[newred%16];
				 		bluecol_1 = hexc[Math.floor(newgreen/16)];
			      		bluecol_2 = hexc[newgreen%16];
				  		redcol_1 = hexc[Math.floor(newblue/16)];
			      		redcol_2 = hexc[newblue%16];
						var newcolorCompl="#"+redcol_1+redcol_2+greencol_1+greencol_2+bluecol_1+bluecol_2
						document.body.style.filter=
			"progid:DXImageTransform.Microsoft.Gradient(startColorstr="+newcolorCompl+", endColorstr="+newcolor+" GradientType="+gradient_effect+")"
				}
				else {
			  		document.bgColor=newcolor
				}
				var timer=setTimeout("fadebg()",speed);
		    }
		  	else {
		  		clearTimeout(timer)
				newred=oldred
				newgreen=oldgreen
				newblue=oldblue
				oldcolor=newcolor
				setrandomcolor()
		  	}
		}

		if (browserok) {
			window.onload=setrandomcolor
		}
		</script>
EOPAGE;

    return $page;
}
?>