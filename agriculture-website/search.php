<?php include("include/header.php"); ?>

<style>
.topnav a {
  float: left;
  display: block;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px; 
}
.topnav .search-container {
  float: right;
}
.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: 1px solid black;
}
.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 18px;
  border: 1px solid black; 
}
@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
}
</style>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <div class="ppb_wrapper hasbg withtopbar">
        <div class="one" style="padding:50px 0 50px 0;">
            <div class="standard_wrapper">
                <div class="page_content_wrapper">
                    <div class="inner">
                        <div style="margin-top:227px; text-align:center;">
                            <h2 class="ppb_menu_title">MARKETING YARD</h2>
                            <br class="clear" />
                            <br/>
                            <input type="button" value="Back" onclick="goBack()">
                            <br/>
                                <div id="menu_3197" class="menu_content_classic" >
                                    <div class="inner"> 
                                    <?php include("include/config.php");
                                    $serch_var = $_GET['search'];
                                    $q = "SELECT `market_name`, `city_id`,`id` FROM `marketing_yard` WHERE `market_name` LIKE '%".$serch_var."%'";
                                    $result = $con->query($q);
                                     while ($data=mysqli_fetch_array($result)) {
                                     ?>
                                        <div class="one_third last">
                                           <div style="border: 1px solid black; padding:30px; box-sizing: border-box; margin:20px; text-align: center;">
                                                <div>
                                                    <a href="price.php?city=<?php echo $data['market_name']; ?>&city_id=<?php echo $data['id']; ?>">
                                                        <div><?php echo $data['market_name']; ?></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                             <?php           
                                                }
                                             ?>
                                    </div>   
                                </div>
                        </div>
                        <br class="clear" />   
                    </div>
                </div>
            </div>
        </div>
      
 <?php include("include/footer.php"); ?>    
<script>
function goBack() {
  window.history.back()
}
</script>