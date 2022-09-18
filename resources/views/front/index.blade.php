<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>Bliven - Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('theme/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/assets/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('theme/assets/css/style.css')}}">


    <!-- Color Alternatives -->
    <link href="{{asset('theme/assets/css/colors/color-2.css')}}" rel="alternate stylesheet" type="text/css" title="color-2">
    <link href="{{asset('theme/assets/css/colors/color-3.css')}}" rel="alternate stylesheet" type="text/css" title="color-3">
    <link href="{{asset('theme/assets/css/colors/color-4.css')}}" rel="alternate stylesheet" type="text/css" title="color-4">
    <link href="{{asset('theme/assets/css/colors/color-5.css')}}" rel="alternate stylesheet" type="text/css" title="color-5">

</head>

<body>

    <!-- This code is use for color chooser, you can delete -->

    <div class="clearfix"></div>


    <div class="wrapper wizard d-flex clearfix multisteps-form position-relative">
        <div class="steps order-2 position-relative w-25">
            <div class="multisteps-form__progress">
                <span class="multisteps-form__progress-btn js-active" title="Application data"><i class="far fa-user"></i><span>Personal Details</span></span>
                <span class="multisteps-form__progress-btn" title="Tax residency"><i class="fa fa-suitcase"></i><span>Business Details</span></span>
                <span class="multisteps-form__progress-btn" title="Indentity documents"><i class="fa fa-book"></i><span>Income Statement Details</span></span>
                <span class="multisteps-form__progress-btn" title="Investability"><i class="fa fa-edit"></i><span>Balance Sheet Details</span></span>
                <span class="multisteps-form__progress-btn" title="Investability"><i class="fa fa-gavel"></i><span>Capital Structure Details</span></span>
                <span class="multisteps-form__progress-btn" title="Review"><i class="fa fa-check"></i><span>Review </span></span>
            </div>
        </div>
        <form class="multisteps-form__form w-75 order-1" action="#" id="wizard">
            <div class="form-area position-relative">
                <!-- div 1 -->
                <div class="multisteps-form__panel js-active" data-animation="slideHorz">
                    <div class="wizard-forms">
                        <div class="inner pb-100 clearfix">
                            <div class="wizard-title text-center">
                                <h3>Please, enter your personal information</h3>
                                <p>Your Data is Preserved and protected by our privacy policy </p>
                            </div>
                            <div class="wizard-photo-area">
                                <div class="wizard-photo-upload position-relative">
                                    <label for="files">Upload Image</label>
                                    <input id="files" type='file' onchange="readURL(this);" style="display: none;">
                                    <div class="display-img text-center">
                                        <img id="profile-image" src="{{asset('theme/assets/img/pf1.png')}}" alt="your image" />
                                    </div>
                                </div>
                                <div class="photo-upload-text text-center">Add Your Avatar Here, Trust Me, It Feels Good
                                </div>
                            </div>
                            <div class="wizard-form-field mb-85">
                                <div class="wizard-form-input">
                                    <label>Name</label>
                                    <input type="text" value="{{Auth::User()->name}}" name="name">
                                </div>
                                <div class="wizard-form-input">
                                    <label>Email</label>
                                    <input type="email" value="{{Auth::User()->email}}" name="email">
                                </div>

                                <div class="wizard-form-input mb-60 mt-60">
                                    <div class="line"></div>
                                </div>
                                <div class="wizard-form-input">
                                    <label>DOB</label>
                                    <input type="date" value="" name="dob">
                                </div>
                                <div class="wizard-form-input">
                                    <label>Address</label>
                                    <input placeholder="ZIP -Postal address -Town -County" type="text" value="" name="address">
                                </div>
                                <div class="wizard-form-input">
                                    <label>National ID Number</label>
                                    <input type="text" value="" name="id">
                                </div>
                                <div class="wizard-form-input">
                                    <label>KRA PIN</label>
                                    <input type="text" value="" name="kra">
                                </div>

                                <div class="wizard-form-input mb-60 mt-60">
                                    <div class="line"></div>
                                </div>

                                <div class="form-field-text">
                                    {{--  --}}
                                </div>
                            </div>
                            <div class="wizard-v3-progress">
                                <span>1 to 5 step</span>
                                <h3>0% to complete</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 0%">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.inner -->
                        <div class="vector-img-one">
                            <img src="{{asset('theme/assets/img/vb1.png')}}" alt="">
                        </div>
                        <div class="actions">
                            <ul>
                                <li><span class="js-btn-next" title="NEXT">NEXT <i class="fa fa-arrow-right"></i></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- div 2 -->
                <div class="multisteps-form__panel" data-animation="slideHorz">
                    <div class="wizard-forms section-padding">
                        <div class="inner pb-100 clearfix">
                            <div class="wizard-title text-center">
                                <h3>Business Information</h3>
                                <p>Important info about your business </p>
                            </div>
                            <div class="wizard-solution-select">
                                {{-- <div class="row">
                                    <div class="col-md-4">
                                        <label class="option_item">
                                            <input type="checkbox" class="checkbox">
                                            <span class="option_inner">
                                                <span class="tickmark"></span>
                                                <span class="icon"><img src="{{asset('theme/assets/img/d1.png')}}" alt=""></span>
                                                <span class="name">Minuteman Maintenance</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="option_item">
                                            <input type="checkbox" class="checkbox">
                                            <span class="option_inner">
                                                <span class="tickmark"></span>
                                                <span class="icon"><img src="{{asset('theme/assets/img/d1.png')}}" alt=""></span>
                                                <span class="name">Minuteman Maintenance</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="option_item">
                                            <input type="checkbox" class="checkbox">
                                            <span class="option_inner">
                                                <span class="tickmark"></span>
                                                <span class="icon"><img src="{{asset('theme/assets/img/d1.png')}}" alt=""></span>
                                                <span class="name">Minuteman Maintenance</span>
                                            </span>
                                        </label>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="wizard-form-field">
                                <div class="wizard-form-input">
                                    <label>What is the name of your business?</label>
                                    <input type="text" value="" name="bname">
                                </div>
                                <div class="wizard-form-input">
                                    <label>When does your fiscal year begin?</label>
                                    <input type="text" value="" name="fiscal">
                                </div>


                                <div class="wizard-form-input">
                                    <label>What is the Business Registration Number?</label>
                                    <input type="text" value="" name="bnumber">
                                </div>
                                <div class="wizard-form-input">
                                    <label>What is the address of the Business?</label>
                                    <input type="text" value="" name="bnumber">
                                </div>
                            </div>
                            <div class="wizard-note-subject">
                                <div class="wizard-form-input select-option-area">
                                    <label>What kind of business is it?</label>
                                    <select name="b-type">
                                        <option value="product">Product</option>
                                        <option value="services">Services</option>
                                        <option value="both">Both</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <div class="wizard-form-input">
                                    <label>What kind of products/services do you sell/offer?</label>
                                    <textarea name="content"></textarea>
                                </div>
                            </div>
                            <div class="wizard-v3-progress">
                                <span>2 to 5 step</span>
                                <h3>38% to complete</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 38%">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.inner -->
                        <br><br>
                        <div class="vector-img-two">
                            <img src="{{asset('theme/assets/img/vb2.png')}}" alt="">
                        </div>
                        <div class="actions">
                            <ul>
                                <li><span class="js-btn-prev" title="BACK"><i class="fa fa-arrow-left"></i> BACK </span></li>
                                <li><span class="js-btn-next" title="NEXT">NEXT <i class="fa fa-arrow-right"></i></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- div 3 -->
                <div class="multisteps-form__panel" data-animation="slideHorz">
                    <div class="wizard-forms">
                        <div class="inner pb-100 clearfix">
                            <div class="wizard-title text-center">
                                <h3>Income Statement Details</h3>
                                <p>More infomation on how your Business makes Business </p>
                            </div>
                            <div class="wizard-form-field">
                                <div class="wizard-form-input">
                                    <label>What are your sources of business revenue?</label>
                                    <input type="text" value="" name="sources">
                                </div>
                                <div class="wizard-form-input">
                                    <label>What is your service charge?</label>
                                    <input type="text" value="" name="service-charge">
                                </div>
                                <div class="wizard-form-input">
                                    <label>What is the unit price for each of the items you sell?</label>
                                    <input type="text" value="" name="unit-price">
                                </div>

                                <div class="wizard-form-input">
                                    <label>What is the Business Registration Number?</label>
                                    <input type="text" value="" name="bnumber">
                                </div>
                                <div class="wizard-form-input">
                                    <label>What is the address of the Business?</label>
                                    <input type="text" value="" name="bnumber">
                                </div>
                            </div>
                            <div class="wizard-form-input select-caret">
                                <select>
                                    <option>Subject 1</option>
                                    <option>Subject 2</option>
                                    <option>Subject 3</option>
                                    <option>Subject 4</option>
                                </select>
                            </div>
                            <div class="wizard-form-input mb-60 mt-60">
                                <div class="line line2"></div>
                            </div>
                            <div class="wizard-duration mb-60">
                                <span class="wizard-sub-text">Duration Services</span>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="duration-option">
                                            <input type="radio" name="duration-service" value="4 weeks" class="d-checkbox">
                                            <span class="checkbox-circle-tick"></span>
                                            <span class="duration-box text-center">
                                                <span class="title">4</span>
                                                <span>Weeks</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="duration-option">
                                            <input type="radio" name="duration-service" value="6 weeks" class="d-checkbox">
                                            <span class="checkbox-circle-tick"></span>
                                            <span class="duration-box text-center">
                                                <span class="title">6</span>
                                                <span>Weeks</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="duration-option">
                                            <input type="radio" name="duration-service" value="9 weeks" class="d-checkbox">
                                            <span class="checkbox-circle-tick"></span>
                                            <span class="duration-box text-center">
                                                <span class="title">9</span>
                                                <span>Weeks</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="wizard-form-input mb-60 mt-60">
                                <div class="line line2"></div>
                            </div>
                            <div class="wizard-day-item">
                                <span class="wizard-sub-text">Choose the included services</span>
                                <div class="wizard-checkbox-option">
                                    <ul>
                                        <li>
                                            <label class="block-option">
                                                <input type="checkbox" name="day-checkout" class="checked-checkbox">
                                                <span class="checkbox-tick"></span>
                                                <span class="day-label">Select Day</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="block-option">
                                                <input type="checkbox" name="day-checkout" class="checked-checkbox">
                                                <span class="checkbox-tick"></span>
                                                <span class="day-label">Select Day</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="block-option">
                                                <input type="checkbox" name="day-checkout" class="checked-checkbox">
                                                <span class="checkbox-tick"></span>
                                                <span class="day-label">Select Day</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="block-option">
                                                <input type="checkbox" name="day-checkout" class="checked-checkbox">
                                                <span class="checkbox-tick"></span>
                                                <span class="day-label">Select Day</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="wizard-form-input mb-60 mt-60">
                                <div class="line line2"></div>
                            </div>
                            <div class="wizard-document-upload pb-200">
                                <span class="wizard-sub-text">Upload the documents</span>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">jpg or .pdf should  be more than 500KB or 300PI</label>
                                </div>
                            </div>
                            <div class="wizard-v3-progress">
                                <span>3 to 5 step</span>
                                <h3>59% to complete</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 59%">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ./inner -->
                        <div class="vector-img-one">
                            <img src="{{asset('theme/assets/img/vb3.png')}}" alt="">
                        </div>
                        <div class="actions">
                            <ul>
                                <li><span class="js-btn-prev" title="BACK"><i class="fa fa-arrow-left"></i> BACK </span></li>
                                <li><span class="js-btn-next" title="NEXT">NEXT <i class="fa fa-arrow-right"></i></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- div 4 -->
                <div class="multisteps-form__panel" data-animation="slideHorz">
                    <div class="wizard-forms">
                        <div class="inner pb-200 clearfix">
                            <div class="wizard-title text-center">
                                <h3>Choose Service Provider</h3>
                                <p>has been a while. I would like to present you the project I work </p>
                            </div>
                            <div id="slider-service" class="wizard-service-slide">
                                <label class="services-box-item">
                                    <input type="checkbox" name="contact_person" value="Mr Leo" class="service-checkbox">
                                    <span class="w-service-box text-center position-relative">
                                        <span class="tooltip-info" data-toggle="tooltip" data-placement="top" title="Mr Leo Service officer"></span>
                                        <span class="service-icon">
                                            <img src="{{asset('theme/assets/img/ws1.png')}}" alt="">
                                        </span>
                                        <span class="service-text">
                                            Mr Leo
                                        </span>
                                        <span class="option-seclect">
                                            <span>Selected</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="services-box-item">
                                    <input type="checkbox" name="contact_person" value="Mr Leo" class="service-checkbox">
                                    <span class="w-service-box text-center position-relative">
                                        <span class="tooltip-info" data-toggle="tooltip" data-placement="top" title="Mr Jim Service officer"></span>
                                        <span class="service-icon">
                                            <img src="{{asset('theme/assets/img/ws2.jpg')}}" alt="">
                                        </span>
                                        <span class="service-text">
                                            Mr Jim
                                        </span>
                                        <span class="option-seclect">
                                            <span>Selected</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="services-box-item">
                                    <input type="checkbox" name="contact_person" value="Mr Leo" class="service-checkbox">
                                    <span class="w-service-box text-center position-relative">
                                        <span class="tooltip-info" data-toggle="tooltip" data-placement="top" title="Mrs Katie Service officer"></span>
                                        <span class="service-icon">
                                            <img src="{{asset('theme/assets/img/ws3.jpg')}}" alt="">
                                        </span>
                                        <span class="service-text">
                                            Mrs Katie
                                        </span>
                                        <span class="option-seclect">
                                            <span>Selected</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="services-box-item">
                                    <input type="checkbox" name="contact_person" value="Mr Leo" class="service-checkbox">
                                    <span class="w-service-box text-center position-relative">
                                        <span class="tooltip-info" data-toggle="tooltip" data-placement="top" title="Mr Doe Service officer"></span>
                                        <span class="service-icon">
                                            <img src="{{asset('theme/assets/img/ws4.jpg')}}" alt="">
                                        </span>
                                        <span class="service-text">
                                            Mr Doe
                                        </span>
                                        <span class="option-seclect">
                                            <span>Selected</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="services-box-item">
                                    <input type="checkbox" name="contact_person" value="Mr Leo" class="service-checkbox">
                                    <span class="w-service-box text-center position-relative">
                                        <span class="tooltip-info" data-toggle="tooltip" data-placement="top" title="Mr Leo Service officer"></span>
                                        <span class="service-icon">
                                            <img src="{{asset('theme/assets/img/ws5.jpg')}}" alt="">
                                        </span>
                                        <span class="service-text">
                                            Mr Leo
                                        </span>
                                        <span class="option-seclect">
                                            <span>Selected</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="services-box-item">
                                    <input type="checkbox" name="contact_person" value="Mr Leo" class="service-checkbox">
                                    <span class="w-service-box text-center position-relative">
                                        <span class="tooltip-info" data-toggle="tooltip" data-placement="top" title="Mr Jone Service officer"></span>
                                        <span class="service-icon">
                                            <img src="{{asset('theme/assets/img/ws6.jpg')}}" alt="">
                                        </span>
                                        <span class="service-text">
                                            Mr Jone
                                        </span>
                                        <span class="option-seclect">
                                            <span>Selected</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="services-box-item">
                                    <input type="checkbox" name="contact_person" value="Mr Leo" class="service-checkbox">
                                    <span class="w-service-box text-center position-relative">
                                        <span class="tooltip-info" data-toggle="tooltip" data-placement="top" title="Mr Leo Service officer"></span>
                                        <span class="service-icon">
                                            <img src="{{asset('theme/assets/img/ws1.png')}}" alt="">
                                        </span>
                                        <span class="service-text">
                                            Mr Leo
                                        </span>
                                        <span class="option-seclect">
                                            <span>Selected</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="services-box-item">
                                    <input type="checkbox" name="contact_person" value="Mr Leo" class="service-checkbox">
                                    <span class="w-service-box text-center position-relative">
                                        <span class="tooltip-info" data-toggle="tooltip" data-placement="top" title="Mr Leo Service officer"></span>
                                        <span class="service-icon">
                                            <img src="{{asset('theme/assets/img/ws2.jpg')}}" alt="">
                                        </span>
                                        <span class="service-text">
                                            Mr Leo
                                        </span>
                                        <span class="option-seclect">
                                            <span>Selected</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="services-box-item">
                                    <input type="checkbox" name="contact_person" value="Mr Leo" class="service-checkbox">
                                    <span class="w-service-box text-center position-relative">
                                        <span class="tooltip-info" data-toggle="tooltip" data-placement="top" title="Mr Leo Service officer"></span>
                                        <span class="service-icon">
                                            <img src="{{asset('theme/assets/img/ws3.jpg')}}" alt="">
                                        </span>
                                        <span class="service-text">
                                            Mr Leo
                                        </span>
                                        <span class="option-seclect">
                                            <span>Selected</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="services-box-item">
                                    <input type="checkbox" name="contact_person" value="Mr Leo" class="service-checkbox">
                                    <span class="w-service-box text-center position-relative">
                                        <span class="tooltip-info" data-toggle="tooltip" data-placement="top" title="Mr Leo Service officer"></span>
                                        <span class="service-icon">
                                            <img src="{{asset('theme/assets/img/ws4.jpg')}}" alt="">
                                        </span>
                                        <span class="service-text">
                                            Mr Leo
                                        </span>
                                        <span class="option-seclect">
                                            <span>Selected</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="services-box-item">
                                    <input type="checkbox" name="contact_person" value="Mr Leo" class="service-checkbox">
                                    <span class="w-service-box text-center position-relative">
                                        <span class="tooltip-info" data-toggle="tooltip" data-placement="top" title="Mr Leo Service officer"></span>
                                        <span class="service-icon">
                                            <img src="{{asset('theme/assets/img/ws5.jpg')}}" alt="">
                                        </span>
                                        <span class="service-text">
                                            Mr Leo
                                        </span>
                                        <span class="option-seclect">
                                            <span>Selected</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="services-box-item">
                                    <input type="checkbox" name="contact_person" value="Mr Leo" class="service-checkbox">
                                    <span class="w-service-box text-center position-relative">
                                        <span class="tooltip-info" data-toggle="tooltip" data-placement="top" title="Mr Leo Service officer"></span>
                                        <span class="service-icon">
                                            <img src="{{asset('theme/assets/img/ws6.jpg')}}" alt="">
                                        </span>
                                        <span class="service-text">
                                            Mr Leo
                                        </span>
                                        <span class="option-seclect">
                                            <span>Selected</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <div class="wizard-v3-progress">
                                <span>4 to 5 step</span>
                                <h3>79% to complete</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 79%">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.inner -->
                        <div class="vector-img-one">
                            <img src="{{asset('theme/assets/img/vb4.png')}}" alt="">
                        </div>
                        <div class="actions">
                            <ul>
                                <li><span class="js-btn-prev" title="BACK"><i class="fa fa-arrow-left"></i> BACK </span></li>
                                <li><span class="js-btn-next" title="NEXT">NEXT <i class="fa fa-arrow-right"></i></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- div 5 -->
                <div class="multisteps-form__panel" data-animation="slideHorz">
                    <div class="wizard-forms">
                        <div class="inner pb-100">
                            <div class="wizard-title text-center">
                                <h3>Choose Service Provider</h3>
                                <p>has been a while. I would like to present you the project I work </p>
                            </div>
                            <div class="wizard-day-item">
                                <span class="wizard-sub-text">Confirmation Service Via</span>
                                <div class="wizard-checkbox-option">
                                    <ul>
                                        <li>
                                            <label class="block-option">
                                                <input type="checkbox" name="day-checkout" class="checked-checkbox">
                                                <span class="checkbox-tick"></span>
                                                <span class="day-label">Sms</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="block-option">
                                                <input type="checkbox" name="day-checkout" class="checked-checkbox">
                                                <span class="checkbox-tick"></span>
                                                <span class="day-label">Email Address</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="block-option">
                                                <input type="checkbox" name="day-checkout" class="checked-checkbox">
                                                <span class="checkbox-tick"></span>
                                                <span class="day-label">Call Number</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                             <div class="wizard-form-input mb-60 mt-60">
                                <div class="line line2"></div>
                            </div>
                            <div class="social-media-find">
                                <span class="wizard-sub-text">Confirmation Service Via</span>
                                <div class="social-find-caret">
                                    <select>
                                        <option>Social media</option>
                                        <option>Social media</option>
                                        <option>Social media</option>
                                        <option>Social media</option>
                                    </select>
                                </div>
                            </div>
                            <div class="wizard-v3-progress">
                                <span>5 to 5 step</span>
                                <h3>100% to complete</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 100%">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.inner -->
                        <div class="vector-img-one position-relative">
                            <img src="{{asset('theme/assets/img/vb5.png')}}" alt="">
                        </div>
                        <div class="actions mt-60">
                            <ul>
                                <li><span class="js-btn-prev" title="BACK"><i class="fa fa-arrow-left"></i> BACK </span></li>
                                <li><button title="NEXT">SUBMIT <i class="fa fa-arrow-right"></i></button></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="{{asset('theme/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/slick.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/main.js')}}"></script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#profile-image')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        };
        $("#customFile").change(function() {
            filename = this.files[0].name
        });
    </script>
</body>

</html>
