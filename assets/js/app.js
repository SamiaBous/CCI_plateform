// require jQuery normally
	require('../css/app.css');
    const $ = require('jquery');
    //require('./growl/bootstrap-notify');
    //require('./Bootstrap/dist/js/bootstrap.bundle');
    
    		var arr = [

			  {val : 1, text: 'CCI'},
			  {val : 2, text: 'CMA'},
			  {val : 3, text: 'BGE'},
			  {val : 4, text: 'ADIE'},
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
							$("h1").css("color", "#B7B6B6");

					});
			});



         
    




    	