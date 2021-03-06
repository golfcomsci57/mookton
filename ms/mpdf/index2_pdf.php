<?php
//เรียกใช้ไฟล์ autoload.php ที่อยู่ใน Folder vendor
require_once __DIR__ . '../../vendor/autoload.php';

$db_host = "127.0.0.1";
$db_user = "root";
$db_pass = "123456";
$db_prefix = "tb_";
$db_name = "project";
$db_connection = new mysqli($db_host,$db_user,$db_pass,$db_name);
if ($db_connection->connect_errno) {
    printf("Connect failed: %s\n", $db_connection->connect_error);
    exit();
}
$db_connection->set_charset("utf8");

$sql = "SELECT * FROM staff";

$result = mysqli_query($db_connection, $sql);
$content = "";
if (mysqli_num_rows($result) > 0) {
    $i = 1;
    while($row = mysqli_fetch_assoc($result)) {
        $content .= '<tr style="border:1px solid #000;">
				<td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$i.'</td>
				<td style="border-right:1px solid #000;padding:3px;text-align:center;" >'.$row['staff_name'].'</td>
				<td style="border-right:1px solid #000;padding:3px;"  >'.$row['staff_position'].'</td>
				<td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$row['staff_group'].'</td>				
				
				
			</tr>';
        $i++;
    }
}

mysqli_close($db_connection);

$mpdf = new mPDF();

$head = '
<style>
	body{
		font-family: "Garuda";//เรียกใช้font Garuda สำหรับแสดงผล ภาษาไทย
	}
</style>

<h2 style="text-align:center">ประวัติการไปราชการ</h2>

<table id="bg-table" width="100%" style="border-collapse: collapse;font-size:12pt;margin-top:8px;">
    <tr style="border:1px solid #000;padding:4px;">
        <td  style="border-right:1px solid #000;padding:4px;text-align:center;"   width="10%">ลำดับ</td>
        <td  style="border-right:1px solid #000;padding:4px;text-align:center;"  width="20%">ชื่อ/นามสกุล</td>
        <td  style="border-right:1px solid #000;padding:4px;text-align:center;"  width="15%">ตำแหน่ง</td>
        <td  style="border-right:1px solid #000;padding:4px;text-align:center;"  width="15%">ส่วนฝ่าย</td>
        
     
	 
	  
	</tr>

</thead>
	<tbody>';

$end = "</tbody>
</table>";

$mpdf->WriteHTML($head);

$mpdf->WriteHTML($content);

$mpdf->WriteHTML($end);

$mpdf->Output();
