// -- Déclaree un tableau indexe 

var monTableau = [];
var myArray = new Array;

monTableau[0] = "Hugo";
monTableau[1] = "Jonathan";
monTableau[2] = "Elies";
monTableau[3] = "Layla";
console.log(monTableau); //affiche tout les éléments de mon tableau
console.log(monTableau[1]); //affiche Jonathan
console.log(monTableau[3]); //affiche Layla

var nosPrenom = [
    "Luc",
    "Sabuj",
    "Jean-Philippe",
    "Alpha",
    "Kevin"
];
console.log(nosPrenom);

var coordonnee = {
    prenom: "Hugo",
    nom: "LIEGEARD",
    age: 28
};
console.log(coordonnee);
console.log(coordonnee['prenom']);
console.log(coordonnee.nom);

var annuaireDesApprenants = [
    ["Hugo", "LIEGEARD", "XXXX XX XX XX"],
    ["Luc", "JOINVIL", "XXXX XX XX XX"],
    {
        prenom: "Arnaud",
        nom: "DOHOU",
        tel: "XXXX XX XX XX"
    },
    {
        prenom: "Momo",
        nom: "AIDOUNI",
        tel: "XXXX XX XX XX"
    }
];
console.log(annuaireDesApprenants);
console.log(annuaireDesApprenants[0][2]);
console.log(annuaireDesApprenants[1][1]);
// -- Ce n'est pas pratique
console.log(annuaireDesApprenants[3].prenom);

var Contacts = [{
        prenom: "Hugo",
        nom: "LIEGEARD",
        coordonnees: {
            email: "wf3@hl-media.fr",
            tel: {
                fixe: "0596 108 328",
                fax: "0596 108 632",
                port: "0783 97 15 15"
            },
            adresse: {
                rue: "35 Rue Jules Michelet",
                cp: "92700",
                ville: "Colombes",
                pays: {
                    code: "FR",
                    nom: "France"
                }
            }
        }
    },
    {
        prenom: "Rodrigue",
        nom: "NOUEL",
        coordonnees: {
            email: "rodrigue@hl-media.fr",
            tel: {
                fixe: "0596 145 569",
                fax: "0596 896 452",
                port: "0696 07 04 34"
            },
            adresse: {
                rue: "Quartier Sainte-Thérèse",
                cp: "97200",
                ville: "Fort-de-France",
                pays: {
                    code: "MQ",
                    nom: "Martinique"
                }
            }
        }
    },
    {
        prenom: "Elies",
        nom: "KEDIM",
        coordonnees: {
            email: "elies.k@hl-media.fr",
            tel: {
                fixe: "",
                fax: "",
                port: "07 89 45 12 56"
            },
            adresse: {
                rue: "Au Paradis",
                cp: "77777",
                ville: "Eden Ville",
                pays: {
                    code: "PA",
                    nom: "3ème Ciel"
                }
            }
        }
    }
];

console.log(Contacts);
console.log(Contacts[0].coordonnees.email);
console.log(Contacts[1].coordonnees.email);
console.log(Contacts[2].coordonnees.email);

/*-------------------------------- 
            CONSIGNES
    Réalise une structure JSON 
    permettant de stocker des
    des recette de cuisine.  
--------------------------------*/

var cooking = [

    {
        nom: "Cinamanroll",
        ingredients: ["300g de farine", "la moitié d'un oeuf battu", "50g de sucre de canne", "150ml de lait", "1 bonne cuillère à café de cannelle", "2g de sel", "20g de levure fraîche", "40g de beurre doux + 15g pour la dorure", "la moitié d'un oeuf battu", "une cuillère à soupe de lait végétal", "sucre glace", "un peu d'eau"],
        preparation: ["Dans un saladier, mélanger la farine, le sucre, le sel et la levure sèche. Ajouter la moitié de l'oeuf battu, le lait et le beurre fondu puis mélanger jusqu'à ce que la pâte devienne lisse et élastique.", "Recouvrir et laisser reposer environ 1heure (jusqu'à ce que la boule double de volume).", "Sur un plan de travail fariné, étaler la pâte sur 30 centimètres environ à l'aide d'un rouleau à pâtisserie.", "Etaler le beurre fondu sur la pâte avec un pinceau.", " Mélanger dans un petit bol le sucre et la cannelle puis saupoudrer le mélange sur la pâte.", "Enrouler la pâte et sceller les bords avec un peu de mélange oeuf/lait.", "Couper le rouleau en parts régulières (environ 12) et les placer sur une feuille de papier sulfurisé.Laisser reposer 40 minutes."],
        cuisson: "Préchauffer le four à 180°. Etaler le mélange oeuf/lait pour faire dorer les petits pains à la cuisson. Faire cuire 15-20minutes à 180° jusqu'à ce qu'ils deviennent dorés."
    }

];

// correction

var receipes = [{
    name: 'Tiramisu',
    category: 'Desserts',
    subCategory: 'Gateaux',
    price: 'Abordable',
    difficulty: 'Facile',
    plate: 8,
    starRating: 4.98462123,
    photoUrl: 'https://www.monlien.fr/verslaphoto.jpg',
    videoUrl: 'https://www.monlien.fr/verslavideo.mp4',
    cooking: {
        preparation: '30min',
        time: '',
        temp: ''
    },
    ingredients: [{
            name: 'Sucre',
            quantity: 80,
            unit: 'g',
            imgUrl: 'https://www.monlien.fr/versingredient.jpg'
        },
        {
            name: 'Café Expresso',
            quantity: 15,
            unit: 'cl',
            imgUrl: 'https://www.monlien.fr/versingredient.jpg'
        },
        {
            name: 'Chocolat Cacao Amer',
            quantity: '1',
            unit: 'cuillère à soupe',
            imgUrl: 'https://www.monlien.fr/versingredient.jpg'
        },
        {
            name: 'Canelle',
            quantity: '1',
            unit: 'pincée',
            imgUrl: 'https://www.monlien.fr/versingredient.jpg'
        }
    ],
    instructions: [{
            name: 'Séparer les blancs des jaunes d\'oeufs.',
            imgUrl: 'https://www.monlien.fr/versletape.jpg'
        },
        {
            name: 'Mélanger les jaunes avec le sucre roux et le sucre vanillé.',
            imgUrl: 'https://www.monlien.fr/versletape.jpg'
        },
        {
            name: 'Ajouter le mascarpone au fouet.',
            imgUrl: 'https://www.monlien.fr/versletape.jpg'
        }
    ]
}, ];

/*-------------------------------- 
        AJOUTER UN ELEMENT 
--------------------------------*/

var Couleur = ["Rouge", "Jaune", "Vert"];

// console.clear();/*La fonction clear() nettoie les info contenu dans la console */
console.log(Couleur);
// -- La fonction push me permet d'ajouter un élément à la fin de mon tableau.
Couleur.push("Orange");
console.log(Couleur);

//La fonction unshift le rajoute au début.
Couleur.unshift("Bleu");
console.log(Couleur);

/*---------------------------------------------------- 
        RECUPERER ET SORTIR LE DERNIER ELEMENT
----------------------------------------------------*/

// La fonction pop() me permet de supprimer un ou plusieurs elements de mon tableau et d'enrécupérer la valeur.
var monDernierElement = Couleur.pop();
console.log(Couleur);
console.log(monDernierElement);

/* 
La même chose est possible avec le première element en utilisant shift().

La fonction splice() vous permet de faire sortir un ou plusieurs élement.
*/