<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/raleway-font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}" />
</head>
<body>
    <div class="page-content">
        <div class="wizard-v1-content">
            <div class="wizard-form">
                <form class="form-register" id="form-register" action="#" method="post">
                    <div id="form-total">
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-account"></i></span>
                            <span class="step-number">Langkah Pertama</span>
                            <span class="step-text">Informasi Reviewer</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="username">Username*</label>
                                        <input type="text" placeholder="Username" class="form-control" id="username" name="username" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="email">Email Address*</label>
                                        <input type="email" placeholder="Your Email" class="form-control" id="email" name="email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder">
                                        <label for="password">Password*</label>
                                        <input type="password" placeholder="Password" class="form-control" id="password" name="password" required>
                                    </div>
                                    <div class="form-holder">
                                        <label for="confirm_password">Confirm Password*</label>
                                        <input type="password" placeholder="Confirm Password" class="form-control" id="confirm_password" name="confirm_password" required>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-card"></i></span>
                            <span class="step-number">Langkah Kedua</span>
                            <span class="step-text">Informasi Anda</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="card-type">Card Type</label>
                                        <select name="card-type" id="card-type" class="form-control">
                                            <option value disabled selected>Select Credit Card Type</option>
                                            <option value="Business Credit Cards">Business Credit Cards</option>
                                            <option value="Limited Purpose Cards">Limited Purpose Cards</option>
                                            <option value="Prepaid Cards">Prepaid Cards</option>
                                            <option value="Charge Cards">Charge Cards</option>
                                            <option value="Student Credit Cards">Student Credit Cards</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-3">
                                        <label for="card-number">Card Number</label>
                                        <input type="text" name="card-number" class="card-number" id="card-number" placeholder="ex: 489050625008xxxx">
                                    </div>
                                    <div class="form-holder">
                                        <label for="cvc">CVC</label>
                                        <input type="text" name="cvc" class="cvc" id="cvc" placeholder="xxx">
                                    </div>
                                </div>
                                <div class="form-row form-row-2">
                                    <div class="form-holder">
                                        <label for="month">Expiry Month</label>
                                        <select name="month" id="month" class="form-control">
                                            <option value disabled selected>Expiry Month</option>
                                            <option value="January">January</option>
                                            <option value="February">February</option>
                                            <option value="March">March</option>
                                            <option value="February">February</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                        </select>
                                    </div>
                                    <div class="form-holder">
                                        <label for="year">Expiry Year</label>
                                        <select name="year" id="year" class="form-control">
                                            <option value disabled selected>Expiry Year</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
                            <span class="step-number">Langkah Ketiga</span>
                            <span class="step-text">Konfirmasi Pengisian</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <h3>Confirm Details</h3>
                                <div class="form-row table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr class="space-row">
                                                <th>Username:</th>
                                                <td id="username-val"></td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Email Address:</th>
                                                <td id="email-val"></td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Card Type:</th>
                                                <td id="card-type-val"></td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Card Number:</th>
                                                <td id="card-number-val"></td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>CVC:</th>
                                                <td id="cvc-val"></td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Expiry Month:</th>
                                                <td id="month-val"></td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Expiry Year:</th>
                                                <td id="year-val"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="{{ asset('js/jquery.steps.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
</body>
</html>