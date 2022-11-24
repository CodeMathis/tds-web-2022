let update = function (){
    let nom = document.forms[0].nom.value;
    let prenom = document.forms[0].prenom.value;
    let nomcomplet = `${nom} ${prenom}`;
    document.getElementById("unediv").innerHTML = nomcomplet;
    return nomcomplet
}
/*
document.getElementById("userform").addEventListener("keyup", update);
document.getElementById("bouton_afficher").addEventListener("click", function (){
    document.getElementById("nom_prenom_titre").innerHTML = update();
});
*/

document.getElementById("bouton_generer").addEventListener("click", function (){
    max = Math.ceil(parseInt(document.forms[0].max_number.value));
    min = Math.floor(parseInt(document.forms[0].min_number.value));
    let random_truc = Math.floor(Math.random() * (max - min + 1) + min);
    document.getElementById("nbr_random_afficher").innerHTML = random_truc;
});
