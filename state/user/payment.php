<?php
include("header.php");

?>

<?php
include("config.php");
			global $total_price,$email_id,$user;
			$sql="select * from order_detail";
			$result=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($result))
			{
				
				
				$total_price=$row['total_price'];
			}
			
			?>




<div >

	
		<h5 class="modal-title text-uppercase"> Payment Detail </h5>
		<div class="lregister-form">
			<form action="#" method="post" enctype="multipart/form-data" class="px-3 pt-3 pb-0">


				

				<div class="form-group" >
					<label for="recipient-name" class="col-form-label">Email id</label>
					<input  style="height: 32px; width:25% ; " type="text" class="form-control" value="<?php echo $user;?>" name="email_id" readonly>
				</div>

				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Total Price</label>
					<input type="text" style="height: 32px; width:25% ; " class="form-control" name="total_price" value="<?php echo $total_price;?>" readonly>
				</div>

				<div class="form-group">
<label for="recipient-name" class="col-form-label">Card Type</label>

 
 
 
 
 <select name="card_type" style="height: 32px; width:25%;" class="form-control" required >
                  <option value="">--Select Card Type--</option>
                  <option value="visa">Visa</option>
                  <option value="mastercard">MasterCard</option>
                  </select>
 
 
 
 
				</div>






<div class="form-group" >
					<label for="recipient-name" class="col-form-label">Name On Card</label>
					<input  style="height: 32px; width:25% ; " type="text" class="form-control"  name="nameon_card" >
				</div>


<div class="form-group" >
					<label for="recipient-name" class="col-form-label">card no</label>
					<input  style="height: 32px; width:25% ; " type="text" class="form-control"  name="card_no" maxlength="16" minlength="16">
				</div>












				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Expirty Date</label>
					<input type="month" style="height: 32px; width:25% ; "class="form-control"  name="expiry_date" id="recipient-name4" required="">
	
</br>
				
					<input type="submit"  style="height: 32px; width:25% ;color: #eee; background-color: #17a2b8; border-color: #17a2b8; border-radius: 0;letter-spacing: 1px;font-size: 15px; "  name="edit" class="form-control" value="Pay Now">
				</div>
			</form>
			<?php
include("config.php");
if(isset($_POST['edit']))
{
	
	$user=$_POST['email_id'];
	
	
	$total_price=$_POST['total_price'];
	$card_type=$_POST['card_type'];
	$nameon_card=$_POST['nameon_card'];
	$card_no=$_POST['card_no'];
	$expiry_date=$_POST['expiry_date'];
	
	$sql="insert into tbl_payment(email_id,total_price,card_type,nameon_card,card_no,expiry_date,date,status)
	value('$user','$total_price','$card_type','$nameon_card','$card_no','$expiry_date',now(),'approve')";
$result=mysqli_query($con,$sql);
if($result)
{
	

if($result)
{
	echo "<script language='javascript'>alert('Your payment is successfully done.');</script>";
	echo "<script language='javascript'>location.href = 'index.php';</script>";
}

}
}
					?>
			
		</div>
		<a class="close" href="#">&times;</a>
	</div>
</div>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/base/jquery-ui.css">
    <script type="text/javascript">
    $(function() {
        $('.date-picker').datepicker( {
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'MM yy',
            onClose: function(dateText, inst) { 
                var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                $(this).datepicker('setDate', new Date(year, month, 1));
            },
            beforeShow : function(input, inst) {
                var datestr;
                if ((datestr = $(this).val()).length > 0) {
                    year = datestr.substring(datestr.length-4, datestr.length);
                    month = jQuery.inArray(datestr.substring(0, datestr.length-5), $(this).datepicker('option', 'monthNamesShort'));
                    $(this).datepicker('option', 'defaultDate', new Date(year, month, 1));
                    $(this).datepicker('setDate', new Date(year, month, 1));
                }
            }
        });
    });
    </script>
    <style>
    .ui-datepicker-calendar {
        display: none;
        }
		.ui-datepicker-month
		{
			color:#444444;
			display:inline;
			float:left;
		}
		.ui-datepicker-year
		{
			color:#444444;
			display:inline;
			float:left;
		}
    </style>
	

<?php 
include("footer.php");

 ?>