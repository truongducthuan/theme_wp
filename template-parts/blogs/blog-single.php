<?php
// echo '<pre>';
// print_r($args);
// echo '</pre>';
?>

<style>
  #blogDetail p {
    padding: 30px 0;
  }

  #blogDetail .wp-block-list {
    list-style: none;
    padding-left: 0;
  }

  #blogDetail .wp-block-list li {
    position: relative;
    padding-left: 2em;
    margin-bottom: 0.5em;
  }

  #blogDetail .wp-block-list li::before {
    content: "";
    position: absolute;
    left: 0;
    top: 0.3em;
    width: 1.2em;
    height: 1.2em;
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
    background-color: #16a34a;
    border-radius: 50%;
    background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="28" fill="none" stroke="%23fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>');
  }

  #blogDetail .wp-block-embed iframe {
    width: 100%;
    min-height: 450px;
    border-radius: 1.5rem;
  }

  #blogDetail h2 {
    font-weight: 700;
    font-size: 2.25rem;
  }

  #blogDetail .wp-container-core-columns-is-layout-9d6595d7 {
    margin-top: 20px;
    border-top: 0.5px solid var(--secondary-color);
    border-bottom: 0.5px solid var(--secondary-color);
    padding: 40px 0;
  }

  #blogDetail .wp-container-core-columns-is-layout-9d6595d7 .wp-block-post-terms a {
    color: #6b7280;
    background: #f1f5f9;
    border-radius: 0.25rem;
    padding: 2px 8px;
    font-size: 14px;
    font-weight: 400;
    margin: 0 2px;
  }

  #blogDetail figure.wp-block-image img {
    width: 100%;
    border-radius: 1.5rem;
  }

  #blodDetail .wp-block-gallery {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
  }

  @media (max-width: 768px) {
    #blogDetail h2 {
      font-weight: 600;
      font-size: 2rem;
    }

    #blogDetail .wp-block-embed iframe {
      width: 100%;
      min-height: 350px;
      border-radius: 1.5rem;
    }
  }
</style>

<main id="blogDetail" class="max-w-7xl mx-auto bg-white px-4 sm:px-6 lg:px-8 py-8 lg:py-12">
  <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <!-- Content -->
    <div class="lg:col-span-2 text-slate-700">
      <div>
        <?php echo apply_filters('the_content', $post->post_content); ?>
      </div>
    </div>
    <!-- Sidebar -->
    <?php get_template_part('template-parts/blogs/blog-sidebar'); ?>
  </div>
</main>