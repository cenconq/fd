<?php include('top.inc'); ?>
<?php include('header.inc'); ?>
<div class="main">
  <div class="container">
    <div class="row">
      <?php if (!empty($page['sidebar_first'])): ?>
        <aside class="col-sm-3" role="complementary">
          <?php print render($page['sidebar_first']); ?>
        </aside>
      <?php endif; ?>
      <section<?php print $content_column_class; ?>>
        <?php print render($page['content']); ?>
      </section>
      <?php if (!empty($page['sidebar_second'])): ?>
        <aside class="col-sm-3" role="complementary">
          <?php print render($page['sidebar_second']); ?>
        </aside>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php include('content-bottom.inc'); ?>
<!-- <div id="front-section-1" class="section">
  <div class="container">
    <div class="row">
        <div class="col-lg-12">
           <h1>刺五加酸枣仁口服液</h1>
           <div class="sub-title">改善睡眠，增强免疫力</div>
        </div>
        <div class="col-lg-offset-2 col-lg-8">
          <img src="/<?php echo path_to_theme(); ?>/images/product.jpg" alt="" style="width:100%;">
        </div>       
    </div>
  </div>
</div>

<div id="front-section-2" class="section">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <img src="/<?php echo path_to_theme(); ?>/images/ginseng.jpg" alt="" style="width: 50%; margin: 0 25%;">
        </div>
        <div class="col-lg-6">
        <h2>刺五加</h2>
        <p>见于《神农本草经》，列为上品。上品乃指无毒，久服可以轻身、延年益寿而无害。刺五加自古即被视为具有添精补髓及抗衰老作用的良药</p>
        <p>刺五加提取物有抗疲劳作用，免疫增强作用。</p>
       </div>        
    </div>
  </div>
</div>

<div id="front-section-3" class="section">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <h2>酸枣仁</h2>
          <p>《神农本草经》中记载：“补中益肝，坚筋骨，助阴气，皆酸枣仁之功也。”明代李时珍《本草纲目》中记载，枣仁“熟用疗胆虚不得眠，烦渴虚汗之症；生用疗胆热好眠，皆足厥阴少阳药也。</p>
          <p>酸枣仁含有生物碱、多种氨基酸和金属元素等成分，能起到宁心安神、补中养肝、敛汗等作用，对虚烦不眠，惊悸怔忡，体虚自汗，失眠等病症有较好的治疗效果。</p>
        </div>
        <div class="col-lg-6">
          <img src="/<?php echo path_to_theme(); ?>/images/sour.jpg" alt="" style="width: 80%; margin: 0 10%;">
        </div>        
    </div>
  </div>
</div>

<div id="front-section-4" class="section">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <img src="/<?php echo path_to_theme(); ?>/images/pure-water.jpg" alt="" style="width: 70%; margin: 0 15%;">
        </div>
        <div class="col-lg-6">
          <h2>纯化水</h2>
          <p>刺五加酸枣仁口服液采用经蒸馏法、离子交换法、反渗透法或其他适宜的方法制得的供药用的水，不含任何添加剂。</p>
        </div>        
    </div>
  </div>
</div>

<div id="front-section-5" class="section">
  <div class="container">
    <div class="row">
        <div class="col-lg-12" id="slogan">
          用心做最好的产品
        </div>    
    </div>
  </div>
</div> -->
<?php include('help.inc'); ?>
<?php include('footer.inc'); ?>
<?php include('bottom.inc'); ?>