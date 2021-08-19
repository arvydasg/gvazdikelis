<?php

	include_once '../includes/header.php';

?>


<p>2021-03-15</p>

<img src="/images/excelfun.png" width="500" height="333">

<p>I would really like to have some actual data to work with, but I can not find any that I would 1-know how to read, 2-know how to work with, 3-would not get frustrated just by looking at csv file full of digits and and commas.</p> 

<p>Creating my own dataset just by typing words and numbers in a google sheet is possible(and probably I will end up doing that and using what I come up with for the next two weeks), but... I forgot what I wanted to say. </p>

<p>The thing is, according to my "plan" I am supposed to be learning about excel and statistics right now, but for some reason as I watch a tutorial or read a book (think stats) I come up to a road block which tells me that to continue you need to know how to use python or how to use excel. 1-I dont know how to use python and I am supposed to lear in in 2 weeks(according to my plan :D) and 2-I dont have excel on my computer (need to install in on linux through vine after finding a free ISO...) and google sheets lacks some functions that I see tutorials about...</p>

<p>Again, I don't feel that I am progressing anywhere, I am just looking at various ways to get data, learning about various types of data and basically finding out ways of how NOT to start learning DS :D But it's alright, I'll get therer.</p>

<p>Lets focus on excel for the rest of today. 16:20</p> 


<p>Filters in excel a quite useful.</p>

<p><strong>Filters</strong> in - <a href=https://www.youtube.com/watch?v=wMlTDXPEjag&t=21s" target="blank">excel</a> are quite useful. Watching in 1.5x speed just to get an idea of what is possible. Totals, nice. Transform your data into a table to get an easy totals/averages and so on. You get not only filering options but also your forumulas or charts referencing the data - they both get updated. Kay, will keep in mind.</p>

<p><strong>Formulas and Functions</strong> by the <a href=https://www.youtube.com/watch?v=Jl0Qk63z2ZY" target="_blank">guy</a> who works at Microsoft :D.</p>

<p>Been seeing <strong>median</strong> here and there, so here is a refresher:</p>
<img src="/images/medianmathisfun.png" width="600" height="400">

<p><strong>Concatenate</Strong> - =CONCAT(x1,x2) takes value from one row, then from the other one that you selec and separate with comman and puts them together in one "langeli". </p>

<p><strong>If</strong> - =IF(D13="smile", "yay", "boo") good times Csongor, good times ;) IF a field equals to a word "smile", the returned value will be "yay", if the field equals to anything else than "smile", returns the value "boo". </p>

<p><strong>Countif</strong> - Selecting a range of values and asking the formula to calculate how many instances that we have specied are in the given range. For example. =COUNTIF(B1:G7, 1) formula presents me with a number that tells me how many numbers "1" are in the field that I asked to look in.</p>


<p><strong>Vlookup</strong> - things are getting more interesting. So Vlookup looks at the table, lest say the table has two values... you know, let me just put an image rly quick <em> (more vim and html practice on top of that)</em>.</p>

<img src="/images/vlookup.png" width="500" height="100">

<p>So the formula that found out the favorite color of ciongibongi is as such - =VLOOKUP(D18,D15:E18,2,FALSE)</p>

<p><strong>Sumif</strong> - is a nice function I guess but wont make an example, I am aware of it alright.</p>


<p><em>p.s. damn it takes a lot of time to write this html document in a proper way. I sometimes miss Word document, but sometimes I don't. Vim has it's own advantages, but I am new with it so I am a little bit slow. Learned how to yank, paste a word or a whole line today.</em></p>

</p>

<a href="data-week1-2.php">Back to Week 1-2</a><br><br>
<a href="index.php">Back to HomePage</a>

<?php
	include_once '../includes/footer.php';
?>>
