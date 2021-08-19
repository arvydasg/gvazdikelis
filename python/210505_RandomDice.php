<?php

	$pageTitle = "Blog";	
	include_once '../includes/header.php';

?>

<pre>

import random

NUM_SIDES = 20

# setting seed is useful for debugging. comment out when the bugs are fixed
# random.seed(1)

die1 = random.randint(1, NUM_SIDES)
die2 = random.randint(1, NUM_SIDES)
total = die1 + die2
print("Dice have", NUM_SIDES, "sides each")
print("First dice roll: ", die1)
print("Second dice roll: ", die2)
print("Total dice roll sum: ",  total)


</pre>

<?php

include_once '../includes/footer.php';

?>