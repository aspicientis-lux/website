<!doctype html>
<html lang="en">

<head>
    <title>Aspicientis Lux</title>
    <?php include './snippets/header.php'; ?>

    <!-- include the components for this website -->
    <link rel="stylesheet" href="/assets/components/image-navigation/style.css" />
    <script type="module" src="/assets/components/featured-image/index.js"></script>
</head>

<body>
    <scroll-to-top></scroll-to-top>
    <header>
        <?php include './snippets/navigation.php'; ?>
        <featured-image src="/images/art/kitchen-ready-1800.jpg"></featured-image>
    </header>

    <div class="article">
        <h1>An Endeavor into photography</h1>
        <p>
            When I first picked up a camera, I found it a bit tedious. Looking through a
            small viewfinder, pressing a button, and then ending up with blurry and meaningless
            pictures was not very exciting. However, my perspective changed when I saw a
            good friend playing with his camera. He explained to me that photography
            is not just about the camera, but about experiencing the world. It took me
            years to fully understand what he meant.
        </p>
        <p>
            As a computer scientist and engineer, I tend to focus on technology all
            the time. Although photography can be technical, it is so much more than
            that. It is about capturing the overwhelming feeling of standing on a
            mountain and looking out at an incredible scene, or trying to communicate
            the stunning beauty of a bird looking straight into my lens. So, an image
            doesn’t always have to be technically perfect. On these pages,
            you’ll find some of my endeavors in photography and
            the world.
        </p>
    </div>

    <div class="image-navigation">
        <a href="/pages/birds.php"><img src="/images/birds/platalea-leucorodia-500.jpg" /></a>
        <a href="/pages/wild-life.php"><img src="/images/wild-life/cervus-elaphus-2-500.jpg" /></a>
        <a href="/pages/landscapes.php"><img src="/images/landscapes/ireland-1-500.jpg" /></a>
        <a href="/pages/art.php"><img src="/images/art/kitchen-ready-500.jpg" /></a>
    </div>
    <?php include '../snippets/footer.php'; ?>
</body>