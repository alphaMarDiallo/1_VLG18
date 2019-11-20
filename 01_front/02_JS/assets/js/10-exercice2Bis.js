var BaseDeDonnees = [{
        'prenom': 'Hugo',
        'nom': 'LIEGEARD',
        'email': 'wf3@hl-media.fr',
        'mdp': 'wf3'
    },
    {
        'prenom': 'Rodrigue',
        'nom': 'NOUEL',
        'email': 'rodrigue@hl-media.fr',
        'mdp': 'wf3'
    },
    {
        'prenom': 'Nathanael',
        'nom': 'DORDONNE',
        'email': 'nathanael.d@hl-media.fr',
        'mdp': 'wf3'
    }
];

var userEmail = prompt('Saisissez votre email :');
var userMdp = prompt('Saisissez votre mot de passe :');
// var bddChecked = BaseDeDonnees.length;
function connexion(userEmail, userMdp) {
    let isUserInArray = false;
    for (let i = 0; i < BaseDeDonnees.length; i++) {


        console.log(BaseDeDonnees[i]);
        if (userEmail === BaseDeDonnees[i].email && userMdp === BaseDeDonnees[i].mdp) {
            isUserInArray = true;
            return BaseDeDonnees[i];
        }
    }
    isUserInArray = true;
    return isUserInArray
}

var monUser = connexion(userEmail, userMdp);

if (monUser === undefined) {
    document.write('<div style="color:red">Identifiabnts incorrects</div>');
} else {
    document.write('<div style="color:red">Bonjour' + ' ' + monUser.prenom + ' ' + monUser.nom + ' </div>');
}