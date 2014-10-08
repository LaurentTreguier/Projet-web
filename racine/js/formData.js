
/* Formulaire de données */
  $("#formData").validate({
    errorPlacement: function(error, element) {
      var tag = "#"+ element.attr("name");
      error.insertAfter(tag);
    },
    rules: {
      nomFils: "required",
      prenomFils: "required",
      ddn: "required",
      telMobile: "required",      
      courriel: "required"
    },
    messages: {
      nomFils: "Veuillez saisir le nom !",
      prenomFils:  "Veuillez saisir le prénom !",
      ddn: "Veuillez saisir la date de naissance !",
      telMobile: "Veuillez saisir le N° de téléphone !",      
      courriel: "Veuillez saisir l'adresse électronique !"
    },
    submitHandler: function(){
      $("#submitData").attr("disabled", true);
      $("#submitData").attr("value", "Traitement en cours");
      $.ajax({
        type:"POST", 
        data: $("#formData").serialize(),
        url:"includes/setData.php",
        dataType: 'json',
        success: function(data){
          if (data.status==200) {
            $("#intro").hide();              
            $("#docs").show();
            $("#message").empty();
            $("#message").append("Vous pouvez modifier les données enregistrées...<br /><br />");
            alert("Données enregistrées !");
          }
          else {
            alert(data.message);
          }
          $("#submitData").attr("disabled", false);
          $("#submitData").attr("value", "Enregistrer");          
        },
        error: function(data){
          alert("Une erreur est survenue !");
          $("#submitData").attr("disabled", false);
          $("#submitData").attr("value", "Enregistrer");
        }
      });
      return false;
    }
  });

  $('#quit').click(function(){
    location.replace("includes/logout.php");
  })
