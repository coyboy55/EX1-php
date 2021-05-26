<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../home.css">
    <title>Income Tax Calculator</title>
</head>

<body>
    <form action="" method="post">
        <div class="container">
            <h1>Calculate Tax.</h1>
            <hr>
            <div>

                <label for="salary">Salary</label>
                <input type="number" name="salary" id="salary" placeholder="Salary in USD" required>

                <label for="tax">Tax Allowance</label>
                <input type="number" name="tax" id="tax" placeholder="Tax Free Allowance in USD" required>

                <label>Time</label>
                <div class="radioCheck">
                    <div>
                        <input type="radio"
                            <?php if (isset($_POST['calc'])) {if ($_POST['time'] == "monthly") {echo "checked";}}?>
                            name="time" id="month" value="monthly" required />
                        <label for="month"> Monthly </label>
                    </div>
                    <div>
                        <input type="radio"
                            <?php if (isset($_POST['calc'])) {if ($_POST['time'] == "yearly") {echo "checked";}}?>
                            name="time" id="year" value="yearly" />
                        <label for="year"> Yearly </label>
                    </div>
                </div>
            </div>
            <hr>
            <button type="submit" class="registerbtn" name="calc">Calculate</button>
        </div>
    </form>

    <?php
if (isset($_POST['calc'])) {
    {
        $salary = ($_POST['salary']);
        $time = $_POST['time'];
        $tax = $_POST['tax'];
        $salaryCalc = $salary;
        $taxCalc = $tax;
        if ($time == "monthly") {
            $salaryCalc *= 12;
            $tax *= 12;
        }

        $TOTS = $salaryCalc / 12;
         $TOTy = $salaryCalc;

        if ($salaryCalc < 10000) {
  $TAXXA = 0;
            $TAXPO = 0;
        }
        
        else if (($salaryCalc > 10000) && ($salaryCalc < 25000)) {
            $TAXXA = $TOTS * 0.11;
           
           
            $TAXPO = $TOTy * 0.11;
        } else if (($salaryCalc > 25000) && ($salaryCalc < 50000)) {
            $TAXXA = $TOTS * 0.3;
     $TAXPO = $TOTy * 0.3;
       
       
       
       
        } else if ($salaryCalc > 50000) {
            $TAXXA = $TOTS * 0.45;
            $TAXPO = $TOTy * 0.45;
        }

if ($salaryCalc > 10000) {
      $socialSecurityM = $TOTS * 0.04;
            $socialSecurityY = $TOTy * 0.04;
        } else {
            $socialSecurityM = 0;
            $socialSecurityY = 0;
        }

        $salaryAfterTaxMonthly = $TOTS - $TAXXA - $socialSecurityM + ($taxCalc / 12);
 $salaryAfterTaxYearly = $TOTy - $TAXPO - $socialSecurityY + ($taxCalc);

        echo "
            <form>
              <div class='container' >
                     <h1>Table Of Salary.</h1>
                     <hr>
                     <br>
                     <table>
                
                
                     <tr class='titleTable'>
                             <th> </th>
                                        <th>Monthly</th>
                             <th>Yearly</th>
                         </tr>
                 <tr>
                             <td class='titleTable'>Total Salary</td>
                             <td>$TOTS$</td>
                             <td>$TOTy$</td>
                         </tr>
                         <tr>
                          <td class='titleTable'>Tax amount</td>
          <td>$TAXXA$</td>
                             <td>$TAXPO$</td>
                         </tr>
                         <tr>
                             <td class='titleTable'>Social security fee</td>
                             <td>$socialSecurityM$</td>
                     <td>$socialSecurityY$</td>
                         </tr>

                         <tr>
                             <td class='titleTable'>Salary after tax</td>
                             <td>$salaryAfterTaxMonthly$</td>
                 <td>$salaryAfterTaxYearly$</td>
                         </tr>
                     </table>
                     </div>
                </div>
            </form>
        ";
    }
}
?>

</body>
</html>