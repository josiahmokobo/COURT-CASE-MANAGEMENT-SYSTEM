
	$(document).ready(function(){
		function showspinner()
		{
			var spinner = $("<img src='img/loader.gif' id='spinner' />").insertAfter("#search"); 
    	    $("#search").attr('value', 'Searching......');
		}

		function hidespinner()
		{
			$("#spinner").hide();
    	    $("#search").attr('value', 'Search');
			// spinner.remove();
		}
		
	var dates = $( "#from, #to" ).datepicker({
			defaultDate: "+1w",
			dateFormat: "d-m-yy",
			changeMonth: false,
			numberOfMonths: 1,
			onSelect: function( selectedDate ) {
				var option = this.id == "from" ? "minDate" : "maxDate",
					instance = $( this ).data( "datepicker" ),
					date = $.datepicker.parseDate(
						instance.settings.dateFormat ||
						$.datepicker._defaults.dateFormat,
						selectedDate, instance.settings );
				dates.not( this ).datepicker( "option", option, date );
			}
		});
	

	$("#search").click(function(){
		var from = $("#from").val();
		var to = $("#to").val();
		  if(from !="" && to != "")
		  {
		var spinner = $("<img src='img/loader.gif' id='spinner' />").insertAfter("#search"); 
    	$("#search").attr('value', 'Generating......');
		$.post('bin/getoverallreport.php', $("#frmsearch").serialize(), 
		function(data) {
	     $("#search").attr('value', 'Generate');
		  spinner.remove();
          $('#qresult').html(data);
		});
		  }
        
	});


	});
