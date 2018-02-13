$ = jQuery.noConflict();

$(document).ready(function() {


    var userFeed = new Instafeed({
        get: 'user',
        userId: '1977448528',
        limit: 12,
        resolution: 'standard_resolution',
        accessToken: '1977448528.1677ed0.47727296b4c544ac8dbed758baa254a1',
        sortBy: 'most-recent',
        template: '<div class="col-lg-3 instaimg"><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
    });


    userFeed.run();


    // This will create a single gallery from all elements that have class "gallery-item"
    $('.gallery').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });


});
