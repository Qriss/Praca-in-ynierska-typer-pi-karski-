
$(document).ready(function() {
    //tutaj wstawiamy kod JQuery, który zostanie uruchomiony
    //jak tylko dokument będzie gotowy do manipulowania jego elementami



    //iteracja po elementach
    $('#mylist div').each( function( index, element ){
        if(index % 2 == 0)
            $(this).css('background-color', 'Green');
    });


});