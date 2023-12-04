<h1>Álbuns</h1>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">

<a href="?page=new_album" class="btn btn-success">Adicionar novo Álbum</a>

<hr>

<div class="row">
    <?php
    $albuns = getAlbuns();

    //for ($i = 1; $i <= 10; $i++):
    foreach ($albuns as $album):

        $infoAlbum = explode('/', $album);
        $nameAlbum = $infoAlbum[1];
        // $imgAlbum = $album . '/' . $nameAlbum . '.JPG';
        $imgAlbum = "{$album}/{$nameAlbum}.jpg";        
    ?>
        <div class="col-3 album">
            <a href="?page=musics&album=<?= $nameAlbum?>">
                <img src=<?= $imgAlbum ?> alt="<?= $nameAlbum ?>" class="img-album img-fluid">
                <h4 class="mt-2">
                    <?= $nameAlbum?>
                </h4>
            </a>
        </div>
    <?php
        endforeach;
        // endfor;
    ?>
</div>