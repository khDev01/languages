<nav class="nav">
  <?php
    // Define each name associated with an URL
    $urls = array(
      'home' => '/',
      'html' => '/html',
    // …
    );

    foreach ($urls as $name => $url) {
      print '<a '.(($currentPage === $name) ? ' class="active" ': '').' href="'.$url.'">'.$name.'</a></li>';
    }
  ?>
</nav>
