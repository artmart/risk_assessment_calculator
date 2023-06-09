<style>
#container2{
    background: #fff;
 
}

.page-container{
    background: #fff;
    
}

body{
	font-family: Verdana, Arial, Helvetica, sans-serif;;
    background-color: #fff;
}


</style>

<?php 
use frontend\models\Links;
ini_set('memory_limit', '512M');
ini_set('max_execution_time', 300);
$capacity_for_risk = [];
$attitudes_towards_risk = [];
$overall_result = [];

$capacity_for_risk['Low'] = 'Based on your inputs, you appear to have a Low capacity for risk. Your risk capacity looks at things like your age, any income and expenditure to show you how much risk you are able to take. By having a Low capacity for risk it is unlikely that investing would be a good idea for you. To be able to invest means being able to withstand losses if they occur and your inputs suggest that a loss of capital would be detrimental to you.';
$capacity_for_risk['Medium Low'] = 'Based on your inputs, you appear to have a Medium Low capacity for risk. Your risk capacity looks at things like your age, any income and expenditure to show you how much risk you are able to take. By having a Medium Low capacity for risk it is difficult to say that investing would be a good idea for you. As well as providing an opportunity to capture growth, investing also carries the risk of loss. Based on your inputs it is likely that a loss of capital would be detrimental to you.';
$capacity_for_risk['Moderate'] = 'Based on your inputs, you appear to have a Moderate capacity for risk. Your risk capacity looks at things like your age, any income and expenditure to show you how much risk you are able to take. By having a Moderate capacity for risk you have a Moderate ability to take risk and potentially absorb losses. This suggests that you can afford to put some money into investments.';
$capacity_for_risk['Medium High'] = 'Based on your inputs, you appear to have a Medium High capacity for risk. Your risk capacity looks at things like your age, any income and expenditure to show you how much risk you are able to take. By having a Medium High capacity for risk you have a Medium High ability to take risk and can therefore afford to put some money into investments.';
$capacity_for_risk['High'] = 'Based on your inputs, you appear to have a high capacity for risk. Your risk capacity looks at things like your age, any income and expenditure to show you how much risk you are able to take. By having a high capacity for risk you have a high ability to take risk and can therefore afford to put money into investments.';

$attitudes_towards_risk['Low'] = 'Based on your level of composure, your understanding of finance and your feelings towards risk taking you appear to have a Low tolerance for risk. A Low tolerance for risk means that you are uncomfortable with the idea of taking investment risk in the pursuit of earning a greater return on your money. Investing is a riskier activity than holding cash and your responses suggest that you would be uncomfortable seeing the value of your investments move up and down.';
$attitudes_towards_risk['Medium Low'] = 'Based on your level of composure, your understanding of finance and your feelings towards risk taking you appear to have a Medium-Low tolerance for risk. A Medium-Low tolerance for risk means that you are likely to be uncomfortable seeing the value of your investments moving up and down regularly.'; 
$attitudes_towards_risk['Moderate'] = 'Based on your level of composure, your understanding of finance and your feelings towards risk taking you appear to have a Moderate tolerance for risk. A Moderate tolerance for risk means that you are reasonably comfortable taking some risk in the pursuit of earning a greater return on your money. You recognise that investing is a riskier activity than holding cash but are willing and able to stomach some movement in the value of your investments in return for your funds growing over the long term.';
$attitudes_towards_risk['Medium High'] = 'Based on your level of composure, your understanding of finance and your feelings towards risk taking you appear to have a Medium High tolerance for risk. A Medium High tolerance for risk means that you are comfortable taking risk in the pursuit of earning a greater return on your money. You recognise that investing is a riskier activity than holding cash but are willing and able to stomach movement in the value of your investments in return for your funds growing over the long term.';
$attitudes_towards_risk['High'] = 'Based on your level of composure, your understanding of finance and your feelings towards risk taking you appear to have a High tolerance for risk. A High tolerance for risk means that you are very comfortable taking risk in the pursuit of earning a greater return on your money. You recognise that investing is a riskier activity than holding cash but are willing and able to stomach swings in the value of your investments in return for your funds growing over the long term.';

