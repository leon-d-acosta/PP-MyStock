function menu(){
	var x = document.getElementById("hide");
	var y = document.getElementById("mas");
	if(x.style.visibility == "hidden"){
		x.style.visibility = "visible";
		y.value = "x";
	}
	else{
		x.style.visibility = "hidden";
		y.value = "+";
	}
}

function buscar(){
	alert('En caso de querer buscar un registro en especifico, oprime CTRL+F y busca');
}