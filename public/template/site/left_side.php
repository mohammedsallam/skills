<div class="card col-lg-3 text-center">
    <div class="card-body">
        <h5 class="card-title text-success font-weight-bold">Hello I am Robot</h5>
        <div class="w-100 mb-lg-5">
            <img src="<?= $this->route->baseUrl() . IMAGES_PATH?>robot.png" alt="">
        </div>
        <h6 class="card-subtitle mb-2 text-muted">
            You can write some words here and I'll replay you
        </h6>
        <p class="card-text">
            Words like: <br>(Hello, img, a, ... etc).
        </p>
        <form action="">
            <label for="" class="form-group">
                <input type="text" class="form-control" placeholder="Write words here">
            </label>
        </form>
        <code>Result Here</code>
<!--        <a href="#" class="card-link">Card link</a>-->
<!--        <a href="#" class="card-link">Another link</a>-->
    </div>
</div>