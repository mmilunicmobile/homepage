<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Calculator Love</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h1>
            This is my (dodgy) homepage!
        </h1>
        <p>
            Who am I? Beats me. I kinda just like making stuff and was too lazy to set up Hugo
            so I made my webpage this way. You could check out some of the articles I've written. 
            The voices say they're pretty good. Also, all my websites are now under one domain and
            linked in one spot. Now you won't need to go testing links for hours to see if a site 
            is running!
        </p>
        <h3>
            Cool articles I've written:
        </h3>
        <ul>
            <?php
                $xml = simplexml_load_file(__DIR__ . "/../articles.xml");
                foreach ($xml->article as $article) {           
                    echo "<li><a href=\"article.php?article=" . $article->docname ."\">" . $article->name . "</a></li>";
                }
            ?>
        </ul>
        <h3>
            Websites I've made:
        </h3>
        <ul>
            <li>temporary lack of stuff</li>
        </ul>
        <h3>
            Cooler websites I haven't made:
        </h3>
        <ul>
            <li><a href="https://www.falstad.com/">falstad.com</a></li>
            <li><a href="http://www.gregory-bard.com/">gregory-bard.com</a></li>
        </ul>
        <p>
            This is an afternote, but this website was heavily inspired by the lack of a framework 
            on older sites. I hope to maintain a very simplistic and minimalist look on this website 
            at least just because I like how it looks.
    </body>
</html>
