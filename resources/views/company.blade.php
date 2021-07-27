
@extends('layouts.app')
@section('content')
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--Font Awsome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/f538e93c63.js" crossorigin="anonymous"></script>
<style>
    @import url(https://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
* {
    margin: 0;
    padding: 0;
}

html {
    height: 100%;
    background: #c5c7c6; /* fallback for old browsers */
    background: -webkit-linear-gradient(to left, #6441A5, #2a0845); /* Chrome 10-25, Safari 5.1-6 */
}

body {
    font-family: montserrat, arial, verdana;
    background: transparent;
}
.row{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    margin-right: -15px;
    margin-left: -15px;
}
}
/*form styles*/
#msform {
    text-align: center;
    position: relative;
    margin-top: 30px;
}

#msform fieldset {
    background: #f5f7f6;
    border: 0 none;
    border-radius: 0px;
    box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
    padding: 20px 30px;
    box-sizing: border-box;
    width: 80%;
    margin: 0 10%;

    /*stacking fieldsets above each other*/
    position: relative;
}

/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
    display: none;
}

/*inputs*/
#msform input, #msform textarea {
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 10px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 13px;
}

#msform input:focus, #msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #00c292;
    outline-width: 0;
    transition: All 0.5s ease-in;
    -webkit-transition: All 0.5s ease-in;
    -moz-transition: All 0.5s ease-in;
    -o-transition: All 0.5s ease-in;
}

/*buttons*/
#msform .action-button {
    width: 100px;
    background: #00c292;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}

#msform .action-button:hover, #msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #ee0979;
}

#msform .action-button-previous {
    width: 100px;
    background: #C5C5F1;
    font-weight: bold;
    color: #eff3f2;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}

#msform .action-button-previous:hover, #msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #C5C5F1;
}

/*headings*/
.fs-title {
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    color: #2C3E50;
    margin-bottom: 10px;
    letter-spacing: 2px;
    font-weight: bold;
}

.fs-subtitle {
    font-weight: normal;
    font-size: 13px;
    color: #666;
    margin-bottom: 20px;
}

/*progressbar*/
#progressbar {
    text-align: center;
    margin-bottom: 30px;
    overflow: hidden;
    /*CSS counters to number the steps*/
    counter-reset: step;
}

#progressbar li {
    list-style-type: none;
    color: #0c0c0c;
    text-transform: uppercase;
    font-size: 12px;
    width: 33.33%;
    float: left;
    position: relative;
    letter-spacing: 1px;
}

#progressbar li:before {
    content: counter(step);
    counter-increment: step;
    width: 24px;
    height: 24px;
    line-height: 26px;
    display: block;
    font-size: 12px;
    color: #333;
    background: white;
    border-radius: 25px;
    margin: 0 auto 10px auto;
}

/*progressbar connectors*/
#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: #f5f8f7;
    position: absolute;
    left: -50%;
    top: 9px;
    z-index: -1; /*put it behind the numbers*/
}

#progressbar li:first-child:after {
    /*connector not needed before the first step*/
    content: none;
}

/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before, #progressbar li.active:after {
    background: #00c292;
    color: white;
}


/* Not relevant to this form */
.dme_link {
    margin-top: 30px;
    text-align: center;
}
.dme_link a {
    background: #FFF;
    font-weight: bold;
    color: #00c292;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 5px 25px;
    font-size: 12px;
}

.dme_link a:hover, .dme_link a:focus {
    background: #C5C5F1;
    text-decoration: none;
}
</style>



