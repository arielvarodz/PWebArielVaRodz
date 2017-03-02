/*llamada al JQuery (selector) .algo todos los objetos #algo elemento*/
$(document).ready(
	function(){
		console.log("HOLIWIS DESDE JQUERY");
		//alert("HOLIWIS DESDE JQUERY");
		$("img").click(
			function(){
				//$(this).width("150px");
				//$(this).hide("slow");
				$(this).attr('src','img/bota.png');

			}
		);
		$("#btnrestart").click(
			function(){
				$("img").show("fast");
			}
		);
	}
);
