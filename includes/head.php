<?php
declare(strict_types=1);
require_once __DIR__ . '/config.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>
        <?= htmlspecialchars($pageTitle ?? 'MBA 360') ?>
    </title>

    <meta
        name="description"
        content="<?= htmlspecialchars($metaDescription ?? 'DGTL') ?>">

    <meta name="theme-color" content="#ff4701">

    <!-- Favicon -->
    <!-- <link rel="icon" type="image/png" href="./favicon.svg"
        sizes="32x32"> -->
    <!-- <link rel="apple-touch-icon" href="./favicon.svg" sizes="180x180"> -->

    <!-- <link rel="preload" as="image"
        href="./src/assets/images/college-student.webp" fetchpriority="high"> -->

    <link
        rel="icon"
        type="image/svg+xml"
        href="<?= $projectRoot ?>/favicon.svg"
        sizes="32x32">

    <link
        rel="apple-touch-icon"
        href="<?= $projectRoot ?>/favicon.svg"
        sizes="180x180">

    <!-- Preload Hero Image -->
    <link
        rel="preload"
        as="image"
        href="<?= $projectRoot ?>/src/assets/images/college-student.webp"
        fetchpriority="high">

    <link
        rel="preload"
        href="<?= $projectRoot ?>/fonts/Inter-Bold.woff2"
        as="font"
        type="font/woff2"
        crossorigin>

    <link
        rel="preload"
        href="<?= $projectRoot ?>/fonts/Inter-Regular.woff2"
        as="font"
        type="font/woff2"
        crossorigin>

    <?php if ($authenicationRequired) : ?>
        <link rel="stylesheet" href="<?= $projectRoot ?>/src/css/header.css">
        <link rel="stylesheet" href="<?= $projectRoot ?>/src/css/common.css">
        <link rel="stylesheet" href="<?= $projectRoot ?>/src/css/footer.css">
    <?php endif; ?>

    <?php if (!empty($pageCss)) : ?>
        <?php foreach ($pageCss as $css) : ?>
            <link rel="stylesheet" href="<?= $projectRoot ?>/src/css/<?= $css ?>">
        <?php endforeach; ?>
    <?php endif; ?>

    <?php if (!empty($pageJs)) : ?>
        <?php foreach ($pageJs as $js) : ?>
            <script src="<?= $projectRoot ?>/src/js/<?= $js ?>" defer></script>
        <?php endforeach; ?>
    <?php endif; ?>

</head>

<body>