<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style type="text/css" media="all">
        * {
            margin: 0;
            padding: 0;
        }

        .header {
            margin-top: 20px;
        }

        .main {
            width: 100%;
            height: 75%;
            right: 0;
            margin: 0 auto;
            padding: 20px;
        }

        h4 {
            font-weight: lighter;
            text-align: center;
        }

        .title {
            margin: 20px;
            text-align: center;
            margin: auto 0;
            text-align: center;
        }

        ul li {
            list-style: none;
            color: blue;
        }

        .footer-sider {
            margin-top: 20px;
        }

        .li-margin {
            margin-top: 20px;
        }

        .main-para {
            margin-top: 20px;
            text-indent: 2em
        }

        .main-footer h5 {
            margin-top: 20px;
            text-indent: 15em;
        }

        .main-footer p {
            text-indent: 17em;
        }

        .main-footer p:first-child {
            margin-top: 20px;
        }

        .main-footer p:last-child {
            margin-bottom: 40px;
        }

        #note {
            margin-top: 40px;
            font-style: italic;
            font-weight: lighter;
            margin: 10px 0px 10px 0px;
        }



        .seal {
            position: absolute;
            bottom: 250px;
            left: 140px;
            font-style: italic;
        }

        .footer-sider {
            line-height: 1.5em;
            font-weight: lighter;
            color: blue;
        }

        .title:first-child {
            text-align: center;
            font-weight: lighter;
            margin-bottom: 20px;
        }

        .content {
            margin: 50px;
        }

        .para-content {
            text-indent: 2em;
            margin: 10px;
        }

        .content-title {
            margin: 20px 0 20px 10px;
        }

        .honorable {
            position: absolute;
            bottom: 250px;
            right: 150px;
            line-height: 1em;
        }

        .footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .paid {
            margin-top: 250px;
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <br>
    <br>
    <br>
    <br>
    <div class="header">
        <div>
            <h4>Republic of the Philippines</h4>
            <h4>Province of Bohol</h4>
            <h4>Municipality of Tubigon</h4>
            <h4>BARANGAY BANLASAN</h4>
            <img src="{{ public_path('images/blogo.jpg') }}" alt="logo"
                style="position: absolute; top: 100px; right: 100px; width:70px;">
        </div>
        <br>
    </div>

    <div class="content">
        <h3 class="title">OFFICE OF THE PUNONG BARANGAY</h3>
        <h3 class="title">
            <strong>
                MANAGEMENT BUSINESS BARANGAY CLEARANCE
            </strong>
        </h3>

        <p class="content-title">TO WHOM IT MAY CONCERN</p>
        <p class="para-content">
            THIS IS TO CERTIFICATE THAT <strong>{{ $certificate_businesses->name }}</strong>, filipino
            <strong>maried</strong> of legal age,
            and
            resident of Banlasan, Tubigon,
            Bohol has manifest his/her intent to engage business in this barangay in his/her capacity as owner of the
            business
            with business name / <strong>{{ $certificate_businesses->business_name }}</strong> a
            single_proprietorship,(_) NGO, (_) join venture.
        </p>
        <p class="para-content">
            THIS FURTHER CERTIFICIES that the nature of the business does not destroy the moral values of its residents
            especially the youth and the children, nor unnecessary destroys the environment to the detriment of the
            residents therof.
        </p>

        <p class="para-content">
            THIS FUTHER CERTIFICIES that the applicant has paid the amount of one hundred Pesos only (Php, 10000) in
            consideration therof by virtue of Barangay Ordinance No. 01 series of 2020, and that all pertinent ordinance
            of this barangay are hereby with and shall henceforth be observed with due respect and obedience to the
            local authorities.
        </p>
        <p class="para-content">
            THIS FINALLY CERTIFIES that the issuance of this Business Barangay Clearance is pursuant to Section 152"c"
            of RA 7160 wherein the city/municipality shall never issue any permit of licence for any business or
            activity unless a clearance is first obtain from the barangay where such business or activity is located or
            conducted.
        </p>
        <p class="para-content">
            ISSUED this 27th day October 2022, at Banlasan Tubigon Bohol, Philippines.
        </p>
        <div class="footer">
            <div class="seal">
                <h4>SEAL</h4>
            </div>
            <div class="honorable">
                <div>
                    Hon. {{ $certificate_businesses->punongbarangay }}
                </div>
                <div>
                    Punong Barangay
                </div>
            </div>
        </div>

        <div class="paid">
            <div>
                Paid Or. No. {{ $certificate_businesses->or_number }}
            </div>
            <div>
                Date: {{ \Carbon\Carbon::parse($certificate_businesses->date)->isoFormat('MMM Do YYYY') }}
            </div>
            <div>
                CTC No: {{ $certificate_businesses->ctc_number }}
            </div>
        </div>
</body>

</html>
