        <footer>
            <p>Blog conçu par<a href="https://jonathan-richard.fr"> Jonathan Richard</a></p>
            <p><a href="<?= URL.'mentions' ?>">Mentions légales</a></p>
        </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php 
    // J'INCLUS CES SCRIPTS UNIQUEMENT SUR LES PAGES "AJOUTER" ET "MODIFIER"
    if(strpos($_SERVER['REQUEST_URI'], 'ajouter') OR strpos($_SERVER['REQUEST_URI'], 'modifier')): ?>
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=a7hmh3kim33d42f0kf6ywiw9nnecqrz7j28vvc6mvdiu0cl9"></script>
        <script src="content/tinymce/tinymce-init.js"></script>
    <?php endif; ?>
    <?php
    // J'INCLUS CE SCRIPT UNIQUEMENT SUR LA PAGE "EPISODE"
    if(isset($countComments)): ?>
    <script>
        $(document).ready(function(){
            var load = 0;
            var countComments = '<?= $countComments ?>';
            $('.loader').hide();
            $('#ajax').submit(function(e){
                e.preventDefault();
                load++; 
                if(load * 3 > countComments){
                    $('.loader').hide();
                    $('#ajax').hide();
                }
                $('.loader').show();
                $.post($(this).attr('action'), {load:load}, function(data){
                    $('.ajax').append(data);
                    $('.loader').hide();
                });
            });
        });
    </script>
    <?php endif; ?>
    </body>
</html>