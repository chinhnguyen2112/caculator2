<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CACULATOR</title>
<link type="text/css" href="style.css" rel="stylesheet" media="screen">
</head>
<body>
<?php 
    $n1         ="";
    $n2         ="";
    $caculate   ="";
    if(isset($_POST["so1"]) && isset($_POST["so2"]) && isset($_POST["caculate"])){
         $n1            = $_POST["so1"];
         $caculate      = $_POST["caculate"];
         $n2            = $_POST["so2"];
         $run           =true;

    if(is_numeric($n1)&&is_numeric($n2)){
        switch ($caculate) {
            case '+':
                 $show=$n1 + $n2;
                 break;
            case '-':
                $show=$n1 - $n2;
                break;
            case '*':
            case 'x':
                $show=$n1 * $n2;
                break;
            case '/':
            case ':':
                $show=$n1 / $n2;
                break;
             default:
                 $show=$n1+$n2;
                 $caculate="+";
                 break;
         }
    }else {
        $show="Không thực hiện được";
        $run=false;
    }
       
    }
?>
    <div class="content">
        <h1>CACULATOR</h1>
        <form action="#" method="POST" >
            <div class="row">
                <span>Số thứ nhất</span>
                <input type="text" name="so1" value="<?php echo $n1; ?>">
            </div>
            <div class="row">
                <span>phép toán</span>
                <input type="text" name="caculate" value="<?php echo $caculate; ?>">
            </div>
            <div class="row">
                <span>Số thứ hai</span>
                <input type="text" name="so2" value="<?php echo $n2; ?>">
            </div>
            <div class="row">
                <input type="submit" value="Xem kết quả">
            </div>
            <div class="row">
                <p>
                    <?php
                     
                     
                        
                        if($run==true){
                            echo "Kết quả " .$n1 ."".$caculate."".$n2."=".$show ;
                        }
                        else{
                             echo $show ;
                        }
                  
                    ?>
                    </p>
            </div>
        </form>
    </div>
</body>