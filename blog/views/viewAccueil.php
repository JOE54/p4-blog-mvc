<?php require_once('views/header.php'); ?>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Billet simple pour l'Alaska de <span>Jean Forteroche</span></h1>
                    </div>
                    <div class="col-lg-12">
                        <p><strong>Nouveau roman</strong></p>
                    </div>
                </div>
            </div>
        </header>
        <section id="episodes">
            <div class="container">
                <div class="divider"></div>
                <h2>Derniers épisodes</h2>
                <div id="row">
                    
                <?php
                // J'AFFICHE TOUS LES ARTICLES
                foreach($articles as $article): ?>
                    <article>
                        <h3><?= ucfirst($article->title()) ?></h3>
                        <time>le <?= $article->articleDate() ?></time>
                        <p><?= $modelArticle->bbcode_to_html(substr($article->content(), 0, 200)) ?>...</p>
                        <a href="episode&amp;id=<?= $article->id() ?>" class="btn link">Lire la suite</a>
                    </article>
                <?php endforeach; ?>
                    
                </div>
            </div>
        </section>  

<?php require_once('views/footer.php'); ?>