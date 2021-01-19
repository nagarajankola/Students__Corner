<?php
include('dashBoard.php');

session_start();
$dataBase = new PDO("mysql:host=localhost;dbname=studentscorner","raj","test1234");

$semester = $_POST['semester'];
$dept = $_GET['dept'];

$stmt = $dataBase->prepare("SELECT * FROM pdf WHERE branch = ? AND semester=?");
$stmt->bindParam(1,$dept);
$stmt->bindParam(2,$semester);
$stmt->execute();
// $row = $stmt->fetch();
// print_r($row);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        h1 {
            text-align: center;
        }
    </style>
    <title>Notes</title>
    <link rel="stylesheet" href="../CSS/notes_pdf.css">
<!--    <script src="https://kit.fontawesome.com/b5cff000aa.js" crossorigin="anonymous"></script>-->
</head>

<body>
<center><?php  echo $semester;
    echo $dept; ?></center>
<section >
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
            <tr>
                <th>Subject Code</th>
                <th>Subject Name</th>
                <th>Module No</th>
                <th>Uploaded by</th>
                <th>Download Link</th>
            </tr>
            </thead>
        </table>
    </div>
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
            <tr>
                <td>18CS51</td>
                <td>ATC</td>
                <td>1</td>
                <td>Bill Compound</td>
                <td><a href="view.php" target="_blank" rel="noopener noreferrer">Download</a></td>
            </tr>
            <?php while($row = $stmt->fetch()) {?>
            <tr>
            <?php echo "<td>".$row['subject_code']."</td>"; ?>
            <?php echo "<td>".$row['subject_name']."</td>"; ?>
            <?php echo "<td>".$row['module_number']."</td>"; ?>
            <?php echo "<td>".$row['teacher_id']."</td>"; ?>
            <?php echo "<td><a target='_blank' href='view.php?id=".$row['pdf_id']."'>Download</a></td>"; ?>
            </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>



</body>

</html>


