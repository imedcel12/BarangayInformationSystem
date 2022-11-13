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

        .sidebar {
            width: 35%;
            height: 75%;
            position: absolute;
            top: 250px;
            left: 5px;
            margin: 0 auto;
            padding: 0;
            border: 0;
            text-align: center;
            border: 1px solid black;
            line-height: 30px;
        }

        .main {
            width: 60%;
            height: 75%;
            position: absolute;
            top: 350px;
            right: 0;
            margin: 0 auto;
            padding: 10px;
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
            margin-top: 40px;
            text-indent: 25.5em;
            font-weight: 500;
        }

        .footer-sider {
            line-height: 1.5em;
            font-weight: lighter;
            color: blue;
        }

        .validity {
            text-align: center;
            margin-top: 20px;
            font-style: italic;
            font-weight: lighter;
        }
    </style>
</head>

<body>
    <br>
    <br>
    <div class="header">
        <div>
            <h4>Republic of the Philippines</h4>
            <h4>Province of Bohol</h4>
            <h4>Municipality of Tubigon</h4>
            <h4>BARANGAY BANLASAN</h4>
            <img src="{{ public_path('images/blogo.jpg') }}" alt="logo"
                style="position: absolute; top: 60px; right: 100px; width:70px;">
        </div>
        <br>
        <div class="title">
            <h2 style="font-weight:lighter">OFFICE OF THE PUNONG BARANGAY</h2>
            <h2>CERTIFICATIFICATION</h2>
            <h4>First Time Jobseeker Assistance ACt-RA-11261</h4>
        </div>
    </div>
    <div class="container">
        <div class="sidebar">
            <h3><strong>BARANGAY OFFICIALS</strong></h3>
            <ul>
                <li class="li-margin">
                    <h5 style="font-size: 17px;">Hon. {{ $certificate_job_seekers->punongbarangay }}</h5>
                    <div id="title">Punong Barangay</div>
                </li>
                <li class="li-margin">
                    <h5 style="font-size: 17px;">Hon. {{ $certificate_job_seekers->hon1 }}</h5>
                    <div id="title">Barangay Kagawad</div>
                </li>
                <li>
                    <h5 style="font-size: 17px;">Hon. {{ $certificate_job_seekers->hon_2 }}</h5>
                    <div id="title">Barangay Kagawad</div>
                </li>
                <li>
                    <h5 style="font-size: 17px;">Hon. {{ $certificate_job_seekers->hon_3 }}</h5>
                    <div id="title">Barangay Kagawad</div>

                </li>
                <li>
                    <h5 style="font-size: 17px;">Hon. {{ $certificate_job_seekers->hon_4 }}</h5>
                    <div id="title">Barangay Kagawad</div>
                </li>
                <li>
                    <h5 style="font-size: 17px;">Hon. {{ $certificate_job_seekers->hon_5 }}</h5>
                    <div id="title">Barangay Kagawad</div>
                </li>
                <li>
                    <h5 style="font-size: 17px;">Hon. {{ $certificate_job_seekers->hon_6 }}</h5>
                    <div id="title">Barangay Kagawad</div>
                </li>
                <li>
                    <h5 style="font-size: 17px;">Hon. {{ $certificate_job_seekers->hon_7 }}</h5>
                    <div id="title">Barangay Kagawad</div>
                </li>
                <li>
                    <h5 style="font-size: 17px;">Hon. {{ $certificate_job_seekers->sk_chairman }}</h5>
                    <div id="title">Sk Chairman</div>
                </li>
                <li>
                    <h5 style="font-size: 17px;">Hon. {{ $certificate_job_seekers->secretary }}</h5>
                    <div id="title">Barangay Secretary</div>
                </li>
                <li>
                    <h5 style="font-size: 17px;">Hon. {{ $certificate_job_seekers->treasurer }}</h5>
                    <div id="title">Barangay Treasurer</div>
                </li>
            </ul>
            <hr>
            <div class="footer-sider">
                Amount Paid: _____________
                <br>
                Cert. No./O.R. No: _________
                <br>
                Date Paid: ________________
            </div>

        </div>
        <div class="main">
            <div class="main-title">TO WHOM IT MAY CONCERN: </div>
            <p class="main-para">

                THIS IS TO CERTIFY that Mr./Ms. {{ $certificate_job_seekers->name }},
                {{ $certificate_job_seekers->status }} and a resident of
                {{ $certificate_job_seekers->full_addresss }} for 27 years/months, is a qualified availee of RA 11261
                for the First Time
                Jobseekers Act of 2019.

            </p>
            <p class="main-para">

                This is to certify further that the holder/bearer was informed of his/her rights, including the duties
                and responsibilities accorded by RA 11261through the <strong>OATH OF UNDERTAKING</strong> he/she has
                signed and executed
                in the presence of the barangay officials.
            </p>
            <p class="main-para">
                This certification is being issued upon the request of the aboved-mentioned-named for whatever legal
                purpose it may serve him best..
            </p>
            <p class="main-para">
                This certification is being issued upon the request of the aboved-mentioned-named for whatever legal
                purpose it may serve him best..
            </p>
            <p class="validity">
                This certification is valid only for one (1) year from the issuance.
            </p>
            </p>
            <div class="main-footer">
                <h5>Certified by:</h5>
                <p>{{ $certificate_job_seekers->punongbarangay }}</p>
                <p>PUNONG BARANGAY</p>
            </div>

            <div class="main-footer">
                <h5>Witnessed by:</h5>
                <p>{{ $certificate_job_seekers->witness }}</p>
                <p>PUNONG BARANGAY</p>
            </div>

            <div id="note" class="note">
                Note: This certification is validated with an official seal and does not have an alteration. In case of
                alteration, it is countersigned by the issuing officer.
            </div>
            <h6 class="seal">Official seal</h6>
        </div>
    </div>
    </div>


</body>

</html>
