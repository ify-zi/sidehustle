<!DOCTYPE html>
<html>
<head>
  <title>SideHustle:Calculator</title> 
</head>
<body style="background: #fff; 
     font-family: sans-serif;">
<?php 
//code that uses post method to evaluate the input from the forms using switch function
start:    
if(isset($_POST['count'])){
        $first = $_POST['first'];
        $second = $_POST['second'];
        $operator = $_POST['operator'];
        if(is_numeric($first) && is_numeric($second)){
            switch($operator){
            case'add':
                $result = $first + $second;
                break;
            case'minus':
                $result = $first + $second;
                break;
            case'times':
                $result = $first * $second;
                break;
            case'divide':
                if($second != 0){$result = $first / $second;}
                else{
                    echo "sorry number can't be divided by zero";
                    
                }
                break;
        }
    }else{ echo "<h2>wrong input</h2>";}
    }
?>
<div style=" width: 330px; background: #00bbbf;  margin: 100px auto; padding: 10px 15px 40px 15px; border-radius: 5px; box-shadow: 0px 5px 15px 0px #E1E1E1;">
 <h1 style="text-align: center; color: #eee; font-weight: normal;">SideHustle:Calculator</h1>
 <form method="POST" action="SimpleCalculator.php">
 <input type="text" name="first" style="font-size: 14px; width: 300px; border: none; margin: 5px; border-radius: 5px; padding: 10px;" autocomplete="off" placeholder="Enter the First Number">
 <select style="font-size: 14px; border: none; width: 245px; margin: 5px; border-radius: 5px; padding: 10px;" name="operator">
       <option value="add">+</option>
       <option value="minus">-</option>
       <option value="times">*</option>
       <option value="divide">/</option>
</select>
 <input type="text" name="second" style="font-size: 14px; width: 300px; border: none; margin: 5px; border-radius: 5px; padding: 10px;" autocomplete="off" placeholder="Enter the Second Number">
 <input type="submit" name="count" value="Calculate" style="background: #EC5055; border-top: none; border-left: none; border-right: none; border-radius: 5px; padding: 10px 15px; font-size: 13px; border-bottom: 4px solid #BF203D;">
 </form>
 <?php 
    if(isset($_POST['count'])){ ?>
        <input type="text" value="<?php echo $result; ?>" style="font-size: 14px; width: 300px; border: none; margin: 5px; border-radius: 5px; padding: 10px;">
    <?php }else{ ?>
     <input type="text" value="0" style="font-size: 14px; width: 300px; border: none; margin: 5px; border-radius: 5px; padding: 10px;">
     <?php } ?>
</div>

</body>
</html>
