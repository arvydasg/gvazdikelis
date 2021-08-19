<?php

	$pageTitle = "Blog";	
	include_once '../includes/header.php';

?>

<pre>

import math

# the constant K in half life formula

K = -8266.64258429376

# repeat the condition until the user quits the program
def main():
    while True:
        calculate_age_single_sample()
        print("") # empty line

def calculate_age_single_sample():
    # ask the user to enter the percent c14 left in their sample
    pct_left = float(input("% of natural c14: "))
    # calculate the age
    age = K * math.log(pct_left / 100)
    # print the result
    print("Sample is " + str(age) + " years old.")

if __name__ == '__main__':
    main()

</pre>



<?php

include_once '../includes/footer.php';

?>