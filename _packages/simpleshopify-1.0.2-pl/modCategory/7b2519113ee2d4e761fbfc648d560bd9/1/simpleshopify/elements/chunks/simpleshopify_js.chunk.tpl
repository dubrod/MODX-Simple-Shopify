<script>
[[-//Static Product Database Feed
//var koProducts = [ [[-$static_json_example]] ]; ]]
[[-Dynamic Product Database Feed]]
var koProducts = [ [[ShopifyProductsJson]] ];
</script>
<script type="text/html" id="cart-row">
    <tr>
        <td data-label="Product" data-bind="text: name"></td>
        <td data-label="Price">$<span data-bind="text: price"></span></td>
        <td data-label="Quantity" data-bind="text: quantity">1</td>
        <td data-label="Subtotal">$<span data-bind="text: subtotal"></span></td>
        <td><button class="btn-secondary-small" data-bind="click: $parent.removeFromCart">REMOVE</button></td>
    </tr>
</script>

<script src="http://sdks.shopifycdn.com/js-buy-sdk/latest/shopify-buy.polyfilled.globals.min.js"></script>
<script>

function resetCart(){
    localStorage.removeItem('cartStorage');
    var cartId = localStorage.getItem('lastCartId');
    localStorage.removeItem('lastCartId');
    localStorage.removeItem('checkoutUrl');
    localStorage.removeItem('carts.'+cartId);
    document.location.reload(true);
}

function goCheckout(){
    var cUrl = localStorage.getItem('checkoutUrl');
    window.open(cUrl,'_blank');
}

[[-https://github.com/Shopify/js-buy-sdk/blob/master/examples/cart/index.js]]

function addToShopifyCart(pid,variant_array,quantity){

    var client = ShopifyBuy.buildClient({
      apiKey: '[[++simpleshopify.shopify_token]]',
      domain: '[[++simpleshopify.shopify_domain]]',
      appId: '6'
    });

    var cart;
    var checkoutString = "";
    var checkoutUrl;

    if(localStorage.getItem('lastCartId')) {
        client.fetchCart(localStorage.getItem('lastCartId')).then(function(remoteCart) {
          cart = remoteCart;
        });
    } else {
        client.createCart().then(function (newCart) {
          cart = newCart;
          localStorage.setItem('lastCartId', cart.id);
        });
    }
    /* done building Client */

    /* Add Product */
    client.fetchProduct(pid).then(function () {
	    cart.addVariants({variant: variant_array, quantity: quantity}).then(function (cart) {
            localStorage.setItem('checkoutUrl', cart.checkoutUrl);
    	}).catch(function (errors) {
            console.log('Fail');
            console.error(errors);
        });
    });

}

function removeFromShopifyCart(variant){
    var cartId = localStorage.getItem('lastCartId');
    var cartObj = JSON.parse(localStorage.getItem('carts.'+cartId));

    cartObj["cart"]["line_items"].filter(function (item,index) {
        if(item.variant_id === variant.id){
            cartObj["cart"]["line_items"].splice(index,1);
            localStorage.setItem('carts.'+cartId, JSON.stringify(cartObj));
        }
    });

    [[-refresh checkoutUrl]]
    var client = ShopifyBuy.buildClient({
      apiKey: '[[++simpleshopify.shopify_token]]',
      domain: '[[++simpleshopify.shopify_domain]]',
      appId: '6'
    });
    client.fetchCart(localStorage.getItem('lastCartId')).then(function(remoteCart) {
        cart = remoteCart;
        localStorage.setItem('checkoutUrl', cart.checkoutUrl);
    });

}
</script>

<script type="text/javascript" src="assets/components/simpleshopify/js/knockout-3.4.0.js"></script>
<script type="text/javascript" src="assets/components/simpleshopify/js/ko-cart.js"></script>
