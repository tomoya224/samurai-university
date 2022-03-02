<div class="sidebar">
               <div class="form-search">
                 <form
                   action="<?php echo home_url(); ?>" method = "get" id="courses_search_form" class="ccourses_search_form d-flex flex-row align-items-center justify-content-start">
                 >
                   <input
                     type="search" name="s" value="<?php the_search_query(); ?>" class="courses_search_input" required="required" placeholder="検索文字を入力">
                   >
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
                     <?php 
                      $args = array(
                          'title_li' =>'',
                      );
                      wp_list_categories( $args);
                      ?>
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
                     <?php 
                      $args = array(
                          'posts_per_page' => 3 //表示件数の指定
                      );
                      $posts = get_posts($args);
                      foreach($posts as $post): //ループの開始
                      setup_postdata($post); //記事データのセット
                      ?>
                       <li>
                           <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      </li>
                      <?php
                       endforeach;
                       wp_reset_postdata(); //今回作成したクエリをリセットする
                       ?>
                   </ul>
                 </div>
               </div>
             </div>

             <div class="sidebar">
               <div class="form-search">
                 <form
                   action="#"
                   id="courses_search_form"
                   class="courses_search_form d-flex flex-row align-items-center justify-content-start"
                 >
                   <input
                     type="search"
                     class="courses_search_input"
                     required="required"
                   />
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

             <div class="sidebar">
               <div class="form-search">
                 <form
                   action="#"
                   id="courses_search_form"
                   class="courses_search_form d-flex flex-row align-items-center justify-content-start"
                 >
                   <input
                     type="search"
                     class="courses_search_input"
                     required="required"
                   />
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