$overall_result['Low'] = 'By combining the results of the risk capacity assessment with your attitudes towards risk you have an overall result of ‘Low’. This result suggests that investing may be an inappropriate activity for you given that it carries the risk of capital loss. Your inputs suggest such losses would not be comfortable for you and that you would likely feel better with your money in cash savings accounts and deposit accounts.';
$overall_result['Medium Low'] = 'By combining the results of the risk capacity assessment with your attitudes towards risk you have an overall result of ‘Medium Low’. This result suggests that you would be comfortable putting some of your money into investments that are riskier than cash but that you are averse to investments that carry a possibility of falling substantially. You would be happier with a steady but lower growth rate than a higher, more volatile growth rate.';
$overall_result['Moderate'] = 'By combining the results of the risk capacity assessment with your attitudes towards risk you have an overall result of ‘Moderate’. This result suggests that investing some of your long term funds would be comfortable for you and therefore give you the opportunity to capture long term positive returns in excess of the likely return from holding cash. Investment returns are not guaranteed and portfolio values can go down as well as up. The information you have provided suggests that you could withstand some short term falls in the value of your portfolio.';
$overall_result['Medium High'] = 'By combining the results of the risk capacity assessment with your attitudes towards risk you have an overall result of ‘Medium High’. This result suggests that investing your long term funds would be comfortable for you and therefore give you the opportunity to capture long term positive returns in excess of the likely return from holding cash. Investment returns are not guaranteed and portfolio values can go down as well as up. The information you have provided suggests that you could comfortably withstand short term falls in the value of your portfolio.';
$overall_result['High'] = 'By combining the results of the risk capacity assessment with your attitudes towards risk you have an overall result of ‘High’. This result suggests that investing your long term funds would be very comfortable for you and therefore give you the opportunity to capture long term positive returns. Investment returns are not guaranteed and portfolio values can go down as well as up. The information you have provided suggests that you could comfortably withstand short term falls in the value of your portfolio.';
/////////////////////////////////////
function capacity_score($score){
    if($score>=0 && $score<=0.18){return 'Low';}
    if($score>0.18 && $score<=0.29){return 'Medium Low';}
    if($score>0.29 && $score<=0.59){return 'Moderate';}
    if($score>0.59 && $score<=0.99){return 'Medium High';}
    if($score>0.99){return 'High';}
}

function rt_score($score){
    if($score>=0 && $score<=7){return 'Low';}
    if($score>7 && $score<=12){return 'Medium Low';}
    if($score>12 && $score<=19){return 'Moderate';}
    if($score>19 && $score<=21){return 'Medium High';}
    if($score>21){return 'High';}
}

function me_score($score){
    if($score>=0 && $score<=3){return 'Low';}
    if($score>3 && $score<=6){return 'Medium Low';}
    if($score>6 && $score<=9){return 'Moderate';}
    if($score>9 && $score<=11){return 'Medium High';}
    if($score>11){return 'High';}
}

function composure_score($score){
    if($score>=0 && $score<=5){return 'Low';}
    if($score>5 && $score<=11){return 'Medium Low';}
    if($score>11 && $score<=16){return 'Moderate';}
    if($score>16 && $score<=19){return 'Medium High';}
    if($score>19){return 'High';}
}

function overall_score($score){
    if($score>=0 && $score<=13){return 'Low';}
    if($score>13 && $score<=33){return 'Medium Low';}
    if($score>33 && $score<=54){return 'Moderate';}
    if($score>54 && $score<=68){return 'Medium High';}
    if($score>68){return 'High';}
}

////////////////////////////////////////
$age = 0;

$full_name = $_REQUEST['full_name'];
$email_address = $_REQUEST['email_address'];
if(isset($_REQUEST['age']) && $_REQUEST['age']>0){$age = $_REQUEST['age'];}
$relationship_status = $_REQUEST['relationship_status'];
$number_of_dependents = $_REQUEST['number_of_dependents']; // C5
$employment_income = $_REQUEST['employment_income'];
$pension_income = $_REQUEST['pension_income'];
$investment_income = $_REQUEST['investment_income'];
$other_income = $_REQUEST['other_income'];
$cash_savings = $_REQUEST['cash_savings'];
$pensions_including_sipps = $_REQUEST['pensions_including_sipps'];
$property_including_investment_properties = $_REQUEST['property_including_investment_properties'];
$investment_portfolios = $_REQUEST['investment_portfolios'];
$mortgages = $_REQUEST['mortgages'];
$other_secured_loans = $_REQUEST['other_secured_loans'];
$credit_card_debt = $_REQUEST['credit_card_debt'];
$other_unsecured_loans = $_REQUEST['other_unsecured_loans'];
$rent_mortgage_payments = $_REQUEST['rent_mortgage_payments'];
$utilities_electricity_water_internet_etc = $_REQUEST['utilities_electricity_water_internet_etc'];
$food = $_REQUEST['food'];
$debt_repayment = $_REQUEST['debt_repayment'];
$other = $_REQUEST['other'];

