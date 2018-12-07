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
function RechercherDealCrea(test)
{
    
    $.ajax
    (
        {
        type:"GET",
        url:"rechercherDealService/",
        data:"termeR="+test,
        success:function(data)
        {
            $('#divUserD').empty();
            $('#divUserD').append(data);
        },
        error:function()
        {
            alert("Veuillez ecrire un service");
        }
    }
    );
    var i=0;
}
function AfficherInfoUserDeal(idUser)
{
    
    $.ajax
    (
        {
        type:"GET",
        url:"index.php/ctrl_Accueil/AfficherInfoUserD/",
        data:"idUser="+idUser,
        success:function(data)
        {
            $('#divInfoUserD').empty();
            $('#divInfoUserD').append(data);
        },
        error:function()
        {
            alert("Veuillez ecrire un service");
        }
    }
    );
    var i=0;
}