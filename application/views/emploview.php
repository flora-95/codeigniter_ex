<!DOCTYPE html>
<html>
 <head>
   <title>Records from DB</title>
 </head>
 <body>
   <table align="center">
     <tr>
       <th>Employee id</th>
       <th>Employee Name:</th>
       <th>Employee dob:</th>
       <th>Employee phno:</th>
       <th>Employee Email:</th>
       <th>Employee joining_date:</th>
        <th>Employee salary:</th>
     </tr>

     <?php foreach ($arrData as $row) {?>
       <tr>
         <td><?php echo $row['empid']?></td>
         <td><?php echo $row['empname']?></td>
         <td><?php echo $row['dob']?></td>
         <td><?php echo $row['phno']?></td>
         <td><?php echo $row['email']?></td>
         <td><?php echo $row['joining_date']?></td>
         <td><?php echo $row['salary']?></td>
       </tr>
     <?php }?>
   </table>

 </body>
 </html>
