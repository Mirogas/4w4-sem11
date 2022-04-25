(function(){
    console.log("ouaw c trop cool");
    let boite_modale = document.querySelector(".boite__modale");
    let boite__modale__fermee = document.querySelector(".boite__modale__fermee");
    let cours_desc_bouton = document.querySelectorAll(".animation__bloc"); // changer "animation__bloc" pour "cours__desc__bouton"
    console.log(cours_desc_bouton.lenght);
    $boite__modale__texte = document.querySelectorAll(".boite__modale__texte");




    for(const bout of cours_desc_bouton){
        bout.addEventListener("mousedown", function(){
            boite_modale.classList.add("boite__modale--ouvrir");
            $boite__modale__texte.innerHTML = this.parentNode.parentNode.children[0].innerHTML;
        })
    }



    boite__modale__fermee.addEventListener("mousedown", function(){
        boite_modale.classList.remove("boite__modale--ouvrir");
    })
})()