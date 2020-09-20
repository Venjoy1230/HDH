let sujetDisscution = "";
let dateDisscution = "";

function getValue(sujetDisscution, dateDisscution) {
    if (document.getElementById("sujet").value != "" && document.getElementById("message").value != "") {
        sujetDisscution = document.getElementById("sujet").value;
        let heure = new Date();
        dateDisscution = heure.getDate() + "/" + heure.getMonth() + "/" + heure.getFullYear();
        let resolDisscution = "Non résolue";
        const placement = document.querySelector('table');
        let ligne = document.createElement('tr');
        ligne.classList.add('myTable');
        let colonne1 = document.createElement('td');
        colonne1.innerText = sujetDisscution;
        let colonne2 = document.createElement('td');
        let colonne3 = document.createElement('td');
        colonne3.innerText = dateDisscution;
        let colonne4 = document.createElement('td');
        colonne4.innerText = resolDisscution;
        ligne.append(colonne1);
        ligne.append(colonne2);
        ligne.append(colonne3);
        ligne.append(colonne4);
        placement.append(ligne);
        document.getElementById("sujet").value = "";
        document.getElementById("message").value = "";
        document.getElementById('id01').style.display = 'none';
    }
}

function Mesdiscussion() {

    var table, tr, td, i, txtValue, nom;
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        txtValue = "Jean";
        if (td) {
            nom = td.innerText;
            if (nom == txtValue) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
    document.getElementById("mesdiscu").style.display = 'none';
    document.getElementById("tous").style.display = 'block';
}

function Mesdiscussion2() {
    var table, tr, td, i, txtValue, nom;
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        tr[i].style.display = "";
    }
    document.getElementById("mesdiscu").style.display = 'block';
    document.getElementById("tous").style.display = 'none';
}
