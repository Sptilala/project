<?php include('../include/config.php'); 
    
    
    $name=$_POST['name'];
    $news=$_POST['news'];
    $image= $_FILES['image']['name'];


                             $target_dir = "../assets/product_image/";
                             $target_file = $target_dir . basename($_FILES["image"]["name"]);
                            
                             $uploadOk = 1;
                             $time=date("dmY")."-".time();
                             // @$file=$time.".".$_file;
                             $imageFileType =pathinfo($target_file,PATHINFO_EXTENSION);
                             $imageFileName =pathinfo($target_file,PATHINFO_FILENAME);
                             $imagetype=$imageFileName .".".$imageFileType;
                             $file_name=$time.'-'.$imagetype;
                             $str_img=$target_dir. $file_name;
                             
                                
                                // Check if image file is a actual image or fake image
                                if(isset($_POST["add_product"])) {
                                  $check = getimagesize($_FILES["image"]["tmp_name"]);
                                  if($check !== false) {
                                    $uploadOk = 1;
                                  }
                                   else {
                                    $msgcon = "File is not an image.";
                                    echo json_encode(array('status'=>'fail','msg'=>$msgcon));
                                    exit;
                                    $uploadOk = 0;
                                  }
                                }      

                                //  Check if file already exists
                                     if (file_exists($file_name)) {
                                      $msga= "Sorry, file already exists.";
                                      echo json_encode(array('status'=>'fail','msg'=>$msga));
                                    exit;
                                    $uploadOk = 0;
                                    }
    
                                    // Check file size
                                    if (@$_FILES["image"]["size"] > 500000) {
                                      $msgs="Sorry, your file is too large.";
                                      echo json_encode(array('status'=>'fail','msg'=>$msgs));
                                    exit;
                                      $uploadOk = 0;
                                    }
                                    
                                    // Allow certain file formats
                                    if($imageFileType != "jpg" &&$imageFileType != "JPG" && $imageFileType != "png" && $imageFileType != "PNG"  && $imageFileType != "jpeg" && $imageFileType != "JPEG" && $imageFileType != "gif" && $imageFileType != "GIF") {
                                   
                                   
                                    $msgf="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                    echo json_encode(array('status'=>'fail','msg'=>$msgf));
                                    
                                      $uploadOk = 0;
                                    } 
                                   
                                    // Check if uploadOk is set to 0 by an error
                                    if ($uploadOk == 0) {
                                      $msgu= "Sorry, your file was not uploaded.";
                                       echo json_encode(array('status'=>'fail','msg'=>$msgu));
                                    exit;
                                  } 
                                   // if everything is ok, try to upload file
                             else {
                                      if (move_uploaded_file($_FILES["image"]["tmp_name"], $str_img)) {

                                         $q= mysqli_query($con,"INSERT INTO daily_news (product_name,news,image) VALUES('".$name."','".$news."','".$file_name."')");
                                          
                                        if( $q){
                                           echo json_encode(array('status'=>'success','msg'=>'your data has been successfully added'));
                                           exit;
                                        }else{
                                           echo json_encode(array('status'=>'fail','msg'=>'Error:please try again'));
                                           
                                           exit;
                                        }

                                        } else {
                                        $msger= "Sorry, there was an error uploading your file.";
                                        echo json_encode(array('status'=>'fail','msg'=>$msger));
                                    exit;
                                               }
                                }
    
 
?>