var membres = [
    {'pseudo':'Hugo','age':26,'email':'wf3@hl-media.fr','mdp':'wf3'},
    {'pseudo':'Rodrigue','age':56,'email':'rodrigue@hl-media.fr','mdp':'roro'},
    {'pseudo':'James','age':78,'email':'james@hl-media.fr','mdp':'james8862'},
    {'pseudo':'Emilio','age':18,'email':'milio@hl-media.fr','mdp':'milioDu62'}
  ];

// declaration de variable : 
// var pseudo = document.getElementById('pseudo');
// var pseudoError = document.getElementsByClassName('.pseudoError');
// const MAJORITY = 18;
// var age = document.getElementById('age');
// var ageError = document.getElementsByClassName('ageError');
// var email = document.getElementById('email');
// var submit = document.getElementById('submit');
// var membres = membres.length;

//  console.log(members);
// vérification du speudo
// function inscriptionMembres(){
//   // recuperation de l'objet dans le tableau :
//   for(let i = 0; i < membres.length; i++){
//     //  console.log(membres[i]);
//     // verification du speudo :
//     if(pseudo.value === membres[i].pseudo){
//       return true;
//     }  
//     else {
//       return false
//     }
//   } 
// }
//   if (inscriptionMembres() === true) {
//     pseudo.addEventListener('change', pseudoError);
//   }

/********************************* CORRECTION *********************************/

// Récuperation des éléments
const pseudo                 =document.getElementById('pseudo');
const age                    =document.getElementById('age');
const email                  =document.getElementById('email');
const mdp                    =document.getElementById('mdp');
const submit                 =document.getElementById('submit');
const Bienvenue              =document.getElementById('Bienvenue');
const InscriptionForm        =document.getElementById('InscriptionForm');

const pseudoError            =document.getElementsByClassName('pseudoError')[0];
const ageError             =document.getElementsByClassName('ageError')[0];
  // le zero pour récupérer le première élément du tableau car le ClassName va nous retourne un tableau

  // Etape 1 & 3 : 

  pseudo.addEventListener('input', function(){
    //console.log(membres[i]);
    for (let i =0; i < membres.length; i++){
      //on vérifie le tableau membres
      if(pseudo.value === membres[i].pseudo) {
        // on compare la valeur saisie par l'internaute avec les valeurs du tableau
        pseudoError.style.display='block';
        // on affiche le message d'erreur
        submit.disabled = true ;
        // on désactive le boutton submit

        Bienvenue.textContent='';
        break;
        // on sort de la condition
      }else {
  
        pseudoError.style.display='none';
        submit.disabled='false';
        Bienvenue.textContent='Bienvenue ' + pseudo.value + ' !';
      }
    }

  });

  // Etape 2 
  const majorite = 18;
  age.addEventListener('change', function(){
    if(age.value >= majorite){
      ageError.style.display='none';
      submit.disabled = false ;
    } else{
      ageError.style.display='block';
      submit.disabled = true ;
    }
  });

  // Etape 4 

  InscriptionForm.addEventListener('submit', function(e){
    //  -- Stopper la redirection HTML en ecoutant la fonction(event / e)
    e.preventDefault();

    // on integre le nouveau membre
      // methode 1
    const membre = {
      'pseudo' : pseudo.value,
      'age'    : age.value,
      'email'  : email.value,
      'mdp'    : mdp.value
    }
    // console.log(membre);
      // methode 2
    membres.push(membre);
    console.log(membre);

    //paragraph de confirmation :
    const p = document.createElement('p');
    p.innerHTML = 'Merci ' + pseudo.value +'  !<strong>Tu es maintenant inscrit.</strong><br><br><u>Voici la liste de nos membres :<u>';
    document.body.appendChild(p);
    
    // --Générer la liste des membres
    const ul = document.createElement('ul');
    for(let i = 0; i < membres.length; i++){
      let li = document.createElement('li');
      li.textContent = membres[i].pseudo + ' : ' + membres[i].age + ' ans';
      ul.appendChild(li); 
    }

    document.body.appendChild(ul);
  });
    

