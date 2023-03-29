<?php include("include/header.php") ?>

    <div id="page_caption" class="hasbg parallax baseline ">
        <div class="parallax_overlay_header"></div>
        <div id="bg_regular" style="background-image:url(upload/news.png);"></div>

        <div class="page_title_wrapper baseline" data-stellar-ratio="1.3">
            <div class="page_title_inner baseline">
                <h1 class="withtopbar">
         <span class="ppb_title_first" >Our</span>Blog  </h1>
            </div>
        </div>
    </div>



    <!-- Begin content -->
    <div id="page_content_wrapper" class="hasbg withtopbar ">
        <div class="inner">

            <!-- Begin main content -->
            <div class="inner_wrapper">

                <div class="page_content_wrapper"></div>

                    <div class="sidebar_content">

                        <!-- Begin each blog post -->

                        <?php include("include/config.php");
                            $q = "SELECT * from `daily_news`";
                            $result = $con->query($q);
                            while($data = mysqli_fetch_array($result))
                            {
                        ?>   
                            <h5>Product Name :- <?php echo $data['product_name']; ?></h5>
                            <div class="post_detail">
                                <span class="post_info_date">
                                    <?php echo $data['updated_at']; ?>                        
                                </span>                   
                             </div>
                        
                        <div id="post-490" class="post-490 post type-post status-publish format-standard has-post-thumbnail hentry category-italine tag-recipe tag-shrimp tag-spaghetti">

                            <div class="post_wrapper">

                                <div class="post_content_wrapper">

                                    <div class="post_header">

                                        <p>
                                            <a href="<?php echo PRODUCT_IMG.$data['image']; ?>"><img class="alignnone wp-image-2801 size-full" src="<?php echo PRODUCT_IMG.$data['image']; ?>" alt="" width="400" height="200" /></a>

                                        </p>
                                        <p><?php  echo $data['news']; ?></p>
                         <?php } ?>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- End each blog post -->
                    </div>

                <div class="sidebar_wrapper">

                    <div class="sidebar_top"></div>

                    <div class="sidebar">

                        <div class="content">
                        </div>

                    </div>
                    <br class="clear" />

                    <div class="sidebar_bottom"></div>
                </div>
            </div>

            <!-- End main content -->

        </div>
        <br class="clear" />
        <br/>
    </div>
<?php include("include/footer.php") ?>