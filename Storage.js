// Ajoute une nouvelle valeure dans le localStorage
function SaveItem() {
			
	var name = document.forms.ShoppingList.name.value;
	var data = document.forms.ShoppingList.data.value;
	localStorage.setItem(name, data);
	doShowAll();
	
}
//------------------------------------------------------------------------------
//Modifie une valeure existante dans le localStorage
function ModifyItem() {
	var name1 = document.forms.ShoppingList.name.value;
	var data1 = document.forms.ShoppingList.data.value;
	// Regarde si name1 existe
	
// Regarde si la valeur existe
			if (localStorage.getItem(name1) !=null)
			{
			  //update
			  localStorage.setItem(name1,data1);
			  document.forms.ShoppingList.data.value = localStorage.getItem(name1);
			}
		
	
	doShowAll();
}
//-------------------------------------------------------------------------
// retire une valeur existante dans la liste d'objects 
function RemoveItem() {
	var name = document.forms.ShoppingList.name.value;
	document.forms.ShoppingList.data.value = localStorage.removeItem(name);
	doShowAll();
}
//-------------------------------------------------------------------------------------
// Redémarre le localStorage
function ClearAll() {
	localStorage.clear();
	doShowAll();
}
//--------------------------------------------------------------------------------------
function doShowAll() {
	if (CheckBrowser()) {
		var key = "";
		var list = "<tr><th>Item</th><th>Value</th></tr>\n";
		var i = 0;
		for (i = 0; i <= localStorage.length-1; i++) {
			key = localStorage.key(i);
			list += "<tr><td>" + key + "</td>\n<td>"
					+ localStorage.getItem(key) + "</td></tr>\n";
		}
		// Si il n'y a pas d'objects dans la liste
		if (list == "<tr><th>Item</th><th>Value</th></tr>\n") {
			list += "<tr><td><i>empty</i></td>\n<td><i>empty</i></td></tr>\n";
		}
		document.getElementById('list').innerHTML = list;
	} else {
		alert('Ne peut enregistrer le panier car votre navigateur ne supporte');
	}
}

/*
 =====>  On regarde si le navigateur supporte localStorage
 // Cette étape n'est peut être pas nécessaire
*/
function CheckBrowser() {
	if ('localStorage' in window && window['localStorage'] !== null) {
		// on peut donc utiliser localStorage 
		return true;
	} else {
		// sinon on ne peut pas 
		return false;
	}
}