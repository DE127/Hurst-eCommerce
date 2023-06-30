<?php
session_start();
include_once 'elements\head.php';
include_once 'config\conn.php';
// kiểm tra người dùng đã đăng nhập hay chưa
if (isset($_SESSION['customer'])) {

// lấy customer id từ session customer
$customer_id = $_SESSION['customer_id'];
// get customer info
$stmt = $conn->prepare("SELECT * FROM customer WHERE id = ?");
$stmt->bind_param("i", $customer_id);
// execute query
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
// get customer name
$username = $row['username'];

if (isset($_POST['submit'])) {
    $product_id = $_POST['product_id'];
    $message = $_POST['message'];
    $date = date("Y-m-d H:i:s");
    $stmt = $conn->prepare("INSERT INTO comment (`product_id`, `user_id`, `content`, `created_at`) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiss", $product_id, $customer_id, $message, $date);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    header("Refresh:0");
}

    ?>

    <div class="pro-tab-info pro-reviews">
        <div class="customer-review mb-60">
            <h3 class="tab-title title-border mb-30">Customer review</h3>
            <ul class="product-comments clearfix">
                <?php 
                // in comment
                $sql = "SELECT * FROM comment WHERE product_id = ".$_GET['product_id']." ORDER BY created_at DESC";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    $row['created_at']= date("d M, Y \a\\t g:ia", strtotime( $row['created_at']));
                    $sql2 = "SELECT * FROM customer WHERE id = ".$row['user_id'];
                    $result2 = mysqli_query($conn, $sql2);
                    $row2 = mysqli_fetch_assoc($result2);


                    echo '<li class="mb-30">
                    <div class="pro-reviewer">
                        <img src="' . $row2['avatar'] . '" style="witdth:90px; height: 100px;" alt="" />
                    </div>
                    <div class="pro-reviewer-comment">
                        <div class="fix">
                            <div class="floatleft mbl-center">
                                <h5 class="text-uppercase mb-0"><strong>' . $row2['fullname'] . '</strong></h5>
                                <p class="reply-date">' . $row['created_at'] . '</p>
                            </div>
                            <div class="comment-reply floatright">
                                <a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
                                <a href="#"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                        <p class="mb-0">' . $row['content'] . '</p>
                    </div>
                </li>';
                }
                ?>
            </ul>
        </div>
        <div class="leave-review">
            <h3 class="tab-title title-border mb-30">Leave your reviw</h3>
            <div class="reply-box">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-12" hidden>
                            <input type="text" placeholder="Your name here..." name="name" value="<?=$row['username'];?>" />
                        </div>
                    </div>
                    <input hidden type="text" name="product_id" value="<?=$_GET['product_id']?>">
                    <div class="row">
                        <div class="col-md-12">
                            <textarea class="custom-textarea" name="message" placeholder="Your review here..."></textarea>
                            <button type="submit" data-text="submit review" class="button-one submit-button mt-20" name="submit">submit
                                review</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php } else {
    echo '<h3 class="tab-title title-border mb-30"><a href="login.php" target="_parent">Login to comment</a></h3>';
} 
include_once 'elements\js.php';
?>