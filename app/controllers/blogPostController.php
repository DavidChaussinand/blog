<?php

require 'app/persistences/blogPostData.php';

$article = blogPostById($pdo , $_GET['id']);
$comments = commentsByBlogPost($pdo,$_GET['id']);



include 'ressources/views/blogPost.tpl.php';

