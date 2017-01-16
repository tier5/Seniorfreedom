<?php
/*
*Template Name: Mortgage Calculator Page
*/ 
get_header();
?>

<div class="container">
	<div class="row">
         <div class="left-part">
            
         	<!--<h2>REVERSE MORTGAGE CALCULATOR</h2>-->
		<!--<iframe id="ifrm_1" name="ifrm_1" src="http://www.reversevision.com/Tools/Calculator.aspx?companyID=a76b161e-0744-420a-8f0c-6b248a96fdb7" style="width:853px; height:485px;" class="cal_iframe" onload="my_function();"></iframe>-->
		<div class="col-md-8 col-sm-8 col-sm-offset-2"> 
                    <div class="calculator-sec">
                      <h2>Reverse Mortgage Calculator</h2>
                      <form>
                          <div class="form-group">
                            <label class="label">Your date of birth:</label>
                            <input type="text" class="form-control" placeholder="MM/DD/YY">
                          </div>
                          <div class="form-group">
                            <label class="label">Your spouse's date of birth (If applicable)</label>
                            <input type="text" class="form-control" placeholder="MM/DD/YY">
                          </div>
                          <div class="form-group">
                            <label class="label">Zip code:</label>
                            <input type="text" class="form-control" placeholder="MM/DD/YY">
                          </div>
                          <div class="form-group">
                            <label class="label">Estimated value of your home:</label>
                            <input type="text" class="form-control" placeholder="MM/DD/YY">
                          </div>
                          <div class="form-group">
                            <label class="label">Mortgages and liens against your home:</label>
                            <input type="text" class="form-control" placeholder="MM/DD/YY">
                          </div>
                          <div class="form-group">
                          <input class="red-btn" type="submit" value="Calculate" name="">
                          <div class="clearfix"></div>
                          </div>
                      </form>
                    </div>
                 </div> 

</div></div>

</div>
<script type='text/javascript'>
function my_function(){

	//alert('huuuu');
	$('#ifrm_1').find('#CalendarDOB1').css('background','red');
}
	jQuery(function(my_function){
		setTimeout(function(){
			console.log($('#ifrm_1').contents().find('#CalendarDOB1').css('background','red'));
			//$($('#ifrm_1').contents()).html('hhhhh');
			//alert('complete');
		},5000);
	});

//window.setTimeout(function(){
  //$('.cal_iframe').contents().find('#CalendarDOB1').css('background','red');
//}, 1000);
// window.setTimeout(function(){
// var $iFrameHead = $("#ifrm_1").contents().find("head");
// $iFrameHead .append(
//    $("<link/>",{ 
//       rel: "stylesheet", 
//       href: "http://159.203.95.124/wp-content/themes/senior/style.css" , 
//       type: "text/css" }
//      ));
// }, 1000);
</script >
<?php get_footer();?>