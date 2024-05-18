<div class="col-md-3">
    <div class="card">
        <div class="card-body">
            <img src="{{$product->image}}" class="card-img-top"
                alt="Product 1">
            <h5 class="card-title">{{$product->title}}</h5>
            <p class="card-text">{{$product->price}}</p>
            <div class="add">
                <button class="btn btn-info">Add to Cart</button>
                <button class="btn btn-light"><i class="fa-solid fa-heart"
                        style="color: #007bee;"></i></button>
            </div>
        </div>
    </div>
</div>