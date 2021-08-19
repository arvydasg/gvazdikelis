<?php

	$pageTitle = "Blog";	
	include_once '../includes/header.php';

?>

<pre>

"""
This program highlights fires in an image by identifying pixels
whose red intensity is more than INTENSITY_THRESHOLD times the
average of the red, green, and blue values at a pixel. Those
"sufficiently red" pixels are then highlighted in the image
and other pixels are turned grey, by setting the pixel red,
green, and blue values to be all the same average value.
"""

from simpleimage import SimpleImage

INTENSITY_THRESHOLD = 1.0
DEFAULT_FILE = 'greenland-fire.png'

def main():
    # Get file name from user input
    filename = get_file()
    image = SimpleImage(filename)
    image.show()

    redflames = find_flames(filename)
    redflames.show()


def get_file():
    # Read image file path from user, or use the default file
    filename = input('Enter image file (or press enter for default): ')
    if filename == '':
        filename = DEFAULT_FILE
    return filename



def find_flames(filename):
    """
    This function should highlight the "sufficiently red" pixels
    in the image and grayscale all other pixels in the image
    in order to highlight areas of wildfires.
    """
    image = SimpleImage(filename)

    for pixel in image:
        average = (pixel.red + pixel.green + pixel.blue) // 3
        # See if this pixel is "sufficiently" red
        if pixel.red >= average * INTENSITY_THRESHOLD:
            # when detects a "sufficient red" pixel change red to 255 & green & blue to 0
            pixel.red = 255
            pixel.green = 0
            pixel.blue = 0
        # all pixels not sufficiently red covert to greyscale ()
        if  pixel.red < average * INTENSITY_THRESHOLD:
            pixel.red = (pixel.red + pixel.green + pixel.blue) // 3
            pixel.green = (pixel.red + pixel.green + pixel.blue) // 3
            pixel.blue = (pixel.red + pixel.green + pixel.blue) // 3
    return image




if __name__ == '__main__':
    main()


</pre>

<?php

include_once '../includes/footer.php';

?>