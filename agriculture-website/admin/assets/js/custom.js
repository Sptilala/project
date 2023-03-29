// Admin Add product
$("#add_product").click(function() {
  var formData = new FormData($('form#save_product')[0]);
  $.ajax({
    type: "POST",
    url: "process/add_product.php",
    dataType: "JSON",
    data: formData,
    contentType: false,
    processData: false,
    cache: false,
    success: function(response) {
      if(response.status == 'success'){
        alert(response.msg);
      }
      else if(response.status == 'fail'){
        alert(response.msg);
      }
      else{
        alert(response.msg);
       // location.reload();
      }
    }
  });
});


  // Admin add category
 $("#save_category").click(function() {
    
                var name= $("#inputCategoryTitle").val();

                $.ajax({
                    type: "POST",
                    url: "process/add_category.php",
                    data: "cname=" + name ,
                    success: function(data) {
                       alert("sucess");
                    }
                });


            });
 // admin to update category
  $("#updateCc").click(function() {

                var name= $("#updateCategoryTitle").val();
                var id=$("#pageid").val();
                $.ajax({
                    type: "POST",
                    url: "edit-category.php",
                    data: "cname=" + name+"&id=" + id,

                    success: function(data) {
                       alert("sucess");
                    }
                });


            });
  // admin to update product
$("#updatep").click(function() {
  var formData = new FormData($('form#update_product')[0]);
  $.ajax({
    type: "POST",
    url: "edit-product.php",
    dataType: "JSON",
    data: formData,
    contentType: false,
    processData: false,
    cache: false,
    success: function(response) {
      if(response.status == 'success'){
        alert(response.msg);
      }
      else if(response.status == 'fail'){
        alert(response.msg);
      }
      else{
        alert(response.msg);
       // location.reload();
      }
    }
  });
});

// code to get city_name from table 
  $("#state_name").change(function(){
    var stateid= $(this).find(":selected").val();
    var formData = new FormData();
    formData.append('state_id',stateid);
    $.ajax({
      type:"POST",
      url:"process/get-city.php",
      dataType: "JSON",
      data: formData,
      contentType: false,
      processData: false,
      cache: false,
      success:function(res){
        if(res.status == 'true'){
          $('.citylist').html(res.cities);
        } 
        else if(res.status == 'fail'){
          alert(res.message);
        }
        else {
          alert(res.message);
          location.reload();
        }
      }
    });
}); 

  //  code to get marketing-yard name from table 
  $("#city_name").change(function(){
    
    var cityid= $(this).find(":selected").val();
    var formData = new FormData();
    formData.append('city_id',cityid);
    $.ajax({
      type:"POST",
      url:"process/get-market.php",
      dataType: "JSON",
      data: formData,
      contentType: false,
      processData: false,
      cache: false,
      success:function(res){
        if(res.status == 'true'){
          $('.marketlist').html(res.markets);
        } 
        else if(res.status == 'fail'){
          alert(res.message);
        }
        else {
          alert(res.message);
          location.reload();
        }
      }
    });
}); 

  // code to remove diseble option

  $("#markets_name").change(function(){

    var id= $(this).find(":selected").val();

    if (id=='') {
      $("#market").attr("disabled","disabled");
    }
    else{
    $("#market").removeAttr("disabled");
  }
    
  });

  // admin to add price of markeying yard

  $("#save_price").click(function() {
    var id=$("#market_name").val();
    var name= $("#inputProductTitle").val();
    var minprice= $("#inputMinPrice").val();
    var maxprice= $("#inputMaxPrice").val();

    if (maxprice < minprice) {
      alert("please enter a valid amount");
      return false;
      }
     $.ajax({
      type:"POST",
      url:"process/add_price.php",
      data:"product_name=" + name+"&min_price=" + minprice+ "&max_price=" + maxprice +"&id=" + id ,
      success:function (data) {
        if(data == "success"){
          alert("sucess");
          // window.location.href = "http://localhost/agriculture/admin/view-price.php";
        }
       else{
        alert("fail");
       }
      }
     });
  });

  // view price of specific yard

  $("#market").click(function(){
   // alert();
    var yardid= $('#market_name').find(":selected").val();
    var formData = new FormData();
    formData.append('yard_id',yardid);
    $.ajax({
      type:"POST",
      url:"process/get_price.php",
      dataType: "JSON",
      data: formData,
      contentType: false,
      processData: false,
      cache: false,
      success:function(res){
        if(res.status == 'true'){
          $('.yard_record').html(res.markets);
          $('.stockContainer').removeClass('d-none');
        } 
        else if(res.status == 'fail'){
          alert(res.message);
        }
        else {
          alert(res.message);
          location.reload();
        }
      }
    });
}); 

  // admin to update price

  $("#updateprice").click(function() {
     var id=$("#pageid").val();
    var name= $("#updateProductTitle").val();
    var minprice= $("#updateMinPrice").val();
    var maxprice= $("#updateMaxPrice").val();
    $.ajax({
      type:"POST",
      url:"edit-price.php",
      data:"product_name=" + name+"&min_price=" + minprice+ "&max_price=" + maxprice +"&id=" + id ,

      success: function(data) {
                       alert("sucess");
                    }
    });
});

  // Admin Add News
$("#add_news").click(function() {
  var formData = new FormData($('form#save_news')[0]);
  $.ajax({
    type: "POST",
    url: "process/add_news.php",
    dataType: "JSON",
    data: formData,
    contentType: false,
    processData: false,
    cache: false,
    success: function(response) {
      if(response.status == 'success'){
        alert(response.msg);
      }
      else if(response.status == 'fail'){
        alert(response.msg);
      }
      else{
        alert(response.msg);
       // location.reload();
      }
    }
  });
});

 // admin to update news
$("#updaten").click(function() {
  var formData = new FormData($('form#update_news')[0]);
  $.ajax({
    type: "POST",
    url: "edit-news.php",
    dataType: "JSON",
    data: formData,
    contentType: false,
    processData: false,
    cache: false,
    success: function(response) {
      if(response.status == 'success'){
        alert(response.msg);
      }
      else if(response.status == 'fail'){
        alert(response.msg);
      }
      else{
        alert(response.msg);
       // location.reload();
      }
    }
  });
});