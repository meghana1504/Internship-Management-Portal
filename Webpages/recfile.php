<?php
include 'server2.php';
if (isset($_POST['sub'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;
	/*$cat2=mysqli_real_escape_string($conn,$_POST['cat2']);
		$jobtitle=mysqli_real_escape_string($conn,$_POST['jobtitle']);
		$sdate=mysqli_real_escape_string($conn,$_POST['sdate']);
		$edate=mysqli_real_escape_string($conn,$_POST['edate']);
		*/

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    

    if (!in_array($extension, ['zip', 'pdf', 'docx','txt','jpeg','jpg','png','doc','rar'])) {
        echo "You file extension must be .zip, .pdf or .docx ";
    } elseif ($_FILES['myfile']['size'] > 1000000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
			echo $_SESSION['username'];
			echo $_SESSION['id'];
            //$sqln1 = "UPDATE file SET s_downloads=0,name='$filename' where id=$_SESSION['id']";
			$sqln1 = "insert into file (s_downloads) values(0) ";
            if (mysqli_query($conn, $sqln1)) {
               echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sqlb = "SELECT * FROM file WHERE id=$id";
    $result = mysqli_query($conn, $sqlb);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['s_downloads'] + 1;
        $updateQuery = "UPDATE file SET s_downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }
}?>