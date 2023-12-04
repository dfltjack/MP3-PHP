<a href="?page=albuns">Voltar para os Albuns</a>
<h1>Músicas do Álbum
    <?= $_GET['album'] ?>
</h1>

<a href="?page=newmusic&album=<?= $_GET['album'] ?>" class="btn btn-success">Cadastrar Nova Música</a>

<hr>
  
<?php
$album = $_GET['album'];
$musics = getMusics($album);

foreach

($musics as $music):

?>

<div class="col-12">
    <audio src="<?=$music?>" controls></audio>
</div>

<?php
endforeach;
?>