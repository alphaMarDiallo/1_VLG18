 $(function(){
    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test("#email");
    }

    
    $("#contact").on("submit",function(e){
        e.preventDefault();

        if($("#nom").val() === ""){
            $("<div class='is-invalid' style='color:red'>Veuillez renseigner le champ</div>").insertAfter("#nom");
        } else {

            $("<div class='is-valid' style='color:green'>Enregistrée</div>").insertAfter("#nom");
        }
        if($("#prenom").val() === ""){
            $("<div class='is-invalid' style='color:red'>Veuillez renseigner le champ</div>").insertAfter("#prenom");
        }
        if($("#email").val() === ""){
            $("<div class='is-invalid' style='color:red'>Veuillez renseigner le champ</div>").insertAfter("#email");
        } 
        
        if($("#tel").val() === ""){
            $("<div class='is-invalid' style='color:red'>Veuillez renseigner le champ</div>").insertAfter("#tel");
        } 
                

    });
 });