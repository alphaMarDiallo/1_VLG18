function user(){
    var user = prompt('saisissez votre prénom : ');
    var user2 = parseInt(prompt( 'Bonjour ' + user + ',' + ' Quel age tu-as ?')) ;
    // alert('Bonjour ' + user + ' ' + user2);
    var birth = new Date();
    var yearOfBirth = user2 - birth.getFullYear();
    alert('Tu es donc née en  ' + yearOfBirth);
    // return ('Bonjour : ' + user, 'tu as ' + user2 + ' ans. ');
    return ('Bonjour ' + user + ',' + ' '+'tu as ' + user2 + ' ' + 'ans.');
}
document.write(user());

/* --
     CORRECTION

     // -- 1. Initialisation des Variables
    var objetDate = new Date();
    var anneeActuelle = objetDate.getFullYear();

    // -- 2. Création d'une fonction
    function identity(){
    // -- 3. Je demande à l'utilisateur son Prénom
    var prenom = prompt("Hello ! What is your name ? ")
    console.log(prenom);
    console.log(typeof prenom);

    // -- 4. Je lui demande son age
    var age = parseInt(prompt( 'Hello ' + prenom + ',' + ' How old are you ?')) ;
    console.log(age);
    console.log(typeof age);

    // -- 5. Déduire l'année de naissance et l'afficher dans un alerte
    var anneeDeNaissance = anneeActuelle - age;
    alert("AMAZING ! So you were born in " + anneeDeNaissance);

    // -- 6. Récapitulatif dans la page
    document.write("Hello " + prenom + "you're " + age + " year old !");
 

    }
    // -- 7. Executer la fonction 
    identity();
-- */