//questions answers//
$q1 = $_REQUEST['q1']; 
$q2 = $_REQUEST['q2'];
$q3 = $_REQUEST['q3'];
$q4 = $_REQUEST['q4'];
$q5 = $_REQUEST['q5'];
$q6 = $_REQUEST['q6'];
$q7 = $_REQUEST['q7'];
$q8 = $_REQUEST['q8'];
$q9 = $_REQUEST['q9'];
$q10 = $_REQUEST['q10'];
$q11 = $_REQUEST['q11'];
$q12 = $_REQUEST['q12'];
$q13 = $_REQUEST['q13'];
$q14 = $_REQUEST['q14'];
//////////////////////

//totals//
$total_income_hidden = $_REQUEST['total_income_hidden']; //C3
$total_assets_hidden = $_REQUEST['total_assets_hidden'];
$total_liquid_assets_hidden = $_REQUEST['total_liquid_assets_hidden']; //C6
$total_liabilities_hidden = $_REQUEST['total_liabilities_hidden'];
$total_current_liabilities_hidden = $_REQUEST['total_current_liabilities_hidden']+1; //C7
$total_monthly_spend_hidden = $_REQUEST['total_monthly_spend_hidden'];
$total_annual_spend_hidden = $_REQUEST['total_annual_spend_hidden']; // C4


$d33 = (90-$age)/90;
$d34 = ($total_annual_spend_hidden*$number_of_dependents>0)? $total_income_hidden/($total_annual_spend_hidden*$number_of_dependents):1;
$d35 = $total_liquid_assets_hidden/$total_current_liabilities_hidden;

$e33 = 0.2*max(0, $d33);
$e34 = min(1, 0.4*$d34);
$e35 = min(1, 0.4*$d35);

$capacity_score = $e33*$e34*$e35*10;

//Calculations//
//Part 1 calculations//
$rc = $capacity_score;
$rc_text = capacity_score($capacity_score);
$rc_description = $capacity_for_risk[$rc_text];



//Part 2 calculations//
$rt_cnt = $q1+$q4+$q5+$q8+$q10+$q12;
$rt = $rt_cnt/30;
$rt_text = rt_score($rt_cnt);

$composure_cnt = $q3+$q6+$q7+$q11+$q13;
$composure = $composure_cnt/25;
$composure_text = composure_score($composure_cnt);

$market_cnt = $q2+$q9+$q14;
$market = $market_cnt/15;
$market_text = me_score($market_cnt);

$f56 = ($composure_text=="High")?(($market_text=="High")?1: 0):0;
$f57 = ($composure_text=="Low")?(($market_text=="Low")? -1: 0):0;

$overall_cnt = $rt_cnt+$composure_cnt+$market_cnt+$f56+$f57;
$overall = $overall_cnt/71;
$overal_text = overall_score($overall_cnt);
$overll_description = $attitudes_towards_risk[$overal_text];

function capacityvstolerance($a){
    $r = 14;
    if($a=='Low'){$r = 14;}
    if($a=='Medium Low'){$r = 34;}
    if($a=='Moderate'){$r = 55;}
    if($a=='Medium High'){$r = 69;}
    if($a=='High'){$r = 100;}
    return $r; 
}

//$H2 = (capacityvstolerance($rc_text)>=$overall_cnt)?"No":"Capacity Constrained";
//$rtext = ($H2="No")? $overal_text:$rc_text;

$recomendation_text = (capacityvstolerance($rc_text)>=$overall_cnt)?$overal_text:$rc_text;
$recomendation_description = $overall_result[$recomendation_text];


