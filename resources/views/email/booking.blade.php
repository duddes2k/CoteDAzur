<html>
    <head>
    </head>
    <body>
        <h3>Cote d'Azur Luxury Rentals</h3>
        <p>
        <table>
            <tr>
                <td  style="padding: 10px 30px">
                    Hi,
                </td>
            </tr>
            <tr>
                <td style="padding: 10px 30px">

                    <p>You have a new booking request. Please see details below:</p>

                    <p>
                    Rental: <strong>{{ $rental }}</strong><br>
                    Pick Date: {{ $pickdate }}<br>
                    Return Date: {{ $returndate }}<br>
                    Duration: <strong>{{ $duration }} day(s)</strong><br>
                    Total: <strong> EURO {{ number_format($total, 2) }}</strong><br>
                    </p>

                    <p>
                    First Name: {{ $firstname }}<br>
                    Last Name: {{ $lastname }}<br>
                    Email: {{ $email }}<br>
                    Phone: {{ $phone }}<br>
                    Additional Info: {{ $info }}
                    </p>

                </td>
            </tr>
            <tr>
                <td style="padding: 10px 30px">
                    --<br>
                    <em>Note: This is a generated email notification from the website. Please reply to the email address provided by the client above.</em>
                </td>
            </tr>    
        </table>
        </p>
    </body>
</html>