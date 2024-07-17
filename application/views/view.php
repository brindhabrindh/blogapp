<!DOCTYPE html>
<html>
<head>
    <title><?php echo $post->title; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>
    <h1><?php echo $post->title; ?></h1>
    <p><?php echo $post->content; ?></p>
    <a href="<?php echo site_url('blog'); ?>">Back to Home</a>
</body>
</html>
