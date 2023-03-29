<?php include("include/header.php"); 

?>
<head>
  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
</head>
<link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
 <div class="ppb_wrapper hasbg withtopbar">
        <div class="one" style="padding:50px 0 50px 0;">
            <div class="standard_wrapper">
                <div class="page_content_wrapper">
                    <div class="inner">
                        <div style="margin-top:100px; text-align:center;">
                            <h2 class="ppb_menu_title">MARKETING PRICE - <?php echo $_GET['city']; ?></h2>
                            <br class="clear" />
                            <br/>
							<input type="button" value="Back" onclick="goBack()">
                                    <body>
										  <table id="example">
										    <thead>
										      <tr>
										        <th>product name</th>
										        <th>Min-price</th>                                      
										        <th>Max-price</th>
										      </tr>
										    </thead>
										    <tbody>
										      <?php include('D:\xampp\htdocs\agriculture\view-price.php');?> 
										    </tbody>
										  </table>
										  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
										  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
										  <script>
										  $(function(){
										    $("#example").dataTable();
										  })
										  </script>
									</body>
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
