<script src="lib/jquery-1.11.1.min.js"></script>
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
			$("#paragraphe").html(html);
       },
       error: function (html, statut, erreur) {
       		alert(erreur + ",,," + html+",,,"+statut);
       }
    });
}

$(Document).ready( function () {
    $('#example').DataTable().makeEditable({
              sUpdateURL: "model/admin_update.php"
              });
}
	