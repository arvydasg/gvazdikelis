
<?php

	$pageTitle = "Confused Internet Linux";
	include_once '../includes/header.php';

?>
    
<p>2021 - 06 -03 08:22</p>

<h2>Modifying Php</h2>

<p>Since I MUST know what is underneath the hood when learning something new, the time has come to see under the Wordpress hood. There is lots of linked php files, lots of functions, variables and so on. I want to understand how they relate to each other and how to modify the files to my liking. Yesterday after doing a little bit of digging I have managed to change for some reason not transated woocommerce checkout field text, hopefully today I will manage to find how to translate the "view card" button. Then my site will be fully translated to Lithuanian </p>

<p>Yep, to get a better idea of whats happening I will watch a video "How to customize WooCommerce with PHP snippets". No internet, so I will have to focus on it alone. Let's go.</p>


<p>
<ul>
<li>Create a child theme.</li>
<li>Don't edit your theme and your WC plugin files. Next time a theme or plugin  update comes in - it will wipe all your updates. </li>
<li>Don't use WP editor, use FTP. If you forget a comma or smth, the site will break and its hard to recover. Use FTP. Create BACKUPS of the files you're currently modifying.</li>
<li>Don't verride tempates. take advantage of do_action. That's the beauty of php.</li>
</ul>


<p>Okay so nice, you can add a snippet of code to your funtions.php (which resides in the child theme, right? A function for example to see the "UNITS SOLD" of an item, or better yet, think of something your really need, you can add. ALL the information about he products is already sitting in the database. The fields in the DB are already created by the WooCommerce guys. What I am doing as a developer is just taking the information and displaying to the screen. Cool man...</p>


<p>Nice, so there is a single.php, header.php, footer.php, products.php and so on... if you make an update to one, the changes will appear to the all of the single pages for exmple. And there just soo many files that can be to modify... not many, relly. So you will always find a way to customize something you want. </p>
<p>What, where in the page, on witch page. </p>
<p>Instead of copying the old template and changing the php or the html, you can simply HOOK your own function from your functions.php file without having to change anything in WC template? </p>
<p>actions - add, filters - modify existing content. </p>
<p>ALL the possible hooks you can add on specific pages. Check it out. Super helpful, was expecting something like this. </p>
<p>Priority 1 - above the title, priority - 6, under the title. </p>
<p>So everything is happening in your functions.php. You can add_action, remove_action (then copy the whole line with priorities and stuff you want to remove). Wow, this is exactly what I wanted. </p>


<h2>Second tutorial</h2>


<p>Name of it - Wordpress produtct catalog - how to create a custom wordpress catalogue. </p>

<p>What is sas? Compiling css code to style.css file? huh? </p>
<p>Dude using bootstartp, it does all the styling for him when he sets classes to items? Interesting. </p>
<p>Loading js into his theme... throught functions.php </p>
<p>33:34 he is using some bootstarp I will assume again? Changing class of the item with "mb-4" which means margin-bottom=4; and it magically, somehow changes the css of the file. </p>
<br>
<p>These both, especially the last tutorial was amazing... I learned so much, just need to practice. Jquery, bootstrap, catalogs, creating custom stuff with php. The guy is so confided wiht every action of his. Should look him up and watch some more tutorials. This is exactly how I felt when I was doing the Revit stuff. And why I was so confident? Because I spend a lot of time on it and was breaking a lot of stuff!!! Yes my brother, break stuff. </p>

<p>Time to get dressed and go to the library fetch some internet, learn some js finally with Steph. </p>

<p>15:51</p>

<p>So far no js, because I have been optimizing the client's websites SEO (for the first time, learned a lot), then now I found some php files that will allow me to edit the damn checkout page and some words that did not get translated to Lithuanian, I will manually edit the theme files of woocommerce plugin throught FTP, then update the woocomerce theme(yes! an update just in time for my testing purposes) and see if the changes remained or not.</p>


<?php
	include_once '../includes/footer.php';
?>
