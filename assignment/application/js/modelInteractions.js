//adapted from example code 'benskitchen.com'
// Each model has its own namespacename, so we must call the function for each model namespace.

var spinning = false;

function spinX()
{
	spinning = !spinning;
	document.getElementById('modelOne__RotationTimerX').setAttribute('enabled', spinning.toString());
	
	document.getElementById('modelTwo__RotationTimerX').setAttribute('enabled', spinning.toString());

	document.getElementById('modelThree__RotationTimerX').setAttribute('enabled', spinning.toString());
}

function stopRotation()
{
	spinning = false;
	document.getElementById('modelOne__RotationTimerX').setAttribute('enabled', spinning.toString());
	document.getElementById('modelOne__RotationTimerY').setAttribute('enabled', spinning.toString());
	document.getElementById('modelOne__RotationTimerZ').setAttribute('enabled', spinning.toString());

	document.getElementById('modelTwo__RotationTimerX').setAttribute('enabled', spinning.toString());
	document.getElementById('modelTwo__RotationTimerY').setAttribute('enabled', spinning.toString());
	document.getElementById('modelTwo__RotationTimerZ').setAttribute('enabled', spinning.toString());

	document.getElementById('modelThree__RotationTimerX').setAttribute('enabled', spinning.toString());
	document.getElementById('modelThree__RotationTimerY').setAttribute('enabled', spinning.toString());
	document.getElementById('modelThree__RotationTimerZ').setAttribute('enabled', spinning.toString());

}

function spinY()
{
	spinning = !spinning;
	document.getElementById('modelOne__RotationTimerY').setAttribute('enabled', spinning.toString());
	document.getElementById('modelTwo__RotationTimerY').setAttribute('enabled', spinning.toString());
	document.getElementById('modelThree__RotationTimerY').setAttribute('enabled', spinning.toString());
}

function spinZ()
{
	spinning = !spinning;
	document.getElementById('modelOne__RotationTimerZ').setAttribute('enabled', spinning.toString());
	document.getElementById('modelTwo__RotationTimerZ').setAttribute('enabled', spinning.toString());
	document.getElementById('modelThree__RotationTimerZ').setAttribute('enabled', spinning.toString());
}

function animateModel()
{
    if(document.getElementById('modelOne__RotationTimerX').getAttribute('enabled')!= 'true')
        document.getElementById('modelOne__RotationTimerX').setAttribute('enabled', 'true');
    else
        document.getElementById('modelOne__RotationTimerX').setAttribute('enabled', 'false');
	
	
	    if(document.getElementById('modelTwo__RotationTimer').getAttribute('enabled')!= 'true')
        document.getElementById('modelTwo__RotationTimer').setAttribute('enabled', 'true');
    else
        document.getElementById('modelTwo__RotationTimer').setAttribute('enabled', 'false');
	
	
		    if(document.getElementById('modelThree__RotationTimer').getAttribute('enabled')!= 'true')
        document.getElementById('modelThree__RotationTimer').setAttribute('enabled', 'true');
    else
        document.getElementById('modelThree__RotationTimer').setAttribute('enabled', 'false');
}

