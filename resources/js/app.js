import bsCustomFileInput from 'bs-custom-file-input'
require( './bs-custom-file-input-min.js')

require( './demandeShow.js');
require( './envoi.js');
require('./troupeauSaisieAnimal.js');
require( './enpratique.js');
require( './blog.js');
require( './telFormulaire.js');
require( './algo.js');
require( './exports.js');
require('./consentement.js');
require( './createUser.js');
// require('./melangeManager.js');

$(function() {

	bsCustomFileInput.init()

	$.ajaxSetup({

		headers: {
			'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
		}
	});

	// Initialisation des js de bootstrap
	$('[data-toggle="tooltip"]').tooltip();

	$('#table').bootstrapTable();

	$('.toast').toast();

	$('.carousel').carousel({
    pause: 'hover',
    wrap: true,
  });


	// Fonction d'appel d'une boite de dialogue quand on veut supprimer quelque chose (analyse, personne, etc.)
	$('.suppr').on('click', function(event) {
		event.preventDefault();

		var form_id = "#"+$(this).attr('id');

		$.confirm({
			theme : 'dark',
			type : 'red',
			typeAnimated: 'true',
			title: $(this).attr('titre'), // on récupère le texte de la boite
			content : $(this).attr('texte'), // de dialogue dans les attributs titre et texte (manip pour la multilingue)
			buttons : {
				oui: {
					text : 'oui',
					btnClass : 'btn-red',
					keys : ['enter'],
					action : function() {

						$(form_id).submit();

					},
				},
				non: {
					btnClass : "btn-secondary",
					keys : ['esc']
				}
			}
		})
	});

	// FONCTION POUR AFFICHER L'input image signature quand un user laboratoire passe de non signataire à signataire
	// Afficher ou non l'image en fonction du statut signataire ou non
	if($("#input_signataire").attr('statut') === "1") {

		$("#input_signataire").show();

	}
	// Changer l'affichage de l'input signature en fonction de la checkbox est_signataire
	$("#signataire").on('change', function() {

		if($("#signataire").is(':checked')) {

			$("#input_signataire").show();

		} else {

			$("#input_signataire").hide();

		}

	})

// Suppression Icone

$('.icone_del').on('click', function() {

	var nom = $(this).attr('alt');
	var id = $(this).attr('id');

console.log(nom);
	$.confirm({
			type : 'red',
			theme : 'dark',
	    title: 'Suppression !',
	    content: 'Souhaitez-vous vraiment supprimer <strong>' + nom + '</strong> ?',
	    buttons: {
	        Oui: function () {
	            $('#icone_suppr_' + id ).submit();
	        },
	        Non: function () {

	        },
	    }
	});
});

$('.icone_add').on('click', function() {

	var icone_id = $(this).attr('id');
	var icone_nom = $(this).attr('alt');

	$('#input_choix_icone_nom').attr('value', icone_nom);
	$('#input_choix_icone_id').attr('value', icone_id);

	$('#modal-choix-icone').modal('hide');
})

});
