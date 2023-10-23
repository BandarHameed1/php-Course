<?php 
  //Calculator
  $number1 = $_GET["number1"];
  $number2 = $_GET["number2"];
  $op = $_GET["op"];

  if (empty($number1)) {
    $result = "الرقم الاول فارغ";
  }elseif (empty($number2)) {
    $result = "الرقم الثاني فارغ";
  }elseif (empty($op)) {
    $result = "يرجاء ادخال العملية";
  }else {
    if ($op === "+") {
        $result = $_GET["number1"] +  $_GET["number2"];
      }elseif ($op === "-") {
        $result = $_GET["number1"] -  $_GET["number2"];
      }elseif ($op === "*") {
        $result = $_GET["number1"] *  $_GET["number2"];
      }elseif ($op === "/") {
        $result = $_GET["number1"] /  $_GET["number2"];
      }
  }
  
  
  
?>
<head>

<body>
    <div class ="container">
        <form action = "calc.php" method = "GET" class ="form">
            <div>
                <label>Enter Number1:</label>
                <input type="number" id="number1" class ="form-control">
            </div>
            <div>
                <label>Enter Number2:</label>
                <input type="number" id="number2" class ="form-control">
            </div>
            <br>
            <div>
                <label>oprations</label>
                <input type="text" name="op" class="form-control">
            </div>
            <div class="alert alert-sussess">
                <?php echo $result ?>
            </div>
            <br>
            <input type = "submit" class ="btn btn-primary">
        </form>
    </div>

</body>