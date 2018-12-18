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
var idUser;
function clickDivDemandeCrea(idDemandeC)
{
     idDemandeCrea = idDemandeC;
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

function clickDivOffreCrea(idOffreC, idUserR)
{
    idOffreCrea = idOffreC;
    idUser = idUserR;
    $.ajax
    (
        {
        type:"GET",
        url:"CreationDeal/",
        data:"idOffreCreas="+idOffreC,
        success:function(data)
        {
<<<<<<< HEAD
=======
      
>>>>>>> origin/master
        },
        error:function()
        {
            alert("Probleme SQL");
        }
    }
    );
    var i=0;
}

function clickDivDemandeUser(idDemandeU, idUserR)
{
    idDemandeUser = idDemandeU;
    idUser = idUserR;
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

function clickDivOffreUser(idOffreU)
{
    idOffreUser = idOffreU;
    $.ajax
    (
        {
        type:"GET",
        url:"CreationDeal/",
        data:"idOffreUsers="+idOffreU,
        success:function(data)
        {
<<<<<<< HEAD
=======
            
>>>>>>> origin/master
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
    $.ajax
    (
        {
        type:"GET",
        url:"CreationDeals/",
        data:"idDemandeCrea="+idDemandeCrea+"&idOffreCrea="+idOffreCrea+"&idDemandeUser="+idDemandeUser+"&idOffreUser="+idOffreUser+"&idUser="+idUser,
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
    var i=0;
}