<!DOCTYPE html>
<html lang="en">
<head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/tailwind.css" type="text/css" />
</head>
<body>
<div class="container">
    <header>
        <h1 class="text-3xl text-red">My New test Template</h1>
    </header>
    <nav>
        <jdoc:include type="modules" name="position-1" style="none" />
    </nav>
    <main>
        <jdoc:include type="component" />
    </main>
    <footer>
        <jdoc:include type="modules" name="position-2" style="none" />
    </footer>
</div>
</body>
</html>
