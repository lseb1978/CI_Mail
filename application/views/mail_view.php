 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="no" lang="no">
<head>
</head>
<body>

    <p>Total messages: <?php echo $totalmsg?></p>
    <p>Quota: <?php echo $quota?></p>

	<table>
	<tbody>
	<tr><th>#</th><th>Date</th><th>From</th><th>Subject</th></tr>
    <?php foreach ($result as $row) { ?>
    <tr>
        <td><?php echo $row->msgno;?></td>
        <td><?php echo $row->date;?></td>
        <td><?php echo $row->from;?></td>
        <td><?php echo $row->subject;?></td>
    </tr>
	<?php } ?>
	</tbody>
    </table>		
</body>
</html>
