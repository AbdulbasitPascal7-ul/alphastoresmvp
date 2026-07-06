<?php
require_once "../views/selectQuery2.php";
$users = selectQuery('waitlist');

foreach ($users as $user) {?>

<div class="user">
                <p><?php echo htmlspecialchars($user['user_id']) ?></p>
                <h4><?php echo  htmlspecialchars($user['name']) ?></h4>
                <h5><?php echo  htmlspecialchars($user['email']) ?></h5>
            </div>

<?php } ?>