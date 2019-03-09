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

                    <p>You have a new inquiry. Please see details below:</p>

                    <p>
                    Name: {{ $fullname }}<br>
                    Email: {{ $emailadd }}<br>
                    Message:<br/> {{ $msg }}
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