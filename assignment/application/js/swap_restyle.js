// This script controls the pages that are accessed by pressing buttons.
// It reads the id of the page, for example a id="originality", then shows/hides that.

var counter = 0;
$(document).ready(function() {
	
	selectPage();
	selectModel();

	function selectPage() {

		$('#home').show();
		$('#about').hide();
		$('#models').hide();
		$('#interaction').hide();
		$('#originality').hide();
		$('#acknowledgements').hide();
		$('#references').hide();

		$('#cup').show();
		$('#can').hide();
		$('#bottle').hide();

		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide(); 


		$('#navHome').click(function(){
			$('#home').show();
			$('#about').hide();
			$('#models').hide();
			$('#interaction').hide();
			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 
			$('#originality').hide();
			$('#acknowledgements').hide();
			$('#references').hide();			
		});

		$('#navAbout').click(function(){
			$('#home').hide();
			$('#about').show();
			$('#models').hide();
			$('#interaction').hide();
			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 
			$('#originality').hide();
			$('#acknowledgements').hide();
			$('#references').hide();			
		});

		$('#navModels').click(function(){
			$('#home').hide();
			$('#about').hide();
			$('#models').show();
			$('#cup').show();
			$('#interaction').show(); 
			$('#cokeDescription').show();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 
			$('#originality').hide();
			$('#acknowledgements').hide();
			$('#references').hide();
		});
		
		$('#originality').click(function(){
			$('#home').hide();
			$('#about').hide();
			$('#models').hide();
			$('#interaction').hide(); 
			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 
			$('#originality').show();
			$('#acknowledgements').hide();
			$('#references').hide();
		});
		
		$('#acknowledgements').click(function(){
			$('#home').hide();
			$('#about').hide();
			$('#models').show();
			$('#interaction').hide(); 
			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 
			$('#originality').hide();
			$('#acknowledgements').show();
			$('#references').hide();
		});
		
		$('#references').click(function(){
			$('#home').hide();
			$('#about').hide();
			$('#models').hide();
			$('#interaction').hide(); 
			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 
			$('#originality').hide();
			$('#acknowledgements').hide();
			$('#references').show();
		});
		
	}

	function selectModel() {

		$('#navCup').click(function(){
			$('#cup').show();
			$('#bottle').hide();
			$('#can').hide();
			$('#interaction').show(); 
			$('#cokeDescription').show();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 
		});

		$('#navBottle').click(function(){
			$('#can').hide();
			$('#bottle').show();
			$('#cup').hide();
			$('#interaction').show(); 
			$('#cokeDescription').hide();
			$('#spriteDescription').show();
			$('#pepperDescription').hide();  	  	  
		});

		$('#navCan').click(function(){
			$('#cup').hide();
			$('#bottle').hide();
			$('#can').show();
			$('#interaction').show(); 
			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').show(); 	   
		});
	}

});

function changeLook() {
	counter += 1;
	switch (counter) {
		case 1:
			document.getElementById('bodyColor').style.backgroundColor = 'lightblue';
			document.getElementById('headerColor').style.backgroundColor = '#FF0000';
			document.getElementById('footerColor').style.backgroundColor = '#FF9900';
			break;
		case 2:
			document.getElementById('bodyColor').style.backgroundColor = '#FF6600';
			document.getElementById('headerClor').style.backgroundColor = '#FF9999';
			document.getElementById('footerColor').style.backgroundColor = '#996699';
			break;
		case 3:
			document.getElementById('bodyColor').style.backgroundColor = 'coral';
			document.getElementById('headerColor').style.backgroundColor = 'darkcyan';
			document.getElementById('footerColor').style.backgroundColor = 'darksalmom';
			break;
		case 4:
			counter = 0;
			document.getElementById('bodyColor').style.backgroundColor = 'lightgrey';
			document.getElementById('headerColor').style.backgroundColor = 'chocolate';
			document.getElementById('footerColor').style.backgroundColor = 'dimgrey';
			break;
	}
}

function changeBack() {
	document.getElementById('bodyColor').style.backgroundColor = '#FFFFFF';
	document.getElementById('headerColor').style.backgroundColor = 'rgba(175,0,0,1)';
	document.getElementById('footerColor').style.backgroundColor = 'rgba(175,0,0,1)';
}

