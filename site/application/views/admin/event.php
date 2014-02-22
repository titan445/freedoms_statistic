<h2 align="center">События</h2>
<table align="center" cellspacing="5" cellpadding="10" border="1">
    <?php if (isset($events)) 
    foreach ($events as $name_events => $event) { ?> 
        <tr>
            <td>
                <?= $name_events ?>
            </td>
            <td>
                <?= $event['time'] ?>
            </td>
            <td>
                <?= $event['link'] ?>
            </td>
            <td>
                
                <?= implode(", ", $event['name']) ?>
            </td>
        </tr>
    <?php } ?>

</table>