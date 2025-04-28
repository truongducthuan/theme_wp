<?php 
get_header();
?>
        <div class="slide-wrap">
            <div class="slide">
                <?php 
                $banners = get_field('banners');
                ?>
                <ul class="slideshow">
                    <?php 
                    if(!empty($banners)):
                        foreach($banners as $banner):
                    ?>
                        <li class="item_slider">
                        <span style='background-image: url("<?php echo $banner['image']; ?>)'></span>
                        </li>
                    <?php 
                        endforeach;
                    endif;
                    ?>
                </ul>
            </div>
        </div>
        <article class="row">
            <section class="section">
                <div class="outer">
                    <div class="wrap" id="a1">
                        <?php 
                        $title = get_field('title');
                        if(!empty($title)){
                            echo $title;
                        }

                        $boxes = get_field('boxes');
                        $index = 0;
                        if(!empty($boxes)):
                            foreach($boxes as $box):
                                $index++;
                        ?>
                        <section class="wrap mb-5-2 pb-3-2 <?php echo $index % 2 == 0 ? '' : 'pt-3-2' ?>">
                            <div class="columns is-variable is-5-desktop is-3-tablet is-mobile is-multiline <?php echo $index % 2 == 0 ? '' : 'reverse-row-order' ?>">
                                <div class="column is-12-mobile is-6-tablet is-5-desktop">
                                    <figure class="radius">
                                        <a href="<?php echo $box['link']; ?>">
					                        <img class="fade-in" src="<?php echo $box['image']; ?>" alt="<?php echo $box['title']; ?>">
					                    </a>
                                    </figure>
                                </div>
                                <div class="column is-12-mobile is-6-tablet is-6-desktop">
                                    <p class="midashi-sss tt_b1"><?php echo $box['title']; ?></p>
                                    <?php 
                                    if(is_array($box['subtitle'])) {
                                        foreach($box['subtitle'] as $sub) {
                                            echo '<h3 class="midashi-s left-center">'.$sub['text'].'<br></h3>';
                                        }
                                    }
                                    if(is_array($box['topics'])) {
                                        foreach($box['topics'] as $topic) {
                                            echo '<p>'.$topic['text'].'</p>';
                                        }
                                    }
                                    ?>
                                    <?php echo $box['description']; ?>
                                    <a href="<?php echo $box['link']; ?>" style="margin-top: 25px;" class="arrow-btn2 thin radius shadow fade-in" id="top_service">サイトへ</a>
                                    </p>
                                </div>
                            </div>
                        </section>
                        <?php
                            endforeach;
                        endif;
                        ?>
                        <section class="wrap mb-5-2 pb-3-2 ">
                            <div class="columns is-variable is-5-desktop is-3-tablet is-mobile  is-multiline">
                                <div class="column is-12-mobile is-6-tablet is-5-desktop">
                                    <figure class="radius">
                                        <a href="https://simvangjp.com/">
					  <img class="fade-in" src="<?php echo get_site_url() ?>/wp-content/uploads/2025/04/Pink-White-Illustrated-Travel-To-Japan-Banner-Landscape-2.png" alt="レジアウトソーシングとは">
					</a>
                                    </figure>
                                </div>
                                <div class="column is-12-mobile is-6-tablet is-6-desktop">
                                    <p class="midashi-sss tt_b1">電気通信サービス</p>
                                    <h3 class="midashi-s left-center">SIMカード、通信機器の販売 <br></h3>
                                    <p>
                                        ・SIMカード販売<br> ・通信機器の販売
                                        <br> ・インターネット回線
                                        <br> などを掲載中です！
                                        <br>
                                    </p> <a href="https://simvangjp.com/" style="margin-top: 25px;" class="arrow-btn2 thin radius shadow fade-in" id="top_service">サイトへ</a>
                                    </p>
                                </div>
                            </div>
                        </section>
                        <section class="wrap mb-5-2 pb-3-2 pt-3-2">
                            <div class="columns is-variable is-5-desktop is-3-tablet is-mobile reverse-row-order is-multiline">
                                <div class="column is-12-mobile is-6-tablet is-5-desktop">
                                    <figure class="radius">
                                        <a href="https://duhocthanhgiang.com.vn/">
					  <img class="fade-in" src="<?php echo get_site_url() ?>/wp-content/uploads/2025/04/Pink-White-Illustrated-Travel-To-Japan-Banner-Landscape.png" alt="レジアウトソーシングとは">
					</a>
                                    </figure>
                                </div>
                                <div class="column is-12-mobile is-6-tablet is-6-desktop">
                                    <p class="midashi-sss tt_b1">ベトナム現地日本語教育機関</p>
                                    <h3 class="midashi-s left-center">日本語教育機関で人材育成しており、 <br></h3>
                                    <h3 class="midashi-s left-center">年間100人の人材を日本に送ることができています。 <br></h3>
                                    <p>・留学・特定技能 <br> ・ビジネス <br> についてご紹介します <br>
                                    </p> <a href="https://duhocthanhgiang.com.vn/" style="margin-top: 25px;" class="arrow-btn2 thin radius shadow fade-in" id="top_service">サイトへ</a>
                                    </p>
                                </div>
                            </div>
                        </section>
                        <section class="wrap mb-5-2 pb-3-2 ">
                            <div class="columns is-variable is-5-desktop is-3-tablet is-mobile  is-multiline">
                                <div class="column is-12-mobile is-6-tablet is-5-desktop">
                                    <figure class="radius">
                                        <a href="https://job-visa.jp/job/list">
					  <img class="fade-in" src="<?php echo get_site_url() ?>/wp-content/uploads/2025/04/slide3.jpg" alt="レジアウトソーシングとは">
					</a>
                                    </figure>
                                </div>
                                <div class="column is-12-mobile is-6-tablet is-6-desktop">
                                    <p class="midashi-sss tt_b1">ビザ申請サポート</p>
                                    <h3 class="midashi-s left-center">日本国内外のビザ <br></h3>
                                    <h3 class="midashi-s left-center">各種サポート致します。 <br></h3>
                                    <p>・留学<br> ・特定技能 <br> ・ビジネス <br> をサポート致します 。<br>
                                    </p> <a href="https://job-visa.jp/job/list" style="margin-top: 25px;" class="arrow-btn2 thin radius shadow fade-in" id="top_service">サイトへ</a>
                                    </p>
                                </div>
                            </div>
                        </section>
                        <section class="wrap mb-5-2 pb-3-2 pt-3-2">
                            <div class="columns is-variable is-5-desktop is-3-tablet is-mobile reverse-row-order is-multiline">
                                <div class="column is-12-mobile is-6-tablet is-5-desktop">
                                    <figure class="radius">
                                        <a href="http://test-dev.local">
					  <img class="fade-in" src="<?php echo get_site_url() ?>/wp-content/uploads/2025/04/Cung-cap-phan-phoi-san-xuat-thuc-pham-chuc-nang-my-pham-6912-x-3456-px.png" alt="レジアウトソーシングとは">
					</a>
                                    </figure>
                                </div>
                                <div class="column is-12-mobile is-6-tablet is-6-desktop">
                                    <p class="midashi-sss tt_b1">供給・流通・製造</p>
                                    <h3 class="midashi-s left-center">私たちは健康食品・化粧品業界で事業を展開しています。その内容は以下の通りです。 <br></h3>
                                    <h3 class="midashi-s left-center">各種サポート致します。 <br></h3>
                                    <p>・供給</p>
                                    <p>・流通</p>
                                    <p>・製造</p> <a href="http://test-dev.local" style="margin-top: 25px;" class="arrow-btn2 thin radius shadow fade-in" id="top_service">サイトへ</a>
                                    </p>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </section>
            <!--START BLOG-->
            <?php 
            $args = array(
              'post_type' => 'post',
              'post_status' => 'publish',
              'tax_query' => array(
                array(
                  'taxonomy' => 'category',
                  'field' => 'slug',
                  'terms' => 'info',
                ),
              ),
              'posts_per_page' => 5,
            );

            $posts = new WP_Query( $args );
            ?>
            <section class="news-wrap">
                <div class="outer">
                    <div class="news-content margin-auto">
                        <h2 class="news-title">info</h2>
                        <div class="news">
                            <dl class="news-list">
                              <?php 
                              if ( $posts->have_posts() ) :
                                echo '<dl class="news-list">';
                                while ( $posts->have_posts() ) : $posts->the_post();
                              ?>
                                  <dt><?php echo get_the_date('d/m/Y'); ?></dt>
                                  <dd><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></dd>
                              <?php
                                endwhile;
                                echo '</dl>';
                                wp_reset_postdata();
                              endif;
                              ?>
                              </dl><a href="<?php echo esc_url('/category/seikuo-sim/'); ?>" class="arrow-btn radius shadow">一覧はこちら</a> </dl>

                            </dl>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BLOG -->

            <!-- Banner -->
            <!-- 			<section class="section">
				<div class="outer">
                     <div class="wrap">
								<img src="" alt="Banner">
					</div></div>
			</section> -->

            <!---->
            <section class="section">
                <div class="outer">
                    <div class="wrap">
                        <h2 class="midashi">企業情報</h2>
                        <figure class="mb-3-2 radius">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.0002738892254!2d139.694924275469!3d35.70161087258072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188db424557b7b%3A0xff98c5533ea4478c!2sThanh%20Giang%20Seikou%20-%20Nh%C3%A0%20m%E1%BA%A1ng%20Sim%20V%C3%A0ng!5e0!3m2!1svi!2sjp!4v1697349755805!5m2!1svi!2sjp"
                                width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
								  </iframe>                              </figure>
                        <section class="cta-wrap">
                            <div class="outer">
                                <div class="wrap-s">
                                    <h2 class="midashi">お問い合わせ</h2>

                                    <!-- Start contact form -->
                                    <?php
                                      echo do_shortcode('[contact-form-7 id="17ae63b" title="Contact form 1"]');
                                    
                                      if (isset($_GET['contact'])) {
                                        if ($_GET['contact'] == 'success') {
                                          echo '<div style="color: #0a5cc2; text-align: center; margin-bottom: 40px;">ご連絡いただきありがとうございます。できるだけ早く対応させていただきます。</div>';
                                        } elseif ($_GET['contact'] == 'error') {
                                          echo '<div style="color: #ce052c; text-algin: center; margin-bottom: 40px;">エラーが発生しました。後でもう一度試してください。</div>';
                                        }
                                      }

                                    ?>
                                    <!-- End contact form -->

                                    <div>
                                        <p class="center pb-3em">
                                            お電話でのお問い合わせはこちら
                                        </p>
                                        <p class="freedial center">
                                            <span></span>
                                            <a href="tel:03-5937-1685">03-5937-1685</a>
                                        </p>
                                        <p class="freedial center">
                                            <span></span>
                                            <a href="tel:03-5937-1685">03-5246-3993</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
            </section>
            <section class="section second">
                <div class="outer">
                    <div class="wrap">
                        <?php 
                        $title_business = get_field('title_business');
                        if(!empty($title)){
                            echo '<h2 class="midashi">'.$title_business.'</h2>';
                        }
                        ?>
                        
                        <div class="columns is-variable is-5-desktop is-3-tablet is-mobile is-multiline column-pd-3">
                            <?php 
                            $business = get_field('business');
                            if(!empty($business)):
                                foreach($business as $bus):
                            ?>
                            <div class="column is-4-desktop is-9-mobile sp-m-auto">
                                <div class="blog-card radius shadow">
                                    <div class="blog-card-image hover-zoom__image">
                                        <a href="<?php echo $bus['link']; ?>">
                                            <figure class="image is-12by7">
                                                <img width="150" height="100" src="<?php echo $bus['image']; ?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="<?php echo $bus['title']; ?>" />
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="blog-card-content">
                                        <ul class="post-categories">
                                            <li>
                                                <a href="<?php echo $bus['link']; ?>" rel="category tag"><?php echo $bus['title']; ?></a>
                                            </li>
                                        </ul>
                                        <a href="<?php echo $bus['link']; ?>">
                                            <p class="blog-card-text"><?php echo $bus['description']; ?></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php
                                endforeach;
                            endif;
                            ?>    
                            
                        </div>
                    </div>
                </div>
            </section>
        </article>

<?php 
get_footer();
?>