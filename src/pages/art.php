<!doctype html>
<html lang="en">

<head>
    <title>Aspicientis Lux - Art</title>
    <?php include '../snippets/header.php'; ?>
    <link rel="stylesheet" href="/assets/components/gallery/style.css" />
</head>

<body>
    <scroll-to-top></scroll-to-top>
    <header>
        <?php include '../snippets/navigation.php'; ?>
        <div class="header-spacer"></div>
    </header>

    <div class="gallery col-1">
        <figure>
            <div></div>
            <img src="/images/art/kitchen-ready-1800.jpg" />
            <figcaption>Kitchen Ready</figcaption>
        </figure>
    </div>
    <div class="article inner">
        <p>
            Vincent van Gogh and Claude Monet are some of my favorite painters, which may not be very surprising. The (post)impressionists had a unique style of depicting the world, neither too realistic nor too abstract. They often painted what they saw, but added their own emotions and perspectives to the images, without losing their clarity.
        <p>
    </div>
    <div class="gallery col-3">
        <figure>
            <div data-src="/images/art/blooming-heath-1800.jpg"></div>
            <img src="/images/art/blooming-heath-500.jpg" />
            <figcaption>Blooming Heath</figcaption>
        </figure>
        <figure>
            <div data-src="/images/art/the-survivor-1800.jpg"></div>
            <img src="/images/art/the-survivor-500.jpg" />
            <figcaption>The Survivor</figcaption>
        </figure>
        <figure>
            <div data-src="/images/art/morning-surprise-1800.jpg"></div>
            <img src="/images/art/morning-surprise-500.jpg" />
            <figcaption>Morning Surprise</figcaption>
        </figure>
    </div>
    <script src="/assets/components/gallery/index.js"></script>
    <?php include '../snippets/footer.php'; ?>
</body>