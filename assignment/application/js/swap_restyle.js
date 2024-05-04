var counter = 0

function swap(selected) 
{
    // <!-- Hide all elements -->
    document.getElementById('home').style.display = 'none';
    document.getElementById('models').style.display = 'none';
    document.getElementById('originality').style.display = 'none';
    document.getElementById('acknowledgements').style.display = 'none';
    document.getElementById('references').style.display = 'none';

    // only display selected element
    document.getElementById(selected).style.display = 'block';
}

$(document).ready(function() {
	
	selectPage();

	function selectPage() {

		$('#home').show();
		$('#about').hide();
		$('#models').hide();
	//	$('#interaction').hide();
	//	$('#cokeDescription').hide();
	//	$('#spriteDescription').hide(); 
	//	$('#pepperDescription').hide(); 

		$('#navHome').click(function(){
			$('#home').show();
			$('#about').hide();
			$('#models').hide();
	//		$('#interaction').hide();
		//	$('#cokeDescription').hide();
		//	$('#spriteDescription').hide(); 
		//	$('#pepperDescription').hide(); 	  
		});

		$('#navAbout').click(function(){
			$('#home').hide();
			$('#about').show();
			$('#models').hide();
		//	$('#interaction').hide();
		//	$('#cokeDescription').hide();
		//	$('#spriteDescription').hide(); 
		//	$('#pepperDescription').hide(); 	  
		});

		$('#navModels').click(function(){
			$('#home').hide();
			$('#about').hide();
			$('#models').show();
		//	$('#interaction').show(); 
		//	$('#cokeDescription').show();
		//	$('#spriteDescription').hide(); 
		//	$('#pepperDescription').hide(); 
		});
	}
  
});