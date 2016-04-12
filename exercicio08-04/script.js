$(document).ready(function(e){
	$("#dialog-confirm").hide();
	$(".menuPrincipal a").click(function(e){
		e.preventDefault();
		var href = $(this).attr('href');
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
				//VERIFICAÇÃO DO EMAIL//				
				var e= document.querySelector("#email").value;
				var TamanhoEmail = e.length;
				var email1=false;
				var email2=false;
					for (var i=0; i<=TamanhoEmail; i++) {
						if (e[i] == '@' ){	
							var email=document.querySelector("#email").value.split('@');
							if((email[0].length)>=3){
								email1 =true;
							}
							if((email[1].length)>=4){
								email2=true;
							}			
						}
					}

				//VERIFICAÇÃO DO NOME//
				var n= document.querySelector("#nome").value;
				var TamanhoNome = n.length;
				var nome1=false;
				var nome2=false;
					for (var j=0; j<=TamanhoNome; j++) {
						if (n[j] == ' ' ){	
							var nome=document.querySelector("#nome").value.split(' ');
							if((nome[0].length)>=3){
								var nome1 =true;
							}
							if((nome[1].length)>=4){
								var nome2=true;
							}
						
						}
					}
				if(email1==true && email2==true && nome1==true && nome2==true){
					alert("Dados enviados com sucesso!");
				}else{
					alert("Dados inseridos errado!");
				}

				$(this).dialog("close");
			},
			Cancelar: function(){
				$(this).dialog("close");				
			}
		}
	});
	
};
