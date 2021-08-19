<?php

	$pageTitle = "Blog";	
	include_once '../includes/header.php';

?>

<pre>

"""
This program generates the Warhol effect based on the original image.
"""

from simpleimage import SimpleImage

filename = 'images/black.jpg'

def rotateImageLeft(image):
    rotated = SimpleImage.blank(image.height,image.width)
    for pixel in image:
        x = pixel.y
        y = image.width-(pixel.x+1)
        rotated.set_pixel(x,y,pixel)
    return rotated

def rotateImageRight(image):
    rotated = SimpleImage.blank(image.height,image.width)
    for pixel in image:
        x = image.height-(pixel.y+1)
        y = pixel.x
        rotated.set_pixel(x,y,pixel)
    return rotated

def rotateImage180(image):
    rotated = SimpleImage.blank(image.width,image.height)
    for pixel in image:
        x = image.width-(pixel.x+1)
        y = image.height-(pixel.y+1)
        rotated.set_pixel(x,y,pixel)
    return rotated

def main():
    """
    Rotating image by Left90 and Right90 degrees
    """
    image = SimpleImage(filename)
    image.show()

    left_rotated_image = rotateImageLeft(image)
    left_rotated_image.show()

    right_rotated_image = rotateImageRight(image)
    right_rotated_image.show()

    rotate_image_180 = rotateImage180(image)
    rotate_image_180.show()



if __name__ == '__main__':
    main()


</pre>

<?php

include_once '../includes/footer.php';

?>
