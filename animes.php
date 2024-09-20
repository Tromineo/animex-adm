<?php require_once('header.php'); ?>
<style>
    .destaque{
        border:solid 1px red;
        border-radius: 8px;
    }
</style>
<section>

    <div class="container-fluid">
        <h3 class="text-white text-center">One piece</h3>
    </div>
    <a href="javascript:history.back()">Voltar</a>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/placeholder.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title ">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>

            <div class="col-9 destaque">
                <div class="container">
                    <div class="row">
                        <h3 class="text-white">Sinopse</h3>
                        <div class="col-12 destaque">
                            <span class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate id saepe, accusamus vel nostrum iste inventore incidunt vero quam hic alias quibusdam veniam consectetur et unde veritatis eius tenetur maxime!</span>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-2">
                            <h4 class="text-white">Episodios</h4>
                        </div>
                        <div class="col-2">
                            <h4 class="text-white">Comentarios</h4>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="d-flex">

                            <div class="card" style="">
                                <img src="assets/img/placeholder.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                            </div>

                            <div class="card" style="">
                                <img src="assets/img/placeholder.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                            </div>

                            <div class="card" style="">
                                <img src="assets/img/placeholder.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                            </div>

                            <div class="card" style="">
                                <img src="assets/img/placeholder.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>

<?php require_once('footer.php'); ?>

