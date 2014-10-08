
/* Formulaire de login */
  $("#formLogin").validate({
    errorPlacement: function(error, element) {
      var tag = "#"+ element.attr("name");
      error.insertAfter(tag);
    },
    rules: {
      courriel: "required",
      password: "required"
    },
    messages: {
      courriel: "Veuillez saisir l'adresse électronique !",
      password:  "Veuillez saisir le mot de passe !"
    },
    submitHandler: function(){
      $("#submitLogin").attr("disabled", true);
      $("#submitLogin").attr("value", "Traitement en cours");
      $.ajax({
        type:"POST", 
        data: $("#formLogin").serialize(),
        url:"includes/login.php",
        dataType: 'json',
        success: function(data){
          if (data.status==200) {	    
            location.replace("documents.php");
          }
          else {
            alert(data.message);
          }
          $("#submitLogin").attr("disabled", false);
          $("#submitLogin").attr("value", "Valider");
        },
        error: function(data){
          alert("Une erreur est survenue !");
          $("#submitLogin").attr("disabled", false);
          $("#submitLogin").attr("value", "Valider");          
        } 
      });
      return false;
    }
  });
