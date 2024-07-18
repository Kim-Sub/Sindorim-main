<!-- 방문자수 조회 -->
<div>
    <?php echo visit(); ?>
</div> 



<!-- 로그인, 회원가입 -->
<ul class="hd_login">        
    <?php if ($is_member) {  ?>
    <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
    <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
    <?php if ($is_admin) {  ?>
    <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
    <?php }  ?>
    <?php } else {  ?>
    <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
    <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
    <?php }  ?>
</ul>