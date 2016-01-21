<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <?php include 'head.php';?>
    </head>

    <body>

    <div id="console-large">

        <div class="overlay"></div>

        <ul class="share-buttons">
            <li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Frlabarcon.github.io&t=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;"><img src="./img/simple_icons/Facebook.png"></a></li>
            <li><a href="https://twitter.com/intent/tweet?source=http%3A%2F%2Frlabarcon.github.io&text=:%20http%3A%2F%2Frlabarcon.github.io&via=theravenstorm" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL)); return false;"><img src="./img/simple_icons/Twitter.png"></a></li>
            <li><a href="http://www.tumblr.com/share?v=3&u=http%3A%2F%2Frlabarcon.github.io&t=&s=" target="_blank" title="Post to Tumblr" onclick="window.open('http://www.tumblr.com/share?v=3&u=' + encodeURIComponent(document.URL) + '&t=' +  encodeURIComponent(document.title)); return false;"><img src="./img/simple_icons/Tumblr.png"></a></li>
            <li><a href="https://getpocket.com/save?url=http%3A%2F%2Frlabarcon.github.io&title=" target="_blank" title="Add to Pocket" onclick="window.open('https://getpocket.com/save?url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;"><img src="./img/simple_icons/Pocket.png"></a></li>
            <li><a href="http://www.reddit.com/submit?url=http%3A%2F%2Frlabarcon.github.io&title=" target="_blank" title="Submit to Reddit" onclick="window.open('http://www.reddit.com/submit?url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;"><img src="./img/simple_icons/Reddit.png"></a></li>
            <li><a href="http://wordpress.com/press-this.php?u=http%3A%2F%2Frlabarcon.github.io&t=&s=" target="_blank" title="Publish on WordPress" onclick="window.open('http://wordpress.com/press-this.php?u=' + encodeURIComponent(document.URL) + '&t=' +  encodeURIComponent(document.title)); return false;"><img src="./img/simple_icons/Wordpress.png"></a></li>
            <li><a href="mailto:?subject=&body=:%20http%3A%2F%2Frlabarcon.github.io" target="_blank" title="Email" onclick="window.open('mailto:?subject=' + encodeURIComponent(document.title) + '&body=' +  encodeURIComponent(document.URL)); return false;"><img src="./img/simple_icons/Email.png"></a></li>
        </ul>

        <div id="title" style="display: none;">
            <h1 class="white">The<br />Wanderer</h1>
            <p class="white subheader">Searching for meaning since 1996</p>
            <p class="white">9 JAN 2016</p>
            <ul class="nav-links">
                <li><a href="index.html">Latest</a></li>
                <li><a href="catalog.html">Catalog</a></li>
                <br>
                <li><a href="about.html">About</a></li>
            </ul>
        </div>

        <div id="logo" class="default">
            <img src="./img/logo.png" />
            
            <ul class="nav-links">
                <li><a href="index.html">Latest</a></li>
                <li><a href="catalog.html">Catalog</a></li>
                <hr>
                <li><a href="about.html">About</a></li>
            </ul>

        </div>

        <div class="left arrow console-arrow">
            <img src="./img/arrows.png" alt="arrow" class="clip left-inactive" />
        </div>

        <div class="right arrow console-arrow">
            <img src="./img/arrows.png" alt="arrow" class="clip right-inactive" />
        </div>

      
    </div>

    <div id="content-large">

        <div class="picture title white">

            <div class="left arrow content-arrow">
                <img src="./img/arrows.png" alt="arrow" class="clip left-inactive" />
            </div>

            <div class="right arrow content-arrow">
                <img src="./img/arrows.png" alt="arrow" class="clip right-inactive" />
            </div>

            <h1 class="header">The<br />Wanderer</h1>
            <p class="subheader">Searching for meaning since 1996</p>

        </div>

        <div class="body">
        <p>13 Jan 2016</p>
        <p>About a week ago, I wanted a blog.

        I considered my options. I could get a Wordpress, a tumblr, a Blogger, or I could build my own. 

        Wordpress was the most attractive option. It's got a solid infrastructure, a huge userbase, and is commonly used by small businesses to get the word out about thier service or product. However, as an ever-eager coder-in-training, I couldn't resist the allure of the project. 

        It's a project. Enough said.

        It could be an interesting experience to build my own blogging platform. No one touches my data, I'd have complete control over the look and feel of the site, and additionally have the convenience of instant editing and automatic page generation. 

        Additionally, I could use the "engine" of the platform to serve as the skeleton code of a collective blog I'm also working on at the moment. 

        I could have everything just the way I'd like it, and I would have something to show for my ongoing efforts to learn this magical craft.

        It's a win any way I look at it.

        I think a PHP-powered site is what I'll build. I don't know PHP all that well, but I think that's what I'll do. What I've seen of it suggests that I can make my site very modular, in a sense. I can link files to other files, include code within code within code. I can edit a single file and it'll change the look or behavior of that element everywhere on the site, which would be incredibly convenient for me.

        SQL seems like a good way to store posts. It uses things that look like structs from C--a series of variables assigned to a certain object--and stores them in a table.

        Thanks to Harvard's CS50x course, I have a reasonable familiarity with these languages. Not only does the project sound like a lot of fun, but it also <i>might</i> count as a final project.

        In these following days, until the project is finished, you have this.

        Welcome to my corner of the webspace.

        The secondary point of this project is to actually blog. Sharing thoughts with the aether is something I want to start doing. It seems like a good way to develop my ideas into content worth consuming, and I could do with getting back into writing. 

        Any and all of my consumership is encouraged to get in contact with me to share their thoughts. Want to start a dialogue about something? <a href="about.html">Let's talk.</a><
        </p>

        </div>
    </div>

    </body>

      
    
    </div> <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type='text/javascript' src='js/main.js'></script>
    <script src="js/bootstrap.min.js"></script>        

       
    </body>
</html>
