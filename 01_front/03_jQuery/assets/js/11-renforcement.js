$(function(){
    //-- Déclarer un tableau indexé : 
    const prenoms = ['Layla', 'Jonathan', 'Arnaud','Jhordan', 'Elies'];
    // console.log(prenoms);
    // console.log(prenoms[3] );
    // console.log(prenoms[0] );
    
    // -- Parcourir le tableau :
    for(let i = 0; i < prenoms.length; i++){
        // console.log(prenoms[i]);

    }

    // Creation d'objet :

    var mesCoordonnes = {
        prenom      : 'Alpha',
        nom         : 'DIALLO',
        adresse     : '7 place Louis Loucheur',
        cp          : '94500'
    }
    // console.log(mesCoordonnes);
    // console.log(mesCoordonnes.prenom +' ' +mesCoordonnes.nom);

    // Tableau avec objet :
    var Contacts = [
        { 
            prenom      : 'Alpha',
            nom         : 'DIALLO',
            adresse     : '7 place Louis Loucheur',
            cp          : '94500'
        },
        {
            prenom      : 'Sabuj',
            nom         : 'xxxxx',
            adresse     : 'Verneuille',
            cp          : '77'  
        },
        {
            prenom      : 'Kevin',
            nom         : 'xxxxx',
            adresse     : 'VLG',
            cp          : '92300'
        }

    ];
    // console.log(Contacts);
    // document.write('<ul>');
    // for(let i = 0; i < Contacts.length; i++){
    //     document.write('<li>');   
    //     document.write(Contacts[i].prenom);   
    //     document.write('</li>');   
    // }
    // document.write('</ul>');

  var ul = document.createElement('ul');
    for(let i = 0; i < Contacts.length; i++){
        var li = document.createElement('li');
        li.textContent=(Contacts[i].prenom);
        ul.appendChild(li);
        document.body.appendChild(li);
    }  
});