<div id="wait" style="display:none;position:absolute;top:50%;left:50%;padding:2px; z-index: 2000;"><img src='/img/ajaxloader.gif'/>Loading...</div> 
<?php //var_dump($_REQUEST);
$u = '';
$l = '';
if(isset($_REQUEST['u'])){$u = $_REQUEST['u']; }
if(isset($_REQUEST['l'])){$l = $_REQUEST['l']; }

?>
<!-- Entries Column -->
<br /><br />
<h1>Risk assessment calculator</h1>  

<div class="progress progress-striped active">
    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<br />
<div class="page-container">                
<form class="form" id="form_id">

<div id="1">
<h2>Background and financial situation</h2>
<h4>BACKGROUND INFORMATION</h4>
<hr />

<div class="form-group row">
    <label for="full_name" class="col-6 col-form-label">Full name</label> 
    <div class="col-6">
      <input id="full_name" name="full_name" type="text" class="form-control" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="email_address" class="col-6 col-form-label">Email address</label> 
    <div class="col-6">
      <input id="email_address" name="email_address" type="email" class="form-control" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="age" class="col-6 col-form-label">Age</label> 
    <div class="col-6">
      <input id="age" name="age" type="text" class="form-control" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="relationship_status" class="col-6 col-form-label">Relationship status</label> 
    <div class="col-6">
      <select id="relationship_status" name="relationship_status" class="form-control">
        <option value="1">Single</option>
        <option value="2">Married/Civil partnership</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="number_of_dependents" class="col-6 col-form-label">Number of dependents</label> 
    <div class="col-6">
      <select id="number_of_dependents" name="number_of_dependents" class="form-control">
        <option value="1">0</option>
        <option value="1.03">1</option>
        <option value="1.06">2</option>
        <option value="1.1">3+</option>
      </select>
    </div>
  </div>
  
<h4>Your Annual Income</h4>
<em>Please provide details of your total annual income</em>
<hr />
  <div class="form-group row">
    <label for="employment_income" class="col-6 col-form-label">Employment income</label> 
    <div class="col-6">
      <input id="employment_income" name="employment_income" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="pension_income" class="col-6 col-form-label">Pension income</label> 
    <div class="col-6">
      <input id="pension_income" name="pension_income" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="investment_income" class="col-6 col-form-label">Investment Income</label> 
    <div class="col-6">
      <input id="investment_income" name="investment_income" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="other_income" class="col-6 col-form-label">Other income</label> 
    <div class="col-6">
      <input id="other_income" name="other_income" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="total_income" class="col-6 col-form-label"><strong>TOTAL INCOME</strong></label> 
    <div class="col-6">
      <input id="total_income" name="total_income" type="text" class="form-control" disabled="disabled">
    </div>
  </div>
    
<h4>Your Assets</h4>
<em>Pleaseprovide details of the combined value of yourassets</em>
<hr />
  <div class="form-group row">
    <label for="cash_savings" class="col-6 col-form-label">Cash savings</label> 
    <div class="col-6">
      <input id="cash_savings" name="cash_savings" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="pensions_including_sipps" class="col-6 col-form-label">Pensions (including SIPPs)</label> 
    <div class="col-6">
      <input id="pensions_including_sipps" name="pensions_including_sipps" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="property_including_investment_properties" class="col-6 col-form-label">Property (including investment properties)</label> 
    <div class="col-6">
      <input id="property_including_investment_properties" name="property_including_investment_properties" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="investment_portfolios" class="col-6 col-form-label">Investment Portfolios</label> 
    <div class="col-6">
      <input id="investment_portfolios" name="investment_portfolios" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="total_assets" class="col-6 col-form-label"><strong>TOTAL ASSETS</strong></label> 
    <div class="col-6">
      <input id="total_assets" name="total_assets" type="text" class="form-control" disabled="disabled">
    </div>
  </div>
  <div class="form-group row">
    <label for="total_liquid_assets" class="col-6 col-form-label"><strong>TOTAL LIQUID ASSETS</strong></label> 
    <div class="col-6">
      <input id="total_liquid_assets" name="total_liquid_assets" type="text" class="form-control" readonly="readonly">
    </div>
  </div>
    
