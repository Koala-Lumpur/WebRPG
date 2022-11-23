<?php
$conn = mysqli_connect('localhost', 'root', '', 'WebRPG');

$results = $conn->query("SELECT * FROM users");
?>

<?php while ($data = $results->fetch_assoc()):?>

    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['username']; ?></td>
    </tr>

<?php endwhile; ?>