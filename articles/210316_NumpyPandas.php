<?php

	include_once '../includes/header.php';

?>

	<h1>NumPy and Pandas</h1>

<img src="/images/panda.jpeg" width="500" height="333">


<p>2021-03-16</p>


<p> First intro to this - <a href="https://www.youtube.com/watch?v=zD9yY-1wRUk" target="_blank">Neeraj Sharma</a>. Not so great, but have to start somewhere. Let me watch one more.</p>

<p><strong> NumPy</strong> - <a href="https://www.youtube.com/watch?v=xECXZ3tyONo" target="_blank">this video</a>. Good explanation, got an idea of what Numpy is capable of, but come on man, be yourself...</p>

<p><strong> Pandas </strong>- <a href="https://www.youtube.com/watch?v=dcqPhpY7tWk" target="_blank">this video</a>. Good explanation, but again, man, be yourself...</p>

<p>As of writing this - 2021-03-16 05:48 I have no idea about NumPy, Pandas and what they are. I keep hearing about them everywhere, but I dont know about them. Lets black
<a href="blackboxmethod.html">Black Box</a> these two things</p>
<h2>NumPy</h2>
<p><strong>NumPy</strong> - short for numerical python. If we want to do any array based or matrix based calculation and data analysis, then it is better to use numpy. So basically for all the tasks? Okay."You can do very complex calculations easily with numpy". If you want to multiple or add two or more arrays, you need not to run any loop. Using numpy you can just multiply or add them like any other scalar entity... c = a + b. Whatever it means, but okay.</p>

	<img src="/images/arraynoloop.png" width="500" height="333">

	<p>Similarly you can perform any element wise operations easily without using any loop with the help of numpy. Numpy is best suited for working wiht homogeneous i.e. the same kind of data.</p>


	<img src="/images/numpyexample.png" width="500" height="333">

	<p>So cool. Pictures are just lots of numbers. Lots of numbers - data. Lots of numbesr - can be arranged and played wiht. Pic below is slicing up a photo, cool.</p>
	<img src="/images/numpypic.png" width="500" height="333">
	<p>Some stats fonctions that are possible to perfrom in numpy.</p>
	<img src="/images/numpystats.png" width="200" height="300">



	<h2>Pandas</h2>
	<p><strong>Pandas</strong> - "Python for data analysis". It is the most popular tool for data cleaning and analysis. It can do "the things" very fast and easy. Works with data frames and series. Pandas is best suited for working wiht tabular or heterogeneous i.e. different kind of data.</p> 

	<img src="/images/pandasexample.png" width="500" height="333">
	
	<p>if you know pandas you will certainly not want to get back to excel. Hmm.</p>
	<p>With pandas you can:</p>
 <ul>
  <li>Load</li>
  <li>Prepare</li>
  <li>Model</li>
  <li>Analyze</li>
  <li>Merge</li>
  <li>Reshape</li>
  <li>Take data from different databases, put it together and analyze it.</li>
  <li>Do pretty much anything you want to with data</li>
</ul>

<p>Quite cool, describe function.</p>


	<img src="/images/pandasdescribe.png" width="700" height="333">

	<p>So interesting. So you can cut at filter and shape the data the way you want to and it will show you what you ask. For example, in the image below it is visible, that during the Titanic tragedy, the famales from class-1 had 0.96 - <strong>96%</strong> chance of surviving. Male, in class-3, had 0.15 - <strong>15%</strong> chance of surviving.</p>


	<img src="/images/pandassurvive.png" width="700" height="333">

	<p>I already see myself working with intersting data and getting just as interesting insights about the world.</p>

	<p>Look, one more...</p>


	<img src="/images/pandasage.png" width="700" height="333">


	<p>In the image above you can see males and females from classes - 1,2,3 under the age of 18 that have survived. Like they said in the Titanic movie, right, women and children first. Looking at the data, male childen from class-3, again, were't as lucky (23%) survived as class-2 females with 100% survival rate.</p>

	<p>Won't add more images, but at the end of the video the guy shows how he manipulates Microsoft and Apple <strong>stock</strong> prices. Nice and easy. Okay, just one more, for myself to remember what it was about.</p>

	<img src="/images/pandsstock.png" width="500" height="233">

	<h2>end</h2>
	<p>So that's it. I've black boxed these two topics. Can't believe I am going away from them, but I guesss this is how I do it now. Let's hop to the next topic. Machine learning</p>
<p>Arvydas</p>



<a href="data-week1-2.html">Back to Week 1-2</a><br><br>
<a href="../index.html">Back to HomePage</a>

<?php
	include_once '../includes/footer.php';
?>