<h4>Your Liabilities</h4>
<em>Pleaseprovide details of any liabilities you may have</em>
<hr />
  <div class="form-group row">
    <label for="mortgages" class="col-6 col-form-label">Mortgages</label> 
    <div class="col-6">
      <input id="mortgages" name="mortgages" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="other_secured_loans" class="col-6 col-form-label">Other secured loans</label> 
    <div class="col-6">
      <input id="other_secured_loans" name="other_secured_loans" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="credit_card_debt" class="col-6 col-form-label">Credit Card debt</label> 
    <div class="col-6">
      <input id="credit_card_debt" name="credit_card_debt" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="other_unsecured_loans" class="col-6 col-form-label">Other unsecured loans</label> 
    <div class="col-6">
      <input id="other_unsecured_loans" name="other_unsecured_loans" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="total_liabilities" class="col-6 col-form-label"><strong>TOTAL LIABILITIES</strong></label> 
    <div class="col-6">
      <input id="total_liabilities" name="total_liabilities" type="text" class="form-control" disabled="disabled">
    </div>
  </div>
  <div class="form-group row">
    <label for="total_current_liabilities" class="col-6 col-form-label"><strong>TOTAL CURRENT LIABILITIES</strong></label> 
    <div class="col-6">
      <input id="total_current_liabilities" name="total_current_liabilities" type="text" class="form-control" disabled="disabled">
    </div>
  </div>
    
<h4>YOUR SPENDING</h4>
<em>How much do you spend on the following each month?</em>
<hr />
  <div class="form-group row">
    <label for="rent_mortgage_payments" class="col-6 col-form-label">Rent/Mortgage payments</label> 
    <div class="col-6">
      <input id="rent_mortgage_payments" name="rent_mortgage_payments" type="text" class="form-control" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="utilities_electricity_water_internet_etc" class="col-6 col-form-label">Utilities (electricity, water, internet etc.)</label> 
    <div class="col-6">
      <input id="utilities_electricity_water_internet_etc" name="utilities_electricity_water_internet_etc" type="text" class="form-control" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="food" class="col-6 col-form-label">Food</label> 
    <div class="col-6">
      <input id="food" name="food" type="text" class="form-control" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="debt_repayment" class="col-6 col-form-label">Debt repayment</label> 
    <div class="col-6">
      <input id="debt_repayment" name="debt_repayment" type="text" class="form-control" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="other" class="col-6 col-form-label">Other</label> 
    <div class="col-6">
      <input id="other" name="other" type="text" class="form-control" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="total_monthly_spend" class="col-6 col-form-label">TOTAL MONTHLY SPEND</label> 
    <div class="col-6">
      <input id="total_monthly_spend" name="total_monthly_spend" type="text" class="form-control" disabled="disabled">
    </div>
  </div>
  <div class="form-group row">
    <label for="total_annual_spend" class="col-6 col-form-label">TOTAL ANNUAL SPEND</label> 
    <div class="col-6">
      <input id="total_annual_spend" name="total_annual_spend" type="text" class="form-control" disabled="disabled">
    </div>
  </div> 
   
<hr />
<div class="btnGroup text-right bdtop"> 
 <button type="submit" onclick= "nextQuestion(1)"  class="btn btn-primary pull-right">Next</button>
</div>
</div>