//inserting in database//
//require_once dirname(__FILE__) . '/db.php';
$relationship_statuses = ["1"=>'Single', "2"=>'Married/Civil partnership'];
$calc_date = date("Y-m-d h:i:s");
$relationship_status1 = $relationship_statuses[$relationship_status]; 
//var_dump($_REQUEST);
if(isset($_REQUEST['u']) && $_REQUEST['u']>0 && isset($_REQUEST['l']) && $_REQUEST['l']>0){
    
$user_id = $_REQUEST['u'];
$link_id = $_REQUEST['l'];


if (($link = Links::findOne(['id' => $link_id])) !== null) {

//

$sql = "INSERT INTO results (
        user_id,
        link_id,
        calc_date,
		full_name,
		email_address,
		age,
		relationship_status,
		number_of_dependents,
		employment_income,
		pension_income,
		investment_income,
		other_income,
		cash_savings,
		pensions_including_sipps,
		property_including_investment_properties,
		investment_portfolios,
		mortgages,
		other_secured_loans,
		credit_card_debt,
		other_unsecured_loans,
		rent_mortgage_payments,
		utilities_electricity_water_internet_etc,
		food,
		debt_repayment,
		other,
		q1,
        q2,
        q3,
        q4,
        q5,
        q6,
        q7,
        q8,
        q9,
        q10,
        q11,
        q12,
        q13,
        q14,
		total_income,
		total_assets,
		total_liquid_assets,
		total_liabilities,
		total_current_liabilities,
		total_monthly_spend,
		total_annual_spend,
		rc,
		rc_text,
		rc_description,
		rt,
		rt_text,
		composure,
		composure_text,
		market,
		market_text,
		overall,
		overal_text,
		overll_description,
		recomendation_text,
		recomendation_description
)VALUES(
    '".$user_id."',
    '".$link_id."',
    '".$calc_date."',
    '".$full_name."',
    '".$email_address."',
    '".$age."',
    '".$relationship_status1."',
    '".$number_of_dependents."',
    '".$employment_income."',
    '".$pension_income."',
    '".$investment_income."',
    '".$other_income."',
    '".$cash_savings."',
    '".$pensions_including_sipps."',
    '".$property_including_investment_properties."',
    '".$investment_portfolios."',
    '".$mortgages."',
    '".$other_secured_loans."',
    '".$credit_card_debt."',
    '".$other_unsecured_loans."',
    '".$rent_mortgage_payments."',
    '".$utilities_electricity_water_internet_etc."',
    '".$food ."',
    '".$debt_repayment."',
    '".$other."',
	'".$q1."',
    '".$q2."',
    '".$q3."',
    '".$q4."',
    '".$q5."',
    '".$q6."',
    '".$q7."',
    '".$q8."',
    '".$q9."',
    '".$q10."',
    '".$q11."',
    '".$q12."',
    '".$q13."',
    '".$q14."',
    '".$total_income_hidden."',
    '".$total_assets_hidden."',
	'".$total_liquid_assets_hidden."',
    '".$total_liabilities_hidden."',
    '".$total_current_liabilities_hidden."',
    '".$total_monthly_spend_hidden."',
    '".$total_annual_spend_hidden."',
    '".$rc."',
    '".$rc_text."',
    '".$rc_description."',
    '".$rt."',
    '".$rt_text."',
    '".$composure."',	
    '".$composure_text."',
    '".$market."',	
    '".$market_text."',	
    '".$overall."',
    '".$overal_text."',
    '".$overll_description."',
    '".$recomendation_text."',
	'".$recomendation_description."'
) ";


\Yii::$app->db->createCommand($sql)->query();


$link->date_completed = date("Y-m-d h:i:s");
$link->status = 'Completed';
$link->capacity = $rc_text;
$link->overal_risk_score = $recomendation_text;
$link->save();


}else{
    echo '<div class="alert alert-warning alert-dismissible "><button type="button" class="close" data-dismiss="alert">&times;</button>The invitation link expired.</div>';
}

}
//var_dump($_REQUEST);
?>
<!--
<button id="download" class="btn btn-primary">PDF</button>
<script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.7/dist/html2canvas.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jspdf-html2canvas@latest/dist/jspdf-html2canvas.min.js"></script>-->
<script>


