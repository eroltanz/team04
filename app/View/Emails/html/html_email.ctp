<?php echo "Dear Customer, ";?><br>
<?php 
$content = <<<CONTENT
This is Muscleworks Massage, your have been purchased a gift vouche from us. This gift voucher
expires in 3 months, please come to our clinic in time. The information of the gift voucher your got is below:
CONTENT;

echo $content;
?><br>

<table cellpadding="0" cellspacing="0">
    <tr>
        <th>ID</th>
        <th><?php echo $aVoucher['Voucher']['id'] ?></th>
    </tr>
    <tr>
        <th>Sender</th>
        <th><?php echo $aVoucher['Voucher']['from_name'] ?></th>
    </tr>
    <tr>
        <th>Sender's number</th>
        <th><?php echo $aVoucher['Voucher']['phoneNumber_1'] ?></th>
    </tr>
    <tr>
        <th>Sender's email</th>
        <th><?php echo $aVoucher['Voucher']['from_email'] ?></th>
    </tr>
    <tr>
        <th>Recipient</th>
        <th><?php echo $aVoucher['Voucher']['to_name'] ?></th>
    </tr>
    <tr>
        <th>Recipient's number</th>
        <th><?php echo $aVoucher['Voucher']['phoneNumber_2'] ?></th>
    </tr>
    
    <tr>
        <th>Address</th>
        <th><?php echo $aVoucher['Voucher']['address'] ?></th>
    </tr>
    <tr>
        <th>Price</th>
        <th><?php echo $aVoucher['Voucher']['price'] ?></th>
    </tr>
    <tr>
        <th>Messages</th>
        <th><?php echo $aVoucher['Voucher']['message'] ?></th>
    </tr>
    </table>

<?php $information=<<<information
Our clinic is located: 178 Hotham St, Elsternwick, VIC 3185 (the details of transportations to our location are available online: http://www.muscleworksmassage.com.au/Muscleworks_Massage/Contact.html),
No walk-ins, bookings are essential. Your can either booking online or call 0451 118 071 to arrange time with us (service types and prices are available online: http://www.muscleworksmassage.com.au/Muscleworks_Massage/Prices.html). 
information;
echo $information;
?> <br><br>
<?php $hours=<<<hours
Our trading hour: 8:00am - 7:00pm Monday to Friday.    These hours are approximate and are negotiatable from client to client.
hours;
echo $hours?><br><br>
<?php $ends=<<<ends
If you have any issues, please do not hesitate to contact us. Thank you very much!
ends;
echo $ends ?>
