<?php

	$pageTitle = "Dice Simulator";	
	include_once '../includes/header.php';

?>

<pre>
import random

NUM_SIDES = 6

def main(): 
    die1 = 10 # this is not impaceted by the funciton below die1
    print("die1 in main() starts as: " + str(die1))
    roll_dice() # local variables. when a variable is created insidea function it remains inside that function even if they have the same name inside the variable of another funciton 
    roll_dice()
    roll_dice()
    print("die1 in main() is: " + str(die1))



def roll_dice():
    die1 = random.randint(1, NUM_SIDES)
    die2 = random.randint(1, NUM_SIDES)
    total = die1 + die2
    print("Total of two dice: " + str(total))

if __name__ == '__main__':
    main()

</pre>


<?php

include_once '../includes/footer.php';

?>