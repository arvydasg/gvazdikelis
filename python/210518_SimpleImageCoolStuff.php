<?php

$pageTitle = "Blog";	
include_once '../includes/header.php';

?>

<pre>

from simpleimage import SimpleImage
from datetime import datetime


##################################################################### 
#################### MAKE IMAGE DARKER ##################################
#####################################################################


# image = SimpleImage("labas.jpg")

# for pixel in image:
#     pixel.red = pixel.red // 2
#     pixel.green = pixel.green // 2
#     pixel.blue = pixel.blue // 2

# image.show()



##################################################################### 
#################### REMOVE PARTICULAR COLORS ##################################
#####################################################################


# startTime = datetime.now() #### something cool, checks how long it took to compute

image = SimpleImage("labas.jpg")
for pixel in image:
    pixel.green = 100
    # pixel.red = 
    pixel.blue = 180
image.show()

# print(datetime.now() - startTime) #### something cool, checks how long it took to compute




##################################################################### 
#################### GRAYSCALE ##################################
#####################################################################

"""
    calculates the Luminocity of a pixel using NTSC formula to weight red, green and blue values appropirately.
"""

# def compute_luminocity(red, green, blue): ##### if you give me red green and blue value I will compute this formula and return to you this luminocity value
#     return (0.299 * red) + (0.587 * green) + (0.114 * blue)

# def grayscale(image):

#     image = SimpleImage("labas.jpg")
#     for pixel in image:
#         luminocity = compute_luminocity(pixel.red, pixel.green, pixel.blue)
#         pixel.red = luminocity
#         pixel.green = luminocity
#         pixel.blue = luminocity
#     return image


#     image.show()



</pre>

<?php

include_once '../includes/footer.php';

?>