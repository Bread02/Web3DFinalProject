// initially adapted from example code 'benskitchen.com' then heavily modified further for the coursework.

function cupScene() {
	stopAllAnimations();
	lightsOn();

	nSwitch = 0;
	document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function bottleScene() {
	stopAllAnimations();
	lightsOn();

	nSwitch = 1;
	document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);

}

function canScene() {
	stopAllAnimations();
	lightsOn();

	nSwitch = 2;
	document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

var spinning = false;

function spinX() {
	stopAllAnimations();
	spinning = !spinning;
	document.getElementById('model__RotationTimerXModelOne').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimerXModelTwo').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimerXModelThree').setAttribute('enabled', spinning.toString());

	// now we make button green
	var element = document.querySelector("#spinXButton");

	// if success headlight then change to danger.
	if (element.classList.contains("btn-success")) {
		element.classList.remove("btn-success");
		element.classList.add("btn-danger");
	}
	else {
		element.classList.remove("btn-danger");
		element.classList.add("btn-success");
	}
}

// Stop all rotations and on click animations
function stopAllAnimations() {
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

	if (document.getElementById('model__CustomAnimationModelOne').getAttribute('enabled') == 'true')
		document.getElementById('model__CustomAnimationModelOne').setAttribute('enabled', 'false');

	if (document.getElementById('model__CustomAnimationModelTwo').getAttribute('enabled') == 'true')
		document.getElementById('model__CustomAnimationModelTwo').setAttribute('enabled', 'false');

	if (document.getElementById('model__CustomAnimationModelThree').getAttribute('enabled') == 'true')
		document.getElementById('model__CustomAnimationModelThree').setAttribute('enabled', 'false');

	// now we make buttons red
	var element = document.querySelector("#spinXButton");

	// if success headlight then change to danger.
	if (element.classList.contains("btn-success")) {
		element.classList.remove("btn-success");
		element.classList.add("btn-danger");
	}

	// now we make buttons red
	var element = document.querySelector("#spinYButton");

	// if success headlight then change to danger.
	if (element.classList.contains("btn-success")) {
		element.classList.remove("btn-success");
		element.classList.add("btn-danger");
	}

	// now we make buttons red
	var element = document.querySelector("#spinZButton");

	// if success headlight then change to danger.
	if (element.classList.contains("btn-success")) {
		element.classList.remove("btn-success");
		element.classList.add("btn-danger");
	}


}

// Spin the model on the Y axis.
function spinY() {
	stopAllAnimations();
	spinning = !spinning;
	document.getElementById('model__RotationTimerYModelOne').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimerYModelTwo').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimerYModelThree').setAttribute('enabled', spinning.toString());

	// now we make button green
	var element = document.querySelector("#spinYButton");

	// if success headlight then change to danger.
	if (element.classList.contains("btn-success")) {
		element.classList.remove("btn-success");
		element.classList.add("btn-danger");
	}
	else {
		element.classList.remove("btn-danger");
		element.classList.add("btn-success");
	}

}

// Spin the model on the x axis
function spinZ() {
	stopAllAnimations();
	spinning = !spinning;
	document.getElementById('model__RotationTimerZModelOne').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimerZModelTwo').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimerZModelThree').setAttribute('enabled', spinning.toString());

	// now we make button green
	var element = document.querySelector("#spinZButton");

	// if success headlight then change to danger.
	if (element.classList.contains("btn-success")) {
		element.classList.remove("btn-success");
		element.classList.add("btn-danger");
	}
	else {
		element.classList.remove("btn-danger");
		element.classList.add("btn-success");
	}

}

// we activate our custom onclick animation using this
function animateModel()
{
	if (document.getElementById('model__CustomAnimationModelOne').getAttribute('enabled') != 'true')
		document.getElementById('model__CustomAnimationModelOne').setAttribute('enabled', 'true');
	else
		document.getElementById('model__CustomAnimationModelOne').setAttribute('enabled', 'false');

	if (document.getElementById('model__CustomAnimationModelTwo').getAttribute('enabled') != 'true')
		document.getElementById('model__CustomAnimationModelTwo').setAttribute('enabled', 'true');
	else
		document.getElementById('model__CustomAnimationModelTwo').setAttribute('enabled', 'false');

	if (document.getElementById('model__CustomAnimationModelThree').getAttribute('enabled') != 'true')
		document.getElementById('model__CustomAnimationModelThree').setAttribute('enabled', 'true');
	else
		document.getElementById('model__CustomAnimationModelThree').setAttribute('enabled', 'false');

}

