<div class="product-card">
    <img src="{{ $product->image }}" alt="{{ $product->name }}">
    <div class="product-details">
        <h3 class="product-title">{{ $product->name }}</h3>
        <p class="product-price">${{ $product->price }}</p>
        <p class="product-description">{{ $product->description }}</p>
        <a href="#" class="btn">Buy Now</a>
    </div>
</div>
