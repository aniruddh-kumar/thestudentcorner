<?php
// Certificate data
$certificateData = [
    'student_name' => 'Mr. ANIRUDDH',
    'father_name' => 'Mr. ANI',
    'mother_name' => 'Mrs. SHOBHA DEVI',
    'dob' => '11.12.2000',
    'student_id' => '2001292222',
    'course' => 'B.A. Hons./MJC/Subject History',
    'session' => '2018-21',
    'admission_date' => '01.03.2018',
    'certificate_date' => '09 November, 2024'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character Certificate</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background: #f0f0f0;
        }

        .certificate {
            width: 800px;
            margin: 0 auto;
            padding: 40px;
            background: white;
            border: 2px solid #000080;
            position: relative;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 100px;
            height: 100px;
        }

        .college-name {
            text-align: center;
            color: #ff0000;
            font-size: 24px;
            font-weight: bold;
            margin: 10px 0;
        }

        .college-address {
            text-align: center;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .certificate-title {
            text-align: center;
            color: #ff0000;
            font-size: 20px;
            font-weight: bold;
            margin: 20px 0;
            text-decoration: underline;
        }

        .certificate-content {
            text-align: justify;
            line-height: 1.6;
            margin: 20px 0;
        }

        .qr-code {
            position: absolute;
            bottom: 100px;
            left: 40px;
            width: 100px;
            height: 100px;
        }

        .signatures {
            display: flex;
            justify-content: space-between;
            margin-top: 100px;
            padding: 0 50px;
        }

        .signature {
            text-align: center;
        }

        .watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-45deg);
            font-size: 100px;
            opacity: 0.03;
            pointer-events: none;
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <div class="certificate">
        <div class="watermark">GAYA COLLEGE</div>
        <div class="logo">
            <img src="college_logo.png" alt="Gaya College Logo">
        </div>
        
        <div class="college-name">GAYA COLLEGE</div>
        <div class="college-address">
            Gaya, Bihar - 823001<br>
            (A Constituent Unit of Magadh University, Bodh Gaya)
        </div>

        <div class="certificate-title">CHARACTER CERTIFICATE</div>

        <div class="certificate-content">
            This is to certify that <?php echo $certificateData['student_name']; ?>, 
            Father's Name <?php echo $certificateData['father_name']; ?>, 
            Mother's Name <?php echo $certificateData['mother_name']; ?>, 
            Date of Birth <?php echo $certificateData['dob']; ?>, 
            Student ID <?php echo $certificateData['student_id']; ?>, 
            has been a student of this college in Class <?php echo $certificateData['course']; ?> 
            during the Session <?php echo $certificateData['session']; ?> having Roll No. 
            <?php echo $certificateData['student_id']; ?> in Part - III.
            <br><br>
            According to the record of the college, his date of admission is 
            <?php echo $certificateData['admission_date']; ?>. 
            His conduct has been found GOOD. From date of admission 
            to till date, I know nothing against his character and conduct.
        </div>

        <img src="qr_code.png" alt="QR Code" class="qr-code">

        <div class="signatures">
            <div class="signature">
                <div>P.A.</div>
            </div>
            <div class="signature">
                <div>S.O.</div>
            </div>
            <div class="signature">
                <div>Principal</div>
            </div>
        </div>

        <div style="position: absolute; bottom: 40px; left: 40px;">
            Certificate No.<br>
            <?php echo $certificateData['certificate_date']; ?>
        </div>
    </div>
</body>
</html>