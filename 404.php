<?php get_header(); ?>
<div class="flex mt-[100px] md:mt-0 flex-col justify-center items-center mx-auto">
  <img class="max-w-full md:max-w-[50%]" src="<?php echo get_template_directory_uri(); ?>/asset/images/not-found.png" alt="not found" >
  <div>申し訳ありませんが、お探しのページは見つかりませんでした</div>
</div>

<script>

$(document).ready(function() {

// scroll top
$('#scroll_top').click(function (e) {
  e.preventDefault();
  $('html, body').animate({ scrollTop: 0 }, 'slow');
    $('#navbar').addClass('hidden')
})

$('#scroll-news').click((e) => {
  e.preventDefault();
  window.location.href = getHomepageLink()
})

$('#scroll-class').click((e) => {
  e.preventDefault();
  window.location.href = getHomepageLink()
})

$('#scroll-schedule').click((e) => {
  e.preventDefault();
  window.location.href = getHomepageLink()
})

$('#scroll-faq').click((e) => {
  e.preventDefault();
  window.location.href = getHomepageLink()
})

$('#scroll-access').click((e) => {
  e.preventDefault();
  window.location.href = getHomepageLink()
})
})

function getHomepageLink() {
    // Get the current location
    const protocol = window.location.protocol;
    const hostname = window.location.hostname;
    const port = window.location.port ? `:${window.location.port}` : ''; 

    // Construct the homepage URL
    const homepageLink = `${protocol}//${hostname}${port}/`;

    return homepageLink;
}

</script>