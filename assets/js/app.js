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

			$(document).ready(function(){
					$( "select option[value='5'] " ).click(function(){	
							$("h1").css("color", "red").html("MARYSE");

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
<<<<<<< HEAD
			});
=======

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
							$( '#serv' ).show( "fast" );
				});
			});
			
 			$(document).ready(function(){
		        	$("select option[value='7'],[value='8'],[value='9'],[value='10'],[value='11'],[value='12'],[value='13'],[value='15'],[value='16'] ").on("click",function (){
					    	$('#serv').hide("fast");
						 	$('#questionnaire_service').hide("fast");
				});
		    });

			$("select option[value='24'] ").one("click",function (){
					$('<input>').attr({type: 'text'}).appendTo('#serv');
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
>>>>>>> 1d2436871438bd16dec3a55a9d3dabef1bf9257b
