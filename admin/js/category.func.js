$(function(){
	$('select').material_select();
});

var sup=document.getElementById("del");
sup.onclick=function(){
	var message=confirm("Voulez- vous vraiment supprimer cette catégorie ?");
	if (message)
		return true;
	else
		return false;
}