<!-- MultiStep Form -->
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form id="msform" method="POST" action="company" >
            <!-- progressbar -->
            <ul id="progressbar">
                <li >Personal Details</li>
                <li class="active">Company Details</li>
                <li>Documents</li>
            </ul>
            <!-- fieldsets -->
            @csrf
            <fieldset>
                <h2 class="fs-title">Company Details</h2>
                <h3 class="fs-subtitle">Tell us something more about your company</h3>
                <input type="text" name="company_name" placeholder="Company Name"/>
                <input type="text" name="gst_number" placeholder="GST Number"/>
                <input type="text" name="company_address" placeholder="Company Address"/>
                <input type="text" name="company_website" placeholder="Company Website"/>

                <div id="company-type" class="form-group col-md-12">
                    <label class="company_type" for="company_type">Type of Company</label>
                    <select class='select-input form-control' id='type_of_company' name="company_type">
                      <option value="sole_proprietorship" >Sole Proprietorship</option>
                      <option value="abc">abc</option>
                      <option value="mno">mno</option>
                  </select>
                  </div>

                <input type="email" name="company_email" placeholder="Company Email"/>

                <div id="company-type1" class="form-group col-md-12">
                <label class="company-type">Type of Company</label>
                <div class="row company-type-row">
                    <div class="col-lg-4 text-left">
                        <input type="radio" name="company_buss_type[]" value=""><label>Manufacturer</label>
                        <input type="radio" name="company_buss_type[]" value=""><label>Exporter</label>
                    </div>
                    <div class="col-lg-3 text-left">
                        <input type="radio" name="company_buss_type[]" value=""><label>Stockist</label>
                        <input type="radio" name="company_buss_type[]" value=""><label>Trader</label>
                    </div>
                    <div class="col-lg-3 text-left third-row">
                        <input type="radio" name="company_buss_type[]" value=""><label>Importer</label>
                        <input type="radio" name="company_buss_type[]" value=""><label>Distributor</label>
                    </div>
                </div>
                </div>

                <div id="product-sell" class="form-group col-md-12 text-left">
                    <label class="product_list">List of products that you will potentially sell</label>
                    <div class="product-list">
                    <div id='TextBoxesGroup'>
                        <div id="TextBoxDiv1">
                            <label>1.</label><input type='textbox' id='textbox1' name="buy_prod[]" placeholder="Cellotapes">
                        </div>
                    </div>
                    <div id='TextBoxesGroup'>
                        <div id="TextBoxDiv2">
                            <label>2.</label><input type='textbox' id='textbox1' name="buy_prod[]" placeholder="Plastic">
                        </div>
                    </div>
                    <div id='TextBoxesGroup'>
                        <div id="TextBoxDiv3">
                            <label>3.</label><input type='textbox' id='textbox1' name="buy_prod[]" placeholder="Machine">
                        </div>
                    </div>
                    <input type='button' value='Add More' id='addButton'>
                    </div>
                </div>

                <div id="product-buy" class="form-group col-md-12 text-left">
                    <label class="product_list">List of products that you will potentially buy</label>
                    <div class="product-list">
                    <div id='TextBoxesGroup1'>
                        <div id="TextBoxDiv1">
                            <label>1.</label><input type='textbox' id='textbox1' name="sell_prod[]" placeholder="Cellotapes">
                        </div>
                    </div>
                    <div id='TextBoxesGroup'>
                        <div id="TextBoxDiv2">
                            <label>2.</label><input type='textbox' id='textbox1' name="sell_prod[]" placeholder="Plastic">
                        </div>
                    </div>
                    <div id='TextBoxesGroup'>
                        <div id="TextBoxDiv3">
                            <label>3.</label><input type='textbox' id='textbox1' name="sell_prod[]" placeholder="Machine">
                        </div>
                    </div>
                    <input type='button' value='Add More' id='addButton1'>
                    </div>
                </div>

                <div id="employee" class="form-group col-md-12 text-left">
                    <label class="employee ">Number of Employees</label>
                    <div class="row">
                        <div class="employee-no col-lg-6">
                            <label>1.Total </label><input type='' id='' name="no_employee[]" placeholder="50">
                            <label>3.Quality </label><input type='' id='' placeholder="15">
                            <label>5.Accounts </label><input type='' id='' placeholder="5">
                        </div>
                        <div class="employee-no col-lg-6">
                            <label>2.Production </label><input type='' id='' name="" placeholder="20">
                            <label>4.Sales and Marketing </label><input type='' id='' name="" placeholder="10">
                        </div>
                        </div>
                </div>

                <div id="directors" class="form-group col-md-12 text-left">
                    <label class="directors_list">Name of Directors</label>
                    <div class="directors-list">
                    <div id='TextBoxesGroup2'>
                        <div id="TextBoxDiv1">
                            <label>1.</label><input type='textbox' name="company_director[]" id='textbox1' placeholder="John Doe">
                        </div>
                    </div>
                    <div id='TextBoxesGroup'>
                        <div id="TextBoxDiv2">
                            <label>2.</label><input type='textbox' name="company_director[]" id='textbox1' placeholder="Karen Frekko">
                        </div>
                    </div>
                    <div id='TextBoxesGroup'>
                        <div id="TextBoxDiv3">
                            <label>3.</label><input type='textbox' name="company_director[]" id='textbox1' placeholder="John Snow">
                        </div>
                    </div>
                    <input type='button' value='Add More' id='addButton2'>
                    </div>
                </div>

                <div id="patent" class="form-group col-md-12">
                    <label class="patent" for="patent">Trademark/Patents</label>
                    <select class='select-input form-control' id='patent' name="patent_name[]">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                  </select>
                  </div>

                <input type="text" name="patent/trademark" placeholder="Name of your Patents/Trademark"/>
               <!--Buttons-->
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="submit" name="next" class="next action-button" value="Next"/>






            </fieldset>
            {{-- <fieldset>
                <h2 class="fs-title">Social Profiles</h2>
                <h3 class="fs-subtitle">Your presence on the social network</h3>
                <input type="text" name="twitter" placeholder="Twitter"/>
                <input type="text" name="facebook" placeholder="Facebook"/>
                <input type="text" name="gplus" placeholder="Google Plus"/>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Create your account</h2>
                <h3 class="fs-subtitle">Fill in your credentials</h3>
                <input type="text" name="email" placeholder="Email"/>
                <input type="password" name="pass" placeholder="Password"/>
                <input type="password" name="cpass" placeholder="Confirm Password"/>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="submit" name="submit" class="submit action-button" value="Submit"/>
            </fieldset> --}}
        </form>
        <!-- link to designify.me code snippets -->

        <!-- /.link to designify.me code snippets -->
    </div>
</div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>





