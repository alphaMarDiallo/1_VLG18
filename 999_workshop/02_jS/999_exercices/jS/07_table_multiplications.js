// var user = parseInt(prompt("saisir un chiffre"));
//  while((user <=2) || (user >=10)){
//     user =  parseInt(prompt("saisir un chiffre entr 2 et 9"));
// }

// if( user === 2){
//     document.write("2x1=2 / 2x2=4/2x3=6/2x4=8/2x5=10/2x6=12/2x7=14/2x8=16/2x9=18/2x10=20");
// } else if( user === 3){
//     document.write("3x1=3 / 3x2=6 / 3x3=9 / 3x4=12 / 3x5=15 / 3x6=18 / 3x7=21 / 3x8=24 / 3x9=27 / 3x10=30 ");
// } else if( user === 4){
//     document.write("4x1=4 / 4x2=8 / 4x3=12 / 4x4=16 / 4x5=20 / 4x6=24 / 4x7=28 / 4x8=32 / 4x9=36 / 4x10=40");
// } else if( user === 5){
//     document.write("5x1=5 / 5x2=10 / 5x3=15 / 5x4=20 / 5x5=25 / 5x6=30 / 5x7=35 / 5x8=40 / 5x9=45 / 5x10=50");
// } else if( user === 6){
//     document.write("6x1=6 / 6x2=12 / 6x3=18 / 6x4=24 / 6x5=30 / 6x6=36 / 6x7=42 / 6x8=48 / 6x9=54 / 6x10=60");   
// } else if( user === 7){
//     document.write("7x1=7 / 7x2=14 / 7x3=21 / 7x4=28 / 7x5=35 / 7x6=42 / 7x7=49 / 7x8=56 / 7x9=63 / 7x10=70");
// } else if( user === 8){
//     document.write("8x1=8 / 8x2=16 / 8x3=24 / 8x4=32 / 8x5=40 / 8x6=48 / 8x7=56 / 8x8=64 / 8x9=72 / 8x10=80");
// } else if( user === 9){
//     document.write("9x1=9 / 9x2=18 / 9x3=27 / 9x4=36 / 9x5=45 / 9x6=54 / 9x7=63 / 9x8=72 / 9x9=81 / 9x10=90");
// }else{
//     user =  parseInt(prompt("saisir un chiffre entr 2 et 9"));
// }
 

// correction

var choix = prompt("saisir un chiffr entre 2 et 9");

if(choix >= 2 && choix <=9){

    for(var i = 1; i <= 10; i++){
        var resultat = choix * i;
        document.write(choix + " x " + i + " = " + resultat + "<br>");
    }
}
else{
    document.write("<h3> saisissez entre 2 et 9</h3>");
}
