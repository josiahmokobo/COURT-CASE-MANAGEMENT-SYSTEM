$('#btn').click(function(){
	   
		var from = $("#from").val();
		var to = $("#to").val();
		  if(from !="" && to != "")
		  {
		var spinner = $("<img src='img/loader.gif' id='spinner' />").insertAfter("#btn"); 
    	$("#btn").attr('value', 'Generating......');
		$.post('php/heal.php', $("#frmsearch").serialize(), 
		function(data) {
	     $("#btn").attr('value', 'Generate');
		  spinner.remove();
          $('#qresult').html(data);
		});
		  }
        
	    });
	  
