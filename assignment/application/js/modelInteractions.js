//adapted from example code 'benskitchen.com'
// Each model has its own namespacename, so we must call the function for each model namespace.

var spinning = false;

function spin()
{
	spinning = !spinning;
	document.getElementById('modelOne__RotationTimer').setAttribute('enabled', spinning.toString());
	
	document.getElementById('modelTwo__RotationTimer').setAttribute('enabled', spinning.toString());

}

function stopRotation()
{
	spinning = false;
	document.getElementById('modelOne__RotationTimer').setAttribute('enabled', spinning.toString());
	
	document.getElementById('modelTwo__RotationTimer').setAttribute('enabled', spinning.toString());

	document.getElementById('modelThree__RotationTimer').setAttribute('enabled', spinning.toString());

}

function animateModel()
{
    if(document.getElementById('modelOne__RotationTimer').getAttribute('enabled')!= 'true')
        document.getElementById('modelOne__RotationTimer').setAttribute('enabled', 'true');
    else
        document.getElementById('modelOne__RotationTimer').setAttribute('enabled', 'false');
	
	
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


var lightOn = true;

function headlight()
{
	lightOn = !lightOn;
	document.getElementById('modelOne__headlight').setAttribute('headlight', lightOn.toString());
	
	document.getElementById('modelTwo__headlight').setAttribute('headlight', lightOn.toString());
	
	document.getElementById('modelThree__headlight').setAttribute('headlight', lightOn.toString());
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

// CHANGING TEXTURE REGION

function changeTextureCaramel()
{
	document.getElementById('modelTwo__ImgTexture').setAttribute("url", 'maps/Costa_Bottle_CaramelMap.png');
}

function changeTextureBrownie()
{
	document.getElementById('modelTwo__ImgTexture').setAttribute("url", 'maps/Costa_Bottle_BrownieMap.png');
}

function changeTextureVanillaLatte()
{
	document.getElementById('modelThree__ImgTexture').setAttribute("url", 'maps/CostaCan_VanillaLatteMap.png');
}

function changeTextureLatte()
{
	document.getElementById('modelThree__ImgTexture').setAttribute("url", 'maps/CostaCan_LatteMap.png');
}

// END OF CHANGING TEXTURE REGION

function cameraBottom()
{
	document.getElementById('modelOne__CameraBottom').setAttribute('bind', 'true');
	
	document.getElementById('modelTwo__CameraBottom').setAttribute('bind', 'true');
	
	document.getElementById('modelThree__CameraBottom').setAttribute('bind', 'true');
}