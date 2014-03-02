<h2 align="center">События</h2>
<table align="center" cellspacing="5" cellpadding="10" border="1">
    <?php if (isset($events)) 
    foreach ($events as $event) { ?> 
        <tr>
            <td>
                 <?= $event['name'] ?>
            </td>
            <td>
                <?= $event['time'] ?>
            </td>
            <td>
             <img src="<?= $event['link'] ?>" width="900" height="600" />
            </td>
            <td>
                
                <?= implode(", ", $event['players']) ?>
            </td>
        </tr>
    <?php } ?>

</table>