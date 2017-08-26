<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title><?= $t ?></title>
        <meta name="description" content="Découvrez le dernier roman de Jean Forteroche, «Billet simple pour l&#039;Alaska»." />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" type="image/png" href="<?= URL.'content/images/favicon.png' ?>" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?= URL.'content/style.css' ?>" />
    </head>
    
    <body>
        <header>
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?= URL ?>"><strong>Jean Forteroche</strong></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?= URL ?>">Accueil</a></li>
                            <li><a href="<?= URL.'index.php#episodes' ?>">Episodes</a></li>
                            <li><a href="<?= URL.'login' ?>" class="glyphicon glyphicon-log-in"> ADMIN</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
