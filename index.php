<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<!-- saved from url=(0035)http://localhost/hbldemo/index.html -->
<html class="supernova"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<meta property="og:title" content="HBL Payment Gateway">
<meta property="og:description" content="Please click the link to complete this form.">
<link rel="shortcut icon" href="http://himalayanbank.com/themes/himalayan/assets/ico/hbl-icon.png">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="HandheldFriendly" content="true">
<title>HBL Payment Gateway</title>
<link href="./HBL Career_files/hbl.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="./HBL Career_files/hbl_nova.css">
<link type="text/css" rel="stylesheet" href="./HBL Career_files/theme.css">
<script type="text/Javascript">

</script>
<style type="text/css">
    .form-label-left{
        width:150px;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px;
    }
    body, html{
        margin:0;
        padding:0;
        background:#fff;
    }

    .form-all{
        margin:0px auto;
        padding-top:0px;
        width:80%;/*removed important */
        color:rgb(71, 71, 71) !important;
        font-family:'PT Sans Narrow';
        font-size:14px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: false;
    }
    .vacancy_content{
      padding: 20px;/*remove 50px*/
    }
    .vacancy_bodycontent{
      font-size: 16px;
      padding: 5px;
    }
    .novacancy_footer{
      width: 25%;
      margin-top: 10px;
      margin-bottom: 10px;
    }
    .yesvacancy_footer{
      width: 25%;
      margin-top: 10px;
    }
/*   #header-banner {
        height: 45px!important;
        width: 300px!important;
    }
    .header-banner {
        background-image: url("../image/hbl_logo.png");
        background-repeat: no-repeat;
        background-size: 300px 45px!important;
        float: right;
        position: relative;
        margin-top: 35px;
        margin-right:60px;
    }
    .form-header-group {
        background-image: url("http://cc.hbl.com.np/hblacs2//assets/image/hbl_office2.jpg")!important;
        height: 250px!important;
        width: 100%!important;
        background-size: 100% 535px!important;
    }*/

</style>

<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
@import "https://fonts.googleapis.com/css?family=PT Sans Narrow:light,lightitalic,normal,italic,bold,bolditalic";
</style>

<link type="text/css" rel="stylesheet" href="./HBL Career_files/hbl.css">
</head>
<body>
<form class="jotform-form" action="payment_request.php" method="post" enctype="multipart/form-data" name="form_payment" id="" accept-charset="utf-8">
  <input type="hidden" name="formID" value="92921030145569">
  <div class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group ">
        <a href="http://localhost/hblgateway">  
          <div class="header-banner">
            <div id="header-banner" class="form-subHeader">
              
            </div>
          </div> 
          </a>       
          <div class="header-text httal htvam">
            <h2 id="header_1" class="form-header" data-component="header">
              HBL Payment Gateway
            </h2>
            <div id="subHeader_1" class="form-subHeader">
              <!-- Fill the form below accurately indicating your potentials and suitability to job applying for. -->
            </div>
          </div>          
        </div>
      </li>
                  <li id="yes_vacancy">
        <div class="form-sub-label-container">
           <div class="vacancy_content">
              <h2>Payment Details <?php echo isset($_GET['payment'])?($_GET['payment']=='success'?' - <font color="green">Payment Success</font>':' - <font color="red">Payment failed or canceled</font>'):'' ?></h2>
              <div id="vacancy_body">
                <div class="vacancy_bodycontent">
				<div class="vacancy_desc">
				  	 <span>
						 <input type="tel" id="api_key" name="api_key" class="form-textbox validate[required]" size="50" value="d64fcd5489eb42bebe46c5fcd0cf19be" readonly>
						 <label class="form-sub-label" for="api_key" id="sublabel_api" style="min-height:13px"> API Key </label>
					 </span>
                  </div>
				  <div class="vacancy_desc">
				  	 <span>
						 <input type="tel" id="merchant_id" name="merchant_id" class="form-textbox validate[required]" size="50" value="9103332177" readonly>
						 <label class="form-sub-label" for="merchant_id" id="sublebel_merchant" style="min-height:13px"> Merchant Id </label>
					 </span>
                  </div>
                  <div class="vacancy_desc">
				  	 <span>
						 <select name="input_currency" id="input_currency" data-validation="required" class="form-dropdown validate[required]">
						   <option value="NPR">NPR</option>
						   <option value="USD">USD</option>
						  </select>
						 <label class="form-sub-label" for="currency" id="sublabel_curr" style="min-height:13px"> Currency </label>
					 </span>
                  </div>
				  <div class="vacancy_desc">
				  	 <span>
						 <input type="tel" id="input_amount" name="input_amount" class="form-textbox validate[required]" size="50" value="1">
						 <label class="form-sub-label" for="input_amount" id="sublabel_amount" style="min-height:13px"> Amount </label>
					 </span>
                  </div>
				  <div class="vacancy_desc">
				  	 <span>
						 <select name="input_3d" id="input_3d" data-validation="required" class="form-dropdown validate[required]">
						   <option value="Y">Yes</option>
						   <option value="N">No</option>
						  </select>
						 <label class="form-sub-label" for="input_3d" id="sublabel_amount" style="min-height:13px"> 3D Secure </label>
					 </span>
                  </div>
                  <div class="vacancy_desc">
						<span>
						 <input type="tel" id="success_url" name="success_url" class="form-textbox" size="50" value="http://localhost/hbldemo/?payment=success">
						 <label class="form-sub-label" for="success_url" id="sublebel_success_url" style="min-height:13px"> Success URL </label>
					 </span>
                  </div>
                  <div class="vacancy_desc">
						<span>
						 <input type="tel" id="fail_url" name="fail_url" class="form-textbox" size="50" value="http://localhost/hbldemo/?payment=failed">
						 <label class="form-sub-label" for="fail_url" id="sublebel_fail_url" style="min-height:13px"> Failed URL </label>
					    </span>
                  </div>
                  <div class="vacancy_desc">
						<span>
						 <input type="tel" id="cancel_url" name="cancel_url" class="form-textbox" size="50" value="http://localhost/hbldemo/?payment=cancel">
						 <label class="form-sub-label" for="cancel_url" id="sublebel_cancel_url" style="min-height:13px"> Cancel URL </label>
					    </span>
                  </div>
					<div class="vacancy_desc">
						<span>
						 <input type="tel" id="backend_url" name="backend_url" class="form-textbox" size="50" value="http://localhost/hbldemo/?payment=backend">
						 <label class="form-sub-label" for="backend_url" id="sublebel_backendurl" style="min-height:13px"> Backend URL </label>
					    </span>
                  </div>	
                  <div class="vacancy_desc"> 

					  <button id="input_apply" type="submit" class="form-submit-button" data-component="button">
							Checkout
                      </button>           
                    
                  </div>                                  
                </div>                
              </div>
           </div>
        </div>
      </li>
      <li id="yes_vacancy">
           <div class="vacancy_content">
               <div class="vacancy_bodycontent yesvacancy_footer">
                  <strong>Himalayan Bank Limited</strong><br>
                  Kamaladi, Kathmandu<br>
                  G.P.O. Box: 20590<br>
                  Phone: +977-1- 4227749<br>
                  Fax: +977-1-4222800<br>
                </div>
          </div>
      </li>
           
    </ul>
  </div>
  <input type="hidden" id="simple_spc" name="simple_spc" value="92921030145569">

  <div class="formFooter-heightMask">
  </div>

</form>
</body></html>