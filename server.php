<?php 
$ListAlbum = file_get_contents( './list-album.json');
header('Content-Type: application/json');
echo $ListAlbum;


