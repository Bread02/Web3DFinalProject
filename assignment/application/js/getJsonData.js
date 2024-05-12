// JavaScript Document
$(document).ready(function() {

    //AJAX service request to get the main text data from the json data store.
        $.getJSON('./application/model/data.json', function(jsonObj) {
            console.log(jsonObj);
            // Get the home page main text data
            $('#title_home').html('<h2>' + jsonObj.pageTextData[0].title + '</h2>')
            $('#subTitle_home').html('<h3>' + jsonObj.pageTextData[0].subTitle + '</h3>')
            $('#description_home').html('<p>' + jsonObj.pageTextData[0].description + '</p>')

            // home page left column text data
            $('#title_left').html('<h2>' + jsonObj.pageTextData[1].title + '</h2>')
            $('#subTitle_left').html('<h3>' + jsonObj.pageTextData[1].subTitle + '</h3>')
            $('#description_left').html('<p>' + jsonObj.pageTextData[1].description + '</p>')

            // home page centre column text data
            $('#title_center').html('<h2>' + jsonObj.pageTextData[2].title + '</h2>')
            $('#subTitle_center').html('<h3>' + jsonObj.pageTextData[2].subTitle + '</h3>')
            $('#description_center').html('<p>' + jsonObj.pageTextData[2].description + '</p>')

            // home page right column text data
            $('#title_right').html('<h2>' + jsonObj.pageTextData[3].title + '</h2>')
            $('#subTitle_right').html('<h3>' + jsonObj.pageTextData[3].subTitle + '</h3>')
            $('#description_right').html('<p>' + jsonObj.pageTextData[3].description + '</p>')
			
		    //Get the gallery contents data
		    $('#title_gallery').html('<h2>' + jsonObj.pageTextData[4].galleryTitle + '<h2>');
		    $('#description_gallery').html('<p>' + jsonObj.pageTextData[4].galleryDescription + '</p>');

            //get the interaction panel camera
            $('#interactionPanelCameraTitle').html('<p>' + jsonObj.pageTextData[5].interactionPanelCameraTitle + '</p>');
            $('#interactionPanelCamera').html('<p>' + jsonObj.pageTextData[5].interactionPanelCamera + '</p>');
            $('#interactionPanelAnimationTitle').html('<p>' + jsonObj.pageTextData[5].interactionPanelAnimationTitle + '</p>');
		    $('#interactionPanelAnimate').html('<p>' + jsonObj.pageTextData[5].interactionPanelAnimate + '</p>');
            $('#interactionPanelRenderTitle').html('<p>' + jsonObj.pageTextData[5].interactionPanelRenderTitle + '</p>');
            $('#interactionPanelRender').html('<p>' + jsonObj.pageTextData[5].interactionPanelRender + '</p>');

            // Originality and references
            $('#originalityStatement').html('<p>' + jsonObj.pageTextData[6].originalityStatement + '</p>');
            $('#referencesStatement').html('<p>' + jsonObj.pageTextData[6].referencesStatement + '</p>');

        });
});