<?php $title = 'lang php'; ?>
<?php $metaTags = 'tag1 tag2'; ?>
<?php $currentPage = 'php'; ?>
<?php include('head.php'); ?>
<body>
<?php include('nav-bar.php'); ?>

<main class="mcontainer">

  <div class="card">
  <div class="container">
    <h2>Example php</h2>
    <p>index.php</p>
    <pre><code><span class="php">&lt;?php</span> <span class="var">$title</span> = 'Home'; <span class="php">?&gt;</span>
<span class="php">&lt;?php</span> <span class="var">$metaTags</span> = 'tag1 tag2'; <span class="php">?&gt;</span>
<span class="php">&lt;?php</span> <span class="var">$currentPage</span> = 'index'; <span class="php">?&gt;</span>
<span class="php">&lt;?php</span> include('head.php'); <span class="php">?&gt;</span>
&lt;body&gt;
<span class="php">&lt;?php</span> include('nav-bar.php'); <span class="php">?&gt;</span>

<span class="php">&lt;?php</span> include('footer.php'); <span class="php">?&gt;</span></code></pre>

    <p>head.php</p>
    <pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;&lt;?php echo($title); ?&gt;&lt;/title&gt;
&lt;meta name&quot;description&quot; &quot;&lt;?php echo($metaTags); ?&gt;&quot;&gt;&lt;!-- note that this code is wrong --&gt;
&lt;link href=&quot;#&quot;&gt;
&lt;/head&gt;</code></pre>

    <p>nav.php</p>
    <pre><code><span class="tag">&lt;header</span> class=&quot;navbar navbar-default navbar-static-top&quot;<span class="tag">&gt;</span>
&lt;div class=&quot;container-fluid&quot;&gt;
  &lt;div class=&quot;navbar-header&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;navbar-brand&quot;&gt;&lt;/a&gt;
    &lt;button type=&quot;button&quot; class=&quot;navbar-toggle&quot; data-toggle=&quot;collapse&quot; data-target=&quot;.navbar-collapse&quot;&gt;&lt;i class=&quot;fa fa-bars&quot;&gt;&lt;/i&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;navbar-collapse collapse&quot;&gt;
    &lt;ul class=&quot;nav navbar-nav navbar-right&quot;&gt;
    <span class="php">&lt;?php</span>
      // Define each name associated with an URL
      $urls = array(
        'Home' =&gt; '/',
        'Page 1' =&gt; '/page1',
      // &hellip;
      );

      foreach ($urls as $name =&gt; $url) {
        print '&lt;li '.(($currentPage === $name) ? ' class=&quot;active&quot; ': '').
          '&gt;&lt;a href=&quot;'.$url.'&quot;&gt;'.$name.'&lt;/a&gt;&lt;/li&gt;';
      }
    <span class="php">?&gt;</span>
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/header&gt;</code></pre>

    <p>or for nav with a and no ul an li</p>
    <pre><code>&lt;?php
// Define each name associated with an URL
$urls = array(
'back' =&gt; '/',
'home' =&gt; '/php/home',
// &hellip;
);

foreach ($urls as $name =&gt; $url) {
print '&lt;a '.(($currentPage === $name) ? ' class=&quot;active&quot; ': '').' href=&quot;'.$url.'&quot;&gt;'.$name.'&lt;/a&gt;&lt;/li&gt;';
}
?&gt;</code></pre>


    <p>footer.php</p>
    <pre><code>&lt;footer&gt;
&lt;ul&gt;
  &lt;a href=&quot;#&quot;&gt;&lt;li&gt;Home&lt;/li&gt;&lt;/a&gt;
  &lt;a href=&quot;#&quot;&gt;&lt;li&gt;Page 1&lt;/li&gt;&lt;/a&gt;
  &lt;a href=&quot;#&quot;&gt;&lt;li&gt;Page 2&lt;/li&gt;&lt;/a&gt;
&lt;/ul&gt;
&lt;/footer&gt;
&lt;script src=&quot;#&quot;&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>


  </div>
</div>

</main>
