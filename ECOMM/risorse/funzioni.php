<?php

function query($sql){
  global $connessione;
  return mysqli_query($connessione,$sql);
}

function conferma($risultato){
  if (!$risultato){
    global $connessione;
    if(!$risultato){
      echo "Richiesta fallita " . mysqli_error($connessione);
    }
  }
}

function fetch_array($risultato){
  return mysqli_fetch_array($risultato);
}

function mostraProdotti(){
  $ricercaProdotti = query('SELECT * FROM prodotti LIMIT 3');
  conferma($ricercaProdotti);
  while($row = fetch_array($ricercaProdotti)){
    // echo $row['nome_prodotto']; 
    $prodotti = <<<STRINGA_PDT
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="prodotto.php?id={$row['id_prodotto']}"><img class="card-img-top" src="../risorse/{$row['immagine']}" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="prodotto.php?id={$row['id_prodotto']}">{$row['nome_prodotto']}</a>
            </h4>
            <h5>{$row['prezzo']}</h5>
            <p class="card-text">{$row['descr_prodotto']}</p>
          </div>
          <div class="card-footer">
          <a href="carrello.php?add={$row['id_prodotto']}"><button type="button" class="btn btn-primary btn-small">Acquista</button></a>
          </div>
        </div>
      </div>
    STRINGA_PDT;
    echo $prodotti;
  }
}

function mostraCategorie(){

  $ricercaCategorie = query("SELECT * FROM categorie");
  conferma($ricercaCategorie);

  while($row = fetch_array($ricercaCategorie)){

    $categorie = <<<STRINGA_CAT
      <a href='categorie.php?id={$row['id_cat']}' class='list-group-item'>{$row['nome_cat']}</a>
    STRINGA_CAT;

    echo $categorie;
  }
}

function paginaCategoria() {
  $pdtCatgoria = query("SELECT * FROM prodotti WHERE cat_prodotto = {$_GET['id']} ");
  conferma($pdtCatgoria);
  while($row = fetch_array($pdtCatgoria)){
    $pdtSingolaCat = <<<STRINGA_PDT
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card altezza">
          <img class="card-img-top" src="../risorse/{$row['immagine']}" alt="">
          <div class="card-body">
            <h4 class="card-title">{$row['nome_prodotto']}</h4>
            <p class="card-text">{$row['descr_prodotto']}</p>
          </div>
          <div class="card-footer">
          <a href="prodotto.php?id={$row['id_prodotto']}" class="btn btn-success btn-small">Acquista</a> <a href="#" class="btn btn-info btn-small">Dettagli</a>
          </div>
        </div>
      </div>
    STRINGA_PDT;

    echo $pdtSingolaCat;
  }
}

function catalogoProdotti(){
  $catalogo = query("SELECT * FROM prodotti");
  conferma($catalogo);
  while($row = fetch_array($catalogo)){
    $catProdotti = <<<STRINGA_CAT
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card altezza">
          <img class="card-img-top" src="../risorse/{$row['immagine']}" alt="">
          <div class="card-body">
            <h4 class="card-title">{$row['nome_prodotto']}</h4>
            <p class="card-text">{$row['descr_prodotto']}</p>
          </div>
          <div class="card-footer">
            <a href="prodotto.php?id={$row['id_prodotto']}" class="btn btn-success btn-small">Acquista</a> <a href="prodotto.php?id={$row['id_prodotto']}" class="btn btn-info btn-small">Dettagli</a>
          </div>
        </div>
      </div>
    STRINGA_CAT;
    echo $catProdotti;
  }
  
}