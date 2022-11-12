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
            height: 70%;
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
            <h2>CERTIFICATE OF INDIGENCY</h2>
        </div>
    </div>
    <div class="container">
        <div class="sidebar">
            <h3><strong>BARANGAY OFFICIALS</strong></h3>
            <ul>
                <li class="li-margin">
                    <h5 style="font-size: 17px;">Hon. {{ $certificate_residencies->hon_1 }}</h5>
                    <div id="title">Punong Barangay</div>
                </li>
                <li>
                    <h5 style="font-size: 17px;">Hon. {{ $certificate_residencies->hon_2 }}</h5>
                    <div id="title">Barangay Kagawad</div>
                </li>
                <li>
                    <h5 style="font-size: 17px;">Hon. {{ $certificate_residencies->hon_3 }}</h5>
                    <div id="title">Barangay Kagawad</div>

                </li>
                <li>
                    <h5 style="font-size: 17px;">Hon. {{ $certificate_residencies->hon_4 }}</h5>
                    <div id="title">Barangay Kagawad</div>
                </li>
                <li>
                    <h5 style="font-size: 17px;">Hon. {{ $certificate_residencies->hon_5 }}</h5>
                    <div id="title">Barangay Kagawad</div>
                </li>
                <li>
                    <h5 style="font-size: 17px;">Hon. {{ $certificate_residencies->hon_6 }}</h5>
                    <div id="title">Barangay Kagawad</div>
                </li>
                <li>
                    <h5 style="font-size: 17px;">Hon. {{ $certificate_residencies->hon_7 }}</h5>
                    <div id="title">Barangay Kagawad</div>
                </li>
                <li>
                    <h5 style="font-size: 17px;">Hon. {{ $certificate_residencies->sk_chairman }}</h5>
                    <div id="title">Sk Chairman</div>
                </li>
                <li>
                    <h5 style="font-size: 17px;">Hon. {{ $certificate_residencies->secretary }}</h5>
                    <div id="title">Barangay Secretary</div>
                </li>
                <li>
                    <h5 style="font-size: 17px;">Hon. {{ $certificate_residencies->treasurer }}</h5>
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

                THIS IS TO CERTIFY THAT {{ $certificate_residencies->name }},
                {{ $certificate_residencies->residency_status }} and a resident of
                {{ $certificate_residencies->barangay }},
                Bohol

            </p>
            <p class="main-para">
                This is to certify further that they are residing at purok 3 in this barangay.
            </p>
            <p class="main-para">
                This certification is being issued upon the request of the above-mentioned name for whatever legal
                purpose it may serve her best.

            </p>
            <p class="main-para"> Issued this
                {{ \Carbon\Carbon::parse($certificate_residencies->date)->isoFormat('MMM Do YYYY') }} at
                {{ $certificate_residencies->barangay }}.</p>
            <div class="main-footer">
                <h5>Certified by:</h5>
                <p>{{ $certificate_residencies->punongbarangay }}</p>
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
