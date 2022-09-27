

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>CreditPay</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
      <!-- Vanilla Datepicker CSS -->
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css'>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css'>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <style>
        .loan-body-tag nav ul li a:hover{
            color: #fff;
            text-decoration: unset;
        }
        .aprloanpara{
            letter-spacing: 1px;
            font-size: 25px;
            font-weight: 100;
        }

        .apr-result-box{
            padding: 10px 30px;
            background-color: #e0013f;
            border-radius: 5px;
            height: 100%;
            min-height:400px;
        }

        .apr_result{
            padding: 10px;
            font-size: 20px;
            font-weight: 100;
            color:#fff;
        }

        .loan-form{
            height: 100%;
            min-height:400px;
            background-color: #e0013f;
            padding: 10px 30px;
            border-radius: 5px;
        }

        .loan-form input[type="number"]{
            border-radius:0px;
        }

        .apr_input input[type="number"]:disabled {
            background: #fff;
            border-radius:0px;
        }


        .input-group-addon{
            min-width: 115px;
            font-size:12px;
            color: #e0013f;
            border-radius:0px;
        }

        .input-group-addon-icon{
            min-width: 40px;
            font-size: 12px;
            color: #e0013f;
            border-radius:0px;
        }

        .footer a, .footer a:hover{
            text-decoration: none;
            color:#fff;
        }
        .jointolead{
            color:#e0013f!important;
        }
    </style>

</head>

<body class="page-index loan-body-tag">
<?php include_once"inc/header.php";?>
  <!-- ======= Hero Section ======= -->
  
  <main id="main">

  <div class="header-banner">
        <!-- <div class="d-flex justify-content-center">
            <div>
                <ul class="breadcrumb">
                <li></li>
                <li> <div class=""><h1 class="header-banner-hd">APR Calculator</h1></div></li>
                <li></li>
                </ul>
            </div>
        </div> -->

        
        
        
  </div>
    <div class="privacy-container">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto border-l-r mt-5 mb-5">
                    <h2 class="comman-page-heading site-red-color">Home Loan APR Calculator</h2>

                    <div class="row">
                        <h4 class="blog_pg_hd">What is the meaning of Annual Percentage Rate (APR)</h4>

                        <p class="comman-page-para ">
                        Before taking a loan, it is important to know everything about the loan, then it is good to know how to calculate the loan and annual percentage rate, the calculation of the loan amount considers relevant fees and charges that are completely relevant to a loan along with the nominal interest rate. 
                        </p>
                        <p class="comman-page-para ">The calculation takes consistent fees and charges that are completely relevant to a loan amount along with the simple interest rate, also it will not take any additional amount into account when calculating the actual cost of the loan amount.</p>

                        <p class="comman-page-para ">To know more about the APR annual percentage rate of your loan, you can use our free online APR calculator.</p>


                        <h4 class="blog_pg_hd">Disclaimer</h4>

                        <p class="comman-page-para ">
                        The above information is for demonstrative purposes only and the exact terms may vary, it all depends on several areas along with the loan terms and different policies at the time of loan application. All loans are approved by the responsible for CreditPay. 
                        </p>

                        <h4 class="blog_pg_hd">How to use APR calculator</h4>

                        <div class="mt-3">
                            <p class="aprloanpara">Follow the below steps of a loan calculator:</p> 
                    
                            <ul class="diamond-blog">
                                <li>Enter your loan amount in rupees.</li>
                                <li>Enter the rate of the interest loan amount</li>
                                <li>Enter the tenure in months</li>
                                <li>Enter the amount of the additional fee</li>
                                
                            </ul>
                        </div>
                        


                    </div>






                    <div class="row">
                        <div class="col-md-12 mx-auto">
                            <div class="card card-body text-center mt-5">
                                <h3 class="heading  pb-3">APR Calculator</h3>
                                <div class="row h-100">
                                    
                                    <div class="col-md-6 h-100">
                                            
                                            <form id="loan-form" class="loan-form">
                                            <h3 class="apr_result">Your Requirements Here</h3>
                                            <div class="form-group">
                                                <div class="input-group">
                                                <span class="input-group-addon input-group-addon-icon">(₹) </span> 
                                                <input type="number" class="form-control" id="amount" placeholder="Loan Amount">
                                                </div>
                                            </div>
        
                                            <div class="form-group">
                                                <div class="input-group">
                                                <span class="input-group-addon input-group-addon-icon"><i class="bi bi-calendar"></i></span>

                                               
                                                <input type="number" class="form-control" id="tenureindays" placeholder="Tenure in Days">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                <span class="input-group-addon input-group-addon-icon">%</span>
                                                <input type="number" class="form-control" id="interest" placeholder="Rate of Interest">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                <span class="input-group-addon input-group-addon-icon">(₹)</span>
                                                <input type="number" class="form-control" id="" placeholder="Rate of Processin Fee (0.75%)">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="input-group">
                                                <span class="input-group-addon input-group-addon-icon"><i class="bi bi-calendar-check-fill"></i></span>
                                                <input type="number" class="form-control" id="years" placeholder="Years To Repay">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" value="Calculate" class="btn btn-dark btn-block">
                                            </div>
                                        </form>
                                    </div>

                                        <div class="col-md-6 h-100">
                                            <!-- RESULTS -->
                                            <div class="apr-result-box">
                                                <h3 class="apr_result">Your Results Here</h3>
                                            
                                                <div id="results" class="">
                                                    
                                                    <div class="form-group apr_input">
                                                        <div class="input-group">
                                                        <span class="input-group-addon">Monthly Payment</span>
                                                        <input type="number" class="form-control" id="monthly-payment" disabled>
                                                        </div>
                                                    </div>

                                                    <div class="form-group apr_input">
                                                        <div class="input-group">
                                                        <span class="input-group-addon">Total Payment</span>
                                                        <input type="number" class="form-control" id="total-payment" disabled>
                                                        </div>
                                                    </div>

                                                    <div class="form-group apr_input">
                                                        <div class="input-group">
                                                        <span class="input-group-addon">Total Interest</span>
                                                        <input type="number" class="form-control" id="total-interest" disabled>
                                                        </div>
                                                    </div>

                                                    <div class="form-group apr_input">
                                                        <div class="input-group">
                                                        <span class="input-group-addon">You have to pay (₹)</span>
                                                        <input type="number" class="form-control" id="you-have-to-pay" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

   
                                        

                                </div>

                                

                        
                                



                            </div>
                        </div>

                    </div>


                    <h4 class="blog_pg_hd mt-4">What is Annual Percentage Rate or APR calculated?</h4>

                    <p class="comman-page-para ">Not one but there are many factors that come into play when taking out a loan, also these orders should be aligned to make sure that there is no serious impact on your long-term finances.</p>

                    <p class="aprloanpara">The APR is calculated by considering the following factors:</p> 
                    
                    <ul class="diamond-blog">
                        <li>Loan Amount – How much does the applicant plan to borrow </li>
                        <li>Fees and Charges – All applicable fees and charges are required to be paid to the financial lender to service the loan</li>
                        <li>Rate of Interest – The interest rate applicable on the loan as imposed by the chosen lender</li>
                        <li>Term – The number of months or years that have been designated as the repayment period.</li>
                        
                    </ul>



                    <h4 class="blog_pg_hd">The importance of APR</h4>

                        <p class="comman-page-para ">The importance of APR is an important tool that helps the prospective loan and check the actual cost of borrowing. In many cases, the financial lenders generally do not open the total cost and only advertise the rate of interest. APR is an extremely beneficial computation method when loan applicants are taking a loan with long-term repayment tenures, and it depends on the part of the overall cost.

                        </p>


                </div>
            </div>
        </div>
