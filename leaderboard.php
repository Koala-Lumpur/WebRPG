<?php
    require_once('connect.php');

    $results = $db->query("SELECT * FROM users");

    while ($data = $results->fetch_assoc()):?>

<tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['username']; ?></td>
</tr>

<?php endwhile; ?>