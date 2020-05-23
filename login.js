adminlogin="Victor"
adminmdp="chien134"

normallogin="Arthur"
normalmdp="pain246"

function Connexion(){
    if(document.getElementById("login").value != "" && document.getElementById("mdp").value != "" ){
        let nvlogin = document.getElementById("login").value;
        let nvmdp = document.getElementById("mdp").value;
        if(nvlogin == adminlogin && nvmdp == adminmdp){
            window.location.href="index.html"
        }
        else if(nvlogin == normallogin && nvmdp == normalmdp){
            window.location.href="index2.html"
        }
        else{
            alert("Erreur de nom d'utilisateur ou de mot de passe")
        }
    
    }
    else{
        alert("Erreur de nom d'utilisateur ou de mot de passe")
    }
}