//$('#download').click(function() 
function pdf()
{
    var node = document.getElementById('container2');
    var options = {
        quality: 100,
        width: 750,
        hight: 700
    };

    domtoimage.toJpeg(node, options).then(function (dataUrl)
    {
        //var doc = new jsPDF();
        //doc.addImage(dataUrl, 'JPEG', -18, 20, 240, 134.12);
        //doc.save('Test.pdf');
        
        var doc = new jsPDF('p', 'pt', 'a4', true);
            doc.setFillColor('#fff');
            //var doc = new jsPDF();
            //doc.fromHTML($('#pdf').get(0), 10, 10, {'width': 180});
            
    		doc.setFont("Verdana, Arial, Helvetica, sans-serif;");
    		//doc.setFontSize(fontSize);
            doc.addImage(dataUrl, 'JPEG', 40, 50, 500, 770);
            doc.save('Report.pdf');
    });
} //)



/*

function pdf33(){
      html2canvas($('#container2'), {
             useCORS: true,
             background: "#ffffff",
             onrendered: function(canvas) {
                 var myImage = canvas.toDataURL("image/jpeg,1.0");
                 // Adjust width and height
                 var imgWidth =  (canvas.width * 60) / 240;
                 var imgHeight = (canvas.height * 70) / 240;
                 // jspdf changes
                 var pdf = new jsPDF('p', 'mm', 'a4');
                 pdf.addImage(myImage, 'png', 15, 2, imgWidth, imgHeight); // 2: 19
                 pdf.save('Report.pdf');
             }
         });
    }
*/
</script>

<div id="container2">
<div class="row">
<div class="col-md-7">
<h1>Your results</h1>
</div>
<div class="col-md-5">
<img align="center" border="0" src="/img/image-1.png" alt="Tick Icon" title="Tick Icon" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 59%;max-width: 342.2px;" width="342.2" class="v-src-width v-src-max-width"/>
</div>
</div>      
<hr />
<h2 class="pull-right" style="text-align: right;"><em><?= $full_name . ", " . date('jS F Y')?></em></h2>

<br />
<h2>Your Capacity for risk</h2>
<hr />
<div class="row">
<div class="col-md-4">
    <center>
  	<canvas width=220 height=170 id="rc"></canvas>
    </center>
  	<div id="rc-textfield"></div>
    <div id="rc-text"><?=$rc_text;?></div>
</div>
<div class="col-md-8">
<?=$rc_description;?>
</div>
</div>
<script>
var opts = {
  angle: 0.12, // The span of the gauge arc
  lineWidth: 0.1, // The line thickness
  radiusScale: 1, // Relative radius
  pointer: {
    length: 0.6, // // Relative to gauge radius
    strokeWidth: 0.035, // The thickness
    color: '#000000' // Fill color
  },
  limitMax: false,     // If false, max value increases automatically if value > maxValue
  limitMin: false,     // If true, the min value of the gauge will be fixed
  colorStart: '#6F6EA0',   // Colors
  colorStop: '#C0C0DB',    // just experiment with them
  strokeColor: '#EEEEEE',  // to see which ones work best for you
  generateGradient: true,
  highDpiSupport: true,     // High resolution support
  
  renderTicks: {
          divisions: 5,
          divWidth: 0.1,
          divLength: 0.1,
          divColor: '#333333',
          subDivisions: 3,
          subLength: 0.5,
          subWidth: 0.6,
          subColor: '#666666'
        }
  
};

//rc//
var target = document.getElementById('rc'); // your canvas element
var gauge = new Donut(target).setOptions(opts); // create sexy gauge!
gauge.maxValue = 1; // set max gauge value
gauge.setMinValue(0);  // Prefer setter over gauge.minValue = 0
gauge.animationSpeed = 50; // set animation speed (32 is default value)
gauge.set('<?=$rc;?>'); // set actual value
//gauge.setTextField(document.getElementById("rc-textfield"));

var textRenderer = new TextRenderer(document.getElementById('rc-textfield'))
textRenderer.render = function(gauge){
   this.el.innerHTML = (gauge.displayedValue).toFixed(3);
};
gauge.setTextField(textRenderer);

//overall//
var overall = document.getElementById('overall'); // your canvas element
var overall1 = new Donut(overall).setOptions(opts); // create sexy gauge!
overall1.maxValue = 1; // set max gauge value
overall1.setMinValue(0);  // Prefer setter over gauge.minValue = 0
overall1.animationSpeed = 50; // set animation speed (32 is default value)
overall1.set(<?=$overall?>); // set actual value
overall1.setTextField(document.getElementById("overall-textfield"));

