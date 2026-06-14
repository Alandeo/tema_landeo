
    <?php
    get_header();
    ?>
    <main class="container-fluid bg-light" style="height: 80vh;">
        <div class="row h-100">
            <!-- caja celeste -->
            <div class="col-md-8 bg-info h-100 overflow-y-auto overflow-x-hidden">
                <div class="row h-50">

                    <?php for ($i = 1; $i <= 4; $i++) { ?>

                        <div class="col-md-4 h-100 p-3">
                            <div class="card h-100 border-primary">

                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuFGhjSosliNDzB3dKeQM_2Q7AzyiMilNun6vROSsa9Q3_N5J4yWtJk5o&s=10">

                                <div class="card-body bg-light">
                                    <h5 class="card-title text-primary">GOKU <?php echo $i; ?></h5>
                                    <p class="card-text">CONTENIDO.</p>
                                    <a href="#" class="btn btn-dark">Botón</a>
                                </div>

                            </div>
                        </div>

                    <?php } ?>

                </div>
            </div>
            <!-- caja plomo -->
            <aside class="col-md-4 bg-secondary h-100">
                <div class="row h-100">

                    <!-- CAJA VERDE (Top) -->
                    <div class="row">
                        <div class="col-12 p-3">
                            <!-- Usamos style para darle la altura  -->
                            <div class="bg-success rounded shadow" style="height: 250px;"></div>
                        </div>
                    </div>

                    <!-- CAJA AZUL (Bottom) -->
                    <div class="row">
                        <div class="col-12 p-3">
                            <div class="bg-info rounded shadow" style="height: 250px;"></div>
                        </div>
                    </div>

                </div>
            </aside>

        </div>
    </main>

    <?php
   get_footer();
    ?>