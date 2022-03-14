<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu Oct 28 2021 17:34:17 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5fd0cebc05b52305b1035954" data-wf-site="5fb7a41f1de43196d23310bb">
<!-- Copied from https://ng.getcarbon.co/terms-and-conditions.html by Cyotek WebCopy 1.6.0.559, Saturday, October 30, 2021, 3:31:34 AM -->

<head>
    <meta charset="utf-8">
    <title>Trade Lenda - Terms and Conditions</title>
    <meta content="All you need to know about the terms of use of all Trade Lenda's products and services." name="description">
    <meta content="Trade Lenda - Terms and Conditions" property="og:title">
    <meta content="All you need to know about the terms of use of all Trade Lenda's products and services." property="og:description">
    <meta content="" property="og:image">
    <meta content="Trade Lenda - Terms and Conditions" property="twitter:title">
    <meta content="All you need to know about the terms of use of all Trade Lenda's products and services." property="twitter:description">
    <meta content="" property="twitter:image">
    <meta property="og:type" content="website">
    <meta content="summary_large_image" name="twitter:card">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/webflow.css" rel="stylesheet" type="text/css">
    <link href="css/cwebsite.webflow.css" rel="stylesheet" type="text/css">
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);
    </script>
    <link href="https://res.cloudinary.com/trade-lenda/image/upload/v1634729358/landing_page_pic/favicon_e4ra6g.png" rel="shortcut icon" type="image/x-icon">
    <link href="https://res.cloudinary.com/trade-lenda/image/upload/v1634729358/landing_page_pic/favicon_e4ra6g.png" rel="apple-touch-icon">

</head>

