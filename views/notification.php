<?php
/**
 * Created by Touqeer Shafi.
 * Email: touqeer.shafi@gmail.com
 * Website: touqeershafi.com
 * Date: 12/15/15
 * Time: 12:42 PM
 */

/* @var $count integer */
/* @var $notifications array */

?>
    <li class="dropdown notifications-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            <span class="label label-warning"><?=$count?></span>
        </a>
        <ul class="dropdown-menu">
            <li class="header">You have <?=$count?> notifications</li>
            <li>
                <ul class="menu">
                    <?php if ($count > 0) : ?>
                        <?php foreach($notifications as $notification) : ?>
                            <li class="<?=(!$notification['is_viewed']) ? 'bg-success' : ''?>">
                                <a href="<?= ($notification['url']) ? $notification['url'] : 'javascript:void(0)' ?>">
                                    <i class="fa <?=$notification['icon'] ?>"></i>
                                    <?=$notification['text']?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </li>
        </ul>
    </li>
<?php
/**
 * End of file notification.php
 */