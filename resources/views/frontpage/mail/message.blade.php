<html>

<body style="line-height:25px; letter-spacing:1px;">
    <table width="650px" cellpadding="2" cellspacing="2" style="border:1px solid #999">
        <tr>
            <td colspan="3" style="color:#fff; padding:10px 10px 10px 20px;" bgcolor="#2B2B2B">
                <p style="font-family:Trajan Pro, Lucida Sans, Monotype Corsiva; font-size:16px"><b>Sanur Cycle Tours
                        Contact Messages</b></p>
            </td>
        </tr>
        <tr>
            <td valign="top" width="30%" style="padding:10px 10px 5px 20px; color:#444">Name</td>
            <td valign="top" width="1%">:</td>
            <td style="padding:10px 10px 5px 20px; color:#444" valign="top">{{ $contact?->name }}</td>
        </tr>
        <tr>
            <td valign="top" style="padding:10px 10px 5px 20px; color:#444">Email</td>
            <td valign="top">:</td>
            <td style="padding:10px 10px 5px 20px; color:#444" valign="top">{{ $contact?->email }}</td>
        </tr>
        <tr>
            <td valign="top" style="padding:10px 10px 5px 20px; color:#444">Messages</td>
            <td valign="top">:</td>
            <td style="padding:10px 10px 5px 20px; color:#444" valign="top">{{ $contact?->message }}</td>
        </tr>
    </table>
    <br><br><br>
    <table width="650px" cellpadding="2" cellspacing="2">
        <tr>
            <td align="center" style="color:#444">&copy;2023 Managed by Sanur Cycle Tours Developed By Baligatra
            </td>
        </tr>
    </table>
</body>

</html>
