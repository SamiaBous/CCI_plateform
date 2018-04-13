// require jQuery normally
    const $ = require('jquery');
    //require('./growl/bootstrap-notify');
    //require('./Bootstrap/dist/js/bootstrap.bundle');
    // create global $ and jQuery variables
    global.$ = global.jQuery = $;
    




			var arr = [
			  {val : 1, text: 'CCI'},
			  {val : 2, text: 'CMA'},
			  {val : 3, text: 'BGE'},
			  {val : 4, text: 'ADIE'},
			  {val : 5, text: 'Autre(s) structure(s),préciser:'},
			  {val : 6, text: 'Aucune'}
			];

			function choiceOption(){
				document.getElementById('struct').innerHTML = new Array[
			  {val : 1, text: 'CCI'},
			  {val : 2, text: 'CMA'},
			  {val : 3, text: 'BGE'},
			  {val : 4, text: 'ADIE'},
			  {val : 5, text: 'Autre(s) structure(s),préciser:'},
			  {val : 6, text: 'Aucune'}
			];
			}

			var sel = $('<select>').appendTo('body');
			$(arr).each(function() {
			 sel.append($("<option>").attr('value',this.val).text(this.text));
			});



    	