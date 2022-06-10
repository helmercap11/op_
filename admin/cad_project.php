

    <!--Main container start -->
    <main class="ttr-wrapper">
        <div class="container-fluid">
            <h1 class="mt-4">Ultimas Actualizações</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">
                    <h6>Projectos em curso Ano 2019</h6>
                </li>

            </ol>


            <div class="card mb-4">
                <div class="card-body">

                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome do Projecto</label>
                            <input type="name" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Data Projecto</label>
                            <input type="date" class="form-control" id="exampleInputPassword1">
                        </div>

                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>

                </div>

            </div>
            <!--inicio-->

            <!--fim-->
            <hr>
            <!--inicio-->

            <!--fim-->


            <br><br>




        </div>
    </main>

   
<style>
/***progress****/

.stepper-wrapper {
    margin-top: auto;
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.stepper-item {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    flex: 1;


    @media (max-width: 768px) {
        font-size: 12px;
    }
}

.stepper-item::before {
    position: absolute;
    content: "";
    border-bottom: 2px solid #ccc;
    width: 100%;
    top: 20px;
    left: -50%;
    z-index: 2;
}

.stepper-item::after {
    position: absolute;
    content: "";
    border-bottom: 2px solid #ccc;
    width: 100%;
    top: 20px;
    left: 50%;
    z-index: 2;
}

.stepper-item .step-counter {
    position: relative;
    z-index: 5;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #ccc;
    margin-bottom: 6px;
}

.stepper-item.active {
    font-weight: bold;
}

.stepper-item.completed .step-counter {
    background-color: #f37319;
    color: #ffff;
}

.stepper-item.completed::after {
    position: absolute;
    content: "";
    border-bottom: 2px solid #f37319;
    ;
    width: 100%;
    top: 20px;
    left: 50%;
    z-index: 3;
}

.stepper-item:first-child::before {
    content: none;
}

.stepper-item:last-child::after {
    content: none;
}

/***progress***/
</style>

</html>