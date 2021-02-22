<!DOCTYPE html>
<html>
<head>
  <title>SideHustle:Calculator</title> 
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
    if(isset($_POST['count'])){
        $first = $_POST['first'];
        $second = $_POST['second'];
        $operator = $_POST['operator'];
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
                $result = $first / $second;
                break;
        }
    }
?>
<div class="calculator">
 <h1 class="title">SideHustle:Calculator</h1>
 <form method="POST" action="SimpleCalculator.php">
 <input type="text" name="first" class="num" autocomplete="off" placeholder="Enter the First Number">
 <select class="opt" name="operator">
       <option value="add">+</option>
       <option value="minus">-</option>
       <option value="times">*</option>
       <option value="divide">/</option>
</select>
 <input type="text" name="second" class="num" autocomplete="off" placeholder="Enter the Second Number">
 <input type="submit" name="count" value="Calculate" class="button">
 </form>
 <?php 
    if(isset($_POST['count'])){ ?>
        <input type="text" value="<?php echo $result; ?>" class="num">
    <?php }else{ ?>
     <input type="text" value="0" class="num">
     <?php } ?>
 
</div>

</body>
</html>
