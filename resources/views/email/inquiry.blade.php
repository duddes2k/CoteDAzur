<html>
    <head>
    </head>
    <body>
        <h3>Cannes Luxury Rental</h3>
        <p>
        <table>
            <tr>
                <td  style="padding: 10px 30px">
                    Hi,
                </td>
            </tr>
            <tr>
                <td style="padding: 10px 30px">
                    <p>Congratulation!</p>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px 30px">

                    <p>You have a new rental inquiry. Please see details below:</p>

                    <p>
                    Rental: <strong>{{ $rental }}</strong><br>
                    Pick Date: {{ $pickdate }}<br>
                    Return Date: {{ $returndate }}<br>
                    Duration: <strong>{{ $duration }} day(s)</strong><br>
                    Total: <strong> EURO {{ number_format($total) }}</strong><br>
                    </p>

                    <p>
                    First Name: {{ $firstname }}<br>
                    Last Name: {{ $lastname }}<br>
                    Email: {{ $email }}<br>
                    Phone: {{ $phone }}<br>
                    Additional Info:<br> {{ $info }}
                    </p>

                </td>
            </tr>
            <tr>
                <td style="padding: 10px 30px"><p>Please reply to the email provided by the client above.</p></td>
            </tr>
            <tr>
                <td style="padding: 10px 30px">
                    --<br>
                    <em>Note: This is a generated email. Please do not reply.</em>
                </td>
            </tr>    
        </table>
        </p>
    </body>
</html>