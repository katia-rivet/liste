
function traiterRetourAjax(data) {
    var listeseriesJson = JSON.parse(data);
    for (var i = 0; i < listeseriesJson.length; i++) {
        var series = listeseriesJson[i];
        var ligneHtml = creerligneSeries(series);
        ajouterLigneHtml(ligneHtml);
    }
}


function creerligneSeries(seriejson) {
    var ligneHtml = "<li>";
    ligneHtml += seriejson.nom;
    ligneHtml += "</br>";
    ligneHtml += seriejson.saisons;
    ligneHtml += "</br>";
    ligneHtml += seriejson.etat;
    ligneHtml += "</br>";
    ligneHtml += seriejson.recommandation;
    ligneHtml += "</br>";
    ligneHtml += "<button value='seriejson.id' class='btn btn-dark' onclick=''>Modifier</button>&nbsp;" +
        "<button value='seriesjson.id' class='btn btn-dark' onclick='supprimer(" + seriejson.id + ")'>Supprimer</button>";
    ligneHtml += "</li>";
    ligneHtml += "</br>";
    return ligneHtml;
}

function ajouterLigneHtml(ligneHtml) {
    $("#liste").append(ligneHtml);
}


function afficherListeAjax() {
    $.ajax({
        url: "core/api/listeseries.php",
        success: traiterRetourAjax
    });
}


$(document).ready(afficherListeAjax);



