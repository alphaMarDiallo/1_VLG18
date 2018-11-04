// alert('js ready'); 
var age = parseInt(prompt('Quel est votre age :'));
if(age >= 18){
    alert('bienvenue sur ce site');
} else {
    alert('les mineurs sont interdit sur ce site');
    document.location.href="https://www.youtube.com/watch?v=f9wrcSMfiKQ";
}
