<?php include("include/header.php"); ?>
    <div id="page_caption" class="hasbg parallax baseline ">
        <div class="parallax_overlay_header"></div>
        <div id="bg_regular" style="background-image:url(upload/Increasing-Need-for-Food-Safety-in-Fruits-and-Vegetables.jpg);"></div>

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
                        <div id="post-490" class="post-490 post type-post status-publish format-standard has-post-thumbnail hentry category-italine tag-recipe tag-shrimp tag-spaghetti">

                            <div class="post_wrapper">

                                <div class="post_content_wrapper">
                                    <?php include("include/config.php");
                                        $q = "SELECT * from `product` where `id`='".$_GET['id']."'";
                                        $result = $con->query($q);
                                        while($data = mysqli_fetch_array($result))
                                        {
                                    ?>
                                         Category: <?php echo $data['category_type']; ?><br/>                                      
                                         Product-name: <?php echo $data['product_name']; ?><br/>
                                    
                                    <div class="post_header">

                                            <a href="<?php echo PRODUCT_IMG.$data['image']; ?>"><img class="alignnone wp-image-2801 size-full" src="<?php echo PRODUCT_IMG.$data['image']; ?>" alt="" width="500" height="200" /></a>
                                        <p><?php echo $data['discription']; ?></p>
                                       
                                    </div>
                                    <?php                                        
                                        }
                                    ?>   
                                    <br class="clear" />
                                    <br/>
                                    <br/>

                                </div>

                            </div>

                        </div>
                        <!-- End each blog post -->
                        <div class="fullwidth_comment_wrapper sidebar">
                        </div>

                    </div>

                <div class="sidebar_wrapper">

                    <div class="sidebar_top"></div>

                    <div class="sidebar">

                        <div class="content">

                            <ul class="sidebar_widget">
                                
                                <li id="categories-3" class="widget widget_categories">
                                    <h2 class="widgettitle">Categories</h2>

                                    <ul>
                                        <?php 
                                           $q = "SELECT * from `category`";
                                           $result = $con->query($q);
                                           while($data = mysqli_fetch_array($result))
                                            {
                                        ?>
                                        <li class="cat-item cat-item-17">
                                           <?php
                                                      echo $data['category_name']; 
                                                }
                                            ?>

                                        </li>
                                    </ul>
                                </li>
                            </ul>

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

   <?php include("include/footer.php"); ?>