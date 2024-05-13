//adapted from example code 'benskitchen.com'
// Each model has its own namespacename, so we must call the function for each model namespace.


function cupScene(){
	stopRotation();
    nSwitch = 0;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function bottleScene(){
	stopRotation();

    nSwitch = 1;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);

}

function canScene(){
	stopRotation();

    nSwitch = 2;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

var spinning = false;

function spinX()
{
	spinning = !spinning;
	document.getElementById('model__RotationTimerXModelOne').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimerXModelTwo').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimerXModelThree').setAttribute('enabled', spinning.toString());

}

function stopRotation()
{
	spinning = false;
	document.getElementById('model__RotationTimerXModelOne').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimerYModelOne').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimerZModelOne').setAttribute('enabled', spinning.toString());

	document.getElementById('model__RotationTimerXModelTwo').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimerYModelTwo').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimerZModelTwo').setAttribute('enabled', spinning.toString());

	document.getElementById('model__RotationTimerXModelThree').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimerYModelThree').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimerZModelThree').setAttribute('enabled', spinning.toString());
}

function spinY()
{
	spinning = !spinning;
	document.getElementById('model__RotationTimerYModelOne').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimerYModelTwo').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimerYModelThree').setAttribute('enabled', spinning.toString());

}

function spinZ()
{
	spinning = !spinning;
	document.getElementById('model__RotationTimerZModelOne').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimerZModelTwo').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimerZModelThree').setAttribute('enabled', spinning.toString());

}

function animateModel()
{
    if(document.getElementById('model__RotationTimerXModelOne').getAttribute('enabled')!= 'true')
        document.getElementById('model__RotationTimerXModelOne').setAttribute('enabled', 'true');
    else
        document.getElementById('model__RotationTimerXModelOne').setAttribute('enabled', 'false');

		if(document.getElementById('model__RotationTimerXModelTwo').getAttribute('enabled')!= 'true')
			document.getElementById('model__RotationTimerXModelTwo').setAttribute('enabled', 'true');
		else
			document.getElementById('model__RotationTimerXModelTwo').setAttribute('enabled', 'false');

			if(document.getElementById('model__RotationTimerXModelThree').getAttribute('enabled')!= 'true')
				document.getElementById('model__RotationTimerXModelThree').setAttribute('enabled', 'true');
			else
				document.getElementById('model__RotationTimerXModelThree').setAttribute('enabled', 'false');
}

function wireframe()
{
	var e = document.getElementById('wire');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

function toggleLights()
{
	var intense = (document.getElementById('model__Light').getAttribute('intensity'));
	
	// if lights off do this
	if (intense < 1)
	{
	document.getElementById('model__Light').setAttribute('intensity', '1');
	document.getElementById('model__Light_001').setAttribute('intensity', '1');
	document.getElementById('model__Light_002').setAttribute('intensity', '1');
	document.getElementById('model__Light_003').setAttribute('intensity', '1');
	document.getElementById('model__Light_004').setAttribute('intensity', '1');
	document.getElementById('model__Light_005').setAttribute('intensity', '1');
	document.getElementById('model__Light_006').setAttribute('intensity', '1');
	
		// now we make button green
	  var element = document.querySelector("#toggleLightsBtn");
	  element.classList.remove("btn-danger");
	  element.classList.add("btn-success");
	}
	else // if lights on do this
	{
	document.getElementById('model__Light').setAttribute('intensity', '0');
	document.getElementById('model__Light_001').setAttribute('intensity', '0');
	document.getElementById('model__Light_002').setAttribute('intensity', '0');
	document.getElementById('model__Light_003').setAttribute('intensity', '0');
	document.getElementById('model__Light_004').setAttribute('intensity', '0');
	document.getElementById('model__Light_005').setAttribute('intensity', '0');
	document.getElementById('model__Light_006').setAttribute('intensity', '0');
	
	// now we make button red
	  var element = document.querySelector("#toggleLightsBtn");
	  element.classList.remove("btn-success");
	  element.classList.add("btn-danger");
	}
}

var lightOn = true;

function headlight()
{
	lightOn = !lightOn;
	document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
	
	// now we make button green
	var element = document.querySelector("#toggleHeadlightsBtn");
	
	// if success headlight then change to danger.
	if(element.classList.contains("btn-success"))
	{
		element.classList.remove("btn-success");
		element.classList.add("btn-danger");
	}
	else
	{
		element.classList.remove("btn-danger");
		element.classList.add("btn-success");
	}
}

function cameraFront()
{
	document.getElementById('model__CameraFront').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('model__CameraBack').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('model__CameraLeft').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('model__CameraRight').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('model__CameraTop').setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('model__CameraBottom').setAttribute('bind', 'true');
}

// CHANGING TEXTURE REGION

function changeTextureCaramel()
{
	document.getElementById('model__ImgTexture').setAttribute("url", 'maps/Costa_Bottle_CaramelMap.png');
	
	// button element
    changeBottleNavClassesToNotActive()
	var element = document.querySelector("#caramelButton");
	
	// replace primary with success
	element.classList.remove("btn-primary");
    element.classList.add("btn-success");
}

function changeTextureBrownie()
{
	document.getElementById('model__ImgTexture').setAttribute("url", 'maps/Costa_Bottle_BrownieMap.png');
	
	// button element
    changeBottleNavClassesToNotActive()
	var element = document.querySelector("#brownieButton");
	
	// replace primary with success
	element.classList.remove("btn-primary");
    element.classList.add("btn-success");
}

function changeTextureVanillaLatte()
{
	document.getElementById('model__ImgTexture').setAttribute("url", 'maps/CostaCan_VanillaLatteMap.png');
	
	// button element
    changeCanNavClassesToNotActive()
	var element = document.querySelector("#vanillaLatteButton");
	
	// replace primary with success
	element.classList.remove("btn-primary");
    element.classList.add("btn-success");
}

function changeTextureLatte()
{
	document.getElementById('model__ImgTexture').setAttribute("url", 'maps/CostaCan_LatteMap.png');
	
	// button element
    changeCanNavClassesToNotActive()
	var element = document.querySelector("#latteButton");
	
	// replace primary with success
	element.classList.remove("btn-primary");
    element.classList.add("btn-success");
}

// END OF CHANGING TEXTURE REGION


function changeModelsClassesToNotActive()
{
  var element = document.querySelector("#navCup");
  element.classList.remove("btn-success");
  element.classList.add("btn-primary");
  
  var element = document.querySelector("#navBottle");
  element.classList.remove("btn-success");
  element.classList.add("btn-primary");
  
    var element = document.querySelector("#navCan");
  element.classList.remove("btn-success");
  element.classList.add("btn-primary");
  }
  

function changeBottleNavClassesToNotActive()
{
  var element = document.querySelector("#caramelButton");
  element.classList.remove("btn-success");
  element.classList.add("btn-primary");
  
  var element = document.querySelector("#brownieButton");
  element.classList.remove("btn-success");
  element.classList.add("btn-primary");
  }
  
  function changeCanNavClassesToNotActive()
{
  var element = document.querySelector("#latteButton");
  element.classList.remove("btn-success");
	element.classList.add("btn-primary");

	var element = document.querySelector("#vanillaLatteButton");
	element.classList.remove("btn-success");
	element.classList.add("btn-primary");
}

