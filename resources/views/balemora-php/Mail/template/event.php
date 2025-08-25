<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>New Event Booking</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 30px;
            color: #333;
        }

        .email-container {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border: 1px solid #e2e2e2;
        }

        .header {
            background-color: #6a8358;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .content {
            padding: 25px;
        }

        .intro {
            font-size: 16px;
            margin-bottom: 20px;
            color: #333;
        }

        .content table {
            width: 100%;
            border-collapse: collapse;
        }

        .content td {
            padding: 10px 5px;
            font-size: 16px;
            border-bottom: 1px solid #f0f0f0;
        }

        .content td.label {
            font-weight: bold;
            width: 35%;
            font-size: 16px;
            color: #555;
        }

        .footer {
            background-color: #f2f2f2;
            text-align: center;
            padding: 15px;
            font-size: 13px;
            color: #888;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <!-- Intro message -->
        <div class="intro">
            You have received a new event enquiry for <strong><?= htmlspecialchars($lawn) ?></strong> at the
            <strong><?= htmlspecialchars($property) ?></strong> property.
        </div>
        <div class="header">
            <h1>New Event Enquiry Request</h1>
        </div>
        <div class="content">


            <!-- Details table -->
            <table>
                <tr>
                    <td class="label">Name</td>
                    <td><?= htmlspecialchars($name) ?></td>
                </tr>
                <tr>
                    <td class="label">Email</td>
                    <td><?= htmlspecialchars($email) ?></td>
                </tr>
                <tr>
                    <td class="label">Phone</td>
                    <td><?= htmlspecialchars($phone) ?></td>
                </tr>
                <tr>
                    <td class="label">Preferred Lawn</td>
                    <td><?= htmlspecialchars($lawn) ?></td>
                </tr>
                <tr>
                    <td class="label">Message</td>
                    <td><?= nl2br(htmlspecialchars($message)) ?></td>
                </tr>
                <tr>
                    <td class="label">Property</td>
                    <td><?= htmlspecialchars($property) ?></td>
                </tr>
            </table>
        </div>
        <div class="footer">
            This is an automated message. Please do not reply.
        </div>
    </div>
</body>

</html>