function wireframe()
{
	var e = document.getElementById('modelOne');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
	
	var e = document.getElementById('modelTwo');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
	
	var e = document.getElementById('modelThree');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

function toggleLights()
{
	var intense = (document.getElementById('modelOne__Light').getAttribute('intensity'));
	
	// if lights off do this
	if (intense < 1)
	{
	document.getElementById('modelOne__Light').setAttribute('intensity', '1');
	document.getElementById('modelOne__Light_001').setAttribute('intensity', '1');
	document.getElementById('modelOne__Light_002').setAttribute('intensity', '1');
	document.getElementById('modelOne__Light_003').setAttribute('intensity', '1');
	document.getElementById('modelOne__Light_004').setAttribute('intensity', '1');
	document.getElementById('modelOne__Light_005').setAttribute('intensity', '1');
	document.getElementById('modelOne__Light_006').setAttribute('intensity', '1');
	
		// now we make button green
	  var element = document.querySelector("#toggleLightsBtn");
	  element.classList.remove("btn-danger");
	  element.classList.add("btn-success");
	}
	else // if lights on do this
	{
	document.getElementById('modelOne__Light').setAttribute('intensity', '0');
	document.getElementById('modelOne__Light_001').setAttribute('intensity', '0');
	document.getElementById('modelOne__Light_002').setAttribute('intensity', '0');
	document.getElementById('modelOne__Light_003').setAttribute('intensity', '0');
	document.getElementById('modelOne__Light_004').setAttribute('intensity', '0');
	document.getElementById('modelOne__Light_005').setAttribute('intensity', '0');
	document.getElementById('modelOne__Light_006').setAttribute('intensity', '0');
	
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
	document.getElementById('modelOne__headlight').setAttribute('headlight', lightOn.toString());
	
	document.getElementById('modelTwo__headlight').setAttribute('headlight', lightOn.toString());
	
	document.getElementById('modelThree__headlight').setAttribute('headlight', lightOn.toString());
	
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
	document.getElementById('modelOne__CameraFront').setAttribute('bind', 'true');

	document.getElementById('modelTwo__CameraFront').setAttribute('bind', 'true');
	
	document.getElementById('modelThree__CameraFront').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('modelOne__CameraBack').setAttribute('bind', 'true');
	
	document.getElementById('modelTwo__CameraBack').setAttribute('bind', 'true');
	
	document.getElementById('modelThree__CameraBack').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('modelOne__CameraLeft').setAttribute('bind', 'true');
	
	document.getElementById('modelTwo__CameraLeft').setAttribute('bind', 'true');
	
	document.getElementById('modelThree__CameraLeft').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('modelOne__CameraRight').setAttribute('bind', 'true');
	
	document.getElementById('modelTwo__CameraRight').setAttribute('bind', 'true');
	
	document.getElementById('modelThree__CameraRight').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('modelOne__CameraTop').setAttribute('bind', 'true');
	
	document.getElementById('modelTwo__CameraTop').setAttribute('bind', 'true');
	
	document.getElementById('modelThree__CameraTop').setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('modelOne__CameraBottom').setAttribute('bind', 'true');
	
	document.getElementById('modelTwo__CameraBottom').setAttribute('bind', 'true');
	
	document.getElementById('modelThree__CameraBottom').setAttribute('bind', 'true');
}

// CHANGING TEXTURE REGION

function changeTextureCaramel()
{
	document.getElementById('modelTwo__ImgTexture').setAttribute("url", 'maps/Costa_Bottle_CaramelMap.png');
	
	// button element
    changeBottleNavClassesToNotActive()
	var element = document.querySelector("#caramelButton");
	
	// replace primary with success
	element.classList.remove("btn-primary");
    element.classList.add("btn-success");
}

function changeTextureBrownie()
{
	document.getElementById('modelTwo__ImgTexture').setAttribute("url", 'maps/Costa_Bottle_BrownieMap.png');
	
	// button element
    changeBottleNavClassesToNotActive()
	var element = document.querySelector("#brownieButton");
	
	// replace primary with success
	element.classList.remove("btn-primary");
    element.classList.add("btn-success");
}

function changeTextureVanillaLatte()
{
	document.getElementById('modelThree__ImgTexture').setAttribute("url", 'maps/CostaCan_VanillaLatteMap.png');
	
		// button element
    changeCanNavClassesToNotActive()
	var element = document.querySelector("#vanillaLatteButton");
	
	// replace primary with success
	element.classList.remove("btn-primary");
    element.classList.add("btn-success");
}

function changeTextureLatte()
{
	document.getElementById('modelThree__ImgTexture').setAttribute("url", 'maps/CostaCan_LatteMap.png');
	
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
  