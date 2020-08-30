<!DOCTYPE html>
<html class="h-full bg-gray-200">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <?= $this->Html->meta('icon') ?>

    <?= $this->AssetMix->css('app') ?>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=smoothscroll,NodeList.prototype.forEach,Promise,Object.values,Object.assign" defer></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=String.prototype.startsWith" defer></script>

    <?= $this->AssetMix->script('app') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="font-sans leading-none text-gray-700 antialiased">
    <?= $this->fetch('content') ?>
</body>
</html>
