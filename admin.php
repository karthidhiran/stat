<?php
$hostname="localhost";
  $username="root";
  $password="";
  $dbname="stores";
  $con = mysqli_connect($hostname, $username, $password, $dbname);

$query = "SELECT name, email, mobile, cal, from1 FROM results";
$results = mysqli_query($con, $query);
?>
<table border ="1" cellspacing="0" cellpadding="10">
  <tr>
    <th>S.N</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Date</th>
    <th>Details</th>
  </tr>
<?php
if (mysqli_num_rows($results) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($results)) {
 ?>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['name']; ?> </td>
   <td><?php echo $data['email']; ?> </td>
   <td><?php echo $data['mobile']; ?> </td>
   <td><?php echo $data['cal']; ?> </td>
   <td><?php echo $data['from1']; ?> </td>
 <tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="4">No data found</td>
    </tr>

 <?php } ?>
 </table>