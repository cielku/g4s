<?
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<div>
    <strong><a href="<?=$g4['bbs_path']?>/board.php?bo_table=<?=$bo_table?>"><?=$board['bo_subject']?></a></strong>
    <ul>
    <? for ($i=0; $i<count($list); $i++) { ?>
        <li>
            <?
            echo $list[$i]['icon_reply']." ";
            echo "<a href=\"".$list[$i]['href']."\">";
            if ($list[$i]['is_notice'])
                echo "<strong>".$list[$i]['subject']."<strong>";
            else
                echo $list[$i]['subject'];
            echo "</a>";

            if ($list[$i]['comment_cnt'])
                echo " <a href=\"{$list[$i]['comment_href']}\">".$list[$i]['comment_cnt']."</a>";

            // if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
            // if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }

            echo " " . $list[$i]['icon_new'];
            echo " " . $list[$i]['icon_file'];
            echo " " . $list[$i]['icon_link'];
            echo " " . $list[$i]['icon_hot'];
            echo " " . $list[$i]['icon_secret'];
            ?>
        </li>
    <? } ?>
    <? if (count($list) == 0) { //게시물이 없을 때 ?>
        <li>게시물이 없습니다.</li>
    <? } ?>
    </ul>
    <a href="<?=$g4['bbs_path']?>/board.php?bo_table=<?=$bo_table?>">더보기</a>
</div>