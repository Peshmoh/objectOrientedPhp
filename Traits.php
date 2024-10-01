<?php
/*
    What I understand about traits is that they help us avoid writing the same code twice. 
    Instead of copying and pasting, we can create a trait and then use it in different classes.

    In this example, I made a Sharable trait that has a share method. 
    Both the Post and Video classes need to share things on social media, 
    so they use the Sharable trait instead of each having their own share method.

    This way, Post and Video can both share things without me writing the same code twice. 
    It’s like writing one set of instructions and using it wherever I need to.
*/

trait Sharable {
    public function share() {
        echo "Sharing on social media\n";
    }
}

class Post {
    use Sharable;
}

class Video {
    use Sharable;
}

$post = new Post();
$post->share();  // Output: Sharing on social media

$video = new Video();
$video->share();  // Output: Sharing on social media
?>
