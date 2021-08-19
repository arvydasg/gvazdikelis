<?php

	$pageTitle = "Blog";	
	include_once '../includes/header.php';

?>


<pre>

"""
This program shows an example of "greenscreening" (actually
"redscreening" in this case).  This is where we replace the
pixels of a certain color intensity in a particular channel
(here, we use red) with the pixels from another image.
"""

from simpleimage import SimpleImage
from datetime import datetime


INTENSITY_THRESHOLD = 2.7

def redscreen(main_filename, back_filename):
    """
    Implements the notion of "redscreening".  That is,
    the image in the main_filename has its "sufficiently red"
    pixels replaced with pixel from the corresponding x,y
    location in the image in the file back_filename.
    Returns the resulting "redscreened" image.
    """
    image = SimpleImage(main_filename)
    back = SimpleImage(back_filename)
    for pixel in image:
        average = (pixel.red + pixel.green + pixel.blue) // 3
        # See if this pixel is "sufficiently" red
        if pixel.red >= average * INTENSITY_THRESHOLD:
            # If so, we get the corresponding pixel from the
            # back image and overwrite the pixel in
            # the main image with that from the back image.
            x = pixel.x
            y = pixel.y
            image.set_pixel(x, y, back.get_pixel(x, y))
    return image

def main():
    """
    Run your desired image manipulation functions here.
    You should store the return value (image) and then
    call .show() to visualize the output of your program.
    """
    original_stop = SimpleImage('red_flower.jpg')
    original_stop.show()  

    original_leaves = SimpleImage('leaves864.jpg')
    original_leaves.show()

    startTime = datetime.now() #### something cool, checks how long it took to compute

    stop_leaves_replaced = redscreen('red_flower.jpg', 'leaves864.jpg')
    stop_leaves_replaced.show()


    print(datetime.now() - startTime) #### something cool, checks how long it took to comput


if __name__ == '__main__':
    main()


</pre>

<?php

include_once '../includes/footer.php';

?>