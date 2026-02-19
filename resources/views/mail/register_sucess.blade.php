<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to {{ siteName() }}</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f6f8; font-family: Arial, Helvetica, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f6f8; padding:30px 0;">
    <tr>
        <td align="center">

            <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:8px; overflow:hidden;">
                
                <!-- Header -->
                <tr>
                    <td align="center" style="background:#000; padding:20px;">
                        <img src="{{ asset('assets/images/unique-world.png') }}"
                             alt="{{ siteName() }}"
                             style="max-width:200px; height:auto;">
                    </td>
                </tr>

                <!-- Body -->
                <tr>
                    <td style="padding:30px; color:#333;">

                        <p style="font-size:16px; margin-bottom:15px;">
                            Hello <strong>{{ $view_message['name'] }}</strong>,
                        </p>

                        <p style="font-size:16px; line-height:1.6;">
                            Welcome to <strong>{{ siteName() }}</strong> — the future of smart AI-powered auto trading.
                        </p>

                        <p style="font-size:16px; line-height:1.6;">
                            Your account has been created successfully. You are now part of a growing community earning daily through advanced trading technology.
                        </p>

                        <!-- Account Info -->
                        <table width="100%" cellpadding="8" cellspacing="0" style="background:#f9fafb; border-radius:6px; margin:20px 0;">
                            <tr>
                                <td><strong>Username:</strong></td>
                                <td>{{ $view_message['username'] }}</td>
                            </tr>
                            <tr>
                                <td><strong>Email:</strong></td>
                                <td>{{ $view_message['email'] }}</td>
                            </tr>
                            <tr>
                                <td><strong>Password:</strong></td>
                                <td>{{ $view_message['password'] }}</td>
                            </tr>
                        </table>

                        <p style="font-size:16px; line-height:1.6;">
                            Click the button below to log in and activate your first trading package:
                        </p>

                        <!-- Button -->
                        <div style="text-align:center; margin:30px 0;">
                            <a href="{{ asset('') }}"
                               style="background:#1e88e5; color:#ffffff; padding:14px 30px; border-radius:6px; text-decoration:none; font-size:16px; font-weight:bold;">
                                Login to Your Account
                            </a>
                        </div>

                        <p style="font-size:14px; color:#777;">
                            Need help? Our support team is available 24/7.
                        </p>

                        <p style="font-size:14px; color:#777;">
                            Welcome aboard — let’s grow together 🚀
                        </p>

                        <p style="font-size:14px; color:#777;">
                            — The {{ siteName() }} Team
                        </p>

                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td align="center" style="background:#f0f0f0; padding:15px; font-size:12px; color:#999;">
                        © 2025 {{ siteName() }}. All rights reserved.
                    </td>
                </tr>

            </table>

        </td>
    </tr>
</table>

</body>
</html>