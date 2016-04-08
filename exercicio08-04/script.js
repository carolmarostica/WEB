$(document).ready(function(e){
	$("#dialog-confirm").hide();
	$(".menuPrincipal a").click(function(e){
		e.preventDefault();
		var href=$(this).attr('href');
		$(".conteudo").load(href + ".conteudo");
	});
});

function dialogo(){
	$("#dialog-confirm").dialog({
		resizable:false,
		width:400,
		height:200,
		modal:true,
		buttons:{
			"Confirma": function(){
				$(this).dialog("close");
			},
			Cancelar: function(){
				$(this).dialog("close");				
			}
		}
	});
	var e = document.getElementById("#email").value;
	var TamanhoEmail = e.length;			
	for (var i=0; i<=TamanhoEmail; i++) {
		if (e[i] == '@' ){	
			em = true;
			alert("email ok!");
		}
	}
	if (em==false){
		$(".EmailErrado").show();
		document.getElementById("idemail").value = " ";	
		alert("email aff!");
		}
	}
};
