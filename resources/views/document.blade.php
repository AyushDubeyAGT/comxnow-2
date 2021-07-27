
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
        <form id="msform" method="POST" action="document" enctype="multipart/form-data">
            <!-- progressbar -->
            <ul id="progressbar">
                <li >Personal Details</li>
                <li >Company Details</li>
                <li class="active">Documents</li>
            </ul>
            <!-- fieldsets -->
            @csrf
            <fieldset>
                <h2 class="fs-title">Company Documents</h2>
                <h3 class="fs-subtitle">Fill in your company credentials</h3>

                <div id="iso" class="form-group col-md-12">
                    <label class="iso" for="iso">ISO Registration</label>
                    <select class='select-input form-control' id='patent' name="iso">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                  </select>
                  </div>
                  <div id="iso_certificate" class="form-group col-md-12">
                    <label class="iso-certificate-label" for="iso_registration">Upload copy of ISO Registration</label>
                    <input type="file" id="iso-certificate" name='iso_registration' multiple hidden/>
                   <!-- <label target='_blank' class='big-file-input' for="iso_certificate"><span class='file-input-label'>Upload Here</span><i class="pull-right text-right fa fa-cloud-upload" aria-hidden="true"></i></label>  -->
                  </div>

                  <input type="text" name="quality_certificate" placeholder="Other Quality Certifications"/>

                  <div id="upload-certificate" class="form-group col-md-12">
                    <label class="upload-certificate-label" for="iso_registration">Upload Certificate Copy</label>
                    <input type="file" id="upload_certificate" name='iso_certificate[]' multiple hidden/>
                    <!-- <label target='_blank' class='big-file-input' for="iso_certificate"><span class='file-input-label'>Upload Here</span><i class="pull-right text-right fa fa-cloud-upload" aria-hidden="true"></i></label> -->
                  </div>

                  <div id="multiple_certificate" class="form-group col-md-12 text-left">
                    <label class="multiple_certificate" for="Certificate">Upload Certificate Copy</label>
                  <div class="certificate-row">
                    <div class="individual_cerificate">
                    <span class='black-input-label-plain'>SMETA </span>
                    <input type="file" name='certificate[]' multiple id="smeta" hidden/>
                    <label class='' for="smeta"><i class="fa fa-cloud-upload" aria-hidden="true"></i></label>
                </div>
                <div class="individual_cerificate">
                    <span class='black-input-label-plain'>WRAP </span>
                    <input type="file" name='certificate[]' multiple id="wrap" hidden/>
                    <label class='' for="wrap"><i class="fa fa-cloud-upload" aria-hidden="true"></i></label>
                </div>
                <div class="individual_cerificate">
                  <span class='black-input-label-plain'>SA8000 </span>
                  <input type="file" name='certificate[]' multiple id="sa8000" hidden/>
                  <label class='' for="sa8000"><i class="fa fa-cloud-upload" aria-hidden="true"></i></label>
              </div>
              <div class="individual_cerificate">
                <span class='black-input-label-plain'>RBA </span>
                <input type="file" name='certificate[]' multiple id="rba" hidden/>
                <label class='' for="rba"><i class="fa fa-cloud-upload" aria-hidden="true"></i></label>
            </div>
            </div>
            <div class="certificate-row">
            <div class="individual_cerificate">
                <span class='black-input-label-plain'>ICTI</span>
                <input type="file" name='certificate[]' multiple id="icti" hidden/>
                <label class='' for="icti"><i class="fa fa-cloud-upload" aria-hidden="true"></i></label>
            </div>
            <div class="individual_cerificate">
              <span class='black-input-label-plain'>SIZA </span>
              <input type="file" name='certificate[]' multiple id="siza" hidden/>
              <label class='' for="siza"><i class="fa fa-cloud-upload" aria-hidden="true"></i></label>
          </div>
          <div class="individual_cerificate">
            <span class='black-input-label-plain'>PAP </span>
            <input type="file" name='certificate[]' multiple id="pap" hidden/>
            <label class='' for="pap"><i class="fa fa-cloud-upload" aria-hidden="true"></i></label>
        </div>
        <div class="individual_cerificate">
          <span class='black-input-label-plain'>EFI </span>
          <input type="file" name='certificate[]' multiple id="efi" hidden/>
          <label class='' for="efi"><i class="fa fa-cloud-upload" aria-hidden="true"></i></label>
      </div>
    </div>
    </div>

    <div id="turnover" class="form-group col-md-12 text-left">
        <label class="multiple_certificate" for="Certificate">Last 3 years Turnover</label>
        <div class="turnover-row">
            <label for="no_of_employees">2017-18</label>
            <select id="type_of_company" name="last_three_yrs_turnover[]">
              <option value="1-2" >1L-2L</option>
              <option value="2-3">2L-3L</option>
              <option value="3-4">3L-4L</option>
            </select>
            <label for="no_of_employees">2019-19</label>
            <select id="type_of_company" name="last_three_yrs_turnover[]">
              <option value="1-2" >1L-2L</option>
              <option value="2-3">2L-3L</option>
              <option value="3-4">3L-4L</option>
            </select>
            <label for="no_of_employees">2019-20</label>
            <select id="type_of_company" name="last_three_yrs_turnover[]">
              <option value="1-2" >1L-2L</option>
              <option value="2-3">2L-3L</option>
              <option value="3-4">3L-4L</option>
            </select>
            <input type='button' value='Add More' id='addButton3'>
        </div>
    </div>

    <div id="itr" class="form-group col-md-12 text-left">
        <label class="itr" for="itr">Uplod ITR of Last three years</label>
        <div class="itr-row">

                <label for="no_of_employees">2017-18</label>
                <input type="file" id="itr-input-1" class="itr-input" name='last_three_yrs_itr[]' hidden/>
                <label  target='_blank' class='itr_upload_certificate' for="itr-input-1"><span class='file-input-label'>Upload Here</span><i class="pull-right fa fa-cloud-upload" aria-hidden="true"></i></label>


                <label for="no_of_employees">2018-19</label>
                <input type="file" id="itr-input-2" class="itr-input" name='last_three_yrs_itr[]' hidden/>
                <label target='_blank' class='itr_upload_certificate' for="itr-input-2"><span class='file-input-label'>Upload Here</span><i class="pull-right fa fa-cloud-upload" aria-hidden="true"></i></label>


                <label for="no_of_employees">2019-20</label>
                <input type="file" id="itr-input-3" class="itr-input" name='last_three_yrs_itr[]' hidden/>
                <label target='_blank' class='itr_upload_certificate' for="itr-input-3"><span class='file-input-label'>Upload Here</span><i class="pull-right fa fa-cloud-upload" aria-hidden="true"></i></label>

            <input type='button' value='Add More' id='addButton4'>
        </div>
    </div>

                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="submit" name="submit" class="submit action-button" value="Submit"/>






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

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('multistepform/js/msform.js')}}"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

