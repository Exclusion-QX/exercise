$(document).keydown(function(e){
    switch(e.which) {
        case 37: // left
            alert('left arrow');
            break;

        case 38: // up
            alert('up arrow');
            break;

        case 39: // right
            alert('right arrow');
            break;

        case 40: // down
            alert('down arrow');
            break;
    }
});