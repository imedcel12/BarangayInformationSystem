<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <div>
        <h2 style="text-align:center;">Republic of the Philippines</h2>
        <h2 style="text-align:center;">
            <b>
                Barangay Banlasan
            </b>
        </h2>
        <h2 style="text-align:center;">Tubigon,Bohol</h2>

        <div style="text-align:center;">BARANGAY CLEARANCE</div>

        <h3>TO WHOM IT MAY CONCERN</h3>

        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is to certify that {{ $certificate_clearances->name }} with
            residence and postal address at {{ $certificate_clearances->purok_address }}, has no derogoratory record
            filed in our Barangay Office.</p>

        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The above name individual who is a bonafide resident of this barangay is
            a person of good moral character, peace-loving and civic minded citizen.</p>

        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This certification is hereby issued in connection with the subject's
            application for {{ $certificate_clearances->reason }} and for whatever legal purpose it may serve him/her
            best, and is valid for six(6) months from the date issued.</p>

        <p style="text-align:center">
            <strong>NOT VALID WITHOUT OFFICIAL SEAL</strong>
        </p>
        <p>Given this {{ $certificate_clearances->date }}</p>

        <div class="container">
            <p class="cap">
            <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                {{ $certificate_clearances->punongbarangay }}<h4>
                    <div>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Punong
                        Barangay</div>
                    </p>
        </div>
        <p>
            Speciment Signature of Application
        <div>
            _____________________________
        </div>
        </p>

        <p>OR Number: {{ $certificate_clearances->or_number }}</p>
        <p>Issued on: {{ $certificate_clearances->date }}</p>

    </div>
</body>

</html>