<!-- 2 -->
<div id="2">
<h1>Attitudes</h1>
<hr />
<div class="wrap" id="scrolltop">
    <label class="statement">People who know me would describe me as cautious</label>
    <ul class='likert'>
      <li><input type="radio" name="q1" value="1"><label>Strongly agree</label></li>
      <li><input type="radio" name="q1" value="2"><label>Agree</label></li>
      <li><input type="radio" name="q1" value="3"><label>Unsure</label></li>
      <li><input type="radio" name="q1" value="4"><label>Disagree</label></li>
      <li><input type="radio" name="q1" value="5"><label>Strongly disagree</label></li>
    </ul>
    <label class="statement">Investing comes comfortably to me</label>
    <ul class='likert'>
      <li><input type="radio" name="q2" value="5"><label>Strongly agree</label></li>
      <li><input type="radio" name="q2" value="4"><label>Agree</label></li>
      <li><input type="radio" name="q2" value="3"><label>Unsure</label></li>
      <li><input type="radio" name="q2" value="2"><label>Disagree</label></li>
      <li><input type="radio" name="q2" value="1"><label>Strongly disagree</label></li>
    </ul>
    <label class="statement">I don't panic easily</label>
    <ul class='likert'>
      <li><input type="radio" name="q3" value="5"><label>Strongly agree</label></li>
      <li><input type="radio" name="q3" value="4"><label>Agree</label></li>
      <li><input type="radio" name="q3" value="3"><label>Unsure</label></li>
      <li><input type="radio" name="q3" value="2"><label>Disagree</label></li>
      <li><input type="radio" name="q3" value="1"><label>Strongly disagree</label></li>
    </ul>
    <label class="statement">I am willing to take on more risk to earn more return</label>
    <ul class='likert'>
      <li><input type="radio" name="q4" value="5"><label>Strongly agree</label></li>
      <li><input type="radio" name="q4" value="4"><label>Agree</label></li>
      <li><input type="radio" name="q4" value="3"><label>Unsure</label></li>
      <li><input type="radio" name="q4" value="2"><label>Disagree</label></li>
      <li><input type="radio" name="q4" value="1"><label>Strongly disagree</label></li>
    </ul>
    <label class="statement">Compared to others I am prepared to take higher financial risks</label>
    <ul class='likert'>
      <li><input type="radio" name="q5" value="5"><label>Strongly agree</label></li>
      <li><input type="radio" name="q5" value="4"><label>Agree</label></li>
      <li><input type="radio" name="q5" value="3"><label>Unsure</label></li>
      <li><input type="radio" name="q5" value="2"><label>Disagree</label></li>
      <li><input type="radio" name="q5" value="1"><label>Strongly disagree</label></li>
    </ul>
    <label class="statement">I tend to be anxious about my investment decisions</label>
    <ul class='likert'>
      <li><input type="radio" name="q6" value="1"><label>Strongly agree</label></li>
      <li><input type="radio" name="q6" value="2"><label>Agree</label></li>
      <li><input type="radio" name="q6" value="3"><label>Unsure</label></li>
      <li><input type="radio" name="q6" value="4"><label>Disagree</label></li>
      <li><input type="radio" name="q6" value="5"><label>Strongly disagree</label></li>
    </ul>
    <label class="statement">I can easily get stressed</label>
    <ul class='likert'>
      <li><input type="radio" name="q7" value="1"><label>Strongly agree</label></li>
      <li><input type="radio" name="q7" value="2"><label>Agree</label></li>
      <li><input type="radio" name="q7" value="3"><label>Unsure</label></li>
      <li><input type="radio" name="q7" value="4"><label>Disagree</label></li>
      <li><input type="radio" name="q7" value="5"><label>Strongly disagree</label></li>
    </ul>
    <label class="statement">Even if the returns might be higher, I would prefer to stay away from something that might decrease in value</label>
    <ul class='likert'>
      <li><input type="radio" name="q8" value="1"><label>Strongly agree</label></li>
      <li><input type="radio" name="q8" value="2"><label>Agree</label></li>
      <li><input type="radio" name="q8" value="3"><label>Unsure</label></li>
      <li><input type="radio" name="q8" value="4"><label>Disagree</label></li>
      <li><input type="radio" name="q8" value="5"><label>Strongly disagree</label></li>
    </ul>
    <label class="statement">I have experience putting money into a risky investment</label>
    <ul class='likert'>
      <li><input type="radio" name="q9" value="5"><label>Strongly agree</label></li>
      <li><input type="radio" name="q9" value="4"><label>Agree</label></li>
      <li><input type="radio" name="q9" value="3"><label>Unsure</label></li>
      <li><input type="radio" name="q9" value="2"><label>Disagree</label></li>
      <li><input type="radio" name="q9" value="1"><label>Strongly disagree</label></li>
    </ul>
    <label class="statement">I wouldn't even put a small amount of money into high-risk investments</label>
    <ul class='likert'>
      <li><input type="radio" name="q10" value="1"><label>Strongly agree</label></li>
      <li><input type="radio" name="q10" value="2"><label>Agree</label></li>
      <li><input type="radio" name="q10" value="3"><label>Unsure</label></li>
      <li><input type="radio" name="q10" value="4"><label>Disagree</label></li>
      <li><input type="radio" name="q10" value="5"><label>Strongly disagree</label></li>
    </ul>
    <label class="statement">Uncertainty always makes me feel stressed and anxious</label>
    <ul class='likert'>
      <li><input type="radio" name="q11" value="1"><label>Strongly agree</label></li>
      <li><input type="radio" name="q11" value="2"><label>Agree</label></li>
      <li><input type="radio" name="q11" value="3"><label>Unsure</label></li>
      <li><input type="radio" name="q11" value="4"><label>Disagree</label></li>
      <li><input type="radio" name="q11" value="5"><label>Strongly disagree</label></li>
    </ul>
    <label class="statement">Compared to holding cash, investing is too risky</label>
    <ul class='likert'>
      <li><input type="radio" name="q12" value="1"><label>Strongly agree</label></li>
      <li><input type="radio" name="q12" value="2"><label>Agree</label></li>
      <li><input type="radio" name="q12" value="3"><label>Unsure</label></li>
      <li><input type="radio" name="q12" value="4"><label>Disagree</label></li>
      <li><input type="radio" name="q12" value="5"><label>Strongly disagree</label></li>
    </ul>    
    <label class="statement">I am comfortable taking on some risk</label>
    <ul class='likert'>
      <li><input type="radio" name="q13" value="5"><label>Strongly agree</label></li>
      <li><input type="radio" name="q13" value="4"><label>Agree</label></li>
      <li><input type="radio" name="q13" value="3"><label>Unsure</label></li>
      <li><input type="radio" name="q13" value="2"><label>Disagree</label></li>
      <li><input type="radio" name="q13" value="1"><label>Strongly disagree</label></li>
    </ul>
    <label class="statement">I am generally aware of the main finance news stories</label>
    <ul class='likert'>
      <li><input type="radio" name="q14" value="5"/><label>Strongly agree</label></li>
      <li><input type="radio" name="q14" value="4"/><label>Agree</label></li>
      <li><input type="radio" name="q14" value="3"/><label>Unsure</label></li>
      <li><input type="radio" name="q14" value="2"/><label>Disagree</label></li>
      <li><input type="radio" name="q14" value="1"/><label>Strongly disagree</label></li>
    </ul>
 
