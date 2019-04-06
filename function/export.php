 <?php
 include "../assets/config/config.php";
 session_start();
 $name = $_SESSION['name'];
 if(isset($_POST["exportstudent"]))
 {
	  header('Content-Encoding: UTF-8');
	  header('Content-type: text/csv; charset=UTF-8');
      header('Content-Disposition: attachment; filename=data.csv');
	  echo "\xEF\xBB\xBF"; // UTF-8 BOM
	  //echo($csv_export);
      $output = fopen("php://output", "w");
      fputcsv($output, array('yuwen', 'shuxue', 'english', 'zh', 'grade'));
      $query = "SELECT yuwen,shuxue,english,zh,grade from score ORDER BY id ASC";
      $result = mysqli_query($conn, $query);

      while($row = mysqli_fetch_assoc($result))
      {
           fputcsv($output, $row);
      }
      fclose($output);
 }else if(isset($_POST["exportteacher"]))
 {
	  header('Content-Encoding: UTF-8');
	  header('Content-type: text/csv; charset=UTF-8');
      header('Content-Disposition: attachment; filename=data.csv');
	  echo "\xEF\xBB\xBF"; // UTF-8 BOM

      $output = fopen("php://output", "w");
      fputcsv($output, array('yuwen', 'shuxue', 'english', 'zh', 'grade'));
      $query = "SELECT yuwen,shuxue,english,zh,grade from score ORDER BY id ASC";
      $result = mysqli_query($conn, $query);

      while($row = mysqli_fetch_assoc($result))
      {
           fputcsv($output, $row);
      }
      fclose($output);
 }
 ?>
