//pega o ID formulario sendo "chamado" pelo botão com a classe Submit	/*pega a form e tem o evento que é o click do submit*/

function criarItem(){
	var qtdItem = document.getElementById("qtdItem");
	var incluirItem = document.getElementById("incluirItem");
	
	incluirItem.innerHTML = "";
	
	for(var i = 2; i <= qtdItem.value; i++){
		incluirItem.innerHTML += "<img src='images/layout_item_"+ i + ".png' style='width: 920px;'>"
	}
	qtdItem.value = "";
}

function hide(){
	var inputGroup = document.getElementById("inputGroup");
	
	for(var i = 0; i <= 1500; i++)	{
		inputGroup.style.opacity = 0;
	}
}