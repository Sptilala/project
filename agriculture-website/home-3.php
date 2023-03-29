<?php include("include/header.php"); ?>

<div class="ppb_wrapper  ">
<div class="one fullwidth ">
<div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:#262626;padding:0px;margin-top:0px;margin-bottom:0px;">
<!-- START REVOLUTION SLIDER 5.4.8 fullwidth mode -->
<div id="rev_slider_3_1" class="rev_slider fullwidthabanner tp-overflow-hidden" style="display:none;" data-version="5.4.8">
    <ul>
        <!-- SLIDE  -->
        <li data-index="rs-3" data-transition="zoomin" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="upload/abreakey-raw-foodphotography-squid-still-life-100x50.jpg" data-rotate="0" data-saveperformance="on" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
            <!-- MAIN IMAGE -->
            <img src="upload/Increasing-Need-for-Food-Safety-in-Fruits-and-Vegetables.jpg" alt="" title="abreakey-raw-foodphotography-squid-still-life" width="1400" height="1049" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
            <!-- LAYERS -->

            <!-- LAYER NR. 1 -->
            <div class="tp-caption title-first-word   tp-resizeme" id="slide-3-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="-80" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":450,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"nothing"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-weight: ; letter-spacing: ;">Welcome to </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption title   tp-resizeme" id="slide-3-layer-2" data-x="center" data-hoffset="" data-y="center" data-voffset="-20" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":500,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"nothing"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; line-height: ; color: #ffffff; letter-spacing: ;"><strong>AGRICULTURAL</strong>  INFORMATION </div>

            <!-- LAYER NR. 3 -->
            <div class="tp-caption sub-title-center   tp-resizeme" id="slide-3-layer-3" data-x="center" data-hoffset="" data-y="center" data-voffset="50" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":500,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"nothing"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; letter-spacing: ;">Making The Agriculture is different then other
                <br/></div>
        </li>
    </ul>
    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
</div>

</div>
<!-- END REVOLUTION SLIDER -->
</div>

<div class="one withsmallpadding ppb_header " style="text-align:center;padding:50px 0 50px 0;">
<div class="standard_wrapper">
<div class="page_content_wrapper">
    <div class="inner">
        <div style="margin:auto;width:100%%;">
            <h2 class="ppb_title" style=""><span class="ppb_title_first" >FARMING</span>DETAIL</h2>
            <div class="page_header_sep center"></div>
        </div>
    </div>
</div>
</div>
</div>
<div class="standard_wrapper">
<div class="one withsmallpadding" style="padding-top: 0 !important;padding:50px 0 50px 0;">
<div class="page_content_wrapper">
    <div class="inner">
        <div class="inner_wrapper">
            <div class="blog_grid_wrapper sidebar_content full_width ppb_blog_posts">
            <?php include("include/config.php");
                $q = "SELECT * from `product`";
                $result = $con->query($q);
                while($data = mysqli_fetch_array($result))
                {
            ?>   
                <div id="post-490" class="post type-post hentry status-publish">
                    <div class="post_wrapper grid_layout">
                        <div class="blog_grid_content">
                            <div class="post_header grid">
                                 <h6>
                                    <a>
                                        <?php if(!empty($data['product_name'])){ echo $data['product_name']; } else { echo "Title Not found";} ?>
                                    </a>
                                </h6>
                                <div class="post_detail" >
                                  Category: <?php echo $data['category_type']; ?>
                                </div>
                            </div>
                            <div class="post_img small"  style="height: 200px;width: 400px;">
                            <a>
                             <?php if(!empty($data['image']))
                             {
                             ?>
                              <img  src="<?php echo PRODUCT_IMG.$data['image']; ?>" alt="" class="" />
                             <?php
                             } 
                             else {
                             ?>
                             <img src="D:\xampp\htdocs\agriculture\admin\assets\product_image\Screenshot-2018-12-16-at-21.06.29.png">
                             <?php
                             } ?>
                                
                            
                            </a>
                            </div>
                            <p style="text-transform: capitalize;"><?php if(!empty($data['discription'])){ echo $data['discription']; } else { echo "discription Not found";} ?>
                                    <span class="post_readmore">
                                       <a class="readmore" href="simple-page-detail.php?id=<?php echo $data['id']; ?>">Read More</a>
                                    </span>
                        </div>
                    </div>
                </div>
            <?php } ?>              
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div> 
<?php include("include/footer.php"); ?>      