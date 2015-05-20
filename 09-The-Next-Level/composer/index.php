<?php 

require_once 'vendor/php-activerecord/php-activerecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function( $cfg ) {
    $cfg->set_model_directory('models');
    $cfg->set_connections(array(
        'development' => 'mysql://tutsplus:ZML4wCmU@localhost/tutsplus_blog'
    ));
});

/*
Post::create(array(
    'title' => 'Isn\'t ActiveRecord great?',
    'body' => 'Yes it is'
));
*/

$post = Post::find(10);
$post->title = 'Updated the row. Very cool!';
$post->save();

$post = Post::find_by_title('PHP course');

$posts = Post::all();

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        .body {
            font-size: 11px;
        }
    </style>
</head>
<body>
    <h2>Blog Posts</h2>

    <?php foreach ($posts as $p) : ?>
        <article>
            <h4><?= $p->title; ?></h4>
            <div class="body"><?= $p->body; ?></div>
        </article>    
    <?php endforeach; ?>

</body>
</html>