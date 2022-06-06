<?php
include "config.php"
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

  <title>Invoice</title>

  <link rel='stylesheet' type='text/css' href='css/style.css' />
  <link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
  <script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
  <script type='text/javascript' src='js/example.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"></script>

</head>

<body>
  <div id="html-content-holder" style="background-color: #F0F0F1; color: #00cc65; 
        padding-left: 25px; padding-top: 10px;">

    <div id="page-wrap">

      <textarea id="header" style="background-color: #60b974">INVOICE</textarea>

      <div id="identity">

        <textarea id="address">CPharmacy Address</textarea>

        <div id="logo">

          <div id="logoctr">

          </div>

          <div id="logohelp">

          </div>
          <img id="image" src="images/p1.png" style="width:125px;height:113px;" alt="logo" />
        </div>

      </div>

      <div style="clear:both"></div>

      <div id="customer">

        <textarea id="customer-title"></textarea>

        <table id="meta">
          <tr>
            <td class="meta-head" style="background-color: #60b974;">No</td>
            <?php $r = rand(10, 90); ?>
            <td><textarea><?php echo $r ?></textarea></td>
          </tr>
          <tr>

            <td class="meta-head" style="background-color: #60b974;color: white;">Date</td>
            <td><textarea id="date"><?php echo date("d-m-Y"); ?></textarea></td>
          </tr>
          <!--  <tr>
                    <td class="meta-head" style="background-color: #60b974">Amount Due</td>
                    <td><div class="due">$875.00</div></td>
                </tr> -->

        </table>



        <table id="items">

          <tr>
            <th style="background-color: #60b974; color: white;">SI no</th>
            <th style="background-color: #60b974; color: white;">Vechile Name</th>
            <th style="background-color: #60b974; color: white;">Cost</th>
            <th style="background-color: #60b974; color: white;">From date</th>
            <th style="background-color: #60b974; color: white;">To date</th>
          </tr>
          <?php
          $num = 1;

          $id = $_GET['bid'];
          $stmt = $admin->ret("SELECT * FROM `booking` inner join `vehicle`  on `booking`.VehicleId=`vehicle`.id  where booking.id='" . $id . "'");
          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $amount = $row['tamount'];

          ?>

            <tr class="item-row">
              <td class="item-name">
                <div class="delete-wpr"><span><?php echo $num++ ?></span><a class="delete" href="javascript:;" title="Remove row">X</a></div>
              </td>
              <td class="description"><span><?php echo $row['VehiclesTitle']; ?></span></td>
              <td><span class="cost">₹<?php echo $row['tamount']; ?></span></td>
              <td><span class="qty"><?php echo $row['FromDate']; ?></span></td>
              <td><span class="price"><?php echo $row['ToDate']; ?></span></td>
            </tr>
          <?php } ?>







          <tr>

            <td colspan="2" class="blank"> </td>
            <td colspan="2" class="total-line">Total</td>
            <td class="total-value">
              <div id="total">₹<?php echo $amount; ?></div>
            </td>
          </tr>


        </table>
        <input id="btn-Preview-Image" style="    background-color: #6a6767;
    color: white;
    border: none;" type="button" value="Preview" />
        <a id="btn-Convert-Html2Image" href="#">Download</a>
        <br />
        <h3 s>Preview :</h3>
        <div id="previewImage">
        </div>



        <!-- <div id="terms">
			<p>Click on the image to download it:<p>
<a href="" download="/images/myw3schoolsimage.jpg">
  <img src="/images/myw3schoolsimage.jpg" alt="W3Schools" width="104" height="142">
</a>
</p>
		  <h5>Terms</h5>
		  <textarea>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
		</div>
	 -->
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
</body>

</html>