</div>

<hr />
<div class="btnGroup text-right bdtop">                          
    <button onclick= "previousQuestion(2)" class="btn btn-primary pull-left">Previous</button>
    <button onclick= "nextQuestion(2)" id="fin" class="btn btn-primary">Next</button>
</div> 
</div>

<input type="hidden" id="u" name="u" value="<?=$u;?>">
<input type="hidden" id="l" name="l" value="<?=$l;?>">

<input type="hidden" id="total_income_hidden" name="total_income_hidden" value="0">
<input type="hidden" id="total_assets_hidden" name="total_assets_hidden" value="0">
<input type="hidden" id="total_liquid_assets_hidden" name="total_liquid_assets_hidden" value="0">
<input type="hidden" id="total_liabilities_hidden" name="total_liabilities_hidden" value="0">
<input type="hidden" id="total_current_liabilities_hidden" name="total_current_liabilities_hidden" value="0">
<input type="hidden" id="total_monthly_spend_hidden" name="total_monthly_spend_hidden" value="0">
<input type="hidden" id="total_annual_spend_hidden" name="total_annual_spend_hidden" value="0">

</form>

<div id="3">




  <!--	<canvas width=380 height=150 id="canvas-preview"></canvas>
  	<div id="preview-textfield"></div>
  </div>-->
