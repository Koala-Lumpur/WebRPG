<?php
$conn = mysqli_connect('sql7.freemysqlhosting.net', 'sql7580188', 'ynljLCUT9J', 'sql7580188');

$results = $conn->query("SELECT * FROM users");
?>

<?php while ($data = $results->fetch_assoc()):?>

    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['username']; ?></td>
    </tr>

<?php endwhile; ?>