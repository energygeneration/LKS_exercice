

function check(){
    let pourcentageTva = document.getElementById('TVA').value / 100;
console.log(pourcentageTva);
let prixSansTva = document.getElementById('HT').value;
console.log(prixSansTva);
const montantDeLaTva = pourcentageTva * prixSansTva;
console.log( montantDeLaTva);
if(montantDeLaTva < 0){
    alert('Montant inférieur à 0');
}
else{
    alert('TVA: '+ montantDeLaTva);
}
}