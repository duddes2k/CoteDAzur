<html>
    <head>
    </head>
    <body>
        <h3>Cannes Luxury Rental</h3>
        <p>
        <table>
            <tr>
                <td style="font-size: 24px; padding: 10px 30px;">
                    <b>Hi,</b>
                </td>
            </tr>
            <tr>
                <td>
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
                    Duration:<strong>{{ $duration }}</strong><br>
                    <strong>Total: ${{ number_format($total) }}</strong><br>
                    </p>

                    <p>
                    First Name: {{ $firstname }}<br>
                    Last Name: {{ $lastname }}<br>
                    Email: {{ $email }}<br>
                    Phone: {{ $phone }}<br>
                    Additional Info: {{ $info }}<br>
                    </p>

                </td>
            </tr>
            <tr>
                <td><p>Please reply to the email provided by the client above.</p></td>
            </tr>
            <tr>
                <td style="padding: 10px 30px">
                    Thank you
                </td>
            </tr>    
        </table>
        </p>
    </body>
</html>