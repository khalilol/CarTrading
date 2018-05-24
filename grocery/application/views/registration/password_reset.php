﻿<?php
include 'jqm_header.php';

?>
<body>
    <div data-role="page">
        <div data-role="header" data-theme="c">
            <h1>Book It</h1>
        </div><!-- /header -->
        <div role="main" class="ui-content">
            <h3>Password Reset</h3>
            <label for="txt-email">Enter your email address</label>
            <input type="text" name="txt-email" id="txt-email" value="">
            <a href="#dlg-pwd-reset-sent" data-rel="popup" data-transition="pop" data-position-to="window" id="btn-submit" class="ui-btn ui-btn-b ui-corner-all mc-top-margin-1-5">Submit</a>
            <div data-role="popup" id="dlg-pwd-reset-sent" data-dismissible="false" style="max-width:400px;">
                <div data-role="header">
                    <h1>Password Reset</h1>
                </div>
                <div role="main" class="ui-content">
                    <h3>Check Your Inbox</h3>
                    <p>We sent you an email with instructions on how to reset your password. Please check your inbox and follow the instructions in the email.</p>
                    <div class="mc-text-center"><a href="end-password-reset.html" class="ui-btn ui-corner-all ui-shadow ui-btn-b mc-top-margin-1-5">OK</a></div>
                </div>
            </div>
        </div><!-- /content -->
    </div><!-- /page -->
</body>
</html>
