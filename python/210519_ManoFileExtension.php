<?php

	$pageTitle = "Blog";	
	include_once '../includes/header.php';

?>

<pre>

import os
from datetime import datetime

startTime = datetime.now() #### something cool, checks how long it took to compute

dir = (r'C:\xampp\htdocs')
for i in os.listdir(dir):
    failai = os.path.join(dir,i)
    split = os.path.splitext(failai) ### padalina i kelias dalis, numeri 0 ir 1
    if split[1]=='.html': ## jeigu numeris 1 yra tooks
        os.rename(failai, split[0]+'.php') ## padaryk toki

print(datetime.now() - startTime) #### something cool, checks how long it took to compute


# for f in os.listdir():
#     base = os.path.splitext(my_file) [0]
#     os.rename(my_file, base + '.php')


# print(os.getcwd())


# for f in os.listdir():
#     file_name, file_ext = os.path.splitext(f)
#     print(file_ext)
#     os.rename(file_name, + ".php")



</pre>

<?php

include_once '../includes/footer.php';

?>