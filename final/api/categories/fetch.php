<?php

  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/categories.php');
  
  $categories = getAllCategories();
  echo json_encode($categories);