<body>
    <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navigation w-nav">
        <div class="nav-background">
            <div class="navigation-container">
                <div class="navigation-left">
                    <div class="div-block-38">
                        <a href="#" aria-current="page" class="brand-2 w-nav-brand w--current"><img src="https://res.cloudinary.com/trade-lenda/image/upload/v1628132872/landing_page_pic/Group_11434_2_umfio2.png" width="200" alt="" class="carbon-main-logo"></a>
                        <!-- <div class="plans">
              <a href="#" aria-current="page" class="nav-link-3 w-nav-link w--current">Personal</a>
              <a href="#" target="_blank" class="business-link w-nav-link">Business</a>
          </div> -->
                    </div>
                </div>
                <div class="navigation-right">
                    @if (Route::has('login'))
                    <nav role="navigation" class="nav-menu-2 w-nav-menu">
                        <div data-hover="true" data-delay="0" class="dropdown-3 w-dropdown">
                            <div class="dropdown-toggle---features w-dropdown-toggle">
                                <a href="{{url('/')}}" style="text-decoration: none;">
                                    <div class="text-block-13">Home</div>
                                </a>
                            </div>

                        </div>
                        <div data-hover="true" data-delay="0" class="dropdown-3 w-dropdown">
                            <div class="dropdown-toggle-company w-dropdown-toggle">
                                <a href="{{url('#leader')}}" style="text-decoration: none;">
                                    <div class="text-block-13">Our Team</div>
                                </a>
                            </div>
                        </div>

                    </nav>
                    <div class="login-buttons">
                        @auth @else
                        <a href="{{ route('login') }}" style="text-decoration: none;" class="sign-in w-button">Sign in</a> &nbsp;&nbsp;
                        <!-- <a href="#" style="text-decoration: none;" class="sign-in w-button">Register</a>&nbsp;&nbsp; -->
                        @endauth @endif
                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                        <a href="#" style="text-decoration: none;" class="invest w-button"><span class="spinner-grow spinner-grow-sm" role="status " aria-hidden="true"></span>&nbsp;&nbsp;Invest with us</a>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease-out" data-easing2="ease-out" role="banner" class="navigation-mob w-nav">
        <div class="navigation-container-mob">
            <a href="#" class="logo-wrapper w-nav-brand"><img src="https://res.cloudinary.com/trade-lenda/image/upload/v1628132872/landing_page_pic/Group_11434_2_umfio2.png" alt="" class="carbon-main-logo"></a>
            <nav role="navigation" class="mobile-nav w-nav-menu">
                <a href="{{url('/')}}" class="mobile-nav-link w-nav-link">Home</a>
                <a href="{{url('/#leader')}}" class="mobile-nav-link w-nav-link">Our Team</a>
                <a href="{{ route('login') }}" class="mobile-nav-link w-nav-link">Sign in</a>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                <a href="#" style="text-decoration: none;" class="invest w-button"><span class="spinner-grow spinner-grow-sm" role="status " aria-hidden="true"></span>&nbsp;&nbsp;Invest with us</a>

            </nav>
            <div class="menu-mob w-nav-button">
                <div class="w-icon-nav-menu"></div>
            </div>
        </div>
    </div>
    <div class="hero-section policy-hero wf-section">
        <div class="container t-c">
            <div data-w-id="c0d256e8-b9c6-f78f-7af1-24267e0a741c" class="flex conditions-header">
                <div class="carbon-media">
                    <h1 class="heading contact-heading">Terms and Conditions</h1>
                </div>
                <div class="updated-date">
                    <div class="updated-copy" style="color: green">Last updated: June 10, 2021. </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section-2 post wf-section">
        <aside data-w-id="48eafc75-e2de-4bbe-9aa3-907252ae91e6" style="opacity:0" class="post-card-newsletter top">
            <div class="div-block-63">
                <h1 class="heading page-link" style="color: green; background-color: #dee2e6;">ON THIS PAGE</h1>
                <h1 class="heading page-link body">
                    <a href="#defination" class="content-link">1.0 Definitions</a>
                </h1>
                <h1 class="heading page-link body">
                    <a href="#interpretation" class="content-link">2.0 Interpretation</a>
                </h1>
                <h1 class="heading page-link body">
                    <a href="#Grant-and-Scope" class="content-link">3.0 Grant and Scope of License</a>
                </h1>

                <h1 class="heading page-link body">
                    <a href="#Bank-Account-and-Condition" class="content-link">4.0 Opening a Bank Account and Condition of Use</a>
                </h1>
                <h1 class="heading page-link body">
                    <a href="#Personal-Information" class="content-link">5.0 Personal Information</a>
                </h1>
                <h1 class="heading page-link body">
                    <a href="#Transacting" class="content-link">6.0 Transacting</a>
                </h1>
                <h1 class="heading page-link body">
                    <a href="#Funding-and-Transfer" class="content-link">7.0 Funding and Transfer out of your Account</a>
                </h1>
                <h1 class="heading page-link body">
                    <a href="#Prohibited-Transactions" class="content-link">8.0 Prohibited Transactions</a>
                </h1>
                <h1 class="heading page-link body">
                    <a href="#Liability" class="content-link">9.0 Liability</a>
                </h1>
                <h1 class="heading page-link body">
                    <a href="#Statements" class="content-link"><span>10.0 Statements</span></a>
                </h1>
                <h1 class="heading page-link body">
                    <a href="#Definition" class="content-link"><span>11.0 Definition</span></a>
                </h1>
                <h1 class="heading page-link body">
                    <a href="#Investment Account" class="content-link"><span>12.0 Part C: Investment Account</span></a>
                </h1>
                <h1 class="heading page-link body">
                    <a href="#Data-Protection-and-Customer" class="content-link"><span>13.0 Data Protection and Customer Consent</span></a>
                </h1>
                <h1 class="heading page-link body">
                    <a href="#Laundering-and-Countering" class="content-link"><span>14.0 Anti Money Laundering and Countering Financing of Terrorism</span></a>
                </h1>
                <h1 class="heading page-link body">
                    <a href="#Termination-and-suspension" class="content-link"><span>15.0 Termination and suspension</span></a>
                </h1>
                <h1 class="heading page-link body">
                    <a href="#Taxes" class="content-link"><span>16.0 Taxes</span></a>
                </h1>
                <h1 class="heading page-link body">
                    <a href="#Communication-Between-Us" class="content-link"><span>17.0 Communication Between Us</span></a>
                </h1>
                <h1 class="heading page-link body">
                    <a href="#Account-Secure" class="content-link"><span>18.0 Keeping Your Account Secure</span></a>
                </h1>
                <h1 class="heading page-link body">
                    <a href="#Deposit-Insurance" class="content-link"><span>19.0 Deposit Insurance Scheme</span></a>
                </h1>
                <h1 class="heading page-link body">
                    <a href="#General" class="content-link"><span>20.0 General</span></a>
                </h1>
                <h1 class="heading page-link body">
                    <a href="#Entire-Agreement" class="content-link"><span>21.0 Entire Agreement</span></a>
                </h1>
                <h1 class="heading page-link body">
                    <a href="#User-Representations" class="content-link"><span>22.0 User Representations</span></a>
                </h1>
                <h1 class="heading page-link body">
                    <a href="#Governing-Law" class="content-link"><span>23.0 Governing Law and Dispute Resolution</span></a>
                </h1>
            </div>
        </aside>
        <div class="container-1180px">
            <div class="w-layout-grid post-content-wrapper">
                <article data-w-id="a2a8a387-81d6-2fa0-8ada-81424cfd283d" style="opacity:0" class="article-content">
                    <div class="container">
                        <div class="flex policy-copy">
                            <div class="policy-content-container">
                                <h1 class="heading new-paragaph-large-title update">Terms And Conditions</h1>
                                <p class="conditions-paragraph">These Terms and Conditions apply to and regulate the provision of services provided by Trade Lenda , a b2b finance platform which provides financial services via its mobile and web app – Trade Lenda to the Customer herein.<br><br>                                    These Terms and Conditions constitute Trade Lenda’s offer and sets out the terms governing this Agreement. By registering for a Trade Lenda Account or using any of the services provided on the Trade Lenda App. You agree
                                    to comply with all of the terms and conditions in this user agreement. The terms include an agreement to resolve disputes by arbitration on an individual basis.<br><br> You also agree to comply with the following additional
                                    policies that apply to you:
                                    <ul class="conditions-paragraph">
                                        <li>Privacy Policy</li>
                                        <li>Acceptable Use Policy</li>
                                        <li>Consent to Receive Electronic Disclosures (E-Sign Disclosure and Consent)</li>
                                    </ul>
                                </p>
                                <p class="conditions-paragraph"> We may revise this user agreement and any of the policies listed above from time to time. The revised version will be effective at the time we post it, unless otherwise noted. If our changes reduce your rights or increase
                                    your responsibilities, we will provide notice to you of at least 20 days. We reserve the right to amend this agreement at any time without notice, subject to applicable law. By continuing to use our services after any
                                    changes to this user agreement become effective, you agree to abide and be bound by those changes. If you do not agree to these terms and conditions, please do not proceed and exit the application immediately. Also,
                                    please be informed that we can terminate your relationship with us if we believe that you have violated any of these terms.<br><br>
                                </p>
                                <h1 id="defination" class="heading new-paragaph-large-title update">1.0 Definitions</h1>
                                <p>
                                    The following definitions relate to these Terms of Use:<br><br> 1.1.“Account” or “Wallet” is an electronic stored value account on Trade Lenda created for use by the customer. Credits, debits and charges are applied
                                    to this Account. The Account is primarily accessed through your mobile phone, the Trade Lenda mobile applications.<br><br> 1.2.“Agent” refers to any party or device, including authorized Trade Lenda Agents, that facilitate
                                    Trade Lenda transactions on behalf of customers.<br><br> 1.3. “BVN” means Biometric Verification Number used by the banking industry in Nigeria and issued by a CBN approved financial institution.
                                    <br><br> 1.4. “CBN” means for the Central Bank of Nigeria.<br><br>1.5.“Content” means all information whether textual, visual, audio or otherwise, appearing on or available through the services.<br><br> 1.6.“Credit”
                                    means the movement of funds into an Account or Wallet.<br><br> 1.7.“Debit” means the movement of funds out of an Account or Wallet.<br><br> 1.8.“Level 1 customer” refers to a new customer who provides the minimum requirement
                                    listed here in and as defined in the CBN three tier Know Your Customer (KYC) requirements.<br><br> 1.9.“Level 2 customer” refers to a Trade Lenda user who has submitted his phone number, full name, full address and
                                    a copy of a verifiable ID card or phone number and BVN as defined in the CBN three tier KYC requirements.<br><br> 1.10. “Level 3 customer” refers to a Trade Lenda user who has linked his Trade Lenda Account with his
                                    BVN has provided all required KYC information as defined in the CBN three tier KYC requirements.<br><br> 1.11. “Linked Bank Account/Card” refers to bank debit or credit card that you have linked to your Trade Lenda
                                    Account. This allows you to carry out transactions using funds from your Trade Lenda account.<br><br> 1.12. “Merchant” means any person or entity who offers and or accepts payment for goods or services using Trade Lenda.<br><br>                                    1.13. “Mobile Payments” describes the service or process that allows customers to make and receive a variety of payments using their mobile phone, among other channels.<br><br> 1.13.“Mobile phone” means a GSM or CDMA
                                    device, which can make and receive telephone calls and send and receive SMS, among other communication options.<br><br> 1.14. “OTP” means One Time Password, used to authorize transactions or processes.<br><br> 1.15.
                                    “PIN” means Personal Identification Number.
                                    <br><br> 1.16. “Products” refer to Trade Lenda products, including person-to-person money transfer, bill payments, airtime top-up, FairMoeny retail payments services or other Merchant products and services provided
                                    through Trade Lenda. <br><br>1.17. “Registered phone number” refers to any phone number that has been registered on Trade Lenda.<br><br> 1.18.“Services”; any products and services provided to the customer.<br><br> 1.19.“Trade
                                    Lenda Wallet” means an electronic stored value account on Trade Lenda used to perform transactions.<br><br> 1.20.“SMS” or “Short Message Service” is a standard communication service on GSM phones, which is used to exchange
                                    short text messages between mobile devices.<br><br> 1.21. “Investment” means placing funds with Trade Lenda for an agreed tenor for a promised return at the Prevailing Rate.<br><br> 1.22. “Investment Account” means
                                    your virtual account with Trade Lenda for the placement of Investments offered on the App <br><br>1.23.“Loan” means the principal amount of the loan (together with any interest and fees due on the loan) made or to be
                                    made to you under this Agreement from time to time through the App or (as the context requires) the principal amount outstanding for the time being of that loan.<br><br> 1.24. “Prevailing Rate” means the rate of interest
                                    payable on the Investment as shall be notified to you through the App, which rate may be varied from time to time.<br><br> 1.25. “Credit Reference Bureau” includes any financial institution, or a credit reference bureau
                                    duly licensed under the laws and regulations of the Federal republic of Nigeria to, collect and facilitate the sharing of customer credit information.

                                </p>
                                <h1 id="interpretation" class="heading new-paragaph-large-title">2.0 Interpretation</h1>
                                <p class="conditions-paragraph">2.1 In addition to the definitions in Section 1 unless the context requires otherwise: the singular shall include the plural and vice versa.<br><br> 2.2 A reference to any one gender, whether masculine or feminine includes
                                    the other.<br><br> 2.3 All the headings and sub-headings in this agreement are for convenience only and are not to be taken into account for the purposes of interpretation of this Agreement.<br><br> 2.4 The recitals
                                    and schedules shall be deemed to form part of this Agreement.<br><br> 2.5 In this agreement, the terms: “You”, “your”, “Customer”, “Borrower” shall mean the person who applied for this Account and agrees to this Agreement
                                    while “We”, “us” and “our” “Lender” and “Bank” shall mean Trade Lenda, and following an assignment, any person, company or bank to whom the rights and/or obligations of Trade Lenda have been assigned. “Account” means
                                    the Customer’s account with Trade Lenda “Disbursement Date” means the date Trade Lenda advanced the loan to the Customer’s account “Payment Due Date” means a maximum of 30 days after the loan has been disbursed “Credit
                                    Limit” means the maximum credit available to the Borrower on opening an account with Trade Lenda “Loan” means the amount advanced to the Borrower by Trade Lenda.
                                </p>
                                <p class="conditions-paragraph heading new-paragaph-large-title">Part A: General Provisions</p>
                                <h1 id="Grant-and-Scope" class="heading new-paragaph-large-title">3.0 Grant and Scope of License</h1>
                                <p class="conditions-paragraph">3.1 In consideration of you agreeing to abide by the terms of this Agreement, we grant you a non-transferable, non-exclusive licence to use the App on your Equipment, subject to these Terms and Conditions. We reserve all
                                    other rights. Except as expressly set out in this Agreement or as permitted by any local law, you agree:<br><br> 3.2 not to rent, lease, sub-license, loan, translate, merge, adapt, vary or modify the App.<br><br> 3.3
                                    not to make alterations to, or modifications of, the whole or any part of the App, or permit the App or any part of it to be combined with, or become incorporated in, any other programs.<br><br> 3.4 not to disassemble,
                                    decompile, reverse-engineer or create derivative works based on the whole or any part of the App or attempt to do any such thing except to the extent that such actions cannot be prohibited because they are essential
                                    for the purpose of achieving inter-operability of the App with another software program, and provided that: <br><br>3.5 the information obtained by you during such activities is not disclosed or communicated without
                                    our prior written consent to any third party; and is not used to create any software that is substantially similar to the App.<br><br> 3.6 you include our copyright notice on all entire and partial copies you make of
                                    the App on any medium; and you undertake not to provide or otherwise make available the App in whole or in part (including object and source code), in any form to any person without prior written consent from us; and
                                    3.7 to comply with all technology control or export laws and regulations in your country that apply to the technology used or supported by the App or any Service (the Technology). ‍
                                </p>
                                <h4 id="Bank-Account-and-Condition" class="heading new-paragaph-large-title">4.0 Opening a Bank Account and Condition of Use -<br><br>
                                    <!-- <span class="conditions-paragraph">This section defines the terms used in this Agreement</span></h4> -->
                                    <p class="conditions-paragraph">4.1. To use Trade Lenda you must first open a Trade Lenda Bank Account by registering your details through our Mobile App. As part of the signup process, you will need to accept these Terms of Use and our Privacy Policy,
                                        and you must have legal capacity to accept the same. If you order additional services, you may be asked to accept additional terms and conditions.<br><br>4.2. If you are an individual, you must be a Nigerian citizen,17
                                        years or older to use our services and by opening a Trade Lenda Account you declare that you are 17 years or older. This does not apply to products for which we may set a different age limit. We may require at any
                                        time that you provide evidence of your age. <br><br>4.3 You must provide all information as may be requested by us, such as your name, BVN, email address, mobile device number and such other information as we may
                                        request from time to time (collectively, “Customer Information”).<br><br> 4.4 You agree to promptly notify us of changes to your Customer Information by updating your profile on the Trade Lenda App and to notify
                                        us at least five business days before any changes to your bank account information, including, but not limited to, the closure of your bank account for any reason. If we approve your registration, you will be authorized
                                        to use the Account, subject to these terms.<br><br> 4.5 By opening a Trade Lenda Account you represent and warrant to us that your opening of a Trade Lenda Account does not violate any laws or regulations applicable
                                        to you. You shall indemnify us against any losses we incur in connection with your breach of this section.<br><br> 4.6 You may only add payment instruments (such as bank accounts, credit or debit cards) to your
                                        Trade Lenda Account if you are the named holder of that payment instrument. We take any violation of this requirement very seriously and will treat any attempt to add a payment instrument of which you are not the
                                        named holder as a fraudulent act.<br><br> 4.7 During signup you will be asked whether you intend to use your Trade Lenda Account for private or commercial purposes. If you have any intention to use your Trade Lenda
                                        Account for commercial purposes, you must tell us, even if you use it also for private purposes. If you have stated that you will use your Trade Lenda Account for private purposes only, you must tell us immediately
                                        before, at any point in the future you use it for commercial purposes by contacting Customer Service.
                                    </p>

                                    <h4 id="Personal-Information" class="heading new-paragaph-large-title">5.0. Personal Information</h4>
                                    <p class="conditions-paragraph">5.1 To meet our Know Your Customer (“KYC”) and Anti-Money Laundering (“AML”) obligations, we may require you to provide any or all the following:<br><br> 5.1.1 your full name;<br><br> 5.1.2 your date of birth;<br><br>                                        5.1.3 your Bank Verification Number (“BVN”);<br><br> 5.1.4 your current residential address;<br><br> 5.1.5 your picture;<br><br> 5.1.6 copy of a valid Government issued ID (national ID, international passport, permanent
                                        voter’s card or driver’s license);
                                        <br><br>5.1.7 copy of recent utility bill, bank statement, affidavit, or another bill, dated within three months of our request, which carries your name and address;<br><br> 5.1.8 any other information or document
                                        as we may require for our internal risk assessment. <br><br>5.2 You warrant that all information and documentation provided to us are true, correct, and accurate. You also undertake to notify us of any changes to
                                        the information or documentation which you have provided.<br><br> 5.3 You hereby agree and authorise Trade Lenda to verify information provided by you against the information held by any third party (including official
                                        databases) such as, NIBBS, Payment System Providers any other information bank available to Trade Lenda. <br><br>5.4 The information that Trade Lenda may verify against the information which you have provided to
                                        us include (without limitation): your name, phone number, date of birth, address, age, Identification Number (“ID”) or Passport Number and such other information that will enable Trade Lenda to identify you and
                                        comply with the regulatory “Know Your Customer” requirements (together the “Personal Information”).<br><br> 5.5 You hereby agree and authorise Trade Lenda to collect and verify information including, but not limited
                                        to, data relating to your phone (including, without limitation, your phone’s history) from your Equipment, from any SMS sent to you or by you, from any 3rd party applications, and such other information as Trade
                                        Lenda shall require for purposes of providing you the Services (the “Relevant Information”).<br><br> 5.6 You hereby consent to Trade Lenda verifying the Personal Information and the Relevant Information and using
                                        the Personal Information and the Relevant Information to the extent necessary in Trade Lenda opinion for the provision of the Services.<br><br> 5.7 You hereby agree and authorise Trade Lenda to obtain and procure
                                        your Personal Information and Relevant Information from relevant sources (private and official databases) and you further agree and consent to the disclosure and provision of such Personal Information by us or our
                                        Third Party Partners.<br><br> 5.8 You agree to indemnify and hold Trade Lenda and the Third-Party Partners harmless with respect to any claims, losses, liabilities and expenses (including legal fees and expenses)
                                        that may arise as a result of the disclosure and reliance on such Personal Information and/or Relevant Information.<br><br> 5.9 Trade Lenda reserves the right to request for further information from you pertaining
                                        to your use of the Services at any time. Failure to provide such information within the time required by Trade Lenda may result in Trade Lenda declining to accept your application for an Account or access to the
                                        Services.
                                        <br><br> 5.10 You acknowledge and agree that when Trade Lenda or our third-party service providers access and retrieve information from such third-party websites, Trade Lenda and our third-party service providers
                                        are acting as your agent, and not the agent of, or on behalf of the third part.
                                    </p>
                                    <h4 id="Transacting" class="heading new-paragaph-large-title">6.0 Transacting</h4>
                                    <p class="conditions-paragraph">6.1 You may access the available funds in your Account at any time. While we make every reasonable attempt to provide the services as described in our marketing and educational materials, we offer the services “as is”
                                        and without any warranties.<br><br> 6.2. All payments will be processed in Nigerian local currency i.e. Naira and Kobo.<br><br> 6.3. Trade Lenda will send you a receipt of all transactions effected from your Trade
                                        Lenda Account; this message may be sent via SMS, email, or another available channel.<br><br> 6.4 .Some transactions on may require you to input your pre-configured PIN, you are solely responsible for maintaining
                                        the confidentiality of your PIN and login details of your Account. You must protect the secrecy of your PIN and login details and prevent fraudulent use of the same.<br><br> 6.5.As required by the CBN, there are
                                        daily limits on your Account or Wallet. You can increase or reduce these limits by providing Trade Lenda with the required information, subject to the restrictions placed in terms of paragraphs <br><br>6.6.Your
                                        Account will be credited with any deposits made into it, and the credit will be available for transactions immediately after they are cleared.<br><br> 6.7.We will verify and confirm any record of a deposit into
                                        your Account. Our records will be taken as correct unless the contrary is proved.<br><br> 6.8.The table below outlines the customer classification Trade Lenda adopts along KYC levels along with the applicable transaction
                                        limits. You may not withdraw, transfer or make any payments that together exceed any of the per transaction or daily limits defined for your category. Should you attempt to exceed any applicable limits, your transactions
                                        will be declined. Trade Lenda may, acting reasonably and in accordance with regulation set by the Central Bank of Nigeria, vary the limits at any time and any variation will be notified to customers. Where a deposit
                                        exceeding the transaction limit for your category is made to your Account, we will notify you to upgrade your Account to the category that applies to such deposit within seven (7) days. In the event that you fail
                                        to upgrade your Account to the required category, we reserve right to place a restriction on your Account until such upgrade to the required category is effected.
                                    </p>
                                    <!-- <h4 id="Our-lending-terms" class="heading new-paragaph-small-title">1. Our Lending Terms</h4> -->
                                    <p class="conditions-paragraph"><img src="images/gba.png"></p>
                                    <span class="conditions-paragraph"> *Subject to change</span></h4>
                                <p class="conditions-paragraph">
                                    6.10 For the avoidance of doubt, please note that some transaction limits may be further reduced from the approved CBN limits, this may be done based on channels or particular types of transactions as part of our risk control process.<br><br>                                    6.11 You undertake throughout the duration of your use of Trade Lenda to comply with anti-fraud and money laundering regulations applicable in Nigeria. In particular, you undertake to respond diligently to any request
                                    from Trade Lenda or a regulatory or judicial authority regarding any anti-fraud and money laundering activity on your Account.<br><br> 6.12 Any breach of the anti-fraud and money laundering regulations by you constitutes
                                    a serious breach of this Terms of Use and we reserve the right to immediately suspend or close your Account.<br><br> 6.13 The proceeds from suspected fraudulent or money laundering transactions shall be kept by Trade
                                    Lenda pending an internal decision or a judicial or administrative decision.<br><br> 6.13 In processing your transactions, Trade Lenda shall comply with the Money Laundering Prohibition Act (as amended) 1911.
                                </p>
                                <h4 id="Funding-and-Transfer" class="heading new-paragaph-large-title">7.0 Funding and Transfer out of your Account</h4>
                                <p class="conditions-paragraph">7.1 Once you open your account, you will be assigned a Bank Account Number. The account number will be required when you or a third party wants to fund your account. Save for any limits that are applicable to the account,
                                    your account may be credited by transfers from other account holders on the Trade Lenda App, through bank transfers to your Account and by cards. Your account may also be funded by Trade Lenda if your approved loan
                                    is disbursed into the account.<br><br> 7.2 You may transfer the funds in your account to other account on the Trade Lenda App, and to any bank account with a Nigerian bank.<br><br> 7.3 We may not process your transfer
                                    or payment if:
                                    <br><br> 7.4 If your instructions are unclear.<br><br> 7.5 You have insufficient funds.<br><br> 7.6 There is a suspicion of criminal, fraudulent or illegal activity on your Trade Lenda Account.<br><br> 7.7 There is
                                    a suspicion of unauthorized access on your Trade Lenda Account.<br><br> 7.8 We (and/or our Partners) are legally restricted from completing the transfers.<br><br> 7.9 It goes over your payment limits (where applicable).<br><br>                                    7.10 Your account has been dormant for more than 12 months.<br><br> 7.11 We are prohibited or restricted from doing so in accordance with the payment system regulations or any applicable law in Nigeria.<br><br> 7.12
                                    You are responsible for providing the correct details for the recipient of your transfers or payments. Where payments are made according to your instructions and those instructions were wrong, but authorized, we will
                                    work with our partners to assist you in retrieving the amount if you notify us promptly. Where we are unable to retrieve the payment, we will assist you with the relevant information in our possession that you may need
                                    to reclaim your funds.<br><br> 7.13 You may be required to set a password/Personal Identification Number (PIN) to carry out transactions using the account. When you enter your password to confirm a transaction, you
                                    confirm that we may treat the transaction as having been authorized.<br><br> 7.13 Overdrawn amounts from your account may be treated as a Loan which is immediately due and repayable to us.
                                </p>
                                <h4 id="Prohibited-Transactions" class="heading new-paragaph-large-title">8.0 Prohibited Transactions</h4>
                                <p class="conditions-paragraph">8.1. It is strictly forbidden to send or receive payments as consideration for the sale or supply of:<br><br>
                                    <ul class="conditions-paragraph">
                                        <li>Weapons (including without limitation, knives, guns, firearms or ammunition).</li>
                                        <li>Satellite and cable TV descramblers.</li>
                                        <li>Pornography, adult material, material which incites violence, hatred, racism or which is considered obscene.</li>
                                        <li>Government IDs and licences including replicas and novelty items and any counterfeit products.</li>
                                        <li>Unlicensed or illegal lotteries or gambling services (including without limitation the use of or participation in illegal gambling houses).</li>
                                        <li>Unregistered charity services Items which encourage or facilitate illegal activities.</li>
                                        <li>Prepaid debit cards or other stored value cards that are not associated with a particular merchant and are not limited to purchases of particular products or services.</li>
                                        <li>Multi-level marketing, pyramid selling or ponzi schemes, matrix programmes or other “get rich quick” schemes or high yield investment programmes.</li>
                                        <li>Goods or services that infringe the intellectual property rights of a third party.</li>
                                        <li>It is strictly forbidden to make payments to or to receive payments from persons or entities offering illegal gambling services, including (but not limited to) illegal sports betting, casino games and poker games.
                                            We may suspend or terminate your Trade Lenda Account at any time or refuse to execute or reverse a transaction if we believe that you directly or indirectly use or have used your Trade Lenda Account for or in
                                            connection with illegal gambling transactions.</li>
                                        <li>Activities defined as illegal by the CBN and laws of the Federal Republic of Nigeria.</li>
                                        <li>It is strictly forbidden to use your Trade Lenda Account for any illegal purposes including but not limited to fraud and money laundering. We will report any suspicious activity to the relevant law enforcement agency.</li>
                                    </ul>
                                </p>
                                <p class="conditions-paragraph">We reserve the right, in our sole discretion, to add categories of prohibited transactions by adding such categories to these Terms and Condition of Use. If you conduct or attempt to conduct any transaction in violation
                                    of the prohibitions, we reserve the right to:<br><br>
                                    <ul class="conditions-paragraph">
                                        <li>Reverse the transaction.</li>
                                        <li>Close or suspend your Trade Lenda Account.</li>
                                        <li>Report the transaction to the relevant law enforcement agency.</li>
                                        <li>Claim damages from you.</li>
                                        <li>Charge you an administration fee in case we apply any of the above.</li>
                                    </ul>
                                </p>

                                <h4 id="Liability" class="heading new-paragaph-small-title">9.0 Liability</h4>
                                <p class="conditions-paragraph">In case of an unauthorized payment or a payment that was incorrectly executed due to an error by us, we shall at your request immediately refund the payment amount including all fees deducted therefrom. This shall not apply:<br><br>                                    9.1 Where the unauthorized payment arises from your failure to keep the personalized security features of your Trade Lenda Account safe in accordance with section 17, in which case you shall remain liable.<br><br> 9.2.
                                    if you fail to notify us without undue delay of any loss of your password or other event that could reasonably be expected to have compromised the security of your Trade Lenda Account after you have gained knowledge
                                    of such event in which case you shall remain liable for losses incurred up to your notification to us.<br><br> 9.3 If the transaction was unauthorized but you have compromised the security of your Trade Lenda Account
                                    with intent or gross negligence in which case you shall be solely liable for all losses, or If you fail to dispute and bring the unauthorized or incorrectly executed transaction to our attention within 2 weeks from
                                    the date of the transaction.<br><br> 9.4 Section 9.3 shall not apply to transactions made after you have notified us in accordance with section 9.0 in which case, we shall remain liable and refund any unauthorized transaction
                                    immediately to you.<br><br> 9.5 Without prejudice to the foregoing, you are asked to check the transactions history of your Trade Lenda Account regularly and frequently and to contact Customer Service immediately in
                                    case you have any questions or concerns.<br><br> 9.6. In the case of any incorrect or misdirected payment, we shall take reasonable measures to assist you with tracing and recovering such payments.<br><br> 9.7 Subject
                                    to the foregoing, we shall not be liable for any disruption or impairment of our service or for disruptions or impairments of intermediary services on which we rely for the performance of our obligations hereunder,
                                    provided that such disruption or impairment is due to abnormal and unforeseeable circumstances beyond our reasonable control, or the control of the intermediary affected.<br><br> 9.8. We shall not be liable for any
                                    indirect or consequential losses including but not limited to loss of profit, loss of business and loss of reputation. We shall not be liable for any losses arising from our compliance with legal and regulatory requirements.<br><br>                                    9.9. Nothing in these Terms of Use shall operate to exclude liability for death or personal injury due to negligence or for fraud or fraudulent misrepresentation or for any statutory liability that cannot be excluded
                                    or amended by agreement between the parties.
                                </p>
                                <h4 id="Statements" class="heading new-paragaph-small-title">‍<span>10.0 Statements</span></h4>
                                <p class="conditions-paragraph">10.1 A statement and activity report in respect of your Account will be made available on Request. Requests shall be made via a contact link on the App.<br><br> 10.2 The statement on the App shall provide details of your
                                    recent transactions in your Account initiated from your Equipment.<br><br> 10.3 Your statement will show all transactions carried out from your Account. You must check your statement carefully and notify Trade Lenda
                                    as soon as possible, and no later than 48 hours after receipt of your statement, if it includes any transaction or other entry which appears to you to be wrong or not made in accordance with your instructions.<br><br>                                    10.4 Trade Lenda, may without notice to you, rectify discrepancies, add or alter the entries in your statement to reflect the accurate position of your transactions.<br><br> 10.5 Save for a manifest error, a statement
                                    issued to you in respect of your Account shall be conclusive evidence of the transactions carried out on your Trade Lenda App for the period covered in the statement.
                                </p>
                                <p class="conditions-paragraph heading new-paragaph-large-title">Part B: Our Loans</p>
                                <p class="conditions-paragraph">These Terms and Conditions apply to and regulate the provision of credit facilities by MyCredit Investments Ltd through its service “Trade Lenda” to the Borrower herein. These Terms and Conditions constitute the Lender’s
                                    offer and sets out the terms governing this Agreement.<br>‍<br> Trade Lenda mentions below relates to the Trade Lenda app, a service provided by MyCredit Investments Ltd.<br>‍<br> MyCredit Investment Ltd is an open-end
                                    credit plan offered by the Lender and by accepting, an account is set up with the Trade Lenda app and you agree that you have read the Terms and Conditions. You authorize the Lender to review your credit report and
                                    you understand that this account is subject to transaction fees and default fees and is governed by the Laws of the Federal Republic of Nigeria.<br>‍<br> You will be asked to provide information (such as your date of
                                    birth and your Bank Verification Number), when you apply for a loan. This information is used for verification purposes.
                                </p>
                                <p class="conditions-paragraph heading new-paragaph-large-title">HOW TO USE TRADE LENDA LOAN ACCOUNT</p>
                                <p class="conditions-paragraph">This is an open-end credit account where you access direct loan or credit facility using Trade Lenda, while you repay the loan or credit facility on a future date via cash transfer or electronic repayment from your debit/credit
                                    card on the Payment Due Date at a flat interest on the loan of up to 1% daily.</p>
                                <h4 id="Definition" class="heading new-paragaph-small-title">‍<span>11.0 Definition</span></h4>
                                <p class="conditions-paragraph">In This Agreement, The Terms: “You”, “Your”, “Customer”, And “Borrower” Mean the Person Who Applied for This Account and Agrees to This Agreement While “We”, “Us”, “Our” And “Lender” Shall Mean Mycredit Investments Ltd,
                                    And Following an Assignment, Any Person, Company or Bank To Whom The Rights And/or Obligations of The Lender Have Been Assigned “Account” Means the Borrower’s Account with The Lender “Disbursement Date” Means the Date
                                    the Lender Actually Advanced the Loan to The Borrower “Payment Due Date” Means the Date When the Instalment Should Be Repaid “Credit Limit” Means the Maximum Credit Available to The Borrower on Opening the Account with
                                    The Lender “Loan” Means the Amount Advanced to The Borrower by The Lender, Which Shall Be No Less Than N1,000.00 (One Thousand Naira Only)<br>‍<br> 11.1 Loan Fees The loan Fees payable by you in relation to any loan
                                    shall be displayed on the app. In the event of a default, this loan fee of up to 1.5% daily fixed will apply until repayment is made. The loan fee may be increased or decreased from time to time by the Lender. Such
                                    change in loan fee will take effect on the Borrower’s account following a minimum of 14 days written notice. Total transaction fee of the term of the loan shall remain applicable in the event of the Borrower liquidating
                                    the loan before expiration.<br>‍<br> 11.2 Borrower’s Obligations To pay to us, the loan sum, including any convenience, default or penalty fees, flat interest rate, and other amounts due to the Lender charged to this
                                    Account. Borrower promises to pay these amounts as agreed in this Agreement on or before the Payment Due Date. The Lender reserves the right to presume that the Borrower has authorized any loan application made in the
                                    name of the Borrower using this Account. The Borrower will be deemed responsible for any unauthorized application using this Account unless the Borrower notifies the Lender, in writing, of imminent fraud by another
                                    person on the Borrower’s account within 23 hours of such fraud. To repay the loan given to you and/or to someone you authorized to use this Account via direct cash transfer to a bank account listed by the Lender, an
                                    electronic debit from the card/account you provided on the due date, or through an acceptable electronic channel. The Lender reserves the right to accept early repayment before the Payment Due Date, provided the Borrower
                                    has given adequate notice and repays full loan along with the flat interest rate. Loan repayment via electronic debit card may be affected by the Lender in the way and manner hereinafter specified: The Lender shall
                                    charge a one-time processing fee the first time a Customer sets up a new debit card on the Account. In the event the card is expired or about to expire, you will have to obtain a renewed card from your bank or provide
                                    us with another personal debit card. The Lender shall deduct from the card setup on the repayment due date. We will never make any transactions on the card outside of the scheduled loan repayments. In the event of a
                                    double repayment initiated in error by you, we will on a best effort basis process a refund within a reasonable time. You hereby indemnify us against any and all losses, liabilities or damages that may arise in the
                                    event that you use a third party’s card on your Account without the consent of such third party. In the event of a default or insufficiency of funds in your bank account, you hereby authorize us to charge any other
                                    cards you may have on your Account or profile other than the primary card listed on an ongoing basis until the debt is settled. You understand and agree that we do not store card details on our platform thus card details
                                    shall be processed through a secure payment gateway that is PCI DSS compliant. To give The Lender authentic and up-to-date personal, social media, phone and financial records about you that we may reasonably request
                                    and analyze, from time to time. The Borrower shall indemnify and hold harmless the Lender and its representatives (each, an “Indemnified Person”) from and against any and all suits, actions, proceedings, claims, damages,
                                    losses, liabilities and expenses (including, without limitation, counsel’s fees and disbursements and other costs of investigation or defense, including those incurred upon any appeal) which may be instituted or asserted
                                    against or incurred by any Indemnified Person as the result or arising out of credit having been extended, suspended or terminated under this Agreement or any loan documents and the administration of such credit and
                                    in connection with or arising out of the transactions contemplated under this Agreement or any loan document and any actions or failures to act in connection therewith and any legal costs and expenses arising out of
                                    or incurred in connection with disputes between or among any parties to this Agreement or any loan document (collectively, “Indemnified Liabilities”); provided, that the Borrower shall not be liable for any indemnification
                                    to an Indemnified Person to the extent that any such suit, action, proceeding, claim, damage, loss, liability or expense results solely from that Indemnified Person’s gross negligence or wilful misconduct, as finally
                                    determined by a court of competent jurisdiction. Not to give us false information or signatures, electronic or otherwise, at any time. To pay a Late Fee or penalty fee as may be provided in this terms and conditions.
                                    To make all payments via direct debit on cards or by electronic funds transfer as stated in the application form. To promptly notify us if you change your name, your mailing address, your e-mail address or your telephone
                                    number. To honor any other promises that you make in this Agreement. That you will not accept this Account unless you are of legal age and have the capacity to enter into a valid contract. Not to use Trade Lenda only
                                    for any act of illegality or criminality as MyCredit Investments Ltd will not be criminally culpable for any illegality committed by you. To give the Lender legal authority to deduct full repayment before due date where
                                    it is established that the loan was obtained fraudulently. To fill out the application form (as provided) with accurate information and details as required.<br>‍<br> 11.3 Lender’s Obligation To make available the loan/credit
                                    facility to the Borrower of a figure not less than N1,000.00 (One Thousand Naira only) To perform a) above upon confirmation of the Borrower’s identity and personal information To demand repayment for the Borrower as
                                    and when due To conduct investigations on the Borrower prior to opening an account for the Borrower To use all reasonable and legitimate means to collect the amount extended to the Borrower, the default fee, the transaction
                                    fees and any other penalty fee imposed on the Borrower as a result of the loan. Not to store or save Borrower’s debit or credit card details given by the Borrower in the application form.<br>‍<br> 11.4 Credit Reference
                                    The Lender or its duly authorized representatives/agents will utilize dedicated Credit Agencies for a credit report on the Borrower in considering any application for credit. The Borrower authorizes The Lender to access
                                    any information available to The Lender as provided by the Credit Agency. The Borrower also agrees that the Borrower’s details (save the card details) and the loan application decision may be registered with the Credit
                                    Agency.
                                    <br>‍<br> 11.5 Notices The Borrower agrees that The Lender may communicate with them by sending notices, messages, alerts and statements in relation to this Agreement in the following manner: To the most recent physical
                                    address The Lender holds for the Borrower on file By delivery to any email address provided during the application process. By delivery of an SMS to any mobile telephone number the Borrower has provided to The Lender.
                                    By posting such notice on the Lender’s website.<br>‍<br> 11.6 Event of Default
                                    <br>‍<br>11.6.1 Default in terms of this Agreement will occur if:<br>‍<br> The Borrower fails to make any scheduled repayment in full on or before the payment due date in accordance with the repayment plan given to
                                    the Borrower. Any representation/information, warranty or assurance made or given by the Borrower in connection with the application for this loan or any information or documentation supplied by the Borrower is later
                                    discovered to be materially incorrect; or The Borrower does anything which may prejudice the Lender’s rights in terms of this Agreement or causes the Lender to suffer any loss or damage.<br>‍<br> 11.6.2 In the event
                                    of any default by the Borrower subject to clause 11.6.11 above –<br>‍<br> The Lender reserves the right to assign its right, title and interest under the Agreement to an external Collections Agency who will take all
                                    reasonable steps to collect the outstanding loan amount. The Lender also reserves the right to institute legal proceedings against the defaulting Borrower and is under no obligation to inform the Borrower before such
                                    proceedings commence. The Borrower shall indemnify and hold harmless the Lender and its representatives (each, an “Indemnified Person”) from and against any and all suits, actions, proceedings, claims, damages, losses,
                                    liabilities and expenses (including, without limitation, counsel’s fees and disbursements and other costs of investigation or defence, including those incurred upon any appeal) which may be instituted or asserted against
                                    or incurred by any Indemnified Person as the result or arising out of credit having been extended, suspended or terminated under this Agreement or any loan documents and the administration of such credit and in connection
                                    with or arising out of the transactions contemplated under this Agreement or any loan document and any actions or failures to act in connection therewith and any legal costs and expenses arising out of or incurred in
                                    connection with disputes between or among any parties to this Agreement or any loan document (collectively, “Indemnified Liabilities”); provided, that the Borrower shall not be liable for any indemnification to an Indemnified
                                    Person to the extent that any such suit, action, proceeding, claim, damage, loss, liability or expense results solely from that Indemnified Person’s gross negligence or wilful misconduct, as finally determined by a
                                    court of competent jurisdiction.
                                </p>
                                <h4 id="Investment-Account" class="heading new-paragaph-small-title">‍<span>12.0 Part C: Investment Account</span></h4>
                                <!-- <p class="conditions-paragraph heading new-paragaph-large-title"></p> -->
                                <p class="conditions-paragraph">By signing up for the Investment product, you authorise us to manage the funds placed with us by ourselves or through our fund management partners.<br><br> Before you authorise an investment, the summary of your proposed
                                    investment amount, Prevailing Rate, tenor, maturity date, Fees, taxes, will be made available to you on the App.<br><br> You may fund your Investment Account by using any of the funding methods on the App and you authorise
                                    us to deduct the Investment Amount from your Account for the purposes of effecting your investment.<br><br> 12.1 Transfers from your Investment Account<br><br> 12.1.1 You may withdraw the funds in your Investment Account
                                    on the maturity date or on any date before the maturity date (Early Liquidation). Early Liquidation may be subject to an early withdrawal fee.<br><br> 12.1.2 Requests for Liquidation will be processed, and your Investment
                                    Amount will be disbursed into your account promptly.<br><br> 12.1.3 Unless we receive a Request from you to liquidate an investment, we may roll over any Investment on the maturity date for the same tenor as the Investment
                                    placed with us.<br><br> 12.2 Fees<br><br> 12.2.1 You agree to pay all Transaction Fees in connection with the Investment as shall be notified to you through the App. Any changes to the Transaction Fees will be communicated
                                    to you within a reasonable time.<br><br> 12.2.2 You authorise Trade Lenda to deduct from your Investment Amount, (without reference to you) any Transaction Fee and all other fees expenses and taxes, duties, impositions
                                    and expenses incurred in relation to your use of the Services.
                                </p>
                                <h4 id="Data-Protection-and-Customer" class="heading new-paragaph-small-title">‍<span>13.0 Data Protection and Customer Consent</span></h4>
                                <p class="conditions-paragraph">13.1 The processing of your data is governed by our Privacy Policy which can be found on our website. By accepting these Terms of Use, you also agree to the terms of our Privacy Policy, Anti-Money Laundering Policy and
                                    every other policy we display on our website. You should print and keep a copy of the Privacy Policy together with these Terms of Use.<br><br> 13.2 As a default, you will receive e-mail newsletters that will inform
                                    you about new product features, events, promotions, special deals etc. By accepting these Terms of Use, you agree to receive such e-mail newsletters on a regular basis. If you do not wish to receive any newsletters
                                    from us, you can opt out at any time by logging into your Trade Lenda Account and changing the appropriate setting in your Trade Lenda Account Notification Settings. You can also opt out of receiving newsletters by
                                    contacting Customer Service. Any e-mail newsletter you receive will also give you the option to unsubscribe from any future newsletter. You however will not be able to opt out of system, transaction or account critical
                                    email notifications from Trade Lenda.<br><br> 13.3 When you sign up on the Trade Lenda App you will be required to provide us with your name, email, gender, and birth date, among other information. In some cases, we
                                    may ask for additional information for security reasons or to provide specific services to you.<br><br> 13.4. You may change your personal identifiable information on Trade Lenda at any time by contacting Customer Service
                                    or accessing your account profile on the App. Some of such information will be updated immediately, while others may require further verification before it is updated.<br><br> 13.5When you use Trade Lenda from your
                                    device, we may collect information from that device regarding your browser type, location, and IP address, as well as the pages you visit for security purposes.<br><br> 13.6. When using our mobile applications we ask
                                    for access to your phone contacts,We will only upload to our servers if you give us the additional explicit permission. We will not share your contacts with any 3rd party.<br><br> 13.7. When using our mobile applications,
                                    we ask for permission to be granted access to the following features:<br><br> Camera: allows you take a profile picture, scan and capture payment card details to make payments easier and faster.<br><br> Photo Library:
                                    allows you access to your photos as an optional source for your profile picture.<br><br> Fingerprint or Facial Recognition: allows you securely log into the application. We will only ask for permission the first time
                                    the user attempts to use any of these functions. Thereafter the user may manage access through their settings option on the device.<br><br> 13.8 We are required to retain the details of transactions or payments you
                                    make via Trade Lenda after the transaction is completed. This information will only be made available to third parties if required by law or to our representatives, professional advisers or to external third-party service
                                    providers under the same obligation of confidentiality, for the purpose of enhancing our services to you. We will take all reasonable steps to ensure that your data is treated securely and in accordance with our Privacy
                                    Policy.
                                    <br><br> 13.9 You agree that your information, including your personal information, your telephone conversations with our Customer Services and your transactions may be recorded and stored for record keeping purposes
                                    for up to five (5) years from date of closure of your Account.
                                    <br><br>1. By tapping the “I agree to the Terms and Conditions”, on the application form, which you hereby adopt as your electronic signature, you understand, consent and agree that: We can provide materials and other
                                    information about your legal rights and duties to you electronically. Your electronic signature on agreements and documents has the same effect as if you signed them using ink on paper or any other physical means. We
                                    can send all important communications, billing statements and demand notes and reminders (collectively referred to as “Disclosures”) to you electronically via SMS or to an email address that you provide to us for while
                                    applying for this loan. We will alert you when the Disclosures are available, by sending you an electronic communication. Our email will tell you how you can view the Disclosures. We will make the Disclosures available
                                    to you from the date it first became available to you, or the date we sent you the email to alert you that it was available. You will be able to print a copy of the Disclosure or download the information for your records.
                                    This consent applies to this transaction, to all future Disclosures on this Account, to all future transactions in which you use the Trade Lenda Payment option with us, at any time, and to other Disclosures that we
                                    provide to you by email, unless you have, prior to such transaction, withdrawn your consent by the procedure mentioned below.<br><br> 2. By consenting, you agree that electronic Disclosures have the same meaning and
                                    effect as if we provided paper Disclosures to you as we are required to do so. When we send you an email alerting you that the Disclosures are available electronically and make it available online, that shall have the
                                    same meaning and effect as if we provided paper Disclosures to you, whether or not you choose to view the Disclosures, unless you had previously withdrawn your consent to receive Disclosures electronically.<br><br>                                    13.10 We use server firewalls and encryption to keep your Account information safe during transmission and in storage. We also use automated and social measures to enhance security, such as analysing an account behaviour
                                    for fraudulent or otherwise anomalous behaviour, may limit use of Trade Lenda features in response to possible signs of abuse, and may suspend or disable accounts for violations of our customer terms and conditions.<br><br>                                    13.11 Unless stated otherwise, our current privacy policy applies to all information that we have about you and your Account. We advise that you check our App periodically for changes to our privacy policy.<br><br>                                    13.12. You need to refer to our Privacy Policy on this App for further details as that privacy policy explains how we use and collect your information.
                                </p>
                                <h4 id="Laundering-and-Countering" class="heading new-paragaph-small-title">‍<span>14.0 Anti Money Laundering and Countering Financing of Terrorism</span></h4>
                                <p class="conditions-paragraph">14.1 To comply with relevant AML obligations, we may request information on the transactions carried out on your Account such as (a) details of the recipient (b) source of funds being transferred (c) purpose of the transfer
                                    or payment being made. You confirm that you will provide all requested information required in respect of the transaction in this regard.<br>‍<br> 14.2 You also agree that we may cancel any transaction, suspend your
                                    Account or refuse to open an Account in your name if you refuse to provide the requested information or if any information provided is untrue or inaccurate.<br>‍<br> 14.3 Please note that for certain transactions, we
                                    or our Third-Party Partners may be required to file AML or related reports (without notice to you) with the relevant regulators. These reports may include details of your Personal Information, transactions, investment
                                    activity, operation or proposed operation of the investment account or any of our Services.
                                </p>
                                <h4 id="Termination-and-suspension" class="heading new-paragaph-small-title">‍<span>15.0 Termination and suspension</span></h4>
                                <p class="conditions-paragraph">15.1. We may terminate your Trade Lenda account, or any payment service associated with it by giving you prior notice.<br>‍<br> 15.2 You may terminate your Trade Lenda Account with us at any time.<br>‍<br> 15.3 Together
                                    with a termination notice or at any time thereafter we may give you reasonable instructions on how to withdraw remaining funds.<br>‍<br> 15.4. We may at any time suspend or terminate your Trade Lenda Account without
                                    notice in case: You breach any condition of these Terms of Use or any other condition applicable to specific services covered by separate terms and conditions.<br>‍<br> You violate or we have reason to believe that
                                    you are in violation of any law or regulation that is applicable to your use of our services. We have reason to believe that you are in any way involved in any fraudulent activity, money laundering, terrorism financing
                                    or other criminal activity. <br>‍<br>15.5 We may suspend your Trade Lenda Account at any time if:<br>‍<br> We reasonably believe that your Trade Lenda Account has been compromised or for other security reasons. We reasonably
                                    suspect your Trade Lenda Account to have been used or is being used without your authorization or fraudulently; and we shall notify you either prior to the suspension or, if prior notification is not possible under
                                    the circumstances, promptly after the suspension unless we are prohibited by law to notify. In addition to Termination by default, we may terminate this Agreement at any time and for any reason subject to the requirements
                                    of applicable law. We can terminate your Account by sending written notice to the address on your application. If there is no debit or credit on this Account for twelve (12) consecutive months, we may terminate this
                                    Account without notice to you. When Termination arises as a result of default, you will not be able to apply for credit in future.
                                </p>
                                <h4 id="Taxes" class="heading new-paragaph-small-title">‍<span>16.0 Taxes</span></h4>
                                <p class="conditions-paragraph">16.1 All payments to be made by you in connection with these Terms and Conditions or any Services provided to you by Trade Lenda may be calculated without regard to any taxes payable by you or in respect of the Services.
                                    If any taxes are payable in connection with the payments, you must ensure that you pay such taxes and that you pay to Trade Lenda such additional amounts as will result in Trade Lenda receiving the full amount it would
                                    have received had no such taxes been applicable to the payments.<br>‍<br> 16.2 You hereby consent and agree that Trade Lenda may withhold amounts in your Account if we are required to do so in accordance with the direction
                                    of any tax authority, or Trade Lenda is otherwise required by law or regulation or pursuant to agreements with any tax authority to do so, or if Trade Lenda needs to comply with internal policies or with any applicable
                                    order or sanction of a tax authority. You will, however, be notified if such deductions are made.<br>‍<br> 16.3 All payments to be made by you under this Agreement shall be made in full without any set off or counter
                                    claim and save in so far as required by the law to the contrary, free and clear of and without any deduction or withholding whatsoever. If you are at any time required to make any deduction or withholding from any payment
                                    to Trade Lenda, you shall immediately pay to Trade Lenda such additional amounts as will result in Trade Lenda receiving the full amount it would have received had no such deduction or withholding been required.
                                </p>
                                <h4 id="Communication-Between-Us" class="heading new-paragaph-small-title">‍<span>17.0 Communication Between Us</span></h4>
                                <p class="conditions-paragraph">17.1 If you wish to contact us, or if any condition in these Terms and Conditions requires you to give notice to Trade Lenda you may send such communication to us by e-mail to <a href="mailto:help@tradelenda.ng">help@tradelenda.ng</a>                                    or to such e-mail address that may be communicated to you from time to time. We will confirm receipt of this by contacting you in writing by e-mail.<br>‍<br> 17.2 If we have to contact you or give you notice in writing,
                                    we may do so by posting such notice on our website; the App, by e-mail or SMS to the mobile phone number or e-mail address you provided to us.
                                </p>
                                <h4 id="Account-Secure" class="heading new-paragaph-small-title">‍<span>18.0 Keeping Your Account Secure</span></h4>
                                <p class="conditions-paragraph"> 18.1 It is your duty to keep your security information relating to your account and the Trade Lenda App secure. Where you suspect that the security of your Account may have been compromised, you are required to inform us
                                    as soon as possible. Please change your password and any other security credential immediately. Trade Lenda will not be liable for transactions carried out where access to your account has been compromised by you, malware
                                    or human interference outside of our control.<br>‍<br> 18.2 You agree to keep your password confidential and will be responsible for all use of your account and password. We reserve the right to remove, reclaim, or
                                    change a username you select if we determine, in our sole discretion, that such username is inappropriate, obscene, or otherwise objectionable
                                </p>
                                <h4 id="Deposit-Insurance" class="heading new-paragaph-small-title">‍<span>19.0 Deposit Insurance Scheme</span></h4>
                                <p class="conditions-paragraph"> 19.1 Funds in your account are covered under the Nigerian Deposit Insurance Scheme subject to the prevailing limits imposed by the Nigerian Insurance Deposit Corporation.
                                </p>
                                <h4 id="General" class="heading new-paragaph-small-title">‍<span>20.0 General</span></h4>
                                <p class="conditions-paragraph"> 20.1 A partial exercise of any right, power or remedy shall not preclude any further or other exercise of that, or any other, right, power or remedy.<br>‍<br> 20.2 No failure by Trade Lenda to exercise, and no delay in
                                    exercising (including the right to enforce repayment of any outstanding amount on the due date), any right or remedy in respect of any provision of this Agreement shall operate as a waiver of such right or remedy.<br>‍<br>                                    20.3 If any provision or part of a provision of this Agreement is found by any court of competent jurisdiction to be, invalid or unenforceable, such invalidity or unenforceability shall not affect the other provisions
                                    or parts of such provisions of this Agreement, all of which shall remain in full force and effect.<br>‍<br> 20.4 Trade Lenda reserves the right to transfer or assign its rights and obligations under this Agreement (including
                                    its obligation to lend money or the amount owed under this Agreement) to another person. We may notify You if such transfer results in a change that may affect your Services. This Agreement and any rights or liabilities
                                    accruing thereunder may not be assigned by you to any other person.
                                </p>
                                <h4 id="Entire-Agreement" class="heading new-paragaph-small-title">‍<span>21.0 Entire Agreement</span></h4>
                                <p class="conditions-paragraph"> 21.1 These Terms and Conditions and our Privacy Policy constitute the entire agreement between You and us supersede and extinguish all previous agreements, promises, assurances, warranties, representations and understandings
                                    between us, whether written or oral, relating to its subject matter.<br>‍<br> 21.2 You acknowledge that in entering into this Agreement you have not relied on any statement, representation, assurance or warranty (whether
                                    made innocently or negligently) that is not set out in these Terms and Conditions or our Privacy Policy.
                                </p>
                                <h4 id="User-Representations" class="heading new-paragaph-small-title">‍<span>22.0 User Representations</span></h4>
                                <p class="conditions-paragraph"> By using the Site, you represent and warrant that:<br>‍<br> 22.1 All registration information you submit will be true, accurate, current, and complete; (2) you will maintain the accuracy of such information and promptly
                                    update such registration information as necessary;]<br>‍<br> 22.2 you have the legal capacity, and you agree to comply with these Terms and Conditions.<br>‍<br> 22.3 you are not under the age of 17,<br>‍<br> 22.4 You
                                    are not using the product for money laundry as espoused in the Nigerian Money Laundering Act of 1911.<br>‍<br> 22.5 you will not access the Site through automated or non-human means, whether through a bot, script, or
                                    otherwise.
                                    <br>‍<br> 22.6 you will not use the Site for any illegal or unauthorized purpose.<br>‍<br> 22.7 your use of the Site will not violate any applicable law or regulation.<br>‍<br> If you provide any information that is
                                    untrue, inaccurate, not current, or incomplete, we have the right to suspend or terminate your account and refuse any and all current or future use of the Site (or any portion thereof).
                                </p>
                                <h4 id="Governing-Law" class="heading new-paragaph-small-title">‍<span>23.0 Governing Law and Dispute Resolution</span></h4>
                                <p class="conditions-paragraph"> 23.1 This Agreement shall be governed by and construed in accordance with the laws of the Federal Republic of Nigeria and the Nigerian courts shall have exclusive jurisdiction to determine any dispute arising from the operation
                                    of this Agreement.<br><br> 23.2 The Parties shall use their good faith efforts to resolve any dispute, controversy or claim of any nature whatsoever arising out of or in relation to or in connection with this Agreement.<br><br>                                    24.0 Intellectual Property Rights<br><br> Unless otherwise indicated, the Site is our proprietary property and all source code, databases, functionality, software, website designs, audio, video, text, photographs, and
                                    graphics on the Site (collectively, the “Content”) and the trademarks, service marks, product and logos contained therein (the “Marks”) are owned or controlled by us or licensed to us and are protected by copyright
                                    and trademark laws and various other intellectual property rights and unfair competition laws of the Nigerian, foreign jurisdictions, and international conventions.<br><br> The Content and the Marks are provided on
                                    the Site “AS IS” for your information and personal use only. Except as expressly provided in these Terms and Conditions, no part of the Site and no Content or Marks may be copied, reproduced, aggregated, republished,
                                    uploaded, posted, publicly displayed, encoded, translated, transmitted, distributed, sold, licensed, or otherwise exploited for any commercial purpose whatsoever, without our express prior written permission.
                                    <br><br>Provided that you are eligible to use the Site, you are granted a limited license to access and use the Site and to download or print a copy of any portion of the Content to which you have properly gained access
                                    solely for your personal, non-commercial use.<br><br> We reserve all rights not expressly granted to you in and to the Site, the Content, and the Marks.

                                </p>
                            </div>
                        </div>
                    </div>
                </article>
                <div class="divider article"></div>
                <aside id="w-node-a2a8a387-81d6-2fa0-8ada-81424cfd2851-b1035954" data-w-id="a2a8a387-81d6-2fa0-8ada-81424cfd2851" style="opacity:0" class="post-card-newsletter">
                    <div class="div-block-63">
                        <h1 class="heading page-link">ON THIS PAGE</h1>
                        <h1 class="heading page-link body">
                            <a href="#defination" class="content-link">1.0 Definitions</a>
                        </h1>
                        <h1 class="heading page-link body">
                            <a href="#interpretation" class="content-link">2.0 Interpretation</a>
                        </h1>
                        <h1 class="heading page-link body">
                            <a href="#Grant-and-Scope" class="content-link">3.0 Grant and Scope of License</a>
                        </h1>
                        <h1 class="heading page-link body">
                            <a href="#Bank-Account-and-Condition" class="content-link">4.0 Opening a Bank Account and Condition of Use</a>
                        </h1>
                        <h1 class="heading page-link body">
                            <a href="#Personal-Information" class="content-link">5.0 Personal Information</a>
                        </h1>
                        <h1 class="heading page-link body">
                            <a href="#Transacting" class="content-link">6.0 Transacting</a>
                        </h1>
                        <h1 class="heading page-link body">
                            <a href="#Funding-and-Transfer" class="content-link">7.0 Funding and Transfer out of your Account</a>
                        </h1>
                        <h1 class="heading page-link body">
                            <a href="#Prohibited-Transactions" class="content-link">8.0 Prohibited Transactions</a>
                        </h1>
                        <h1 class="heading page-link body">
                            <a href="#Liability" class="content-link">9.0 Liability</a>
                        </h1>
                        <h1 class="heading page-link body">
                            <a href="#Statements" class="content-link"><span>10.0 Statements</span></a>
                        </h1>
                        <h1 class="heading page-link body">
                            <a href="#Definition" class="content-link"><span>11.0 Definition</span></a>
                        </h1>
                        <h1 class="heading page-link body">
                            <a href="#Investment-Account" class="content-link"><span>12.0 Part C: Investment Account</span></a>
                        </h1>
                        <h1 class="heading page-link body">
                            <a href="#Data-Protection-and-Customer" class="content-link"><span>13.0 Data Protection and Customer Consent</span></a>
                        </h1>
                        <h1 class="heading page-link body">
                            <a href="#Laundering-and-Countering" class="content-link"><span>14.0 Anti Money Laundering and Countering Financing of Terrorism</span></a>
                        </h1>
                        <h1 class="heading page-link body">
                            <a href="#Termination-and-suspension" class="content-link"><span>15.0 Termination and suspension</span></a>
                        </h1>
                        <h1 class="heading page-link body">
                            <a href="#Taxes" class="content-link"><span>16.0 Taxes</span></a>
                        </h1>
                        <h1 class="heading page-link body">
                            <a href="#Communication-Between-Us" class="content-link"><span>17.0 Communication Between Us</span></a>
                        </h1>
                        <h1 class="heading page-link body">
                            <a href="#Account-Secure" class="content-link"><span>18.0 Keeping Your Account Secure</span></a>
                        </h1>
                        <h1 class="heading page-link body">
                            <a href="#Deposit-Insurance" class="content-link"><span>19.0 Deposit Insurance Scheme</span></a>
                        </h1>
                        <h1 class="heading page-link body">
                            <a href="#General" class="content-link"><span>20.0 General</span></a>
                        </h1>
                        <h1 class="heading page-link body">
                            <a href="#Entire-Agreement" class="content-link"><span>21.0 Entire Agreement</span></a>
                        </h1>
                        <h1 class="heading page-link body">
                            <a href="#User-Representations" class="content-link"><span>22.0 User Representations</span></a>
                        </h1>
                        <h1 class="heading page-link body">
                            <a href="#Governing-Law" class="content-link"><span>23.0 Governing Law and Dispute Resolution</span></a>
                        </h1>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <div class="hero-section carbon-channels wf-section">
        <div class="channel-container">
            <h2 class="heading-5">One-Stop finance plug for Retailers</h2>
            <p class="paragraph-3">Create an account. Follow the directions on your screen. Access financing within 24 hours.</p>
            <div class="channel-icon-container">
                <a href="#" target="_blank" class="channel-icons w-inline-block">
                    <div class="channel-link link-3"></div>
                </a>
                <a href="#" target="_blank" class="channel-icons apple-store2 w-inline-block">
                    <div class="channel-link"></div>
                </a>
                <a href="#" target="_blank" class="channel-icons web3 w-inline-block">
                    <div class="channel-link link-1"></div>
                </a>
                <a href="##" class="channel-icons last-icon w-inline-block">
                    <div class="channel-link link-2"></div>
                </a>
            </div>
        </div>
    </div>
    <div class="footer carbon-footer wf-section ">
        <div class="footer-container ">
            <div class="footer-column first-fcontent "><img src="https://res.cloudinary.com/trade-lenda/image/upload/v1628132872/landing_page_pic/Group_11434_2_umfio2.png" loading="lazy " width="120 " alt=" " class="image-10 ">
                <div data-hover="false " data-delay="0 " class="dropdown-2 w-dropdown ">
                    <div class="dropdown-toggle w-dropdown-toggle ">
                        <div class="icon-4 "></div>
                        <div class="logo "><img src="https://res.cloudinary.com/trade-lenda/image/upload/v1634733818/landing_page_pic/Image-48_gxxqvf.svg" loading="lazy " alt=" "></div>
                        <div class="text-block-7 ">Nigeria</div>
                    </div>

                </div>
            </div>
            <div class="footer-column footer-links ">
                <h4 class="heading-6 ">Features</h4>
                <a href="# " class="footer-links ">Trade Lenda account</a>
                <a href="# " class="footer-links ">FMCG</a>
                <a href="# " class="footer-links ">Ecommerce</a>
                <a href="# " class="footer-links ">Structured markets</a>
                <a href="# " class="footer-links ">Credit report</a>
                <a href="# " class="footer-links ">Loans</a>
            </div>
            <div class="footer-column footer-links ">
                <h4 class="heading-6 ">Learn more</h4>
                <a href="# " class="footer-links ">Personal loans<br></a>
                <a href="# " class="footer-links business ">Get loans fast</a>
                <a href="# " class="footer-links business ">Loans in Nigeria<br></a>
                <a href="# " class="footer-links business ">Trade Lenda loan</a>
                <a href="# " class="footer-links business ">SME loans</a>
                <a href="# " class="footer-links business ">Quick Finance</a>
                <a href="# " class="footer-links business ">Trade Lenda app</a>
                <a href="# " class="footer-links business ">Loans for business</a>
                <a href="# " class="footer-links business ">Loans without collateral</a>
            </div>
            <div class="footer-column footer-links ">
                <h4 class="heading-6 ">Company</h4>
                <a href="{{url('/aboutus')}}" class="footer-links ">About us</a>
                <a href="# " class="footer-links ">Media</a>
                <a href="# " class="footer-links ">Careers</a>
                <a href="# " target="_blank " class="footer-links ">Blog</a>
                <a href="# " class="footer-links ">Customers</a>
            </div>
            <div class="footer-column footer-links _4th ">
                <h4 class="heading-6 ">Help</h4>
                <a href="# " target="_blank " class="footer-links ">Knowledge base</a>
                <a href="# " class="footer-links ">Contact</a>
                <a href="# " class="footer-links ">Community</a>
            </div>
            <div class="footer-column footer-links last-link-block ">
                <h4 class="heading-6 ">Legal</h4>
                <a href="# " class="footer-links ">Privacy policy</a>
                <a href="{{url('/terms-and-conditions')}}" class="footer-links ">Terms &amp; Conditions</a>
                <a href="# " class="footer-links ">Cookies</a>
            </div>
        </div>
        <div class="footer-socials ">
            <div class="appstores-containers ">
                <div class="new-container ">
                    <h5 class="new ">Coming soon...</h5>
                </div>
                <a href="# " class="storelink-block-1 w-inline-block "><img src="https://res.cloudinary.com/trade-lenda/image/upload/v1634733398/landing_page_pic/Download_on_the_App_Store_Badge_1_rpi4qg.svg" loading="lazy " alt=" "></a>
                <a href="# " class="storelink-block w-inline-block "><img src="https://res.cloudinary.com/trade-lenda/image/upload/v1634733562/landing_page_pic/Google_Play_Store_badge_EN_1_ayprcd.svg" loading="lazy " alt=" "></a>
            </div>
            <div class="social-media-container ">
                <a href="{{url('https://facebook.com/tradelenda')}}" class="social-links w-inline-block "><img src="https://res.cloudinary.com/trade-lenda/image/upload/v1634728902/landing_page_pic/008-facebook_p7kkqs.svg" loading="lazy " alt=" "></a>
                <a href="{{url('https://twitter.com/tradelenda')}}" class="social-links w-inline-block "><img src="https://res.cloudinary.com/trade-lenda/image/upload/v1634728815/landing_page_pic/001-twitter_n5dlsi.svg" loading="lazy " alt=" "></a>
                <a href="{{url('https://instagram.com/tradelenda')}}" class="social-links w-inline-block "><img src="https://res.cloudinary.com/trade-lenda/image/upload/v1634728987/landing_page_pic/011-instagram_tawqze.svg" loading="lazy " alt=" "></a>
                <!-- <a href="# " class="social-links w-inline-block "><img src="images/007-youtube.svg " loading="lazy " alt=" "></a> -->
                <a href="{{url('https://linkedin.com/companytradelenda')}}" class="social-links w-inline-block "><img src="https://res.cloudinary.com/trade-lenda/image/upload/v1634729046/landing_page_pic/010-linkedin_isb2ox.svg" loading="lazy " alt=" "></a>
            </div>
        </div>
        <div class="footer-legal ">
            <div class="div-block-12 ">
                <p class="paragraph-4 ">©2021 Trade Lenda is a financial service company that assists Micro, Small and Medium Entreperises with access to financing for business needs
                    <br><br>Registered address: 9b Ike Agsogwa Close, Maryland Lagos</p>
            </div>
        </div>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5fb7a41f1de43196d23310bb" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/webflow.js" type="text/javascript"></script>
    <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
    <script type="application/javascript" async="" src="https://static.klaviyo.com/onsite/js/klaviyo.js?company_id=UgAZFS"></script>
    <style>
        .w-slide {
            opacity: 0.5 !important;
            transition: all 0.5s ease !important;
        }
        
        .w-slide.active {
            opacity: 1 !important;
        }
    </style>
    <script>
        Webflow.push(function() {
            setInterval(function() {
                $('.w-slider').each(function(i, slider) {
                    var num = $('.w-slider-dot.w-active', slider).index();
                    $('.w-slide', slider).removeClass('active').eq(num).addClass('active');
                });
            }, 250);
        });
    </script>
</body>
<!-- Copied from https://ng.getcarbon.co/terms-and-conditions.html by Cyotek WebCopy 1.6.0.559, Saturday, October 30, 2021, 3:31:34 AM -->

</html>