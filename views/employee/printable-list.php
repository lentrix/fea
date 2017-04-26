<?php
$this->title = "Employee Printable List";

?>

<table>
    <?php $num = 0; ?>
    <?php foreach($employees as $employee) : ?>
        
    <tr>
        <td><?= ++$num . "." ?></td>
        <td width="300"><?php echo $employee->formalName ?></td>
        <td width="300" style="border-bottom: 1px solid #333">&nbsp;</td>
    </tr>

    <?php endforeach; ?>
</table>