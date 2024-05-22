// This script controls the pages that are accessed by pressing buttons.
// It reads the id of the page, for example a id="originality", then shows/hides that.

$(document).ready(function() {
	
	selectPage();
	selectModel();
	selectGallery();
	toggleDarkTheme();

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
		$('#colaNews').hide();
		$('#costaNews').show();

		$('#costaCanViewPanel').hide();
		$('#costaBottleViewPanel').hide();
		$('#costaCupViewPanel').show();

		$('#x3dScene').show();
		$('#x3dImage').hide();
		$('#x3dVideo').hide();

		$('#cup_gallery').show();
		$('#can_gallery').hide();
		$('#bottle_gallery').hide();

		$('#lightThemeToggle').hide();

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
			$('#interaction').show(); 
			$('#cokeDescription').show();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 
			$('#originality').hide();
			$('#acknowledgements').hide();
			$('#references').hide();
		});
		
		$('#navOriginality').click(function(){
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
		
		$('#navAcknowledgements').click(function(){
			$('#home').hide();
			$('#about').hide();
			$('#models').hide();
			$('#interaction').hide(); 
			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 
			$('#originality').hide();
			$('#acknowledgements').show();
			$('#references').hide();
		});
		
		$('#navReferences').click(function(){
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

		$('#navColaNews').click(function(){
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

			$('#colaNews').show();
			$('#costaNews').hide();

			var element = document.querySelector("#navCostaNews");
			element.classList.remove("btn-success");
			element.classList.add("btn-primary");		

			var element = document.querySelector("#navColaNews");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");		
		});

		$('#navCostaNews').click(function(){
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

			$('#colaNews').hide();
			$('#costaNews').show();

			var element = document.querySelector("#navColaNews");
			element.classList.remove("btn-success");
			element.classList.add("btn-primary");	
			
			var element = document.querySelector("#navCostaNews");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");		
		});
		
	}

	function selectModel() {

		$('#navCup').click(function(){
			$('#interaction').show(); 
			
			$('#cup').show();

			$('#costaCanViewPanel').hide();
			$('#costaBottleViewPanel').hide();
			$('#costaCupViewPanel').show();

			$('#bottle').hide();
			$('#can').hide();

			hideAllVideosAndImages();
			changeAllViewButtonsToInactive();
			$('#x3dScene').show();
			$('#x3dImageCup').hide();
			$('#x3dVideoCup').hide();

			changeModelsClassesToNotActive();
			var element = document.querySelector("#cupModel");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");	

			changeModelsClassesToNotActive();
			var element = document.querySelector("#navCup");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");
		});

		$('#navBottle').click(function(){	
			$('#interaction').show(); 
			
			$('#cup').hide();
			$('#bottle').show();

			$('#costaCanViewPanel').hide();
			$('#costaBottleViewPanel').show();
			$('#costaCupViewPanel').hide();

			$('#can').hide();

			hideAllVideosAndImages();
			changeAllViewButtonsToInactive();
			$('#x3dScene').show();
			$('#x3dImageBottle').hide();
			$('#x3dVideoBottle').hide();

			changeModelsClassesToNotActive();
			var element = document.querySelector("#bottleModel");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");	

			changeModelsClassesToNotActive();
			var element = document.querySelector("#navBottle");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");			
		});

		$('#navCan').click(function(){
			$('#interaction').show(); 
			
			$('#cup').hide();
			$('#bottle').hide();
			$('#can').show();

			hideAllVideosAndImages();
			$('#costaCanViewPanel').show();
			$('#costaBottleViewPanel').hide();
			$('#costaCupViewPanel').hide();

			changeAllViewButtonsToInactive();
			$('#x3dScene').show();
			$('#x3dImageCan').hide();
			$('#x3dVideoCan').hide();

			changeModelsClassesToNotActive();
			var element = document.querySelector("#canModel");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");		

			changeModelsClassesToNotActive();
			var element = document.querySelector("#navCan");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");				
		});

		// CUP CHANGES
		$('#cupModel').click(function(){

			$('#x3dScene').show();

			hideAllVideosAndImages()

			changeAllViewButtonsToInactive();

			var element = document.querySelector("#cupModel");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");	
			
			var element = document.querySelector("#canModel");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");	

			var element = document.querySelector("#bottleModel");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");	
			
		});

		$('#cupImage').click(function(){

			$('#x3dScene').hide();

			hideAllVideosAndImages()

			$('#x3dImageCup').show();


			changeAllViewButtonsToInactive();

			var element = document.querySelector("#cupImage");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");	
			
			var element = document.querySelector("#canImage");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");	

			var element = document.querySelector("#bottleImage");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");		
		});

		
		$('#cupVideo').click(function(){

			$('#x3dScene').hide();
			
			hideAllVideosAndImages()

			$('#x3dVideoCup').show();

			changeAllViewButtonsToInactive();

			var element = document.querySelector("#cupVideo");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");	
			
			var element = document.querySelector("#canVideo");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");	

			var element = document.querySelector("#bottleVideo");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");	
		});

		// END OF CUP CHANGES

		// BOTTLE CHANGES
		$('#bottleModel').click(function(){

			$('#x3dScene').show();

			hideAllVideosAndImages();

			changeAllViewButtonsToInactive();

			var element = document.querySelector("#cupModel");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");	
			
			var element = document.querySelector("#canModel");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");	

			var element = document.querySelector("#bottleModel");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");	
			
		});

		$('#bottleImage').click(function(){

			$('#x3dScene').hide();

			hideAllVideosAndImages()

			$('#x3dImageBottle').show();

			changeAllViewButtonsToInactive();

			var element = document.querySelector("#cupImage");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");	
			
			var element = document.querySelector("#canImage");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");	

			var element = document.querySelector("#bottleImage");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");	
		});

		
		$('#bottleVideo').click(function(){

			$('#x3dScene').hide();
			
			hideAllVideosAndImages()
			$('#x3dVideoBottle').show();

			changeAllViewButtonsToInactive();

			var element = document.querySelector("#cupVideo");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");	
			
			var element = document.querySelector("#canVideo");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");	

			var element = document.querySelector("#bottleVideo");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");	
		});

		$('#canModel').click(function(){

			$('#x3dScene').show();

			hideAllVideosAndImages();

			changeAllViewButtonsToInactive();

			var element = document.querySelector("#cupModel");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");	
			
			var element = document.querySelector("#canModel");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");	

			var element = document.querySelector("#bottleModel");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");	
			
		});

		$('#canImage').click(function(){

			$('#x3dScene').hide();

			hideAllVideosAndImages()
			$('#x3dImageCan').show();

			changeAllViewButtonsToInactive();

			var element = document.querySelector("#cupImage");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");	
			
			var element = document.querySelector("#canImage");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");	

			var element = document.querySelector("#bottleImage");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");		
		});

		
		$('#canVideo').click(function(){

			$('#x3dScene').hide();

			hideAllVideosAndImages()
			$('#x3dVideoCan').show();

			changeAllViewButtonsToInactive();
			var element = document.querySelector("#cupVideo");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");	
			
			var element = document.querySelector("#canVideo");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");	

			var element = document.querySelector("#bottleVideo");
			element.classList.remove("btn-primary");
			element.classList.add("btn-success");	
		});
	}

	function selectGallery() {
		$('#navGalleryCup').click(function(){

			hideAllGalleries();
			$('#cup_gallery').show();

			changeAllViewButtonsToInactive();

			var element = document.querySelector("#navGalleryCup");
			element.classList.add("active");
			
			var element = document.querySelector("#navGalleryBottle");
			element.classList.remove("active");

			var element = document.querySelector("#navGalleryCan");
			element.classList.remove("active");
		});

		$('#navGalleryBottle').click(function(){

			hideAllGalleries();
			$('#bottle_gallery').show();

			changeAllViewButtonsToInactive();

			var element = document.querySelector("#navGalleryCup");
			element.classList.remove("active");
			
			var element = document.querySelector("#navGalleryBottle");
			element.classList.add("active");

			var element = document.querySelector("#navGalleryCan");
			element.classList.remove("active");	
		});

		$('#navGalleryCan').click(function(){

			hideAllGalleries();
			$('#can_gallery').show();

			changeAllViewButtonsToInactive();

			var element = document.querySelector("#navGalleryCup");
			element.classList.remove("active");
			
			var element = document.querySelector("#navGalleryBottle");
			element.classList.remove("active");

			var element = document.querySelector("#navGalleryCan");
			element.classList.add("active");	
		});

	}

	function toggleDarkTheme() {

	$('#darkThemeToggle').click(function(){
		document.getElementById('body').style.backgroundColor = 'black';

		$('#darkThemeToggle').hide();
		$('#lightThemeToggle').show();
	});

	$('#lightThemeToggle').click(function(){
		document.getElementById('body').style.backgroundColor = 'gray';

		$('#darkThemeToggle').show();
		$('#lightThemeToggle').hide();
	});
}

});

function hideAllGalleries()
{
	$('#cup_gallery').hide();
	$('#bottle_gallery').hide();
	$('#can_gallery').hide();
}


function hideAllVideosAndImages()
{
	$('#x3dImageCan').hide();
	$('#x3dVideoCan').hide();

	$('#x3dImageBottle').hide();
	$('#x3dVideoBottle').hide();

	$('#x3dImageCup').hide();
	$('#x3dVideoCup').hide();

}

function changeAllViewButtonsToInactive()
{
	var element = document.querySelector("#canModel");
	element.classList.remove("btn-success");
	element.classList.add("btn-primary");	
	
	var element = document.querySelector("#canImage");
	element.classList.remove("btn-success");
	element.classList.add("btn-primary");	

	var element = document.querySelector("#canVideo");
	element.classList.remove("btn-success");
	element.classList.add("btn-primary");	

	var element = document.querySelector("#bottleModel");
	element.classList.remove("btn-success");
	element.classList.add("btn-primary");	
	
	var element = document.querySelector("#bottleImage");
	element.classList.remove("btn-success");
	element.classList.add("btn-primary");	

	var element = document.querySelector("#bottleVideo");
	element.classList.remove("btn-success");
	element.classList.add("btn-primary");	

	var element = document.querySelector("#cupModel");
	element.classList.remove("btn-success");
	element.classList.add("btn-primary");	
	
	var element = document.querySelector("#cupImage");
	element.classList.remove("btn-success");
	element.classList.add("btn-primary");	

	var element = document.querySelector("#cupVideo");
	element.classList.remove("btn-success");
	element.classList.add("btn-primary");	

}

function changeNavClassesToNotActive()
{
  var element = document.querySelector("#navHome");
  element.classList.remove("active");
  
    var element = document.querySelector("#navAbout");
  element.classList.remove("active");
  
    var element = document.querySelector("#navModels");
  element.classList.remove("active");
}

function changeHomeClassToActive()
{
  changeNavClassesToNotActive();
  
  var element = document.querySelector("#navHome");
  element.classList.add("active");
}

function changeAboutClassToActive()
{
  changeNavClassesToNotActive();
  
  var element = document.querySelector("#navAbout");
  element.classList.add("active");
}


function changeModelsClassToActive()
{
  changeNavClassesToNotActive();
  
  var element = document.querySelector("#navModels");
  element.classList.add("active");
}
