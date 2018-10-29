function afficherModOffre(idOffre)
{
    $.ajax
    (
        {
        type: 'get',
        url: "index.php/ctrl_Accueil/afficherModOffre",
        data:"idOffre="+idOffre,
        success:function(data)
        {
            $('#divModalOffre').empty();
            $('#divModalOffre').append(data);
        },
        error:function()
        {
            alert("Impossible de modifier l'offre");
        }
    }
    );
}
function afficherModDemande(idDemande)
{
    $.ajax
    (
        {
        type: 'get',
        url: "index.php/ctrl_Accueil/afficherModDemande",
        data:"idDemande="+idDemande,
        success:function(data)
        {
            $('#divModalDemande').empty();
            $('#divModalDemande').append(data);
        },
        error:function()
        {
            alert("Impossible de modifier la demande");
        }
    }
    );
}