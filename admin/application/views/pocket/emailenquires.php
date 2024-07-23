<?php


//echo $name;

//echo $companyname;

//echo $email;

//echo $phone;
//echo $message;

//echo "'name'=>$name,'companyname'=>$name,'email'=>$email,'phone'=>$phone,'message'=>$message";

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Contact Us Enquiries </title>
	<style>
		/* Responsive */
		@media only screen and (max-width: 640px) {

			/* Tables
    parameters: width, alignment, padding */
			table.w3l-scale {
				width: 100% !important;
			}

			table.w3l-scale-300 {
				width: 100% !important;
				height: 300px !important;
			}

			table.w3l-scale-90 {
				width: 90% !important;
			}

			/* Td */
			td.w3l-scale-left {
				width: 100% !important;
				text-align: left !important;
			}

			td.w3l-scale-smaller {
				height: 200px !important;
			}

			td.w3l-scale-height {
				height: 70px !important;
			}

			td.w3l-scale-left-bottom {
				width: 100% !important;
				text-align: left !important;
				padding-bottom: 24px !important;
			}

			td.w3l-scale-left-top {
				width: 100% !important;
				text-align: left !important;
				padding-top: 24px !important;
			}

			td.w3l-scale-left-all {
				width: 100% !important;
				text-align: left !important;
				padding-top: 24px !important;
				padding-bottom: 24px !important;
			}

			td.w3l-scale-center {
				width: 100% !important;
				text-align: center !important;
			}

			td.w3l-scale-center-both {
				width: 100% !important;
				text-align: center !important;
				padding-left: 20px !important;
				padding-right: 20px !important;
			}

			td.w3l-scale-center-bottom {
				width: 100% !important;
				text-align: center !important;
				padding-bottom: 24px !important;
			}

			td.w3l-scale-center-top {
				width: 100% !important;
				text-align: center !important;
				padding-top: 24px !important;
			}

			td.w3l-scale-center-all {
				width: 100% !important;
				text-align: center !important;
				padding-top: 24px !important;
				padding-bottom: 24px !important;
				padding-left: 20px !important;
				padding-right: 20px !important;
			}

			td.w3l-scale-right {
				width: 100% !important;
				text-align: right !important;
			}

			td.w3l-scale-right-bottom {
				width: 100% !important;
				text-align: right !important;
				padding-bottom: 24px !important;
			}

			td.w3l-scale-right-top {
				width: 100% !important;
				text-align: right !important;
				padding-top: 24px !important;
			}

			td.w3l-scale-right-all {
				width: 100% !important;
				text-align: right !important;
				padding-top: 24px !important;
				padding-bottom: 24px !important;
			}

			td.w3l-scale-center-bottom-both {
				width: 100% !important;
				text-align: center !important;
				padding-bottom: 24px !important;
				padding-left: 20px !important;
				padding-right: 20px !important;
			}

			td.w3l-scale-center-top-both {
				width: 100% !important;
				text-align: center !important;
				padding-top: 24px !important;
				padding-left: 20px !important;
				padding-right: 20px !important;
			}

			td.w3l-scale-center-topextra {
				width: 100% !important;
				text-align: center !important;
				padding-top: 50px !important;
			}

			img.w3l-scale {
				width: 100% !important;
			}
			input.form-control {
    padding: 10px;
    border-radius: 5px;
    border: none;
}
		}
	</style>
</head>

<body style="margin:0; padding:0;">
	<table align="center" border="0" cellpadding="0" cellspacing="0" class="w3l-scale" style="background-color: #EAECED" width="100%">
		<tr>
			<td height="40" style="font-size: 1px">&nbsp;</td>
		</tr>
		<tr>
			<td align="center" style="font-size: 12px; font-size: 12px; color: #999999;">
				<a href="#"
					style="color:#000; font-size:40px; font-weight: bold; font-family: helvetica, arial, sans-serif; text-decoration: none;"><img src="<?php echo base_url().'pockets/assets/images/logo.png';?>" ></a>
			</td>
		</tr>
		<tr>
			<td height="25" style="font-size: 1px">&nbsp;</td>
		</tr>
		<tr>
			<td>
				<table align="center" border="0" cellpadding="0" cellspacing="0" class="w3l-scale-90"
					style="background:linear-gradient(to right, #8101ae, #7622bb, #6733c8, #5441d4, #384ddf); border-radius: 10px; overflow: hidden" width="620">
					<tr>
						<td align="center">
							<a href="#"><img border="0" class="w3l-scale" src="<?php echo base_url().'pockets/assets/images/mainbanner.jpg';?>" style="display: block; width: 100%;"></a>
						</td>
					</tr>

					<tr>
						<td height="50" style="font-size: 1px">&nbsp;</td>
					</tr>
					<tr>
						<td>
							<table align="center" border="0" cellpadding="0" cellspacing="0" class="w3l-scale" width="100%">
								<tr>
									<td>
										<table align="left" border="0" cellpadding="0" cellspacing="0" class="w3l-scale" width="860">
											<tr>
												<td>
												
													<table align="right" border="0" cellpadding="0" cellspacing="0" class="w3l-scale" width="100%" >
														<tr>
															<td class="labelvalue" style="font-size: 20px;color: #ddd;text-align: right;">First Name:</td>
															<td class="filedValue" style="font-size: 20px;color: #fff;text-align: left;"> <?php


