function afficherModOffre(idOffre)
// Gère la fenêtre de modification de l'offre
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
function modificationOffre(event)
// Gère la modification de l'offre-même
{
    var idServiceOff = $('#modLOffre')[0].value;
    var descModifOffre = $('#descriOffre')[0].value;
    $.ajax
    (
        {
            type: "post",
            url: "modificationOffre",
            data: {
                idService: idServiceOff,
                descOffre: descModifOffre,
                idOffre: idOff
            },
            success:function(modOffAlert)
            {
                location.reload();
            },
            error:function()
            {
                alert("La modification de l'offre a rencontré une erreur.")
            }
        }
    );
}
function afficherModDemande(idDemande)
// Gère la fenêtre de modification de la demande
{
    $.ajax
    (
        {
        type: 'get',
        url: "index.php/ctrl_Accueil/afficherModDemande",
        data:{
            idDemande: idDemande,
            descDemande: descDemande,
            idService: idService,
        },
        success:function(data)
        {
            $('#modifDemande').empty();
            $('#modifDemande').append(data);
            $('#modalDemande').modal();
        },
        error:function()
        {
            alert("Impossible de modifier la demande");
        }
    }
    );
}
function modificationDemande(event)
// Gère la modification de la demande-même
{
    var idServiceDem = $('#modLaDemande')[0].value;
    var descModifDemande = $('#descriDemande')[0].value;
    $.ajax
    (
        {
            type: "post",
            url: "modificationDemande",
            data: {
                idService: idServiceDem,
                descDemande: descModifDemande,
                idDemande: idDem
            },
            success:function(modDemAlert)
            {
                location.reload();
            },
            error:function()
            {
                alert("La modification de la demande a rencontré une erreur.")
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
            $('#divInfoUserD').empty();
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
        url:"AfficherInfoUserD/",
        data:"idUser="+idUser,
        success:function(data)
        {
            $('#divInfoUserD').empty();
            $('#divInfoUserD').append(data);    
        },
        error:function()
        {
            alert("Probleme SQL");
        }
    }
    );
    var i=0;
}

var idDemandeCrea;
var idOffreCrea;
var idDemandeUser;
var idOffreUser;
var idServiceDemandeCrea;
var idServiceDemandeUser;
var idServiceOffreCrea;
var idServiceOffreUser;
var idUser;
function clickDivDemandeCrea(idDemandeC, idServDemandeCrea)
{
     idDemandeCrea = idDemandeC;
     idServiceDemandeCrea = idServDemandeCrea;
    $.ajax
    (
        {
        type:"GET",
        url:"CreationDeal/",
        data:"idDemandeCreas="+idDemandeC,
        success:function(data)
        {
            
        },
        error:function()
        {
        }
    }
    );
    var i=0;
}

function clickDivOffreCrea(idOffreC, idServOffreCrea)
{
    idOffreCrea = idOffreC;
    idServiceOffreCrea = idServOffreCrea;
    $.ajax
    (
        {
        type:"GET",
        url:"CreationDeal/",
        data:"idOffreCreas="+idOffreC,
        success:function(data)
        {
      
        },
        error:function()
        {
            alert("Probleme SQL");
        }
    }
    );
    var i=0;
}

function clickDivDemandeUser(idDemandeU, idServDemandeUser)
{
    idDemandeUser = idDemandeU;
    idServiceDemandeUser = idServDemandeUser;
    $.ajax
    (
        {
        type:"GET",
        url:"CreationDeal/",
        data:"idDemandeUsers="+idDemandeU,
        success:function(data)
        {
            
            
        },
        error:function()
        {
        }
    }
    );
    var i=0;
}

function clickDivOffreUser(idOffreU, idServOffreUser)
{
    idOffreUser = idOffreU;
    idServiceOffreUser = idServOffreUser;
    $.ajax
    (
        {
        type:"GET",
        url:"CreationDeal/",
        data:"idOffreUsers="+idOffreU,
        success:function(data)
        {
            
        },
        error:function()
        {
            alert("Probleme SQL");
        }
    }
    );
    var i=0;
}

function clickBtnValiderCrea()
{
    //On verifie que les services sois identique DemandeCrea/OffreUser et OffreCrea/DemandeUser
    if(idServiceDemandeCrea == idServiceOffreUser && idServiceOffreCrea == idServiceDemandeUser)
        {
            //On verifie que les demandes et offres ne sois pas identique
            if(idDemandeCrea != idOffreUser && idOffreCrea != idDemandeUser)
            {
        
            $.ajax
            (
            {
                type:"GET",
                url:"CreationDeals/",
                data:"idDemandeCrea="+idDemandeCrea+"&idOffreCrea="+idOffreCrea+"&idDemandeUser="+idDemandeUser
                +"&idOffreUser="+idOffreUser,
                success:function(data)
                {
                    alert("Creation d'un deal Reussi");
             },
             error:function()
             {
                 alert("Probleme SQL");
            }
            }
            );
            }
            else{ 
            alert("Les demandes et offres doivent etre differentes")
            }
        }else{
            alert("Les services doivent etres identiques")
        //alert("servDemandeCrea="+idServiceDemandeCrea+"servOffreUser="+idServiceOffreUser
            //+"servOffreCrea="+idServiceOffreCrea+"servDemandeUser="+idServiceDemandeUser)
        }
    
}