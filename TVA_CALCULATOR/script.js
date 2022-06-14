const pourcentageTva = document.getElementById('TVA').value / 100;
console.log(pourcentageTva);
const prixSansTva = document.getElementById('HT').value;
console.log(prixSansTva);

function check(){
const montantDeLaTva = pourcentageTva * prixSansTva;
console.log( montantDeLaTva);
if(montantDeLaTva > 0){
    alert('Montant inférieur à 0');
}
else{
    alert('TVA: '+ montantDeLaTva);
}
}