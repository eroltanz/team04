<?php

/* /app/View/Helper/LinkHelper.php */
App::uses('AppHelper', 'View/Helper');

class PDFHelper extends AppHelper {

    function ColoredTable($header, $data) {
        
// Header
        $w = array(50,100,180,100,100,100,100,100,100);
        $num_headers = count($header);
        $tbl= '<table cellpadding="0" cellspacing="0" border="0">';
        $tbl.='<tr bgcolor="#F78F20">';
        for ($i = 0; $i < $num_headers; ++$i) {
            $tbl.='<td class="heading" width="' . $w[$i] . '">' . $header[$i] . '</td>';
        }
        $tbl.="</tr>";

//$fill=0;
        $rowCount = 0;
        $bill=0;
        foreach ($data as $row) {
            
            if ($rowCount % 2 == 0) {
                $tbl.='<tr valign="top" bgcolor="#fff">';
            } else {
                $tbl.='<tr valign="top">';
            }
            $tbl.="<td>" . $row['Voucher']['id'] . "</td>";
            $tbl.="<td>" . $row['Voucher']['from_name'] . "</td>";
            $tbl.="<td>" . $row['Voucher']['from_email'] . "</td>";
            $tbl.="<td>" . $row['Voucher']['phoneNumber_1'] . "</td>";
            $tbl.="<td>" . $row['Voucher']['to_name'] . "</td>";
            $tbl.="<td>" . $row['Voucher']['phoneNumber_2'] . "</td>";
            $tbl.="<td>" . $row['Voucher']['date_purchase'] . "</td>";
            $tbl.="<td> $" . $row['Voucher']['price'] . "</td>";
            $tbl.="<td>" . $row['Voucher']['status'] . "</td>";
            $tbl.="</tr>";
            
            $rowCount++;
        }
        
        
        
        
       
        $tbl.="</table>";

        return $tbl;
   
    }

}

?>