echo $firstname;?></td>

														</tr>
														<tr>
															<td height="30" style="font-size: 1px">&nbsp;</td>
														</tr>
														<tr>
															<td class="labelvalue" style="font-size: 20px;color: #ddd;text-align: right;">Last Name:</td>
															<td class="filedValue" style="font-size: 20px;color: #fff;text-align: left;">  <?php


echo $lastname;?></td>

														</tr>
														<tr>
															<td height="30" style="font-size: 1px">&nbsp;</td>
														</tr>
														<tr>
															<td class="labelvalue" style="font-size: 20px;color: #ddd;text-align: right;">Email:</td>
															<td class="filedValue" style="font-size: 20px;color: #fff;text-align: left;">  <?php


echo  $email;?></td>

														</tr>
                                                        <tr>
															<td height="30" style="font-size: 1px">&nbsp;</td>
														</tr>
                                                        <tr>
															<td class="labelvalue" style="font-size: 20px;color: #ddd;text-align: right;">Phone :</td>
															<td class="filedValue" style="font-size: 20px;color: #fff;text-align: left;">  <?php


echo  $phone;?></td>

														</tr>


                                                        <tr>
															<td height="30" style="font-size: 1px">&nbsp;</td>
														</tr>
                                                        <tr>
															<td class="labelvalue" style="font-size: 20px;color: #ddd;text-align: right;">Website Duration :</td>
															<td class="filedValue" style="font-size: 20px;color: #fff;text-align: left;">  <?php


echo  $businesswebsiteduration;?></td>

														</tr>
                           



                                                        <?php if (isset($packagename)){ ?>



                                              

                                                        <tr>
															<td class="labelvalue" style="font-size: 20px;color: #ddd;text-align: right;">Package Name :</td>
															<td class="filedValue" style="font-size: 20px;color: #fff;text-align: left;">  <?php


echo $packagename;?></td>

														</tr>
                                                   <?php  }?>
                                                   <?php if (isset($natureofbusiness)){ ?>

                                                        <tr>
															<td class="labelvalue" style="font-size: 20px;color: #ddd;text-align: right;">Nature of business :</td>
															<td class="filedValue" style="font-size: 20px;color: #fff;text-align: left;">  <?php


echo  $natureofbusiness;?></td>

														</tr>
                                                        <?php  }?>





                                                        
														<tr>
															<td height="30" style="font-size: 1px">&nbsp;</td>
														</tr>
														<tr>
															<td class="labelvalue" style="font-size: 20px;color: #ddd;text-align: right;">Note:</td>
															<td class="filedValue" style="font-size: 20px;color: #fff;text-align: left;">  <?php


echo $message;?></td>

														</tr>
													</table>
												</td>
											</tr>
										</table>
										
									</td>
								</tr>
								<tr>
									<td height="30" style="font-size: 1px">&nbsp;</td>
								</tr>
							</table>
							
						</td>
					</tr>
					<tr>
						<td height="30" style="font-size: 1px">&nbsp;</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	
	
	
	
	
	<table align="center" border="0" cellpadding="0" cellspacing="0" class="w3l-scale" style="background-color: #EAECED" width="100%">
		<tr>
			<td height="30" style="font-size: 1px">&nbsp;</td>
		</tr>
		<tr>
			<td>
				<table align="center" border="0" cellpadding="0" cellspacing="0" class="w3l-scale-90"
					style="background-color: #FFFFFF; border-radius: 10px; overflow: hidden" width="620">
					<tr>
						<td height="30" style="font-size: 1px">&nbsp;</td>
					</tr>
					<tr>
						<td>
							<table align="center" border="0" cellpadding="0" cellspacing="0" class="w3l-scale" width="560">
								<tr>
									<td>
										<table align="left" border="0" cellpadding="0" cellspacing="0" class="w3l-scale" style="font-size: 14px; color: #9b9b9b;"
											width="197">
											<tr>
												<td class="w3l-scale-center-both" height="50"><a href="#url"><img src="<?php echo base_url().'pockets/assets/images/email-tw.png';?>"></a>&nbsp; &nbsp;
													<a href="#url"><img src="<?php echo base_url().'pockets/assets/images/email-pint.png';?>"></a>&nbsp; &nbsp;
													<a href="#url"><img src="<?php echo base_url().'pockets/assets/images/email-fb.png';?>"></a>
												</td>
											</tr>
										</table>
										<table align="right" border="0" cellpadding="0" cellspacing="0" class="w3l-scale" width="333">
											<tr>
												<td>
													
													<table align="right" border="0" cellpadding="0" cellspacing="0" class="w3l-scale" style="font-size: 14px; color: #9b9b9b;"
														width="97">
														<tr>
															<td align="left" class="w3l-scale-center-both" height="50" style="font-size: 13px; color: #666; line-height: 24px;">
																<a href="#" style="color: #666; font-family: helvetica, arial, sans-serif;">CopyrightbyPocketFriendlyWeb </a>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td height="30" style="font-size: 1px">&nbsp;</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td height="70" style="font-size: 1px">&nbsp;</td>
		</tr>
	</table>
</body>

</html>