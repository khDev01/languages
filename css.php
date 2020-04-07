<?php $title = 'Home'; ?>
<?php $metaTags = 'tag1 tag2'; ?>
<?php $currentPage = 'home'; ?>
<?php include('head.php'); ?>
<body>
<?php include('nav-bar.php'); ?>

<nav class="nav">
  <a href="index.html" class=""> Home</a>
  <a href="html.html" class="">HTML</a>

    <div class="drp-hover ">
      <a href="css.html" class="active btn-hover ">CSS</a>
      <div class="drp-hover-content ">
        <a href="langcss/buttons.html">Buttons</a>
        <a href="langcss/flexbox.html">Flexbox</a>
        <a href="langcss/grid.html">grid</a>
      </div>
    </div>

  <a href="js.html" class="">JavaScript</a>
  <a href="php.html" class="">PHP</a>
  <a href="mysql.html" class="">MySQL</a>
</nav>


<main class="mcontainer">



  <div class="card">
    <div class="container">
      <h1>selecors</h1>
      <ul class="lists">
        <li>Type/element</li>
        <li>class</li>
        <li>ID</li>
        <li>Attribute</li>
        <li>Universal</li>
      </ul>

      <h1>Specificity</h1>
      <p>Specificity orderd:</p>
      <ol class="lists">
        <li>inline style <p><code>&lt;h1 style=&quot;color: #fff&quot;&gt;</code></p></li>
        <li>
          ID <p><code>#id</code></p>

        </li>
        <li>
          Class <p><code>.class {}</code></p>
          attributes <p><code>[type="radio"] {}</code></p>
          pseudo classes <p><code>:hover {}</code></p>
        </li>

        <li>
          Type <p><code>h1 {}</code></p>
          Pseudo elemenets<p><code>::before {}</code></p>
        </li>
      </ol>
    </div>
  </div>








  <!-- <div class="card">
    <div class="container">
      <img class="window">

    </div>
  </div> -->

</main>

<?php include('footer.php'); ?>
