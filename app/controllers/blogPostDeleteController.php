<?php

require 'app/persistences/blogPostData.php';



blogPostDelete($pdo,$_GET['id']);


header("location: ?blogpost ");