<script type="text/javascript">

    $(document).ready(function(){

        var counter = 4;

        $("#addButton").click(function () {

        if(counter>10){
                alert("Only 10 textboxes allow");
                return false;
        }

        var newTextBoxDiv = $(document.createElement('div'))
             .attr("id", 'TextBoxDiv' + counter);

        newTextBoxDiv.after().html('<label>'+ counter + '.</label>' +
              '<input type="text" name="textbox' + counter +
              '" id="textbox' + counter + '" value="" >');

        newTextBoxDiv.appendTo("#TextBoxesGroup");


        counter++;
         });
      });
    </script>
    <script type="text/javascript">

        $(document).ready(function(){

            var counter = 4;

            $("#addButton1").click(function () {

            if(counter>10){
                    alert("Only 10 textboxes allow");
                    return false;
            }

            var newTextBoxDiv = $(document.createElement('div'))
                 .attr("id", 'TextBoxDiv' + counter);

            newTextBoxDiv.after().html('<label>'+ counter + '.</label>' +
                  '<input type="text" name="textbox' + counter +
                  '" id="textbox' + counter + '" value="" >');

            newTextBoxDiv.appendTo("#TextBoxesGroup1");


            counter++;
             });
          });
        </script>
            <script type="text/javascript">

                $(document).ready(function(){

                    var counter = 4;

                    $("#addButton2").click(function () {

                    if(counter>10){
                            alert("Only 10 textboxes allow");
                            return false;
                    }

                    var newTextBoxDiv = $(document.createElement('div'))
                         .attr("id", 'TextBoxDiv' + counter);

                    newTextBoxDiv.after().html('<label>'+ counter + '.</label>' +
                          '<input type="text" name="textbox' + counter +
                          '" id="textbox' + counter + '" value="" >');

                    newTextBoxDiv.appendTo("#TextBoxesGroup2");


                    counter++;
                     });
                  });
                </script>




