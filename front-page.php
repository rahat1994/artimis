<?php
get_header();
?>

      <!-- section --> 
      <div class="section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="heading">
                     <h3>About <span class="orange_color">Us</span></h3>
                  </div>
               </div>
            </div>

            <?php
               if(have_posts()){

                  while (have_posts()) {
                     the_post(  );
            ?>
                     <div class="row margin_top_30">
                        <div class="col-md-6">
                           <img src="images/blog1.png" alt="#" />
                        </div>
                        <div class="col-md-6">
                           <div class="full blog_cont">
                              <h4>The biggest and most awesome camera  of  year</h4>
                              <h5>MAY 14 2019 5 READ</h5>
                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                           </div>
                        </div>
                     </div>

            <?php
                  }
               }
            ?>
            <div class="row margin_top_30">
               <div class="col-md-12">
                  <div class="button_section full center margin_top_30">
                     <a style="margin:0;" href="about.html">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
<?php
get_footer( );
?>