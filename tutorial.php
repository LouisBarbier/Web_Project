<?php

include('./functions/functions.php');

if (isset($_COOKIE["user"])) {

    // echo $_COOKIE["user"];

    $user = json_decode($_COOKIE["user"], true);

    $pers_id = $user['pers_id'];
    $pers_password = $user['pers_password'];

    $connected = isValid($pers_id, $pers_password);

    // echo "connected = $connected";
} else {
    $connected = false;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial - Competitive Battleship</title>
    <link rel="icon" type="image/svg+xml" href="common/images/competitive_battleship.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="common/styles.css">
    <link rel="stylesheet" href="tutorial.css">
    <style>
        
        <?php

        load_css_variables(isset($_COOKIE["dark_mode"]) && $_COOKIE["dark_mode"] === "1");

        ?>

    </style>
</head>
<body>
    <!--Here new player will be able to understand how to play the game-->
    <header class="d-flex flex-wrap justify-content-center">
        <a href="index.php" target="_self" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <img src="common/images/competitive_battleship.svg" alt="Logo" class="bi me-2" width="40" height="40">
            <span class="fs-4">Competitive Battleship</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item">
                
                <?php

                if (isset($_COOKIE["dark_mode"]) && $_COOKIE["dark_mode"] === "1") {
                    echo '<img id="bright_mode" alt="light mode" src="./common/images/heavy-bulb.png">';
                } else {
                    echo '<img id="bright_mode" alt="dark mode" src="./common/images/light-bulb.png">';
                }

                ?>
                
            </li>
            <li class="nav-item">
                <a href="index.php" class="nav-link" target="_self">Home</a>
            </li>

            <?php

            if ($connected && ($user['pers_isadmin']==='1' || $user['pers_isadmin']===1 || $user['pers_isadmin']===true)) {
                echo '<li class="nav-item">
                    <a href="admin.php" class="nav-link" target="_self">Admin Page</a>
                </li>';
            }

            ?>

            <li class="nav-item">
                <a href="#" class="nav-link active" target="_self" aria-current="page">Tutorial</a>
            </li>

            <?php
            
            if ($connected) {
                echo "<li class=\"nav-item\"><a href=\"editAccount.php\" class=\"nav-link\" target=\"_self\">Edit Account</a></li>";
            } else {
                echo "<li class=\"nav-item\">
                    <a id=\"login\" href=\"login.php\" class=\"nav-link\" target=\"_blank\">Sign In</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"registration.php\" class=\"nav-link\" target=\"_self\">Sign Up</a>
                </li>";
            }
            
            ?>

        </ul>
    </header>

    <main class="container">
        <div id="tutorial-scrollspy" class="row">
            <div class="col-3">
                <nav id="tutorial-nav" class="navbar flex-column align-items-stretch p-3">
                    <h4><a href="#">Tutorial</a></h4>
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link" href="#item-1">Item 1</a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ms-3 my-1" href="#item-1-1">Item 1-1</a>
                            <a class="nav-link ms-3 my-1" href="#item-1-2">Item 1-2</a>
                        </nav>
                        <a class="nav-link" href="#item-2">Item 2</a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ms-3 my-1" href="#item-2-1">Item 2-1</a>
                            <a class="nav-link ms-3 my-1" href="#item-2-2">Item 2-2</a>
                        </nav>
                    </nav>
                </nav>
            </div>
            <div class="col">
                <div id="tutorial-text" data-bs-spy="scroll" data-bs-target="#tutorial-nav" data-bs-offset="0" tabindex="0">
                    <h4 id="item-1">Item 1</h4>
                    <p>
                        Ex consequat commodo adipisicing exercitation aute excepteur occaecat ullamco
                        duis aliqua id magna ullamco eu. Do aute ipsum ipsum ullamco cillum consectetur
                        ut et aute consectetur labore. Fugiat laborum incididunt tempor eu consequat
                        enim dolore proident. Qui laborum do non excepteur nulla magna eiusmod
                        consectetur in. Aliqua et aliqua officia quis et incididunt voluptate non anim
                        reprehenderit adipisicing dolore ut consequat deserunt mollit dolore. Aliquip
                        nulla enim veniam non fugiat id cupidatat nulla elit cupidatat commodo velit ut
                        eiusmod cupidatat elit dolore.
                    </p>
                    <h5 id="item-1-1">Item 1-1</h5>
                    <p>
                        Amet tempor mollit aliquip pariatur excepteur commodo do ea cillum commodo
                        Lorem et occaecat elit qui et. Aliquip labore ex ex esse voluptate occaecat
                        Lorem ullamco deserunt. Aliqua cillum excepteur irure consequat id quis ea.
                        Sit proident ullamco aute magna pariatur nostrud labore. Reprehenderit aliqua
                        commodo eiusmod aliquip est do duis amet proident magna consectetur consequat
                        eu commodo fugiat non quis. Enim aliquip exercitation ullamco adipisicing
                        voluptate excepteur minim exercitation minim minim commodo adipisicing
                        exercitation officia nisi adipisicing. Anim id duis qui consequat labore
                        adipisicing sint dolor elit cillum anim et fugiat.
                    </p>
                    <h5 id="item-1-2">Item 1-2</h5>
                    <p>Cillum nisi deserunt magna eiusmod qui eiusmod velit voluptate pariatur
                        laborum sunt enim. Irure laboris mollit consequat incididunt sint et culpa
                        culpa incididunt adipisicing magna magna occaecat. Nulla ipsum cillum
                        eiusmod sint elit excepteur ea labore enim consectetur in labore anim.
                        Proident ullamco ipsum esse elit ut Lorem eiusmod dolor et eiusmod.
                        Anim occaecat nulla in non consequat eiusmod velit incididunt.
                    </p>
                    <h4 id="item-2">Item 2</h4>
                    <p>
                        Quis magna Lorem anim amet ipsum do mollit sit cillum voluptate ex nulla tempor.
                        Laborum consequat non elit enim exercitation cillum aliqua consequat id aliqua.
                        Esse ex consectetur mollit voluptate est in duis laboris ad sit ipsum anim Lorem.
                        Incididunt veniam velit elit elit veniam Lorem aliqua quis ullamco deserunt sit
                        enim elit aliqua esse irure. Laborum nisi sit est tempor laborum mollit labore
                        officia laborum excepteur commodo non commodo dolor excepteur commodo. Ipsum
                        fugiat ex est consectetur ipsum commodo tempor sunt in proident.
                    </p>
                    <h5 id="item-2-1">Item 2-1</h5>
                    <p>
                        Deserunt quis elit Lorem eiusmod amet enim enim amet minim Lorem proident nostrud.
                        Ea id dolore anim exercitation aute fugiat labore voluptate cillum do laboris
                        labore. Ex velit exercitation nisi enim labore reprehenderit labore nostrud ut
                        ut. Esse officia sunt duis aliquip ullamco tempor eiusmod deserunt irure nostrud
                        irure. Ullamco proident veniam laboris ea consectetur magna sunt ex exercitation
                        aliquip minim enim culpa occaecat exercitation. Est tempor excepteur aliquip
                        laborum consequat do deserunt laborum esse eiusmod irure proident ipsum esse qui.
                    </p>
                    <h5 id="item-2-2">Item 2-2</h5>
                    <p>
                        Labore sit culpa commodo elit adipisicing sit aliquip elit proident voluptate
                        minim mollit nostrud aute reprehenderit do. Mollit excepteur eu Lorem ipsum anim
                        commodo sint labore Lorem in exercitation velit incididunt. Occaecat consectetur
                        nisi in occaecat proident minim enim sunt reprehenderit exercitation cupidatat et
                        do officia. Aliquip consequat ad labore labore mollit ut amet. Sit pariatur tempor
                        proident in veniam culpa aliqua excepteur elit magna fugiat eiusmod amet officia.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <footer class="d-flex flex-wrap justify-content-between align-items-center mt-auto">
        <div class="col-md-4 d-flex align-items-center">
            <a href="#" class="mb-3 me-2 mb-md-0 lh-1">
                <img src="common/images/competitive_battleship.svg" alt="Logo" class="bi" width="30" height="30">
            </a>
            <span class="mb-3 mb-md-0">&copy; 2024 Competitive Battleship</span>
        </div>

        <ul class="nav col-md-4 nav-pills justify-content-start">
            <li class="nav-item">
                <a href="terms.php" class="nav-link" target="_self">Terms</a>
            </li>
        </ul>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3">
                <a href="https://www.facebook.com/juniata" title="Facebook" target="_blank">
                    <img width="24" height="24" src="common/images/facebook.svg" alt="Facebook Logo">
                </a>
            </li>
            <li class="ms-3">
                <a href="https://twitter.com/juniatacollege" title="Twitter / X" target="_blank">
                    <img width="24" height="24" src="common/images/x.svg" alt="Twitter / X Logo">
                </a>
            </li>
            <li class="ms-3">
                <a href="https://github.com/LouisBarbier/Competitive_Battleship" title="GitHub" target="_blank">
                    <img width="24" height="24" src="common/images/github.svg" alt="GitHub Logo">
                </a>
            </li>
        </ul>
    </footer>
    <script src="common/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script lang="text/javascript">
        var scrollSpy = new bootstrap.ScrollSpy(document.body, {
            target: '#tutorial-nav'
        })
    </script>
</body>
</html>