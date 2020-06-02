<?php	
// connect to the database
$conn = mysqli_connect('localhost', 'root', 'mysroot', 'finaln');
$sql = "SELECT * FROM file";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);


// Uploads files
if (isset($_POST['register'])) 
 { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;
	$cat2=mysqli_real_escape_string($conn,$_POST['cat2']);
		$jobtitle=mysqli_real_escape_string($conn,$_POST['jobtitle']);
		$sdate=mysqli_real_escape_string($conn,$_POST['sdate']);
		$edate=mysqli_real_escape_string($conn,$_POST['edate']);
		

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
            $sqln = "INSERT INTO file (category,job_title,s_date,e_date,name,downloads) VALUES ('$cat2','$jobtitle','$sdate','$edate','$filename', 0)";
            if (mysqli_query($conn, $sqln)) {
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
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE file SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }
}
	