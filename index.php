<!DOCTYPE html>
<html>
    <head>
        <?php include "module/head.php";?>
        <title>Accueil</title>
    </head>
    <body>
    <?php include "module/header.php";?> 

    <?php 
    // veriefie s l'element page est pesent dans l'url
    if (isset($_GET['page'])){
        $page = $_GET['page'];

        //inclut la pagecorrespondante en fonction du paramètre "page
        switch($page){
            case 'accueil':
                include('index.php');
                break;
            case 'actualite':
                include('html/actualite.php');
                break;
            case 'calendrier':
                include('html/calendrier.php');
                break;
            case 'classement':
                include('html/classement_competition.php');
                break;
            case 'forum':
                include('html/forum.php');
                break;
            case 'contact':
                include('html/contact.php');
                break;
            case 'article':
                include('html/article.php');
                break;
                default:
                include ('index.php');
        }
    } else {
        // page par defaut lorsque aucun paramètre "page n'est pas specifié
        include('../index.php');
    }
    ?>

    <?php include "module/footer.php";?>
    </body>
</html>



