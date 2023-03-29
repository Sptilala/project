<?php include("include/header.php"); ?>

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
    <br class="clear" />



    <!-- Begin content -->
    <div id="page_content_wrapper" class="hasbg withtopbar ">
        <div class="inner">

            <!-- Begin main content -->
            <div class="inner_wrapper">

                <div class="page_content_wrapper"></div>

                <div class="sidebar_content full_width">

                    <!-- Begin each blog post -->
                    <div id="post-489" class="post-489 post type-post status-publish format-standard has-post-thumbnail hentry category-recipe tag-cooking tag-recipe tag-spaghetti">

                        <div class="post_wrapper">

                            <div class="post_content_wrapper">

                                <div class="post_header">
                                    <div class="post_header_title">
                                        <?php include("include/config.php");
                                            $q = "SELECT * from `daily_news`";
                                            $result = $con->query($q);
                                            while($data = mysqli_fetch_array($result))
                                            {
                                        ?>   
                                                <h5><a href="#"><?php echo $data['product_name']; ?></a></h5>
                                                
                                                <div class="post_detail">
                                                    <span class="post_info_date">
                                                        <?php echo $data['updated_at']; ?>                        
                                                    </span>
                                                     
                                                    
                                                </div>
                                            </div>

                                            <div class="post_img static" style="width:300px;height:300px;">
                                                <a href="#">
                                                    <img src="<?php echo PRODUCT_IMG.$data['image']; ?>" alt="" class=""/>
                                                </a>
                                            </div>

                                            <br class="clear" />

                                            <p> <?php  echo $data['news']; ?>
                                                <span class="post_readmore">
                                                    <a class="readmore" href="news-detail.php">Read More</a>
                                                </span>
                                            </p>
                                        <?php 
                                            } 
                                        ?>
                                </div>
                            </div>

                        </div>

                    </div>
                    <br class="clear" />
                    <!-- End each blog post -->

                    <br class="clear" />

                </div>

            </div>

            <!-- End main content -->

        </div>
        <br class="clear" />
        <br/>
    </div>






  <?php include("include/footer.php"); ?>