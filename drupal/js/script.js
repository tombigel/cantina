/* Author: Tom Bigelajzen

*/

//Init Application
function init(){
    //Initiate the carousel
    doCarousel('#carousel ul', 3000, 4000, 4000);
}
/**
 * Cycle through elements
 * @param element
 * DOM parent of carousel slots
 * @param duration
 * Animation duration
 * @param delay
 * Time between animations
 * @param initial_delay
 * Optional delay for the first iterration
 */
function doCarousel(element, duration, delay, initial_delay){

    if (!initial_delay) {
        // Get all sots
        var slots = $(element).children();
        // Get the distance for the animation from the visible element
        var distance = slots.first().width();
        // Make sure that the right CSS properties are set
        $(element).css({
            'position' : 'relative',
            'overflow' : 'hidden'
        });
        slots.css({
            'position' : 'relative'
        });
        //Animate
        slots.animate({ 'right':'-=' + distance + 'px' }, duration, function(){
            //move first element to the end of the list and reset position
            slots.last().after(slots.first());
            slots.css({'right' : 0 });
        });
    }
    //Create a closure and call the function again after a delay
    var func = function(){return doCarousel(element, duration, delay);};
    window.carouselTimer = setTimeout(func, initial_delay || (duration + delay));

}

$(document).ready(init)
