<?php
$marque = [
  [
    'dari' => 'Albert Einstein',
    'quote' => 'Learn from yesterday, live for today, hope for tomorrow. 
                The important thing is not to stop questioning. (Belajar dari hari kemarin, hidup untuk hari ini, 
                berharap untuk hari esok. Yang terpenting tidak berhenti bertanya)'
  ],
  [
    'dari' => 'Thomas Alva Edison',
    'quote' => 'Genius is one percent inspiration, ninety-nine percent perspiration. 
                (Jenius adalah satu persen inspirasi, sembilan puluh sembilan persen keringat)'
  ]
];
?>

<div class="marquee">
  <span class="cursor-pointer">
    <?php foreach($marque as $item): ?>        
      "<?= $item['quote'] ?>"
      <strong>-<?= $item['dari'] ?></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php endforeach; ?>
  </span>
</div>