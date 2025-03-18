<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f8f9fa;
            line-height: 1.6;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #222;
            padding: 10px 20px;
            text-align: center;
        }

        .header img {
            max-width: 258px;
            height: auto;
        }

        .content {
            padding: 20px;
        }

        .content h1 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .content p {
            margin-bottom: 15px;
        }

        .content .highlight {
            font-weight: bold;
            color: #000;
        }

        .cta-button {
            display: inline-block;
            margin: 20px 0;
            padding: 10px 20px;
            background-color: #ea7e0e;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }

        .cta-button:hover {
            background-color: #cd6f0a;
        }

        .footer {
            padding: 20px;
            font-size: 12px;
            color: #666;
            border-top: 1px solid #dddddd;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="https://seagreen-deer-544829.hostingersite.com/asset/images/dark_logo/dark_logo.png" alt="logo">
        </div>
        <div class="content">
            <h1>Dear {{ $fullName }},</h1>
            <p>
                Your account has been opened. You can log in to your account with the information below.
                Your password is for single use only. Please change your password immediately after logging in and
                do not share it with anyone, including Strong Capitals employees. Your password is personal to you and
                you are
                completely responsible for it. Strong Capitals will never ask for your password information.
            </p>
            <p class="highlight">User ID: <strong>{{ $userId }}</strong></p>
            <p class="highlight">Password: <strong>{{ $password }}</strong></p>
            <p>
                You can log in to the Web Trader by clicking on the button below:
            </p>
            <a style="color:#fff;" href="{{ $webTraderUrl }}" class="cta-button">Log in to Web Trader</a>
            <p>
                Please complete the identity verification process for your account activation.
            </p>
            <h3>Required Documents:</h3>
            <ul>
                <li>For Identity Verification: A photocopy or photograph of your ID, driver's license, or passport.</li>
                <li>For Address Verification: A bill issued within the last 3 months, such as electricity, water,
                    natural gas, or telephone bill.</li>
            </ul>
            <p>For any assistance, feel free to contact our Strong Support Team.</p>
        </div>
        <div class="footer">
            <p><strong>Risk Warning:</strong> Risk Warning: Trading Derivatives carries a high level of risk to your
                capital and you should only trade with money you can afford to lose. Trading Derivatives may not be
                suitable for all investors, so please ensure that you fully understand the risks involved and seek
                independent advice if necessary.The advice on this website is general in nature and does not take into
                account your objectives, financial situation or needs. You should consider whether the advice is
                suitable for you and your personal circumstances. Please read our legal documents and ensure you fully
                understand the risks before you make any trading decisions. We encourage you to seek independent
                advice.The information on this site in not intended for residents of the U.S. Canada, Israel, New
                Zealand, Turkey, Japan and Islamic of Iran and use by any person in any country or jurisdiction where
                such distribution or use would be contrary to local law or regulation. On your responsibility. Strong
                Capitals is an over the counter derivatives issuer, transactions are entered into on a principal to
                principal basis. The products issued by us are not traded on an exchange.</p>
            <p>© 2025 Strong Capitals. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