<div id="results-table"></div>

<div class="clearfix"></div>
<hr />
<div class="btnGroup text-right bdtop">                              
        <button onclick= "previousQuestion(3)" class="btn btn-primary pull-left">Previous</button>
    <!--<button onclick= "nextQuestion(2)" class="btn btn-primary">Next</button>-->
</div> 
</div>

</div>
<br />


<script>
$(document).ready(function () {
  $("#employment_income, #pension_income, #investment_income, #other_income").on('change',function(){
          var employment_income = $('#employment_income').val();
          var pension_income = $('#pension_income').val();
          var investment_income = $('#investment_income').val();
          var other_income = $('#other_income').val();
          var total_income = employment_income*1 + pension_income*1 + investment_income*1 + other_income*1;
          $('#total_income').val(total_income);
          $('#total_income_hidden').val(total_income);
    })
    
  $("#cash_savings, #pensions_including_sipps, #property_including_investment_properties, #investment_portfolios").on('change',function(){
      var cash_savings = $('#cash_savings').val();
      var pensions_including_sipps = $('#pensions_including_sipps').val();
      var property_including_investment_properties = $('#property_including_investment_properties').val();
      var investment_portfolios = $('#investment_portfolios').val();
      
      var total_assets = cash_savings*1 + pensions_including_sipps*1 + property_including_investment_properties*1 + investment_portfolios*1;
      $('#total_assets').val(total_assets);
      $('#total_assets_hidden').val(total_assets);
      var total_liquid_assets = cash_savings*1 + pensions_including_sipps*1 + investment_portfolios*1;
      $('#total_liquid_assets').val(total_liquid_assets);
      $('#total_liquid_assets_hidden').val(total_liquid_assets);
    })
    
  $("#mortgages, #other_secured_loans, #credit_card_debt, #other_unsecured_loans").on('change',function(){
          var mortgages = $('#mortgages').val();
          var other_secured_loans = $('#other_secured_loans').val();
          var credit_card_debt = $('#credit_card_debt').val();
          var other_unsecured_loans = $('#other_unsecured_loans').val();
          var total_liabilities = mortgages*1 + other_secured_loans*1 + credit_card_debt*1 + other_unsecured_loans*1;
          $('#total_liabilities').val(total_liabilities);
          $('#total_liabilities_hidden').val(total_liabilities);
          var total_current_liabilities = credit_card_debt*1 + other_unsecured_loans*1;
          $('#total_current_liabilities').val(total_current_liabilities);
          $('#total_current_liabilities_hidden').val(total_current_liabilities);
    })
    
  $("#rent_mortgage_payments, #utilities_electricity_water_internet_etc, #food, #debt_repayment, #other").on('change',function(){
          var rent_mortgage_payments = $('#rent_mortgage_payments').val();
          var utilities_electricity_water_internet_etc = $('#utilities_electricity_water_internet_etc').val();
          var food = $('#food').val();
          var debt_repayment = $('#debt_repayment').val();
          var other = $('#other').val(); 
          var total_monthly_spend = rent_mortgage_payments*1 + utilities_electricity_water_internet_etc*1 + food*1 + debt_repayment*1 + other*1;
          $('#total_monthly_spend').val(total_monthly_spend);
          $('#total_monthly_spend_hidden').val(total_monthly_spend);
          $('#total_annual_spend').val(total_monthly_spend*12);
          $('#total_annual_spend_hidden').val(total_monthly_spend*12);
    })
    
    
    $.validator.addMethod('minStrict', function (value, el, param) {
    return value > param;
});   
});

