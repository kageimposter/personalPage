<?php





$server = "localhost"; 
$user = "browsePage";
$pass = "jackTheRipper";
$dbname = "fileServer";

  
// THIS UPLOAADS AN IMAGE TO A FILE WHERE THE INDEX IS HOSTED

    $target_dir = "Uploads/";
    $target_path = $target_dir . basename($_FILES["fileUpload"]["name"]);
    $checkIfGood = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    //verify that its actually an image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileUpload"]["flush_name"]);
        if($check !== false){
            echo "file is image - " . $check["mime"] . ".";
            $checkIfGood = 1;
        } else {
            echo "file is not an image.";
            $checkIfGood =0;
                }
    }
    //check if already in the uploads
    if(file_exists($target_file)) {
        echo "Already uploaded.";
        $checkIfGood = 0;        
    }

    //Check the file size for the upload
    if($_FILES["fileUpload"]["size"]> 200000){
        echo "File too large.";
        $checkIfGood = 0;
    }
    
    //Allowing only certain types of files
    if($imageFileType != "jpg" && $imageFileType != "mpeg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"
      && $imageFileType != "webm"){
        echo "Only jpg, mpeg, jpeg, gif, png and webm are allowed.";
        $checkIfGood = 0;
    }

    //check if the checkIfGood var is set by error
    if($checkIfGood == 0){
        echo "Image was not uploaded";
    // If good, try to upload
    } else{
            if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)){
                echo "The file" . basename( $_FILES["fileUpload"]["name"]). " has been uploaded.";
            }
        else{
            echo "There was an error."
        }    
    }
    


?>