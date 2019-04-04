function informerSuppressionOk(){
    alert('La ligne est supprimée');
}

function supprimer(id){
    $.ajax({
        url: "core/api/supprimer.php?id="+id,
            success: informerSuppressionOk,
    })
}