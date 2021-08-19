<?php

	include_once '../includes/header.php';

?>
      

<h1>Emmet Vim 200 IQ</h1>

<p>2021-03-16 08:54</p>

<p>Okay so <a href="https://www.youtube.com/watch?v=ha7oyvhgP04&l" target='_blank'>this guy</a> just showed me how to use my third pluging. Emmet Vim. How much time it will save me is insane. </p>

<a href="https://github.com/mattn/emmet-vim" target='_blank'>Github Repository</a><br><br>

<img src="/images/emmetvim.png" width="800" height="500" >

<p>Even thouhg I know only 5% of html and I am using only 5% of this plugin's capabilities, it still feels like I am 100% faster writing html code comparing to how I was writing one hour ago. I am flying!</p>
<p>Vajetau, there is even a <a href="https://docs.emmet.io/cheat-sheet/" target='_blank'>cheat sheet</a>.</p>

<h3>Little update</h3>

<p>2021-03-23 12:01</p>




<p>It so happened that I had to reinstall my ubuntu and of course emmet plugin was wiped.</p>

<p>Right now I am trying to install it once again and I find that I don't really remember how to do it. Because I was just simply following the commands, no brain computing required.</p>

<h4>Installation</h4>

<p>So first of all, apparently I need a plugin manager.</p>

<ol>
    <li>Open vim, type <strong>:echo $VIMRUNTIME</strong> Now you see where your vim folder is. Mine is at /usr/share/vim/vim81</li>
    <li>Skip the step above, let's "cd" and create our .vimrc <file></file>
<strong>"vim .vimrc"</strong> </li>
    <li>Add the folowing modifications inside of it. Unrelated to emmet, but to just to get going.</li>

            <img src="/images/vimrcbasic.png" alt="">

            <li>Go to terminal, type in <strong>"sudo apt install curl"</strong>  </li>

    <li><p>This is the video that explains how to <a href="https://www.youtube.com/watch?v=JVpxDuxe1eY" target='_blank'>set up Vundle and fresh .vimrc</a>. </p></li>


            <img src="/images/copyvundle.png" alt="">



            <li><strong>curl -v -o ~/.vim/bundle/.vundle/script-names.vim-scripts.org.json https://raw.githubusercontent.com/i-cooltea/resource/master/vim-api_scripts.json</strong>  (FROM YOUTUBE COMMENTS, to make the PluginSearch fucntion work. Nice, it really does work now. Whenever I want, I can choose and install some plugins.)</li>


    <li>Add the things from vundle github</li>
    
<li><p>Download the <a href="https://www.vim.org/scripts/script.php?script_id=2981" target='_blank'>zip file</a> at the bottom of the page, newest version. </p></li>
<li><strong>cd ~/.vim</strong> </li>
<li><strong>Unzip</strong>  the file you just downloaded emmet -vim.zip inside of it</li>
<li>open .vimrc and add this line to your .vimrc file <strong>Plugin 'mattn/emmet-vim'</strong>
</li>
<li>Open vim</li>
<li>Type <strong>:PluginList</strong>  - should be able to see the emmet pluging in there</li>
<li>Type <strong>:PluginInstall</strong>  - watch the + appear next to the emmet pluggin.</li>
<li>Close and open vim</li>
<li>Type <strong>html:5</strong>, press esc and press <strong> ctrl+y+,</strong> , and it should work! Did it? Did it get autocompleted? Hope it did, cuz it did for me.</li>
    <li>Ctrl+y+, is kind of uncomfy to press as a shortcut, so <a href="https://www.youtube.com/watch?v=ha7oyvhgP04&t=1s" target='_blank'>THIS guy</a> shows how to change the bindings at 6:20. Edit your .vimrc and add the following lines. </li>


            <img src="/images/emmetshortcuts.png" alt="">

</ol>

<h4>That's it</h4>

<p>After every reinstall I am spending hours trying to get the previous state of my linux distro in the current one. I am re-watching tutorials, re-doing the steps etc, takes time. </p>


<p>Thought why not to make my own little tutorial for myself to understand better what I am actually doing, what I am editing, what I am installing and to also remember the steps for the future when I am sitting and staring into the screen after a fresh linux install. </p>

<p>I will try make some sort of post like this for the future linux stuff modifications that I make on my machine</p>

<blockquote>2021-03-24 Just note to self. Add this and that. To know which document you are on while in vim, it is helpful to add "set laststatus=2" and "set statusline=%F". </blockquote>

<a href="vim.php">Back to Vim</a><br><br>

<a href="index.php">Back to HomePage</a><br><br>

<?php

	include_once '../includes/footer.php';

?>
    