</div>



</main><!-- End #main -->   


<script>
    // Listen for submit
document.getElementById('loan-form').addEventListener('submit', calculateResults);

// Calculate Results
function calculateResults(e){

// console.log("calculating");

// Declare UI Variables


const amount = document.getElementById('amount');
const interest = document.getElementById('interest');
const years = document.getElementById('years');


// const rateofinterest = document.getElementById('rateofinterest');
// const tenureindays = document.getElementById('tenureindays');

// --------------------------------------------------------------------------
const monthlyPayment = document.getElementById('monthly-payment');
const totalPayment = document.getElementById('total-payment');
const totalInterest = document.getElementById('total-interest');

// const youhavetopay = document.getElementById('you-have-to-pay');

// Turn amount into decimal and store it into variable
const principal = parseFloat(amount.value);
const calculatedInterest = parseFloat(interest.value) /100 / 12;
const calculatedPayment =  parseFloat(years.value) * 12;

// const calculatedrateofinterest =  parseFloat(rateofinterest.value)/100 / 12;
// const calculatedtenureindays =  parseFloat(tenureindays.value);


// Compute monthly payments
const x = Math.pow(1 + calculatedInterest, calculatedPayment);
const monthly = (principal * x * calculatedInterest)/(x-1);


// Check if value is finite

if(isFinite(monthly)){
	monthlyPayment.value = parseFloat(monthly).toFixed(2);
	totalPayment.value = (monthly * calculatedPayment).toFixed(2);
	totalInterest.value = ((monthly * calculatedPayment) - principal).toFixed(2);

   
} else{
	showError("Please check your numbers")
}



// Check if value is finite 2

// if(isFinite(monthly)){
//     totalPayment.value = (monthly * calculatedPayment).toFixed(2);


// } else{
// 	showError("Please check your numbers")
// }

e.preventDefault();
}

// Function to show error
function showError(error){
	// create div
	const errorDiv = document.createElement('div');

	// Get card and heading in order to add new div to DOM. Parent element
	const card = document.querySelector('.card');
	const heading = document.querySelector('.heading');


	// Give div a class name
	errorDiv.className = 'alert alert-danger';

	// Create text and append div
	errorDiv.appendChild(document.createTextNode(error));

	// Insert error above heading. Insert above will take in the parent element which is the card in this case and for the parameters
	// It will take in the element you want to put in and the element you want to put it before, in this case errorDiv and the heading

	card.insertBefore(errorDiv, heading);

	// Clear error after 3 seconds

	setTimeout(clearError, 3000);

}


// Create clear error
function clearError(){
	document.querySelector('.alert').remove();
}
</script>

<?php include_once"inc/footer.php";?>
