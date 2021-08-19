<?php

	$pageTitle = "Blog";	
	include_once '../includes/header.php';

?>

<pre>

from simpleimage import SimpleImage
from datetime import datetime

DEFAULT_FILE = 'images/stop.jpg'

# take in nothing
def get_file(): 
    # user_image = input('Enter image file (or press enter for default): ')
    # if user_image == '':
        # user_image = DEFAULT_FILE
    user_image = DEFAULT_FILE
    #return an image from the user
    return user_image 

# take in user_image
def make_reflected_and_darker(obuol): 
    usable_image = SimpleImage(obuol)
    mirrored_image = SimpleImage.blank(usable_image.width, usable_image.height * 2)
    #zemyn
    for y in range(usable_image.height): 
        # i desine
        for x in range(usable_image.width): 
            # 0,0 position
            pixel = usable_image.get_pixel(x, y) 
            # just making same image in one of the two windows
            mirrored_image.set_pixel(x, y, pixel) 
            mirrored_image.set_pixel( x, (usable_image.height * 2) - (y + 1), pixel)

    for pixel in mirrored_image:
        pixel.red = pixel.red // 2
        pixel.green = pixel.green // 2
        pixel.blue = pixel.blue // 2
    
    # returning mirrored and darkened image
    return mirrored_image

    
###########################################################################################################################

def main():
    startTime = datetime.now() 

    # user_image is returned value from the other function!!!
    user_image = get_file() 

    # saying okay make the image visible to python by putting it in SimpleImage library
    original_image_output = SimpleImage(user_image)
    original_image_output.show()

    user_image_rotated = make_reflected_and_darker(user_image)
    user_image_rotated.show()

    mirrored_image_return = make_reflected_and_darker(user_image)
    print(mirrored_image_return.width, mirrored_image_return.height)

    print(datetime.now() - startTime)




#   # Show the reflected image
#     reflected = make_reflected(user_image)
#     reflected.show()

if __name__ == '__main__':
    main()

</pre>


<?php

include_once '../includes/footer.php';

?>
