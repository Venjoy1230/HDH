adminlogin="Victor"
adminmdp="chien134"

normallogin="Arthur"
normalmdp="pain246"

function Connexion(){
    if(document.getElementById("login").value != "" && document.getElementById("mdp").value != "" ){
        let nvlogin = document.getElementById("login").value;
        let nvmdp = document.getElementById("mdp").value;
        if(nvlogin == adminlogin && nvmdp == adminmdp){
            window.location.href="accueil.php"
        }
        else if(nvlogin == normallogin && nvmdp == normalmdp){
            window.location.href="accueil.php"
        }
        else{
            window.location.href="index.php?err"
        }

    }
    else{
        window.location.href="index.php?err"
    }
}
