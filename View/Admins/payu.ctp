<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SACHAIT PAYMENT </title>
<?php echo $this->Html->css('bootstrap.min');?>
<style type="text/css">
.tran-wariir-logo{ width:100%; margin:0px; padding:10px;}
.tran-wariir-logo .pager{background:#FFF; border-radius:10px;}
.transaction .form_wrap .form_control .tran-wariir-logo .pager img{width:25%; margin:0px; padding:4px;}
.transaction{ width:100%; margin:0px; padding:0px; float:left;}
.transaction p{color:#666; text-align:left; margin:0px; font-size:17px; padding-bottom:14px;}
.transaction .form_wrap{width:50%; margin:60px auto}
.transaction .form_wrap .form_control{width:100%; border-radius:10px; margin:0px; padding:px; float:left; background:#e1e1e1; border:1px solid #898989}
.transaction .form_wrap .form_control input[type="text"]{width:100%; float:right; margin-bottom:16px; padding:7px; border:1px solid #898989}
.transaction .form_wrap .form_control .btn-primary{ padding:5px 34px; margin:0px; border-radius:5px; background:#9ab90e; color:#2b2b2b; font-size:16px; font-weight:bold; border:1px solid #333}
.transaction .form_wrap .form_control .btn-primary:hover{background:#739f0a;border:1px solid #fff; color:#fff; transition:2s all}


@media only screen and (min-device-width: 730px)and (max-device-width: 1024px){
.transaction .form_wrap {width: 50%;margin: 60px auto;}
  .transaction .form_wrap .form_control{width:100%; margin:0px; padding:0px; float:left; background:#eeeeee; border:1px solid #898989}
}
@media only screen and (min-device-width: 360px)and (max-device-width: 700px){
  .transaction{ width:100%; margin:0px; padding:0px; float:left;}
.transaction .form_wrap {width:100%;margin:30px auto;}  
}.transaction .form_wrap .form_control{width:100%; margin:0px; padding:0px; float:left; background:#eeeeee; border:1px solid #898989}
@media only screen and (min-device-width: 200px)and (max-device-width: 359px){
  .transaction{ width:100%; margin:0px; padding:0px; float:left;}
.transaction .form_wrap {width:100%;margin:20px auto;}
.transaction .form_wrap .form_control{width:100%; margin:0px; padding:1      
0px; float:left; background:#eeeeee; border:1px solid #898989}  
    }
    
  </style>
</head>
<?php 
// Merchant key here as provided by Payu
//$MERCHANT_KEY = "nRSIIw";
$MERCHANT_KEY = "3wa7lVlb";

// Merchant Salt as provided by Payu
$SALT = "R5kOZsbtuo";
//$SALT="GQs7yium";
// End point - change to https://secure.payu.in for LIVE mode
//$PAYU_BASE_URL = "https://test.payu.in";
$PAYU_BASE_URL = "https://secure.payu.in";
$action = '';
$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
    
  }

}


$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);

} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
    $hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';  
    foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';

  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';

}
?>
 <script>

    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;

      payuForm.submit();
    }
  </script>



<body onload="submitPayuForm()">
<div class="container-fluid">
  <div class="transaction">
    <div class=" form_wrap">
        
      <div class=" form_control"> 
      <div class="tran-wariir-logo">
     <ul class="pager">
      <img src="<?php echo HTTP_ROOT;?>img/sachet_small.png">
      </ul>
      </div>
<table width="100%">
  <tr>
    <td><p style="text-align:center">NAME</p></td>
    <td><p style="text-align:center"><strong>:</strong></p></td>
    <td><p style="text-align:center"><?php echo ucfirst($customer_info['UserMaster']['first_name'])." ".ucfirst($customer_info['UserMaster']['last_name']);?></p></td>
  </tr>
  <tr>
    <td><p style="text-align:center">Mobile No</p></td>
    <td><p style="text-align:center"><strong>:</strong></p></td>
    <td><p style="text-align:center"><?php echo $customer_info['UserMaster']['mobile'];?></p></td>
  </tr>
  <tr>
    <td><p style="text-align:center">Amount</p></td>
    <td><p style="text-align:center"><strong>:</strong></p></td>
    
    <td><p style="text-align:center"><?php echo $amount;?> Rs</p></td>
    
  </tr>
  <td><p style="text-align:center;display:none;">Payment For</p></td>
    <td><p style="text-align:center;display:none;"><strong>:</strong></p></td>
    
    <td><p style="text-align:center;display:none;"><?php echo ($payment_type=='1')?"cctv":"Internet";?></p></td>
    
  </tr>
  <tr>
    <td><p style="text-align:center">Address</p></td>
    <td><p style="text-align:center"><strong>:</strong></p></td>
    <td><p style="text-align:center"><?php echo (!empty($customer_info['UserMaster']['address']))?$customer_info['UserMaster']['address']:"N/A";?></p></td>
  </tr>
</table>
 <ul class="pager">
          
           <div class="row">
    <?php if($formError) { ?>
    
       <span style="color:red">Please fill all mandatory fields.</span>
     
    <?php } ?>
            <form action="<?php echo $action; ?>" method="post" name="payuForm">
              <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
              <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
               <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
               <input type="hidden" name="email" value="<?php echo $customer_info['UserMaster']['email']; ?>" />
               <input type="hidden" name="phone" value="<?php echo $customer_info['UserMaster']['mobile']; ?>" />
              
                 <input  type="hidden" name="amount" class="form-control txt141" value="<?php echo isset($amount)?$amount:"";?>" readonly/>
               
                <input type="hidden" name="surl" value="<?php echo HTTP_ROOT;?>admins/paySuccess/<?php echo base64_encode($txnid);?>" size="64" readonly />
              <input type="hidden" name="furl" value="<?php echo HTTP_ROOT;?>admins/payFail/<?php echo base64_encode($txnid);?>" size="64" readonly />
             <input type="hidden" name="service_provider" value="payu_paisa" size="64"  readonly/>

            <input type="hidden" name="curl" value="" />
    

        
          <?php if(!$hash) { ?>
          <center><input type="submit" class="btn btn-primary" name="submit" value="Proceed" id="proceed"></center>
          <?php } ?>
        
    </form>
  </div>
               
                </ul>


        
        <!--<p><a href="#" class="btn btn-primary" role="button">SUBMIT</a></p>--> 
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('#proceed').on('click',function(){
        var customer_id='<?php echo $customer_info['UserMaster']['id'];?>'
        var plan_id='<?php echo $plan_id;?>';
        var transaction_id='<?php echo $txnid?>';
        var amount='<?php echo $amount;?>';
        var start_date='<?php echo $dateFrom;?>';
        var end_date='<?php echo $dateTo;?>';
        var payment_type='<?php echo $payment_type;?>';
       
        $.ajax({
        url: '<?php echo HTTP_ROOT; ?>Admins/transactionPlan',
        type: 'POST', // Send post data
        data: 'customer_id='+customer_id+'&transaction_id='+transaction_id+'&amount='+amount+'&plan_id='+plan_id+'&start_date='+start_date+'&end_date='+end_date+'&payment_type='+payment_type,
        async: false,
        success: function(s){
          if(s=='1'){
            return true;
          }
          else{
            return false;
          }
          

          
        }
  });
  
    })
})
</script>
</body>
</html>