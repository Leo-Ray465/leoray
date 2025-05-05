<?php

$conn = new mysqli("localhost", "root", "root", "commissiondb", 8889);

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["delete_id"])) {
    $deleteId = intval($_POST["delete_id"]); 
    $conn->query("DELETE FROM commissions WHERE id = $deleteId");
}

$sort = $_GET['sort'] ?? 'userName';
$ordering = $_GET['ordering'] ?? "ASC";

if ($sort === 'budget') {
    $sql = "SELECT * FROM commissions ORDER BY CAST(budget AS UNSIGNED) $ordering";
} else {
    $sql = "SELECT * FROM commissions ORDER BY $sort $ordering";
}

$result = $conn->query($sql);



if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='commission-entry'>";
        echo "<h3>" . htmlspecialchars($row['userName']) . " (" . htmlspecialchars($row['email']) . ")</h3>";
        echo "<p><strong>Phone:</strong> " . htmlspecialchars($row['phone']) . "</p>";
        echo "<p><strong>Deadline:</strong> " . htmlspecialchars($row['deadline']) . "</p>";
        echo "<p><strong>Description:</strong><br>" . nl2br(htmlspecialchars($row['project_description'])) . "</p>";
        echo "<p><strong>Budget:</strong> " . htmlspecialchars($row['budget']) . "</p>";
        
        echo "<form method='POST' action='commissionview.php' onsubmit='return confirm(\"Are you sure you want to delete this commission?\");'>";
        echo "<input type='hidden' name='delete_id' value='" . htmlspecialchars($row['id']) ."'>";
        echo "<button type='submit'>Delete</button>";
        echo "</form>";

        echo "<hr>";
        echo "</div>";
    }
} else {
    echo "<p>No commissions submitted yet.</p>";
}

$conn->close();
?>