/////////////////////////////////////////////////////////////////////////////////////////////

var valeur = 0;

function secondpagecheck(){
        if($("input:radio[name='q1']").is(":checked") &&
           $("input:radio[name='q2']").is(":checked") &&
           $("input:radio[name='q3']").is(":checked") &&
           $("input:radio[name='q4']").is(":checked") &&
           $("input:radio[name='q5']").is(":checked") &&
           $("input:radio[name='q6']").is(":checked") &&
           $("input:radio[name='q7']").is(":checked") &&
           $("input:radio[name='q8']").is(":checked") &&
           $("input:radio[name='q9']").is(":checked") &&
           $("input:radio[name='q10']").is(":checked") &&
           $("input:radio[name='q11']").is(":checked") &&
           $("input:radio[name='q12']").is(":checked") &&
           $("input:radio[name='q13']").is(":checked") &&
           $("input:radio[name='q14']").is(":checked") ) { $("#fin").removeAttr('disabled');}
}

$('#2, #3').hide();
$("#fin").prop("disabled", true);
$('input:radio').click(function(){
    secondpagecheck();
})


//$('#child5, #child4, #child3, #child2').show();
function nextQuestion(id){
        var change_page = true; 
        var total_liquid_assets = $('#total_liquid_assets').val();
        
        if(id == 1){
            $('#total_liquid_assets').prop('disabled', false);
            if(!$("#form_id").valid()){
                            
            window.stop();
            change_page = false;
            }else if(total_liquid_assets==0 || total_liquid_assets==''){
                    //$("#total_liquid_assets div.error").html("This field must be greater than 0.")
                    
                    alert("TOTAL LIQUID ASSETS must be greater than 0.");
                    $("#total_liquid_assets").focus(); 
		          	 window.stop();
                    change_page = false;                 
                } 
                
        }
        
        if(id==1){

            
            secondpagecheck();
            }
            
        if(id==2){
           
            showValues();
            }
        
        if(change_page){
        //if(next == 2){secondpagecheck();}
        var val1 = 50;// 100/(2+childs*2);
        var valeur = (id-1)*val1 + val1; //  100/(2+childs*2);
        
        $('.progress-bar').css('width', valeur+'%').attr('aria-valuenow', valeur); 

        $('#1, #2, #3').hide("fast");
        var next = (id*1 + 1);   
               
        var curid = '#'+id; 
        var nextid = '#'+next; 
        $(curid).hide("fast");
    	$(nextid).animate( { "opacity": "show", top:"100"} , 1500 );

    $("html, body").animate({ scrollTop: 0 }, 600);

        
        }
   
};

function previousQuestion(id){ 
    var childs = $( '#number_of_children' ).val();
    var val1 = 50;// 100/(2+childs*2);
    var valeur = (id-1)*val1 - val1; //  100/(2+childs*2);
        
    $('.progress-bar').css('width', valeur+'%').attr('aria-valuenow', valeur); 
    
    $('#1, #2, #3').hide("fast");
    var prev = (id*1 - 1);
    
    var curid = '#'+id; 
    var previd = '#'+prev; 
    $(curid).hide("fast");
	$(previd).animate( { "opacity": "show", top:"100"} , 1500 );
};

</script>
 
<script>
$("#form_id").submit(function(){return false;});

  function showValues(){       
     var form=$("#form_id").serialize(); 
             
    $.ajax({
			type: 'post',
			url: '/results/show',
			data: form,
            //data: arr,
            beforeSend: function(){$("#wait").css("display", "block");},
			success: function (dat) {
			     $("#wait").css("display", "none");
			     $( '#results-table' ).html(dat); 
           	}
        });
    }
</script>