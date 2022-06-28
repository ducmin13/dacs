<?php 
    for($num = 1; $num <= $total_page; $num++){?>
        <?php if($num != $current_page){ ?>
        <a class="page-item" href="sanpham1.php?id=<?php echo $_GET['id'] ?>&per_page=<?php echo $item_per_page?>&page=<?php echo $num?>"><?php echo $num?></a>
        <?php }else{ ?>
            <strong class="current-page page-item"><?php echo $num ?></strong>
        <?php } ?>
<?php } ?>