// Wireframe modes we go through.
function wireframe() {
	var e = document.getElementById('wire');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);

	// now we make button green
	var element = document.querySelector("#wireFrameButton");

	// if success headlight then change to danger.
	if (element.classList.contains("btn-danger")) {
		element.classList.remove("btn-danger");
		element.classList.add("btn-warning");
		return;
	}


	if (element.classList.contains("btn-warning")) {
		element.classList.remove("btn-warning");
		element.classList.add("btn-success");
		return;
	}

	if (element.classList.contains("btn-success")) {
		element.classList.remove("btn-sucess");
		element.classList.add("btn-danger");
		return;
	}
}


/* LIGHTS */
/* Only one models needs the lights due to the switch node. The cup holds the lights */

/* When we swap to new models, we will turn the scene lights back on, INCLUDING the headlight */
lightToggled = true;
function lightsOn()
{
	document.getElementById('model__Light').setAttribute('intensity', '1');
	document.getElementById('model__Light_001').setAttribute('intensity', '1');
	document.getElementById('model__Light_002').setAttribute('intensity', '1');
	document.getElementById('model__Light_003').setAttribute('intensity', '1');
	document.getElementById('model__Light_004').setAttribute('intensity', '1');
	document.getElementById('model__Light_005').setAttribute('intensity', '1');
	document.getElementById('model__Light_006').setAttribute('intensity', '1');

	lightToggled = true;
	var element = document.querySelector("#toggleLightsBtn");
	element.classList.remove("btn-danger");
	element.classList.add("btn-success");

	if(!lightOn)
		{
			headlight();
		}
}

// Toggles the lights
function toggleLights() {
	// if lights off do this
	if (!lightToggled) {
		document.getElementById('model__Light').setAttribute('intensity', '1');
		document.getElementById('model__Light_001').setAttribute('intensity', '1');
		document.getElementById('model__Light_002').setAttribute('intensity', '1');
		document.getElementById('model__Light_003').setAttribute('intensity', '1');
		document.getElementById('model__Light_004').setAttribute('intensity', '1');
		document.getElementById('model__Light_005').setAttribute('intensity', '1');
		document.getElementById('model__Light_006').setAttribute('intensity', '1');

		lightToggled = true;
		// now we make button green
		var element = document.querySelector("#toggleLightsBtn");
		element.classList.remove("btn-danger");
		element.classList.add("btn-success");
		return;
	}

	if(lightToggled)
	{
		document.getElementById('model__Light').setAttribute('intensity', '0');
		document.getElementById('model__Light_001').setAttribute('intensity', '0');
		document.getElementById('model__Light_002').setAttribute('intensity', '0');
		document.getElementById('model__Light_003').setAttribute('intensity', '0');
		document.getElementById('model__Light_004').setAttribute('intensity', '0');
		document.getElementById('model__Light_005').setAttribute('intensity', '0');
		document.getElementById('model__Light_006').setAttribute('intensity', '0');

		// now we make button red
		lightToggled = false;

		var element = document.querySelector("#toggleLightsBtn");
		element.classList.remove("btn-success");
		element.classList.add("btn-danger");
	}
}

var lightOn = true;

// Controls headlight functionality.
function headlight() {
	lightOn = !lightOn;
	document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());

	// now we make button green
	var element = document.querySelector("#toggleHeadlightsBtn");

	// if success headlight then change to danger.
	if (element.classList.contains("btn-success")) {
		element.classList.remove("btn-success");
		element.classList.add("btn-danger");
	}
	else {
		element.classList.remove("btn-danger");
		element.classList.add("btn-success");
	}
}

