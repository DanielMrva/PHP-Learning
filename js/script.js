$(function() {
    // target selector for our error handling <h2>
    let $error = $('#error');

    // AJAX function for our responces links
    function getContentItem(name) {
        $.ajax({
            type: 'GET',
            url: 'response.php',
            data: {
                item: name
            }
        }).then(function(res) {
            let data = JSON.parse(res);

            if (data.error) {
                $error.removeClass('hide').html(data.error);
                return;
            };

            $('#content').html(data.content);
            $('#landing').addClass('hide');
        }).fail(function(res) {
            $error.removeClass('hide').html(data.error);
        })
    };

    // event listeners for all of our <a> with data-item
    $('a[data-item').on('click', function(e) {
        e.preventDefault();

        let dataItem = $(this).attr('data-item');
        // calls getContentItem with the data-item passed
        getContentItem(dataItem);
    
    });
});