// JavaScript Document
$(document).ready(function() {

    //AJAX service request to get the main text data from the json data store.
        $.getJSON('./application/model/data.json', function(jsonObj) {
            console.log(jsonObj);
            // home page left column text data
            $('#title_left').html('<h2>' + jsonObj.pageTextData[0].title + '</h2>')
            $('#subTitle_left').html('<h3>' + jsonObj.pageTextData[0].subTitle + '</h3>')
            $('#description_left').html('<p>' + jsonObj.pageTextData[0].description + '</p>')

            // home page centre column text data
            $('#title_center').html('<h2>' + jsonObj.pageTextData[1].title + '</h2>')
            $('#subTitle_center').html('<h3>' + jsonObj.pageTextData[1].subTitle + '</h3>')
            $('#description_center').html('<p>' + jsonObj.pageTextData[1].description + '</p>')

            // home page right column text data
            $('#title_right').html('<h2>' + jsonObj.pageTextData[2].title + '</h2>')
            $('#subTitle_right').html('<h3>' + jsonObj.pageTextData[2].subTitle + '</h3>')
            $('#description_right').html('<p>' + jsonObj.pageTextData[2].description + '</p>')

            // Carousel food 1
            $('#carousel_food_title_one').html('<h5>' + jsonObj.pageTextData[3].titleCarouselFood + '</h5>')
            $('#carousel_food_description_one').html('<p>' + jsonObj.pageTextData[3].descriptionCarouselFood + '</p>')
			
            // Carousel food 2
            $('#carousel_food_title_two').html('<h5>' + jsonObj.pageTextData[4].titleCarouselFood + '</h5>')
            $('#carousel_food_description_two').html('<p>' + jsonObj.pageTextData[4].descriptionCarouselFood + '</p>')
			
			  // Carousel food 3
            $('#carousel_food_title_three').html('<h5>' + jsonObj.pageTextData[5].titleCarouselFood + '</h5>')
            $('#carousel_food_description_three').html('<p>' + jsonObj.pageTextData[5].descriptionCarouselFood + '</p>')

			// Carousel drink 1
            $('#carousel_drink_title_one').html('<h5>' + jsonObj.pageTextData[6].titleCarouselDrink + '</h5>')
            $('#carousel_drink_description_one').html('<p>' + jsonObj.pageTextData[6].descriptionCarouselDrink + '</p>')

			// Carousel drink 2
            $('#carousel_drink_title_two').html('<h5>' + jsonObj.pageTextData[7].titleCarouselDrink + '</h5>')
            $('#carousel_drink_description_two').html('<p>' + jsonObj.pageTextData[7].descriptionCarouselDrink + '</p>')
			
			// Carousel drink 3
            $('#carousel_drink_title_three').html('<h5>' + jsonObj.pageTextData[8].titleCarouselDrink + '</h5>')
            $('#carousel_drink_description_three').html('<p>' + jsonObj.pageTextData[8].descriptionCarouselDrink + '</p>')
			
            //get the interaction panel camera
            $('#interactionPanelCameraTitle').html('<p>' + jsonObj.pageTextData[9].interactionPanelCameraTitle + '</p>');
            $('#interactionPanelCamera').html('<p>' + jsonObj.pageTextData[9].interactionPanelCamera + '</p>');
            $('#interactionPanelAnimationTitle').html('<p>' + jsonObj.pageTextData[9].interactionPanelAnimationTitle + '</p>');
		    $('#interactionPanelAnimate').html('<p>' + jsonObj.pageTextData[9].interactionPanelAnimate + '</p>');
            $('#interactionPanelRenderTitle').html('<p>' + jsonObj.pageTextData[9].interactionPanelRenderTitle + '</p>');
            $('#interactionPanelRender').html('<p>' + jsonObj.pageTextData[9].interactionPanelRender + '</p>');

            // Originality 
            $('#originalityStatement').html('<p>' + jsonObj.pageTextData[10].originalityStatement + '</p>');
        });
});