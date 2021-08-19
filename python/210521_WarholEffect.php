<?php

	$pageTitle = "Blog";	
	include_once '../includes/header.php';

?>

<pre>

from simpleimage import SimpleImage

NUMBER_OF_ROWS = 2
NUMBER_OF_COLUMNS = 3
PATCH_SIZE = 222
WIDTH = NUMBER_OF_ROWS * PATCH_SIZE
HEIGHT = NUMBER_OF_ROWS * PATCH_SIZE
DEFAULT_IMAGE = 'images/simba.jpg'


def main():
    final_image = SimpleImage.blank(WIDTH, HEIGHT)

    # This is an example which should generate a pinkish patch
    final_image = make_recolored_patch(1.5, 0, 1.5)
    final_image.show()


    big_picture = make_recolored_patch()
    big_picture.show()
    print(big_picture.width, big_picture.height)


def make_recolored_patch(red_scale, green_scale, blue_scale):
    simba_image = SimpleImage(DEFAULT_IMAGE)
    big_picture = SimpleImage.blank(simba_image.width * 3, simba_image.height * 2)

    return big_picture

if __name__ == '__main__':
    main()


# def make_recolored_patch(red_scale, green_scale, blue_scale):
#     simba_image = SimpleImage(DEFAULT_IMAGE)
#     big_picture = SimpleImage.blank(simba_image.width * 3, simba_image.height * 2)

#     for y in range(simba_image.height): 
#       for x in range(simba_image.width):
#           pixel = simba_image.get_pixel(x,y)
#           big_picture.set_pixel(x,y, pixel)
#           big_picture.set_pixel(x + 222,y, pixel)
#           big_picture.set_pixel(x + 444,y, pixel)
#           big_picture.set_pixel(x,y + 222, pixel)
#           big_picture.set_pixel(x + 222,y + 222, pixel)
#           big_picture.set_pixel(x + 444,y + 222, pixel)
#     return big_picture



    # for y in range(big_picture.height): 
    #   for x in range(big_picture.width):
    #     px = big_picture.get_pixel(x, y)
    #     px.red = px.red/
    #     px.green = 0
    #     px.blue = 0
    # return big_picture

    # for y in big_picture:
    #     y.red = 255
    #     y.green = 145
    #     y.blue = 10
    # return big_picture

    </pre>


<?php

include_once '../includes/footer.php';

?>
