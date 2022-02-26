<?php get_header(); ?>
    <!-- Home -->

    <div class="home">
      <div class="breadcrumbs_container">
        <div class="image_header">
          <div class="header_info">
            <div>event</div>
            <div>イベント</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Course -->

    <div class="course">
      <div class="row content-body">
        <!-- Course -->
        <div class="col-lg-8">
          <!-- Course Tabs -->
          <div class="course_tabs_container">
            <div class="tab_panels">
              <!-- Description -->
              <div class="tab_panel">
                <div class="tab_panel_title">イベント</div>
                <div class="tab_panel_content">
                  <div class="tab_panel_text">
                    <!-- news loop from here-->
                    <?php if (have_posts()) : ?>
                      <?php while(have_posts()) : the_post(); ?>
                    <div class="news_posts_small">
                      <div class="row">
                        <div class="col-lg-2 col-md-2 col-sx-12">
                          <div class="calendar_news_border">
                            <div class="calendar_news_border_1">
                              <div class="calendar_month"><?php echo get_field('month'); ?></div>
                              <div class="calendar_day">
                                <span><?php echo get_field('day'); ?></span><span>日</span>
                              </div>
                            </div>
                          </div>
                          <div class="calender_hour">
                          <div class="calender_hour"></div>
                          </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sx-12">
                          <div class="news_post_small_title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                          </div>
                          <div class="news_post_meta">
                            <ul>
                              <li>
                                <?php echo wp_trim_words( get_the_content() , 100, '...'); ?>
                              </li>
                            </ul>
                          </div>
                          <div class="read_continue">
                            <button><a href="<?php the_permalink(); ?>" class="text-white">詳細を見る</a></button>
                          </div>
                        </div>
                      </div>
                      <hr />
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- news loop until here-->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Course Sidebar -->
        <div class="col-lg-4" style="background-color: #2b7b8e33">
          <!-- sidebar-main に切り出す -->
          <div class="sidebar">
            <div class="form-search">
              <form action="#" id="courses_search_form" class="courses_search_form d-flex flex-row align-items-center justify-content-start">
                <input type="search" class="courses_search_input" required="required" />
                <button action="submit" class="courses_search_button">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </div>
            <div class="category">
              <div class="section_title_container category_title">
                <h2>CATEGORY</h2>
                <div class="section_subtitle">カテゴリー</div>
              </div>
              <div class="sidebar_categories">
                <ul>
                  <li><a href="#">News ニュース</a></li>
                  <li><a href="#">Events イベント</a></li>
                  <li><a href="#">CampusLife 侍の学生</a></li>
                </ul>
              </div>
            </div>
            <div class="category">
              <div class="section_title_container category_title">
                <h2>Latest Post</h2>
                <div class="section_subtitle">最新記事</div>
              </div>
              <div class="sidebar_categories">
                <ul>
                  <li><a href="#">AWS ハンズオンセミ…</a></li>
                  <li><a href="#">AWS ハンズオンセミ…</a></li>
                  <li><a href="#">AWS ハンズオンセミ…</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- sidebar-main ここまで -->
        </div>
      </div>
    </div>
    <?php get_footer(); ?>

    