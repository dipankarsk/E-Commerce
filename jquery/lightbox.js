function lightbox(insertContent, ajaxContentUrl) {

    // add lightbox/shadow <div/>'s if not previously added
    if ($('#lightbox').size() === 0) {
        var theLightbox = $('<div id="lightbox"/>');
        var theShadow = $('<div id="lightbox-shadow"/>');
        $(theShadow).click(function (e) {
            closeLightbox();
        });
        $('body').append(theShadow);
        $('body').append(theLightbox);
    }

    // remove any previously added content
    $('#lightbox').empty();

    // insert HTML content
    if (insertContent !== null) {
        $('#lightbox').append(insertContent);
    }

    // insert AJAX content
    if (ajaxContentUrl !== null) {
        // temporarily add a "Loading..." message in the lightbox
        $('#lightbox').append('<p class="loading">Loading...</p>');

        // request AJAX content
        $.ajax({
            type: 'GET',
            url: ajaxContentUrl,
            success: function (data) {
                // remove "Loading..." message and append AJAX content
                $('#lightbox').empty();
                $('#lightbox').append(data);
            },
            error: function () {
                alert('AJAX Failure!');
            }
        });
    }

    // move the lightbox to the current window top + 100px
    $('#lightbox').css('top', $(window).scrollTop() + 100 + 'px');

    // display the lightbox
    $('#lightbox').show();
    $('#lightbox-shadow').show();
	
	$('.up').click(function(){
    	var id1=$(this).attr('value');
    	var q=parseInt($('#'+id1).attr('value'));
        var price = 0;
    	q=q+1;
    	$.get('increment.php',{id:id1,quan:q},function(data){
            $('#sum').html(data);     
    	});
        $('#'+id1).attr('value',q);
        
        //subtotal code
        var parent = $(this).parent().parent().parent();
        console.log($(parent).attr('class'));
        $(parent).children().each(function () {
            if($(this).attr('id') === 'row4'){
                price = $(this).html();
            }
            if($(this).attr('id') === 'row6'){
                var total = parseInt(q) * parseInt(price);
                $(this).html(total);
            }
        })
        	 
    });
	   
	$('.down').click(function(){
    	var id1=$(this).attr('value');
    	var q=parseInt($('#'+id1).attr('value'));
    	
    	if(q>1)
    	{
    	    q=q-1;
    	    $.get('increment.php',{id:id1,quan:q},function(data){
                $('#sum').html(data);   
    	    });
            $('#'+id1).attr('value',q);
    	}

        //subtotal code
        var parent = $(this).parent().parent().parent();
        console.log($(parent).attr('class'));
        $(parent).children().each(function () {
            if($(this).attr('id') === 'row4'){
                price = $(this).html();
            }
            if($(this).attr('id') === 'row6'){
                var total = parseInt(q) * parseInt(price);
                $(this).html(total);
            }
        });
    });
	   
}

// close the lightbox
function closeLightbox() {

    // hide lightbox and shadow <div/>'s
    $('#lightbox').hide();
    $('#lightbox-shadow').hide();

    // remove contents of lightbox in case a video or other content is actively playing
    $('#lightbox').empty();
}
