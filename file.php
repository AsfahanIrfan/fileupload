<?php 
// $row=1;
// if(($csv_file=fopen("C:\Users\Administrator\Downloads\New folder","r"))!==false){
//     while(($read_data=fgetcsv($csv_file,1000,","))!==false){
//         $count_data=count($read_data);

//         $row++;
//         for($i=0; $i<$count_data; $i++){
//             echo $read_data[$i];
//         }
//     }
//     var_dump($read_data);
// }
//  fclose($csv_file);

?> 

<?php  
include("dbconnect.php");
if(isset($_POST["submit"]))
{
	
if($_FILES['file']['name'])
 {
$filename = explode(".", $_FILES['file']['name']);
if($filename[1] == 'csv')
{
$handle = fopen($_FILES['file']['tmp_name'], "r");
while($data = fgetcsv($handle))//handling csv file 
{
$item1 = mysqli_real_escape_string($connect, $data[0]);  
$item2 = mysqli_real_escape_string($connect, $data[1]);
// var_dump($data);
// var_dump($item2);

//insert data from CSV file 
$query = "INSERT into idata(name, email) values('$item1','$item2')";
mysqli_query($connect, $query);
}
fclose($handle);
echo "File sucessfully imported";
}
}
}
?>
