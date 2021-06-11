<div class="row row-cols-1">

    <div class="col d-none d-lg-block">
        <img class="logo-soundbro mx-auto d-block w-75" src="/images/logo.png" alt="">
    </div>

    <div class="col text-white text-center fs-4 py-3">
        <div class="row row-cols-1">
            <span class="col">Ты | Новый</span>
            <span class="col">Барабаны | Гитара</span>
            <span class="col">Атмосфера | Эмоции</span>
        </div>
    </div>

    <div class="col text-center">
        <span class="text-white fs-5">Записаться на урок</span>
        <form action="" method="post">
            @csrf
            <input class="input-signup form-control text-center mx-auto w-75 bg-white mt-1" type="text" name="name" placeholder="Имя" aria-label="Имя">
            <input class="input-signup form-control text-center mx-auto w-75 bg-white mt-2" type="text" name="phone" placeholder="Телефон" aria-label="Телефон">
            <button class="btn-signup btn btn-outline-warning mt-2" type="button">Записаться</button>
        </form>
    </div>

</div>
