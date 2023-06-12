<html>

<body style="line-height:25px; letter-spacing:1px;">
    <table width="650px" cellpadding="2" cellspacing="2" style="border:1px solid #999">
        <tr>
            <td colspan="3" style="color:#fff; padding:10px 10px 10px 20px;" bgcolor="#2B2B2B">
                <p style="font-family:Trajan Pro, Lucida Sans, Monotype Corsiva; font-size:16px"><b>Sanur Cycle Tours
                        Booking Form</b></p>
            </td>
        </tr>
        <tr>
            <td valign="top" width="30%" style="padding:10px 10px 5px 20px; color:#444">Contact Name</td>
            <td valign="top" width="1%">:</td>
            <td style="padding:10px 10px 5px 20px; color:#444" valign="top">{{ $booking?->name }}</td>
        </tr>
        <tr>
            <td valign="top" style="padding:10px 10px 5px 20px; color:#444">Contact Email</td>
            <td valign="top">:</td>
            <td style="padding:10px 10px 5px 20px; color:#444" valign="top">{{ $booking?->email }}</td>
        </tr>
        <tr>
            <td valign="top" style="padding:10px 10px 5px 20px; color:#444">Phone Number</td>
            <td valign="top">:</td>
            <td style="padding:10px 10px 5px 20px; color:#444" valign="top">{{ $booking?->phone }}</td>
        </tr>
        <tr>
            <td valign="top" style="padding:10px 10px 5px 20px; color:#444">Where are you staying in Sanur ?</td>
            <td valign="top">:</td>
            <td style="padding:10px 10px 5px 20px; color:#444" valign="top">{{ $booking?->staying_sanur }}</td>
        </tr>
        <tr>
            <td valign="top" style="padding:10px 10px 5px 20px; color:#444">Room Number</td>
            <td valign="top">:</td>
            <td style="padding:10px 10px 5px 20px; color:#444" valign="top">{{ $booking?->room }}</td>
        </tr>
        <tr>
            <td valign="top" style="padding:10px 10px 5px 20px; color:#444">Select Tour</td>
            <td valign="top">:</td>
            <td style="padding:10px 10px 5px 20px; color:#444" valign="top">{{ $booking?->tour?->name }}</td>
        </tr>
        <tr>
            <td valign="top" style="padding:10px 10px 5px 20px; color:#444">Preferred Tour Date</td>
            <td valign="top">:</td>
            <td style="padding:10px 10px 5px 20px; color:#444" valign="top">{{ $booking?->date?->format('d-m-Y') }}
            </td>
        </tr>
        <tr>
            <td valign="top" style="padding:10px 10px 5px 20px; color:#444">How many Adults are attending ?</td>
            <td valign="top">:</td>
            <td style="padding:10px 10px 5px 20px; color:#444" valign="top">{{ $booking?->adult }}</td>
        </tr>
        <tr>
            <td valign="top" style="padding:10px 10px 5px 20px; color:#444">Any Children are attending ?</td>
            <td valign="top">:</td>
            <td style="padding:10px 10px 5px 20px; color:#444" valign="top">{{ $booking?->child }}</td>
        </tr>
        <tr>
            <td valign="top" style="padding:10px 10px 5px 20px; color:#444">Child Ages ?</td>
            <td valign="top">:</td>
            <td style="padding:10px 10px 5px 20px; color:#444" valign="top">{{ $booking?->child_age }}</td>
        </tr>
        <tr>
            <td valign="top" style="padding:10px 10px 5px 20px; color:#444">Height of the cyclists (in centimeters) ?
            </td>
            <td valign="top">:</td>
            <td style="padding:10px 10px 5px 20px; color:#444" valign="top">{{ $booking?->long_cycle }}</td>
        </tr>
        <tr>
            <td valign="top" style="padding:10px 10px 5px 20px; color:#444">Is there anything else you would like to
                ask/tell us ?<br><i>(ie: I\'m a diabetic OR we will need a bicycle with a baby camer seat)</i></td>
            <td valign="top">:</td>
            <td style="padding:10px 10px 5px 20px; color:#444" valign="top">{{ $booking?->special_req }}</td>
        </tr>
        <tr>
            <td valign="top" style="padding:10px 10px 5px 20px; color:#444">Where did you hear about Sanur Cycle Tours
                ?</td>
            <td valign="top">:</td>
            <td style="padding:10px 10px 5px 20px; color:#444">{{ $booking?->hear_sanurcycle }}</td>
        </tr>
        <tr>
            <td valign="top" style="padding:10px 10px 5px 20px; color:#444">Status Payment</td>
            <td valign="top">:</td>
            <td style="padding:10px 10px 5px 20px; color:#444">
                {{ $booking?->payment_status == 'settlement' || $booking?->payment_status == 'capture' ? 'Success' : 'Pending' }}
            </td>
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
