<?php
include "config.php"
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

  <title>getMED | Reciept</title>

  <link rel='stylesheet' type='text/css' href='css/style.css' />
  <link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
  <script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
  <script type='text/javascript' src='js/example.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"></script>

</head>

<body>
<div class="header" >
    <div class="header " style="font-size: 25px; text-align: center;background-color: #F0F0F1;">
        <h1 style="color: black;" class="text-center">getmyMED </h1>
        <p style="color: black;" class="text-center">Mangalore, 575004</p>
        
    </div>
    
</div>
<?php
error_reporting(0);
include "config.php";
session_start();
// to retrieve data frm base using session details
$sql1 = "SELECT c_username from cuslogin WHERE c_ID='$_SESSION[user]'";
$sql2 = "SELECT c_id from cuslogin WHERE c_id='$_SESSION[user]'";
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);
$row1 = $result1->fetch_row();
$row2 = $result2->fetch_row();
$cname = $row1[0];
$cid1 = $row2[0];

$pharma = "SELECT e_id from sales WHERE c_id='$_SESSION[user]'";
$pharm1 = $conn->query($pharma);
$pharm2 = $pharm1->fetch_row();

?>

  <div id="html-content-holder" style="background-color: #F0F0F1; color: #00cc65; 
        padding-left: 25px; padding-top: 10px;">

    <div id="page-wrap">

      <textarea id="header" style="background-color: #60b974">INVOICE</textarea>

      <div id="identity">


        <table>
          <tr>
            <th style="color: black; border:none; text-align: left;">Customer Name :</th>
            <td style="border:none; text-align: right;"><?php echo $cname; ?></td>
          </tr>
          <tr>
            <th style="color: black;border:none; text-align: left;">Pharmacist ID :</th>
            <td style="border:none; text-align: right;"><?php echo $pharm2[0]; ?></td>
          </tr>
        </table>




        <div id="logo">

          <div id="logoctr">

          </div>

          <div id="logohelp">

          </div>
          <img id="image" src="./images/p1.png" style="width:125px;height:113px;" alt="logo" />
        </div>

      </div>

      <div style="clear:both"></div>

      <div id="customer">

        <textarea style="font-size: 19px !important;" id="customer-title"></textarea>

        <table id="meta" style="    margin-top: 14px;">
          <tr>
            <td class="meta-head" style="background-color: #60b974;color: #F0F0F1;">No</td>
            <?php $r = rand(10, 90); ?>
            <td><textarea><?php echo $r ?></textarea></td>
          </tr>
          <tr>

            <td class="meta-head" style="background-color: #60b974;color: white;">Date</td>
            <td><textarea id="date"><?php echo date("d-m-Y"); ?></textarea></td>
          </tr>
          
        </table>



        <table id="items">

          <tr>

            <th style="background-color: #60b974; color: black;">Medicine ID</th>
            <th style="background-color: #60b974; color: black;">Medicine Name</th>
            <th style="background-color: #60b974; color: black;">Quantity</th>
            <th style="background-color: #60b974; color: black;">Price</th>
            <th style="background-color: #60b974; color: black;">Total Price</th>
          </tr>


          <?php
          include "config.php";
          if (isset($_GET['saleid'])) {
            $sid = $_GET['saleid'];
          }
          $medid1 = "SELECT * FROM sales_items where sale_id=$sid";
          $result_med = $conn->query($medid1);
          $row_med = $result_med->fetch_row();



          $item = "SELECT * FROM sales where sale_id=$sid";
          $result_sel = $conn->query($item);
          $row_item = $result_sel->fetch_row();

          echo "<table>";
          echo "<tr>";

          if (!empty($sid)) {
            $qry1 = "SELECT med_id,sale_qty,tot_price FROM sales_items where sale_id=$sid";
            $result1 = $conn->query($qry1);
            $sum = 0;

            if ($result1->num_rows > 0) {

              while ($row1 = $result1->fetch_assoc()) {

                $medid = $row1["med_id"];
                $qry2 = "SELECT med_name,med_price FROM meds where med_id=$medid";
                $result2 = $conn->query($qry2);
                $row2 = $result2->fetch_row();


                echo "<td style='text-align:center;padding-left: 130px;'><p>" . $row1["med_id"] . "</p></td>";
                echo "<td style='padding-left: 172px;' >" . $row2[0] . "</td>";
                echo "<td style='padding-left: 123px;'>" . $row1["sale_qty"] . "</td>";
                echo "<td style='padding-left: 55px;color: red;'>" . $row2[1] . "</td>";
                echo "<td style='padding-left: 121px; color: red;'>" . $row1["tot_price"] . "</td>";
              }

              echo "</table>";
            }
            echo "<a class='btn btn-link' href=../pos2.php?sid=" . $sid . ">Go Back to Order Page</a>";
          }


          ?>

        </table>
        <h3>Preview :</h3>
        <div style="text-align: right;">
          <a id="btn-Convert-Html2Image" href="#">Download</a>

        </div>
        <br />

        <div id="previewImage">
        </div>



        <div id="terms">

          <h5>Terms & conditions</h5>
          <textarea style="background-color: #F0F0F1;">Medicines purchased once cannot be returned back.</textarea>
        </div>

      </div>
    </div>
    <script>
      function myFunction() {
        window.print();
      }
    </script>
    <script>
      $(document).ready(function() {


        var element = $("#html-content-holder"); // global variable
        var getCanvas; // global variable

        $("#btn-Preview-Image").on('click', function() {
          html2canvas(element, {
            onrendered: function(canvas) {
              $("#previewImage").append(canvas);
              getCanvas = canvas;
            }
          });
        });

        $("#btn-Convert-Html2Image").on('click', function() {
          var imgageData = getCanvas.toDataURL("image/jpg");
          // Now browser starts downloading it instead of just showing it
          var newData = imgageData.replace(/^data:image\/jpg/, "data:application/octet-stream");
          $("#btn-Convert-Html2Image").attr("download", "your_pic_name.jpg").attr("href", newData);
        });

      });
    </script>
    </p>
  </div>
  
<div class="footer mt-4">

<div class="copyrightbottom-w3ls-agile mt-3" style="background-color: #F0F0F1;">
    <center>
        <p>© 2022 getmyMED. All Rights Reserved
    </center>
    <p style="color: Black; text-align: center;" class="text-center">Mangalore, 575004</p>
    </p>
    <h4 style="color: Black;text-align: center;" class="text-center">Developed by <a style="color: Black;" href="https://github.com/vyshnavc7/">C Vyshnav</a>  </h4>
</div>


</div>
</div>
</body>

</html>