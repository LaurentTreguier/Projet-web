
/*alert('bob');*/
function getval(sel) {
	
	//alert(sel.value);

	selection = sel.value;
    $.ajax({
       url : 'model/get-doc.php', // La ressource ciblée
       type: 'GET',
       dataType:"html",
       data : 'select=' + selection,
       success: function (html, statut) {
			//alert(html+",,,"+statut);
			$("#paragraphe").append(html);
       },
       error: function (html, statut, erreur) {
       		alert(erreur + ",,," + html+",,,"+statut);
       }
    });
}
    
	