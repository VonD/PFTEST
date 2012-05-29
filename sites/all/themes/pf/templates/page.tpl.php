<header id="header" role="banner navigation" class="wrap">
  <?php if ($logo): ?>
    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
  <?php endif; ?>
  <nav id="socialNav" role="navigation" class="topNav">
    <?php
      foreach($variables['pf_socialLinks'] as $name => $link){
        print "<a href='" . $link . "' target='_blank' class='sclLink' id='" . $name ."Link'></a>";
      }
    ?>
    <div class="navSep"></div>
    <div id="lgLinks">
      FR / 
      <span class="lgLink">EN</span>
    </div>
    <div class="clearFix"></div>
  </nav>
  <?php if ($main_menu): ?>
    <nav id="mainMenu" role="navigation" class="topNav">
       <?php
        print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        ));
       ?>
    </nav>
  <?php endif; ?>
</header>