<form>
Average numbers of shower per day: <input type="text" name="perday" />
Average shower length(minutes): <input type="text" name="minutes" />
Perfectflow Litres: <input type="text" name"perfect-ltr" />
Standard Litres: <input type="text" name"stand-ltr" />
Perfect $: <input type="text" name"perfect-dollor" />
Standard $: <input type="text" name"standard-dollor" />
<input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST["submit"])){
$a=$_POST["perday"];
$b=$_POST["minutes"];
$c= $a+$b;
echo $c;
}
?>
<form action="" method="post">
Average numbers of shower per day: <input type="text" name="perday" />
Average shower length(minutes): <input type="text" name="minutes" />
<input type="submit" name="submit" value="Submit">
</form>











<?php
if(isset($_POST["submit"])){
       $showers_par_day= $_POST['showers_par_day'];
        $showers_limit= $_POST['showers_limit'];
        
        $total=$showers_par_day*$showers_limit;
        
        $per='2190';
        $s_liter='4380';
  
        $per_d='5.69';
        $s_d='11.39';
  
  $v1=$per*$total;
        $v2=$total*$s_liter;
  
  $savewater=$v2-$v1.'L';
        
        
        $per_final=$per*$total.'L';
        $s_liter_final=$total*$s_liter.'L';
  
        $per_d_final='$'.$total*$per_d;
        $s_d_final='$'.$total*$s_d;
		}
		?>
		<form method="POST">
Average numbers of shower per day: <input type="text" name="showers_par_day" /><br>
Average shower length(minutes): <input type="text" name="showers_limit" /><br>
Perfectflow Litres: <input type="text" name="perfect-ltr" value="<?php echo $per_final;?>" /><br>
Standard Litres: <input type="text" name="stand-ltr" value="<?php echo $s_liter_final;?>"/><br>
Perfect $: <input type="text" name="perfect-dollor" value="<?php echo $per_d_final;?>"/><br>
Standard $: <input type="text" name="standard-dollor" value="<?php echo $s_d_final;?>"/><br>
<input type="submit" name="submit" value="Calculate">
</form>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<?php
if(isset($_POST["submit"])){
$a=$_POST["perday"];
$b=$_POST["minutes"];
$c= $a+$b;
echo $c;
}
?>
<form>
Average numbers of shower per day: <input type="text" name="perday" /><br>
Average shower length(minutes): <input type="text" name="minutes" /><br>
Perfectflow Litres: <input type="text" name"perfect-ltr" /><br>
Standard Litres: <input type="text" name"stand-ltr" /><br>
Perfect $: <input type="text" name"perfect-dollor" /><br>
Standard $: <input type="text" name"standard-dollor" /><br>
<input type="submit" name="submit" value="Submit">
</form>