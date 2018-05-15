// assets/js/app.js
require('../css/app.css');
const $ = require('jquery');


		var arr = [

		  {val : 1, text: "Chambre de Commerce et d'Industrie (CCI)"},
		  {val : 2, text: "Chambre des Métiers et de l'Artisanat (CMA)"},
		  {val : 3, text: "Boutique de Gestion des Entreprises (BGE)"},
		  {val : 4, text: "Association pour le Droit à l'Initiative Economique (ADIE)"},
		  {val : 5, text: 'Autre(s) structure(s),préciser:'},
		  {val : 6, text: 'Aucune'}
		];

		
		$(document).ready(function(){
				var sel = $('<select>').appendTo('#struct');
				$(arr).each(function() {
				sel.append($("<option>").attr('value',this.val).text(this.text));	
			});
		 });

		
		 $("select option[value='5'] ").one("click",function create_input(){
				$('<input>').attr({type: 'text'}).appendTo('#struct');     
		});

		var inp1 = {val : "Chambre de Commerce et d'Industrie (CCI)"};
		var valeur = $("#questionnaire_quest1");
				$(inp1).each(function() {
				valeur.attr('value',this.val); 
			});	    
		

		var inp2 = {val : "Chambre des Métiers et de l'Artisanat (CMA)"};
		$(document).ready(function(){
				$( "select option[value='2'] " ).click(function(){	
					$(inp2).each(function() {
					valeur.attr('value',this.val); 
				});	    
			});
		});

		var inp3 = {val : "Boutique de Gestion des Entreprises (BGE)"};
		$(document).ready(function(){
				$( "select option[value='3'] " ).click(function(){	
					$(inp3).each(function() {
					valeur.attr('value',this.val); 
				});	    
			});
		});

		var inp4 = {val : "Association pour le Droit à l'Initiative Economique (ADIE)"};
		$(document).ready(function(){
				$( "select option[value='4'] " ).click(function(){	
					$(inp4).each(function() {
					valeur.attr('value',this.val); 
				});	    
			});
		});

		var inp5 = {val : ''};
		$(document).ready(function(){
				$( "select option[value='5'] " ).click(function(){	
					$(inp5).each(function() {
					valeur.attr('value',this.val);
					$('#questionnaire_quest1').attr("placeholder", "Veuillez taper ici");
					 
				});	    
			});
		});

		var inp6 = {val : 'Aucune'};
		$(document).ready(function(){
				$( "select option[value='6'] " ).click(function(){	
					$(inp6).each(function() {
					valeur.attr('value',this.val); 
				});	    
			});
		});
		
		
		 $('#questionnaire_quest1').css('display', 'none');
			
		$(document).ready(function(){
				$( "select option[value='5'] " ).click(function() {
						$( '#questionnaire_quest1 ' ).show( "fast" );
			});
		});

		$(document).ready(function(){
				$("select option[value='1'],[value='2'],[value='3'],[value='4'],[value='6'] ").on('click',function suppr_input(){
						$('#questionnaire_quest1').hide("fast");
					 
			});
		});

	
		var arrJa = [

		  {val : 7, text: 'Agricole'},
		  {val : 8, text: 'Libérale'},
		  {val : 9, text: 'Artistique'},
		  {val : 10, text: 'Industrie'},
		  {val : 11, text: 'Artisanat'},
		  {val : 12, text: 'Aucune'},
		  {val : 13, text: 'Commerce'},
		  {val : 14, text: 'Service'},
		  {val : 15, text: 'Autre activité'},
		  {val : 16, text: 'Activité non encore définie'}
		];


		$(document).ready(function(){
				var selJa = $('<select>').appendTo('#activ');
				$(arrJa).each(function() {
				selJa.append($("<option>").attr('value',this.val).text(this.text));	
			});	
			
		 });

		 $("select option[value='15'] ").one("click",function (){
				$('<input>').attr({type: 'text'}).appendTo('#activ');
		});

		var inp7 = {val : 'Agricole'};
		var valeur2 = $("#questionnaire_quest2");
				$(inp7).each(function() {
				valeur2.attr('value',this.val); 
			});	    
		

		var inp8 = {val : 'Libérale'};
		$(document).ready(function(){
				$( "select option[value='8'] " ).click(function(){	
					$(inp8).each(function() {
					valeur2.attr('value',this.val); 
				});	    
			});
		});

		var inp9 = {val : 'Artistique'};
		$(document).ready(function(){
				$( "select option[value='9'] " ).click(function(){	
					$(inp9).each(function() {
					valeur2.attr('value',this.val); 
				});	    
			});
		});

		var inp10 = {val : 'Industrie'};
		$(document).ready(function(){
				$( "select option[value='10'] " ).click(function(){	
					$(inp10).each(function() {
					valeur2.attr('value',this.val); 
				});	    
			});
		});

		var inp11 = {val : 'Artisanat'};
		$(document).ready(function(){
				$( "select option[value='11'] " ).click(function(){	
					$(inp11).each(function() {
					valeur2.attr('value',this.val); 
				});	    
			});
		});

		var inp12 = {val : 'Aucune'};
		$(document).ready(function(){
				$( "select option[value='12'] " ).click(function(){	
					$(inp12).each(function() {
					valeur2.attr('value',this.val); 
				});	    
			});
		});

		var inp13 = {val : 'Commerce'};
		$(document).ready(function(){
				$( "select option[value='13'] " ).click(function(){	
					$(inp13).each(function() {
					valeur2.attr('value',this.val); 
				});	    
			});
		});
		var inp14 = {val : 'Service'};
		$(document).ready(function(){
				$( "select option[value='14'] " ).click(function(){	
					$(inp14).each(function() {
					valeur2.attr('value',this.val); 
				});	    
			});
		});
		var inp15 = {val : ''};
		$(document).ready(function(){
				$( "select option[value='15'] " ).click(function(){	
					$(inp15).each(function() {
					valeur2.attr('value',this.val);
					$('#questionnaire_quest2').attr("placeholder", "Veuillez taper ici"); 
				});	    
			});
		});
		var inp16 = {val : 'Activité non encore définie'};
		$(document).ready(function(){
				$( "select option[value='16'] " ).click(function(){	
					$(inp16).each(function() {
					valeur2.attr('value',this.val); 
				});	    
			});
		});
		
		
		 $('#questionnaire_quest2').css('display', 'none');

		 $(document).ready(function(){
				$( "select option[value='15'] " ).click(function() {
						$( '#questionnaire_quest2' ).show( "fast" );
			});
		});

		 $(document).ready(function(){
				$("select option[value='7'],[value='8'],[value='9'],[value='10'],[value='11'],[value='12'],[value='13'],[value='14'],[value='16'] ").on('click',function (){
						$('#questionnaire_quest2').hide("fast");
					 
			});

		});

	
		var service = [

		  {val : 17, text: "Coiffure-Esthétique-Toilettage animaux"},
		  {val : 18, text: "Réparations et installations en tout genre"},
		  {val : 19, text: "Taxi-Ambulance-Déménagement"},
		  {val : 20, text: "Photographe"},
		  {val : 21, text: "Secrétariat-Administrartif"},
		  {val : 22, text: "Nettoyage de locaux,Pressing,Ramonage"},
		  {val : 23, text: "Funéraires-Soins Mortuaires"},
		  {val : 24, text: "Autres services"}
		];

		


		$(document).ready(function(){
				var choix = $('<select>').appendTo('#serv');
				$(service).each(function() {
				choix.append($("<option>").attr('value',this.val).text(this.text));	
			});
		 });

		 $('#serv').css('display', 'none');


		 $(document).ready(function(){
				$( "select option[value='14'] " ).on("click",function (){
						$( '#serv' ).show( "slow" );
			});
		});
		
		 $(document).ready(function(){
				$("select option[value='7'],[value='8'],[value='9'],[value='10'],[value='11'],[value='12'],[value='13'],[value='15'],[value='16'] ").on("click",function (){
						$('#serv').hide("slow");
						 $('#questionnaire_service').hide("fast");
			});
		});

		$("select option[value='24'] ").one("click",function (){
				$('<input>').attr({type: 'text'}).appendTo('#serv');
		});

		var inpServ = {val : "--"};
		var valeur3 = $("#questionnaire_service");
				$(inpServ).each(function() {
				valeur3.attr('value',this.val); 
			});
		$('#questionnaire_service').css('display', 'none');


		var inp17 = {val : "Coiffure-Esthétique-Toilettage animaux"};
		$(document).ready(function(){
				$( "select option[value='17'] " ).click(function(){	
					$(inp17).each(function() {
					valeur3.attr('value',this.val); 
				});	    
			});
		});

		var inp18 = {val : "Réparations et installations en tout genre"};
		$(document).ready(function(){
				$( "select option[value='18'] " ).click(function(){	
					$(inp18).each(function() {
					valeur3.attr('value',this.val); 
				});	    
			});
		});

		var inp19 = {val : "Taxi-Ambulance-Déménagement"};
		$(document).ready(function(){
				$( "select option[value='19'] " ).click(function(){	
					$(inp19).each(function() {
					valeur3.attr('value',this.val); 
				});	    
			});
		});

		var inp20 = {val : "Photographe"};
		$(document).ready(function(){
				$( "select option[value='20'] " ).click(function(){	
					$(inp20).each(function() {
					valeur3.attr('value',this.val); 
				});	    
			});
		});

		var inp21 = {val : "Secrétariat-Administrartif"};
		$(document).ready(function(){
				$( "select option[value='21'] " ).click(function(){	
					$(inp21).each(function() {
					valeur3.attr('value',this.val); 
				});	    
			});
		});

		var inp22 = {val : "Nettoyage de locaux,Pressing,Ramonage"};
		$(document).ready(function(){
				$( "select option[value='22'] " ).click(function(){	
					$(inp22).each(function() {
					valeur3.attr('value',this.val); 
				});	    
			});
		});

		var inp23 = {val : "Funéraires-Soins Mortuaires"};
		$(document).ready(function(){
				$( "select option[value='23'] " ).click(function(){	
					$(inp23).each(function() {
					valeur3.attr('value',this.val); 
				});	    
			});
		});
		
		var inp24 = {val : ''};
		$(document).ready(function(){
				$( "select option[value='24'] " ).click(function(){	
					$(inp24).each(function() {
					valeur3.attr('value',this.val);
					$('#questionnaire_service').attr("placeholder", "Veuillez taper ici"); 
				});	    
			});
		});


		 $('#questionnaire_service').css('display', 'none');
		 $(document).ready(function(){
				$( "select option[value='24'] " ).click(function() {
						$( '#questionnaire_service' ).show( "fast" );
			});
		});

		 $(document).ready(function(){
				$("select option[value='17'],[value='18'],[value='19'],[value='20'],[value='21'],[value='22'],[value='23'] ").on('click',function (){
						$('#questionnaire_service').hide("fast");
					 
			});

		});


		/*$(document).ready(function(){
		
			$("#cp, #com").autocomplete({
				source: function (request, response)// les deux arguments représentent les données nécessaires au plugin
				{
						var objData = {};
						if ($(this.element).attr('id') == 'cp')
						{
							objData = { codePostal: request.term };
						}
						else
						{
							objData = { commune: request.term };
						}
						$.ajax({
						url: "QuestionnaireController.php",
						dataType: "json",
						data: objData,
						type: 'POST',
						success: function (data)
						{
							response($.map(data, function (item)
							{
								return {
									label: item.CodePostal + ", " + item.Commune,
									value: function (){
									
										if ($(this).attr('id') == 'cp')
										{
											$('#com').val(item.Commune);
											return item.CodePostal;
										}
										else
										{
											$('#cp').val(item.CodePostal);
											return item.Commune;
										}
									}
								}
							}));
						}
					});
				},
				minLength: 3, // on indique qu'il faut taper au moins 3 caractères pour afficher l'autocomplétion
				delay: 600
			});
		});*/


	    $(document).ready(function(){
			$('#questionnaire_factSite').keydown(function(event){
				var alertConfig;
				var x = event.which || event.keyCode; // event.keyCode is used for IE8 and earlier
				if (x != 103 && x != 8) {  // 103 is the 7 key
				
					alert ("Ce formulaire est destiné uniquement aux projets d'implantation d'entrepise en Haute-Saône \n Veuillez vous rapprocher des structures du département lié à votre projet.");
			}
		});
	});

		
                


            
        