<?php

	$pageTitle = "Blog";	
	include_once '../includes/header.php';

?>

<pre>

"""
File: mirror.py
---------------
This program shows an example of creating an image
that shows an original image and its mirror reflection
in a new image.
"""

from simpleimage import SimpleImage

def mirror_image(filename):
    """
    Read an image from the file specified by filename.
    Returns a new image that includes the original image
    and its mirror reflection, side-by-side.
    """
    image = SimpleImage(filename)

    # Create new image to contain mirror reflection
    mirror = SimpleImage.blank(image.width * 2, image.height)

    for y in range(image.height):
        for x in range(image.width):
            pixel = image.get_pixel(x, y)
            mirror.set_pixel(x, y, pixel)
            mirror.set_pixel((image.width * 2) - (x + 1), y, pixel)

def main():
    """
    Run your desired image manipulation functions here.
    You should store the return value (image) and then
    call .show() to visualize the output of your program.
    """
    original = SimpleImage('images/sea.jpg')
    original.show()

    mirrored = mirror_image('images/sea.jpg')
    mirrored.show()

if __name__ == '__main__':
    main()

</pre>

<?php

include_once '../includes/footer.php';

?>