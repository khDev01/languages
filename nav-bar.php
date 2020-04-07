<nav class="nav">
  <?php
    // Define each name associated with an URL
    $urls = array(
      'home' => '/',
      'html' => '/html.php',
      'css' => '/css.php',
      'JavaScript' => '/js.php',
      'PHP' => '/php.php',
      'mySQL' => '/mysql.php',
      'python' => '/python.php',
      'home' => '/',
    );

    foreach ($urls as $name => $url) {
      print '<a '.(($currentPage === $name) ? ' class="active" ': '').' href="'.$url.'">'.$name.'</a>';
    }

  ?>
</nav>
