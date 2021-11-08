<?php
include('config.php');
include('includes/header.php'); ?>

<div id="wrapper">
  <div id="hero">
    <?php echo random_pics($photos); ?>
    <h2>
      <pre>
          <br>
          function random_pics($photos) {
              $i = rand(0, 4);
              $selected_image = ''. $photos[$i].'.jpg';
              echo '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
          }
        </pre>
    </h2>

  </div> <!-- end hero -->
  <main>
    <h1><?php echo $headline; ?></h1>
    <p>Aliquip sit in sint consequat cillum cupidatat anim cillum eu enim quis ipsum. Amet exercitation officia nostrud excepteur. Deserunt nostrud id id sunt labore Lorem ea tempor.Quis voluptate dolore adipisicing esse excepteur exercitation. Minim nulla id incididunt deserunt Lorem id aute. Et nostrud dolor et in cupidatat do deserunt eiusmod.</p>
  </main>

  <aside>
    <h3>Aside</h3>
    <p>Aliquip sit in sint consequat cillum cupidatat anim cillum eu enim quis ipsum. Amet exercitation officia nostrud excepteur.</p>
  </aside>

  <?php include('includes/footer.php'); ?>