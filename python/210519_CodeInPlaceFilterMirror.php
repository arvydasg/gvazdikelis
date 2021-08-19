<?php

	$pageTitle = "Blog";	
	include_once '../includes/header.php';

?>

<pre>

from simpleimage import SimpleImage

DEFAULT_FILE = 'red_flower.jpg'

def main():
    # Get file and load image for the library to read
    filename = get_file()
    image = SimpleImage(filename)

    # Show the image before the transform
    image.show()

    # Apply the filter
    code_in_place_filter(image)
    # Show the image after the transform
    image.show()

    mirrored_image = mirror_image(image)
    mirrored_image.show()

def mirror_image(image):
    width = image.width
    height = image.height

    mirror = SimpleImage.blank(width * 2, height)

    for y in range (height):
        for x in range(width):
            pixel = image.get_pixel(x, y)
            mirror.set_pixel(x, y, pixel)
            mirror.set_pixel((width * 2) - (x + 1), y, pixel)
    return mirror
    

def get_file():
    # Read image file path from user, or use the default file
    filename = input('Enter image file (or press enter for default): ')
    if filename == '':
        filename = DEFAULT_FILE
    return filename

def code_in_place_filter(image): 
    for pixel in image:
        pixel.red = pixel.red * 1.6
        pixel.green = pixel.green * 0.7
        pixel.blue = pixel.blue * 1.5

if __name__ == '__main__':
    main()


</pre>

<?php

include_once '../includes/footer.php';

?>