<!-- Student note: CTA - heading, sub, button. Centered like original hero -->
<div class="text-center">
    <h3 class="mb-4 font-extrabold text-4xl drop-shadow-lg"><?= $heading ?></h3> <!-- Bold like original -->
    <p class="mb-8 text-gray-200 text-xl leading-relaxed max-w-2xl mx-auto"><?= $sub ?></p>
    <?= view('components/button', [
        'label' => $primary['label'],
        'href' => $primary['href'],
        'class' => 'cta-button' // Bigger style
    ]) ?>
</div>
