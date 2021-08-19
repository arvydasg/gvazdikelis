<?php

	$pageTitle = "Blog";	
	include_once '../includes/header.php';

?>


<pre>


"""
This program generates the Warhol effect based on the original image.  
In this version, I use 6 hard-coded lists of RGB values that I selected.  
The "select_pattern" helper function uses a counter to select the appropriate RGB set of values.
The RGB set has a fourth element, which is the updated counter for the next iteration.
"""

from simpleimage import SimpleImage

N_ROWS = 2
N_COLS = 3
PATCH_SIZE = 222
WIDTH = N_COLS * PATCH_SIZE
HEIGHT = N_ROWS * PATCH_SIZE
PATCH_NAME = 'images/simba.jpg'

def main():
    # Later, I want to obtain the PATCH_SIZE from the image rather than hard code.
    # Until I do that, here is how I double-checked that Simba indeed is 222 by 222.
    # image = SimpleImage(PATCH_NAME)
    # width = image.width
    # height = image.height
    # print(width, height)

    # first step is to create a blank image with desired WIDTH and HEIGHT,
    # based on PATCH_SIZE, N_COLS, N_ROWS
    final_image = SimpleImage.blank(WIDTH, HEIGHT)

    counter = 1

    # then here is the nested loop where we create and place the 6 patches
    for j in range(N_ROWS):  # This is the outer loop, which repeats the functions for each row
        for i in range(N_COLS): # This is the inner loop, which repeats the functions for each column within the row
            list_rgb = select_pattern(counter) # this calls select_patter with counter = 1 and returns list

            patch = make_recolored_patch(list_rgb[0], list_rgb[1], list_rgb[2])
            counter = list_rgb[3]

            # now the patch is put in the proper place
            start_x = i * PATCH_SIZE # start_x will be 0, then 222, then 444
            start_y = j * PATCH_SIZE # start_y will be 0, then 222
            put_patch(final_image, start_x, start_y, patch)

    final_image.show()

def select_pattern(counter):
    if counter == 1:
        list_rgb = [1.3, 0, 1.1, 2]
    elif counter == 2:
        list_rgb = [0, 1.5, 1.5, 3]
    elif counter == 3:
        list_rgb = [1.5, 1.5, 0, 4]
    elif counter == 4:
        list_rgb = [0.5, 1.5, 0.8, 5]
    elif counter == 5:
        list_rgb = [1.2, 0.9, 1.5, 6]
    elif counter == 6:
        list_rgb = [1.2, 0.5, 1.7, 7]
    return(list_rgb)


def put_patch(final_image, start_x, start_y, patch):
    for y in range(PATCH_SIZE):
        for x in range(PATCH_SIZE):
            pixel = patch.get_pixel(x, y)
            final_image.set_pixel((start_x + x), (start_y + y), pixel)
    return(final_image)

def make_recolored_patch(red_scale, green_scale, blue_scale):
    '''
    Implement this function to make a patch for the Warhol Filter.
    It loads the patch image and recolors it.
    :param red_scale: A number to multiply each pixel's red component by
    :param green_scale: A number to multiply each pixel's green component by
    :param blue_scale: A number to multiply each pixel's blue component by
    Returns the newly generated patch.
    '''
    patch = SimpleImage(PATCH_NAME)
    for pixel in patch:
        pixel.red = pixel.red * red_scale
        pixel.green = pixel.green * green_scale
        pixel.blue = pixel.blue * blue_scale
    return(patch)

if __name__ == '__main__':
    main()

</pre>

<?php

	include_once '../includes/footer.php';

?>

