<?php
<script>		
		var jq = jQuery.noConflict();
		jq( document ).ready(function() {   
		   jq('#menu-main-menu li a').on('click',function(){
					var atat = jq(this).attr('href');
					console.log(atat);		
					window.location.href = 'http://dhillontechllc.com/'+atat;
		   });
		});
		</script>
		?>