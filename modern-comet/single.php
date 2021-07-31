<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Coment | The best WordPress Theme of Bangladesh</title>
    <style>
        img {
            width: 150px;
        }
        .head {
            overflow: hidden;
        }
        .left {
            float: left;
        }
        .right {
            float: right;
        }

    </style>
</head>
<body>
    
    <header class="header">
        <div class="container">
            <div class="head">
                <div class="logo left">
                    <a href="#">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/Oikya_Front_Logo.png" alt="Modern Comet Logo">
                    </a>
                </div>
                <div class="menu right">
                    <ul class="menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <section>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </section>

    <!-- Comment Section -->
    <section>
        <?php if ( comment_open() ) {
            comments_template();
        } ?>
    </section>

</body>
</html>