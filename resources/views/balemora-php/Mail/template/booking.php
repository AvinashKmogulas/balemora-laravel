<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>New Booking Enquiry</title>
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
            padding: 10px 5px;
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
            You have received a new booking enquiry from <strong><?= htmlspecialchars($name) ?></strong> at the
            <strong><?= htmlspecialchars($property) ?></strong> property.
        </div>
        <div class="header">
            <h1>New Booking Enquiry</h1>
        </div>
        <div class="content">
            <!-- Details table -->
            <table>
                <tr>
                    <td class="label">Name</td>
                    <td><?= htmlspecialchars($name) ?></td>
                </tr>
                <tr>
                    <td class="label">Phone</td>
                    <td><?= htmlspecialchars($phone) ?></td>
                </tr>
                <tr>
                    <td class="label">Check-In Date</td>
                    <td><?= htmlspecialchars($checkin) ?></td>
                </tr>
                <tr>
                    <td class="label">Check-Out Date</td>
                    <td><?= nl2br(htmlspecialchars($checkout)) ?></td>
                </tr>
                <tr>
                    <td class="label">Number Of Rooms</td>
                    <td><?= htmlspecialchars($room) ?></td>
                </tr>
                <tr>
                    <td class="label">Number Of Adults</td>
                    <td><?= htmlspecialchars($adults) ?></td>
                </tr>
                <tr>
                    <td class="label">Number Of Childrens</td>
                    <td><?= htmlspecialchars($children) ?></td>
                </tr>
                <?php
                    if(strtolower($property) == strtolower("Balemora Almora")){
                        ?>
                            <tr>
                                <td class="label">Cottage Type</td>
                                <td><?= htmlspecialchars($cottage) ?></td>
                            </tr>
                        <?php
                    }
                ?>
                <tr>
                    <td class="label">Property Name</td>
                    <td><?= nl2br(htmlspecialchars($property)) ?></td>
                </tr>
            </table>
        </div>
        <div class="footer">
            This is an automated message. Please do not reply.
        </div>
    </div>
</body>

</html>