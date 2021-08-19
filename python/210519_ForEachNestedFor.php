<?php

	$pageTitle = "Blog";	
	include_once '../includes/header.php';

?>

<pre>

from simpleimage import SimpleImage


##################################################################### 
#################### FOR EACH #######################################
#####################################################################


# def main():

#     original = SimpleImage('stop.jpg')
#     original.show()

#     mirrored = darker('stop.jpg')
#     mirrored.show()

# def darker(filename):
#     img = SimpleImage(filename)
#     for px in img:
#         px.red = px.red // 2
#         px.green = px.green // 2
#         px.blue = px.blue // 2
#     return img



# if __name__ == '__main__':
#     main()


##################################################################### 
#################### NESTED FOR LOOP ################################
#####################################################################

#### we only want to use NESTED FOR LOOPS if we carea about X and Y values. (needed for mirroring image. or maybe choosing a specific place in an image for color correction??)

def main():

    original = SimpleImage('stop.jpg')
    original.show()

    mirrored = darker('stop.jpg')
    mirrored.show()

def darker(filename):
    img = SimpleImage(filename)
    for y in range(img.height):
        for x in range(img.width):
            px = img.get_pixel(x, y)
            px.red = px.red // 2
            px.green = px.green // 2
            px.blue = px.blue // 2
    return img



if __name__ == '__main__':
    main()



</pre>

<?php

include_once '../includes/footer.php';

?>