var textRenderer1 = new TextRenderer(document.getElementById('overall-textfield'))
textRenderer1.render = function(overall1){
   this.el.innerHTML = (overall1.displayedValue).toFixed(3);
};
overall1.setTextField(textRenderer1);

//rt//
var rt = document.getElementById('rt'); // your canvas element
var rt1 = new Donut(rt).setOptions(opts); // create sexy gauge!
rt1.maxValue = 1; // set max gauge value
rt1.setMinValue(0);  // Prefer setter over gauge.minValue = 0
rt1.animationSpeed = 50; // set animation speed (32 is default value)
rt1.set(<?=$rt?>); // set actual value
rt1.setTextField(document.getElementById("rt-textfield"));

var textRenderer2 = new TextRenderer(document.getElementById('rt-textfield'))
textRenderer2.render = function(rt1){
   this.el.innerHTML = (rt1.displayedValue).toFixed(2);
};
rt1.setTextField(textRenderer2);

//composure//
var composure = document.getElementById('composure'); // your canvas element
var composure1 = new Donut(composure).setOptions(opts); // create sexy gauge!
composure1.maxValue = 1; // set max gauge value
composure1.setMinValue(0);  // Prefer setter over gauge.minValue = 0
composure1.animationSpeed = 50; // set animation speed (32 is default value)
composure1.set(<?=$composure?>); // set actual value
composure1.setTextField(document.getElementById("composure-textfield"));

var textRenderer3 = new TextRenderer(document.getElementById('composure-textfield'))
textRenderer3.render = function(composure1){
   this.el.innerHTML = (composure1.displayedValue).toFixed(2);
};
composure1.setTextField(textRenderer3);

//market//
var market = document.getElementById('market'); // your canvas element
var market1 = new Donut(market).setOptions(opts); // create sexy gauge!
market1.maxValue = 1; // set max gauge value
market1.setMinValue(0);  // Prefer setter over gauge.minValue = 0
market1.animationSpeed = 50; // set animation speed (32 is default value)
market1.set(<?=$market?>); // set actual value
market1.setTextField(document.getElementById("market-textfield"));

var textRenderer4 = new TextRenderer(document.getElementById('market-textfield'))
textRenderer4.render = function(market1){
   this.el.innerHTML = (market1.displayedValue).toFixed(2);
};
market1.setTextField(textRenderer4);
</script>

<h2>Your attitudes towards risk</h2>
<hr />
<div class="row">
<div class="col-md-4">
    <h3 style="text-align: center;">Overall</h3>
    <center>
  	<canvas width=220 height=170 id="overall"></canvas>
    </center>
  	<div id="overall-textfield"></div>
    <div id="overall-text"><?=$overal_text?></div>
</div>
<div class="col-md-8">

<div class="row" style="text-align: center;">
<div class="col-md-4">
    <h5 style="height: 50px;">Risk Tolerance</h5>
    <canvas width=130 height=100 id="rt"></canvas>
  	<div id="rt-textfield"></div>
    <div id="rt-text"><?=$rt_text?></div>
</div>
<div class="col-md-4">
    <h5 style="height: 50px;">Composure</h5>
    <canvas width=130 height=100 id="composure"></canvas>
  	<div id="composure-textfield"></div>
    <div id="composure-text"><?=$composure_text?></div>
</div>
<div class="col-md-4">
    <h5 style="height: 50px;">Market Engagement</h5>
    <canvas width=130 height=100 id="market"></canvas>
  	<div id="market-textfield"></div>
    <div id="market-text"><?=$market_text?></div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<?=$overll_description?>
</div>
</div>
</div>
</div>

<br />
<br />

<div class="card border-info mb-3" style="max-width: 100%;">
  <!--<div class="card-header">Overall result</div>-->
  <div class="card-body text-info">
  <div class="row">
    <h4 class="card-title col-md-4">Overall result:</h4>
    <h3 class="col-md-8"><strong><?=$recomendation_text?></strong></h3>
  </div>
    <p class="card-text"><?=$recomendation_description?></p>
  </div>
</div>
<div class="alert alert-warning" role="alert">
These results are provided as a guide only and do not constitute financial advice.
</div>
<br />
</div>