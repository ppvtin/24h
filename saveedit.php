<?php
	function saveImage($pic, $id) {
		$errors=array();
	    $allowed_ext= array('jpg','jpeg','png','gif');
	    $file_name =$pic['name'];
	    $temp = explode('.', $file_name);
	    $file_ext_raw = end($temp);
	    $file_ext = strtolower($file_ext_raw);

	    $file_size=$pic['size'];
	    $file_tmp= $pic['tmp_name'];

	    if(in_array($file_ext,$allowed_ext) === false)
	    {
	        $errors[]='Extension not allowed';
	    }

	    if($file_size > 2097152)
	    {
	        $errors[]= 'File size must be under 2mb';
	    }
	    if(empty($errors))
	    {
	       if( move_uploaded_file($file_tmp, 'images/'. $id))
	       {
	       		return TRUE;
	       }
	    }
	    return FALSE;
	}
	$queries = array();
	parse_str($_SERVER['QUERY_STRING'], $queries);
    $connect = new mysqli('us-cdbr-east-02.cleardb.com', 'b3f45e08fe46ae', '55c9f49d', 'heroku_6485ee814dc37c2');
    if ($connect->connect_error)
       echo '<script>alert(\'Không kết nối đến cơ sở dữ liệu\');window.location.href = \'http://localhost:81/24h/edit.php\'</script>';
    else {
    	$title = $_POST['title'];
    	$content = $_POST['content'];
    	$id = $_POST['id'];
        $sql = 'update blog set title = \'' .$title .'\', content = \'' .$content .'\' where id = ' .$id;
        $save = TRUE;
        if (isset($_FILES['pic'])) {
        	$pic = $_FILES['pic'];
        	if (saveImage($pic, $id) === TRUE)
        		$save = TRUE;
        	else
        		$save = FALSE;
        }
        if ($save === TRUE && $connect->query($sql) === TRUE) {
			echo '<script>alert(\'Lưu thành công\');window.location.href = \'http://localhost:81/24h/allblog.php\'</script>';
    	} else
        	echo '<script>alert(\'Lưu không thành công\');window.location.href = \'http://localhost:81/24h/edit.php\'</script>';
    }
?>