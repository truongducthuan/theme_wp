<?php
/*
Template Name: News
*/
get_header();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args  = [
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 10,
    'paged'          => $paged,
    'category__in'  => [3, 4, 5],
];

$posts      = new WP_Query($args);
$categories = get_the_category();

?>

<style>
    @media (max-width: 768px) {
        .pagination__next {
            right: 20px !important;
        }

        .pagination__prev {
            left: 20px !important;
        }
    }
</style>

<section>
    <div class="relative">
        <div class="flex absolute left-0 top-0 flex-col mt-[100px] mb-[80px] w-[50%] max-lg:ml-0 max-lg:w-full">
            <img
                loading="lazy"
                src="<?php echo get_template_directory_uri() ?>/assets/svg/banner-left.svg"
                class="object-contain self-stretch my-auto mr-0 w-full aspect-[1.03] max-lg:mt-10 max-lg:max-w-full" />
        </div>

        <div class="max-w-[1200px] mx-auto px-5 lg:px-0 pt-32 lg:pt-60 z-10 relative">
            <div
                class="flex gap-3 items-center self-start text-base text-white mb-5 lg:mb-10">
                <div
                    class="flex shrink-0 self-stretch my-auto w-2.5 h-2.5 bg-red-600 rounded-full"></div>
                <div class="self-stretch my-auto">お知らせ</div>
            </div>
            <div class="flex flex-col lg:flex-row justify-between gap-4">
                <div class="flex flex-col items-start justify-start self-start gap-8 text-white py-1 rounded-xl">
                    <div class="font-bold text-5xl lg:text-[7.2rem] text-white">NEWS</div>
                </div>
                <div
                    class="relative js-show-list-cats list-cats--wrap flex gap-5 justify-between group self-end px-5 lg:px-5 py-2 lg:py-3.5 min-w-[100px] lg:min-w-[250px] max-w-full text-base text-black bg-white border border-black border-solid rounded-[100px] hover:cursor-pointer max-lg:mt-10 btn-arrow">
                    <div class="my-auto uppercase">すべて</div>
                    <div
                        class="_btn flex shrink-0 bg-blue-900 rounded-full h-[35px] group-hover:rotate-90 w-[35px] p-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/arrow-white.svg" alt="arrow" srcset="">
                    </div>
                    <div class="js-list-cats news--list-categories">
                        <ul class="_list pr-5">
                            <!-- <li><a href="/news">すべて</a></li> -->
                            <li><a href="/category/press-realease/">PRESS RELEASE</a></li>
                            <li><a href="/category/magazine/">MAGAZINE</a></li>
                            <li><a href="/category/media/">MEDIA</a></li>
                        </ul>
                    </div>
                    <?php /* if (!empty($categories)) : ?>
                    <ul>
                        <?php foreach ($categories as $category) : ?>
                        <li><a href="<?php echo get_term_link($category, 'category') ?>"><?php echo $category->name ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif */ ?>
                </div>
            </div>

            <div class="flex justify-end items-end gap-4 mt-10 lg:mt-20 mb-5 lg:mb-10 w-full text-white"><span>Top -</span>
                <p>お知らせ</p>
            </div>
        </div>


        <div class="max-w-[1200px] mx-auto px-5 lg:px-0 my-20 lg:my-32">
            <div class="flex flex-col max-w-full text-white">
                <?php
                $index = 0;
                while ($posts->have_posts()): $posts->the_post();

                    $category = get_the_category($post->ID);
                    if (! empty($category) && isset($category[0]->slug) && $category[0]->slug === 'uncategorized') {
                        continue;
                    }
                ?>
                    <div class="flex flex-col w-full max-lg:max-w-full news-link-bg-slice relative cursor-pointer overflow-hidden transition-all duration-300 ease-in-out">
                        <?php if ($index == 0): ?>
                            <div class="w-full border border-solid border-neutral-500 border-opacity-90 min-h-[1px] max-lg:max-w-full"></div>
                        <?php endif; ?>
                        <a
                            href="<?php the_permalink(); ?> "
                            class="flex justify-between items-center self-center my-2 lg:my-7 px-5 lg:px-16 w-full z-10 group">
                            <div class="flex items-center justify-between gap-2 lg:gap-10 w-full">
                                <div
                                    class="flex flex-col self-stretch pr-1.5 pb-3.5 my-auto rounded-none w-[60px]">
                                    <div class="text-base leading-7"><?php echo get_the_date('Y.m'); ?></div>
                                    <div
                                        class="self-start mt-2.5 text-5xl leading-3 max-lg:text-4xl">
                                        <?php echo get_the_date('d'); ?>
                                    </div>
                                </div>
                                <div class="self-stretch my-auto text-xs text-zinc-400 uppercase">
                                    <?php echo $category[0]->name; ?>
                                </div>
                                <div class="self-stretch max-w-[500px] my-auto text-lg max-lg:max-w-full create-3dots text-ellipsis">
                                    <?php echo the_title(); ?>
                                </div>
                            </div>
                            <div
                                class="hidden lg:flex ml-[100px] shrink-0 bg-blue-900 rounded-full h-[35px] w-[35px] p-2">
                                <img class="group-hover:rotate-180 transition-all" src="<?php echo get_template_directory_uri(); ?>/assets/svg/arrow-white.svg" alt="arrow" srcset="">
                            </div>
                        </a>
                        <div
                            class="w-full border border-solid border-neutral-500 border-opacity-90 min-h-[1px] max-lg:max-w-full"></div>
                    </div>
                <?php
                    $index++;
                endwhile;
                ?>
            </div>
        </div>
        <?php $total_pages = $posts->max_num_pages;

        if ($total_pages > 1) {

            $current_page = max(1, get_query_var('paged'));
            $big          = 999999;
        ?>
            <div class="pagination clearfix" role="navigation">
                <nav class="page-nav px-5 lg:px-0">
                    <?php
                    echo paginate_links([
                        'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format'    => '?paged=%#%',
                        'type'      => 'list',
                        'current'   => $current_page,
                        'total'     => $total_pages,
                        'prev_text' => '<div class="flex gap-4 items-center text-white text-sm"><img class="rotate-180" src="' . get_template_directory_uri() . '/assets/svg/arrow-white.svg">PREV</div>',
                        'next_text' => '<div class="flex gap-4 items-center text-white text-sm">NEXT<img  src="' . get_template_directory_uri() . '/assets/svg/arrow-white.svg"></div>',
                    ]);
                    ?>
                </nav>
            </div>
        <?php
        }
        wp_reset_postdata();
        ?>

</section>
<?php
get_footer();
?>

<script>
    (function($) {

        $('ul.page-numbers li a').each(function() {
            var $this = $(this);
            if ($this.hasClass('prev')) {
                $this.removeClass('page-numbers');
                $this.addClass('pagination__prev');
            }
            if ($this.hasClass('next')) {
                $this.removeClass('page-numbers')
                $this.addClass('pagination__next');
            };
        });

    }(jQuery));
</script>