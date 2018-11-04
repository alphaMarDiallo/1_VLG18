// alert('js ready');
// var date = parseInt(prompt('saisissez un mois : ', '<saisisez entre 1 et 12>'  ));
// // if(Math.floor(Math.random(date) * 12) + 1){
// //     alert(date);
// // }
// if(date == 1){
//     alert('Janvier 31 jours');
//     document.write('Le mois n ' + date + 'a 31 jours' );
// }else if(date == 2){
//     alert('Fevrier 28 jours');
//     document.write('Le mois n ' + date + 'a 28   jours' );
// }else if(date == 3){
//     alert('Mars 31 jours');
//     document.write('Le mois n ' + date + 'a 31 jours' );
// }else if(date == 4){
//     alert('Avril 30 jours');
//     document.write('Le mois n ' + date + 'a 30 jours' );
// }else if(date == 5){
//     alert('Mai 31 jours');
//     document.write('Le mois n ' + date + 'a 31 jours' );
// }else if(date == 6){
//     alert('Juin 30 jours');
//     document.write('Le mois n ' + date + 'a 30 jours' );
// }else if(date == 7){
//     alert('Juillet 31 jours');
//     document.write('Le mois n ' + date + 'a 31 jours' );
// }else if(date == 8){
//     alert('Aout 31 jours');
//     document.write('Le mois n ' + date + 'a 31 jours' );
// }else if(date == 9){
//     alert('Septembre 30 jours');
//     document.write('Le mois n ' + date + 'a 30 jours' );
// }else if(date == 10){
//     alert('Octobre 31 jours');
//     document.write('Le mois n ' + date + 'a 31 jours' );
// }else if(date == 11){
//     alert('Novembre 30 jours');
//     document.write('Le mois n ' + date + 'a 30 jours' );
// }else if(date == 12){
//     alert('Décembre 31 jours');
//     document.write('Le mois n ' + date + 'a 31 jours' );
// } else{
//     alert('saisie incorrecte');
// }

var mois = parseInt(prompt('Quel mois on est ? ', '<saisissez entre 1 et 12>'));

if(mois === 2) { 
    document.write('Le mois n ' + date + 'a 28   jours' );
} else if((date ===3) || (mois ===6) || (mois === 9) || (mois === 11)){
    document.write('Le mois n ' + date + 'a 30 jours' );
} else if ((mois === 1) || (mois === 3) || (mois === 5) || (mois === 7) || (mois === 8) || (mois === 10) || (mois === 12)){
    document.write('Le mois n ' + date + 'a 31 jours' );
} else {
    document.write('Le mois n ' + date + 'est inconnu !' );
}