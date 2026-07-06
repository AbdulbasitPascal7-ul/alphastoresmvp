<?php
require_once "../views/selectQuery2.php";

$messages = selectQuery('messages');
//var_dump($messages);

foreach ($messages as $message) {?>
<div class="messagesCard">
                <div class="top">
                    <h5><?php echo htmlspecialchars($message['name']) ?></h5>
                    <h6><?php echo htmlspecialchars($message['email']) ?></h6>
                </div>

                    <div class="message">
                       
                            <?php echo htmlspecialchars($message['message']) ?>
                        </div>
                <div class="bottom">
                    <h5><?php echo htmlspecialchars($message['name']) ?></h5>
                    <button>Reply</button>
                </div>
            </div>
<?php } ?>