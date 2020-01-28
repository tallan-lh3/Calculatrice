window.addEventListener("DOMContentLoaded", (event) => {

    // Fonction pour recharger la page
    reloadPage = () => {
        document.location.reload(true);
    }

    // Déclaration des variables
    let touchKey = document.getElementsByClassName('touch');
    let firstField = document.getElementById('first-input');
    let secondField = document.getElementById('second-input');
    let thirdField = document.getElementById('third-input');
    const touchKeyLength = document.getElementsByClassName('touch').length;

    // Le status qui va déterminé si un opérateur a été cliqué
    let status = false;

    // Boucle sur toutes les touches du clavier
    for (let index = 0; index < touchKeyLength; index++) {

        // Création d'un évênement onClick
        touchKey[index].addEventListener('click', function () {

            // si c'est un opérateur (identifié grâce à la classe)
            if (this.classList.contains('operator')) {
                // Le status passe en true
                status = true;
                // La valeur va dans le deuxième input
                secondField.value = this.value;
            }
            // Si c'est une touche number et que un opérateur n'a pas été saisi encore..
            else if (this.classList.contains('number') && status == false) {
                // La valeur va dans le premier input
                firstField.value += this.value;
            }
            // Si c'est une touche number et qu'un opérateur a été déjà saisi
            else if (this.classList.contains('number') && status == true) {
                // La valeur va dans le troisème input
                thirdField.value += this.value;
            }
        });

        // Création d'un événement sur le bouton égal
        document.getElementById('egal').addEventListener('click', function (e) {
           
            // Regex pour vérifier s'il n'y a pas deux points
            let regex = /^([0-9]{1,})([\.])?([0-9]{0,})$/;

            // Renvoi true ou false
            console.log(regex.test(firstField.value));

            // Condition de vérification 
            if(regex.test(firstField.value) == false || regex.test(thirdField.value) == false){
                // Arrêt de l'envoi du formulaire 
                e.preventDefault();
                // Identification de l'élément class="incorrect-synthaxe" => numéro 0
                document.getElementsByClassName('incorrect-synthaxe')[0].innerHTML = 'Synthaxe incorrect';
            }
        });
    }
});