/* END OF LIGHTS */

/* Start of functionality of moving camera to positions */
function cameraFront() {
	document.getElementById('model__CameraFront').setAttribute('bind', 'true');
}

function cameraBack() {
	document.getElementById('model__CameraBack').setAttribute('bind', 'true');
}

function cameraLeft() {
	document.getElementById('model__CameraLeft').setAttribute('bind', 'true');
}

function cameraRight() {
	document.getElementById('model__CameraRight').setAttribute('bind', 'true');
}

function cameraTop() {
	document.getElementById('model__CameraTop').setAttribute('bind', 'true');
}

function cameraBottom() {
	document.getElementById('model__CameraBottom').setAttribute('bind', 'true');
}
/* end of functionality of moving camera to positions */

// CHANGING TEXTURE REGION
function changeTextureCaramel() {
	document.getElementById('model__ImgTextureModelTwo').setAttribute("url", 'maps/Costa_Bottle_CaramelMap.jpg');

	// button element
	changeBottleNavClassesToNotActive()
	var element = document.querySelector("#caramelButton");

	// replace primary with success
	element.classList.remove("btn-primary");
	element.classList.add("btn-success");
}

function changeTextureBrownie() {
	document.getElementById('model__ImgTextureModelTwo').setAttribute("url", 'maps/Costa_Bottle_BrownieMap.jpg');

	// button element
	changeBottleNavClassesToNotActive()
	var element = document.querySelector("#brownieButton");

	// replace primary with success
	element.classList.remove("btn-primary");
	element.classList.add("btn-success");
}

function changeTextureVanillaLatte() {
	document.getElementById('model__ImgTextureModelThree').setAttribute("url", 'maps/CostaCan_Vanilla_LatteMap.jpg');

	// button element
	changeCanNavClassesToNotActive()
	var element = document.querySelector("#vanillaLatteButton");

	// replace primary with success
	element.classList.remove("btn-primary");
	element.classList.add("btn-success");
}

function changeTextureLatte() {
	document.getElementById('model__ImgTextureModelThree').setAttribute("url", 'maps/CostaCan_LatteMap.jpg');

	// button element
	changeCanNavClassesToNotActive()
	var element = document.querySelector("#latteButton");

	// replace primary with success
	element.classList.remove("btn-primary");
	element.classList.add("btn-success");
}

function changeTextureBlack() {
	document.getElementById('model__ImgTextureModelOne').setAttribute("url", 'maps/CupImageMap_Black.jpg');

	// button element
	changeCupNavClassesToNotActive()
	var element = document.querySelector("#cupBlackButton");

	// replace primary with success
	element.classList.remove("btn-primary");
	element.classList.add("btn-success");
}

function changeTextureMilky() {
	document.getElementById('model__ImgTextureModelOne').setAttribute("url", 'maps/CupImageMap.jpg');

	// button element
	changeCupNavClassesToNotActive()
	var element = document.querySelector("#cupMilkyButton");

	// replace primary with success
	element.classList.remove("btn-primary");
	element.classList.add("btn-success");
}
// END OF CHANGING TEXTURE REGION

function changeModelsClassesToNotActive() {
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

function changeCupNavClassesToNotActive()
{
	var element = document.querySelector("#cupMilkyButton");
	element.classList.remove("btn-success");
	element.classList.add("btn-primary");

	var element = document.querySelector("#cupBlackButton");
	element.classList.remove("btn-success");
	element.classList.add("btn-primary");
}

function changeBottleNavClassesToNotActive() {
	var element = document.querySelector("#caramelButton");
	element.classList.remove("btn-success");
	element.classList.add("btn-primary");

	var element = document.querySelector("#brownieButton");
	element.classList.remove("btn-success");
	element.classList.add("btn-primary");
}

function changeCanNavClassesToNotActive() {
	var element = document.querySelector("#latteButton");
	element.classList.remove("btn-success");
	element.classList.add("btn-primary");

	var element = document.querySelector("#vanillaLatteButton");
	element.classList.remove("btn-success");
	element.classList.add("btn-primary");
}

