/*let update = function (){
    let nom = document.forms[0].nom.value;
    let prenom = document.forms[0].prenom.value;
    let nomcomplet = `${nom} ${prenom}`;
    document.getElementById("unediv").innerHTML = nomcomplet;
    return nomcomplet
}

document.getElementById("userform").addEventListener("keyup", update);
document.getElementById("bouton_afficher").addEventListener("click", function (){
    document.getElementById("nom_prenom_titre").innerHTML = update();
});
*/

document.getElementById("bouton_generer").addEventListener("click", function (){
    max = Math.ceil(parseInt(document.forms[0].max_number.value));
    min = Math.floor(parseInt(document.forms[0].min_number.value));
    let random_truc = Math.floor(Math.random() * (max - min + 1) + min);
    let affichage = document.getElementById("nbr_random_afficher");
    if (document.forms[0].pronostic.value == random_truc){
        affichage.innerHTML = "Resultat : "+ random_truc + "<br>Bravo, c'est le nombre que tu as deviné !";
        affichage.style.fontSize = '38px';
        if (affichage.style.opacity == 1){
            affichage.style.opacity = 0.9;
            affichage.style.color = 'green';
        } else {
            affichage.style.opacity = 1;
            affichage.style.color = '#90EE90';
        };
    }else{
        affichage.innerHTML = "Resultat : "+ random_truc;
        affichage.style.fontSize = '32px';
        if (affichage.style.opacity == 1){
            affichage.style.opacity = 0.9;
            affichage.style.color = 'red';
        } else {
            affichage.style.opacity = 1;
            affichage.style.color = '#f87790';
        };
    }
});
