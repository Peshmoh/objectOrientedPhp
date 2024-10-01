<?php
/*
    A trait helps to share code between different classes.
    This example shows how both Post and Video classes can use the share method 
    from the Sharable trait without repeating the code in both classes.
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
