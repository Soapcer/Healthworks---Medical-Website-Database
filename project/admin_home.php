<?php

session_start();
require_once 'config.php';
$sql = "SELECT * FROM inquiries ORDER BY created_at DESC";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<head>
    <meta charset= "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,900;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="admin.css">

</head>
<body>

    <div class="header" >
        <img src="images\hworks.png" width="140px" height="auto" style="float: left;">
        <nav>
        <p id="admin">ADMIN</p>
        <p id="welcome">Welcome, <?= $_SESSION['name']?></p>
        <button id="Logout" onclick="window.location.href='logout.php'">LOGOUT</button>
        </nav>
    </div>

    <div class="inquiry">
    <h2 style="text-align:center; color: #f7f7f7;">All Inquiries</h2>
    <table border="0" cellpadding="8" id="tablehead">
            <th>ID</th>
            <th>Email</th>
            <th>Inquiry</th>
            <th>Date Submitted</th>
            <th>Action</th> 
        </tr>
    <?php if ($result->num_rows > 0): ?>
        <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= htmlspecialchars($row['iqEmail']); ?></td>
                <td><?= htmlspecialchars($row['inquiry']); ?></td>
                <td><?= $row['created_at']; ?></td>
                <td>
                    <form action="delete_inquiry.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this inquiry?');">
                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                        <button type="submit" id="delete">DELETE</button>
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
    <?php else: ?>
        <tr><td colspan="5">No inquiries found.</td></tr>
    <?php endif; ?>
</table>   
 </div>
</body>