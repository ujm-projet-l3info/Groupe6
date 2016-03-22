function erreur(champ, err){
    if (err)
	champ.style.backgroundColor="#fba";
    else
	champ.style.backgroundColor="";
}

function verifPseudo(pseudo){
    if (pseudo.value.length <5 || pseudo.value.length >15){
	alert("Pseudo non valide : Le pseudo doit contenir entre 5 et 15 caractères.");
	erreur(pseudo, true);
	return false;
    }
    else{
	erreur(pseudo, false);
	return true;
    }
}


function verifMdp(mdp){
    if (mdp.value.length <5 || mdp.value.length >15){
	alert("Mot de passe non valide : Le mot de passe doit contenir entre 5 et 15 caractères.");
	erreur(mdp, true);
	return false;
    }
    else{
	erreur(mdp, false);
	return true;
    }
}

function verifMdpv(mdpv){
    var a = document.getElementById("mdp").value;
    var b = document.getElementById("mdpv").value;
    if (a !== b){
	alert("Les deux mots de passe saisis ne sont pas identiques.");
	erreur(mdpv, true);
	return false;
    }
    else{
	erreur(mdpv, false);
	return true;
    }
}
    


function verifForm(f){
    var verifPseudoOk=verifPseudo(f.pseudo);
    var verifMdpOk=verifMdp(f.mdp);
    var verifMdpvOk=verifMdpv(f.mdpv);
    if (verifPseudoOk && verifMdpOk && verifMdpvOk){
	return true;
    }
    else{
	alert("Le formulaire n'est pas rempli comme il le faut.")
	return false; 
    }
}
