  <!-- Sidebar -->
  <div id="sidebar">

<div class="inner">

  <!-- Search Box -->
  <section id="search" class="alt">
    <form method="get" action="#">
      <input type="text" name="search" id="search" placeholder="Search..." />
    </form>
  </section>
    
  <!-- Menu -->
  <nav id="menu">
    <ul>
      <li><a href="<?= base_url('admin/dashboard')?>">Beranda</a></li>
      <li><a href="simple_page.html">Simple Page</a></li>
      <li><a href="shortcodes.html">Shortcodes</a></li>
      <li>
        <span class="opener">Dropdown One</span>
        <ul>
          <li><a href="#">First Sub Menu</a></li>
          <li><a href="#">Second Sub Menu</a></li>
          <li><a href="#">Third Sub Menu</a></li>
        </ul>
      </li>
      <li>
        <span class="opener">Dropdown Two</span>
        <ul>
          <li><a href="#">Sub Menu #1</a></li>
          <li><a href="#">Sub Menu #2</a></li>
          <li><a href="#">Sub Menu #3</a></li>
        </ul>
      </li>
      <li><a href="https://www.google.com">External Link</a></li>
    </ul>
  </nav>

  <!-- Featured Posts -->
  <div class="featured-posts">
    <div class="heading">
      <h2>Featured Posts</h2>
    </div>
    <div class="owl-carousel owl-theme">
      <a href="#">
        <div class="featured-item">
          <img src="<?= base_url()?>assets/template_backend/assets/images/featured_post_01.jpg" alt="featured one">
          <p>Aliquam egestas convallis eros sed gravida. Curabitur consequat sit.</p>
        </div>
      </a>
      <a href="#">
        <div class="featured-item">
          <img src="<?= base_url()?>assets/template_backend/assets/images/featured_post_01.jpg" alt="featured two">
          <p>Donec a scelerisque massa. Aliquam non iaculis quam. Duis arcu turpis.</p>
        </div>
      </a>
      <a href="#">
        <div class="featured-item">
          <img src="<?= base_url()?>assets/template_backend/assets/images/featured_post_01.jpg" alt="featured three">
          <p>Suspendisse ac convallis urna, vitae luctus ante. Donec sit amet.</p>
        </div>
      </a>
    </div>
  </div>