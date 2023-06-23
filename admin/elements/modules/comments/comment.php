<form method="POST" action="submit_comment.php">
    <input type="hidden" name="parent_comment_id" value="<?php echo $parent_comment_id; ?>">
    <textarea name="comment_text"></textarea>
    <button type="submit">Submit</button>
</form>

<?php
// Lấy dữ liệu từ biểu mẫu
$comment_text = $_POST['comment_text'];
$parent_comment_id = $_POST['parent_comment_id'];

// Thực hiện truy vấn SQL để lưu trữ bình luận trong cơ sở dữ liệu
$sql = "INSERT INTO comments (comment_text, parent_comment_id) VALUES (?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$comment_text, $parent_comment_id]);
?>

<!-- SELECT * FROM comments WHERE parent_comment_id = ? -->

<!-- hiển thì -->
<?php
// Lấy danh sách bình luận từ cơ sở dữ liệu
$sql = "SELECT * FROM comments WHERE product_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$product_id]);
$comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Hiển thị danh sách bình luận
foreach ($comments as $comment) {
    // Hiển thị bình luận cha
    echo '<div class="comment">';
    echo '<p>' . $comment['comment_text'] . '</p>';

    // Lấy danh sách bình luận con của bình luận cha
    $sql = "SELECT * FROM comments WHERE parent_comment_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$comment['id']]);
    $child_comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Hiển thị danh sách bình luận con
    foreach ($child_comments as $child_comment) {
        echo '<div class="child-comment">';
        echo '<p>' . $child_comment['comment_text'] . '</p>';
        echo '</div>';
    }

    echo '</div>';
}
?>
