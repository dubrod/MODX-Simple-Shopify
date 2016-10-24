# MODX-Simple-Shopify
KnockoutJS Powered, drop-in package to display your Shopify Products Feed with a Cart

> DEMO: http://shopify-base.clients.modxcloud.com/

## Starting in Shopify

1. Create Normal Trial Account
2. Add Products and Create a "Collection"
3. Click the "+" next to "Sales Channels" - add the channel for "Buy Button"
4. Click "Create extension" for the JavaScript Buy SDK inside the "Buy Button" panel
5. Copy all that Access Info to a safe place

**Static Package Usage**

You could use this package with just static JSON and the Access Token. API Key and Password are only used in the Snippet to get the feed via PHP.

If you go to https://YOURACCOUNTNAME.myshopify.com/products.json you should say the feed.

In the `shopifyJs` chunk you can turn off *Dynamic Product Database Feed* and just use *Static Product Database Feed* and update that chunk manually. There is also a backup variable in the snippet to grab a static chunk.

*Why the hell would I do this?*

To save from hitting the API via PHP in MODX, Faster page loads, if the PHP connection breaks your site breaks. You could also try caching the PHP snippet.

Incase you can't find the API Key check the instructions - https://help.shopify.com/api/guides/api-credentials#generate-javascript-buy-sdk-credentials

## Install the Package

1. After install, go to System Settings, SimpleShopify Area, enter your access details
2. Create a new Template from your site test on. Or not!
3. Add the chunk `simpleshopify_head` to the `head` of the template
4. Add the chunk `simpleshopify_products` where you want the products to be. You can change the layout in here.
5. Add the chunk `simpleshopify_cart` where you want the cart to be.
6. Add the chunk `simpleshopify_js` to the `footer` of the template
7. Make sure you created a chunk called `product-cache` or something similar and you are calling it as your backup in the `simpleshopify_js`

```
[[ShopifyProductsJson? &backup=`product-cache`]]
```

As we learned during the Dyn attacked, Shopify can go down.

You now have a working cart! Congrats.

---

## Using Shopify for the Cart, not just Checkout

If you want to just use MODX for the listing of products and send all *cart functions* to Shopify you can do that pretty easily.

1. Go ahead and remove the HTML for the Cart table
2. Remove the Quantity Input in `simpleshopify_products` chunk
3. You don't need any of the functions in `simpleshopify_js` chunk or the SDK

**js/ko-cart.js**

1. *Assign Cart Array* - Line 28 - 34 - Don't need it.
2. *self.cart.push()* - Don't need it.
3. *self.removeFromCart()* - Don't need it.
4. *self.grandTotal()* - Don't need it.
5. *change self.addToCart()*

```
if(this.variant().length == 0){
    //if no variant value it must have been 1 dropdown and 1 value, set it to the first
    for(var i=0;i<koProducts[0]["products"].length; i++){
        var thisid = koProducts[0]["products"][i]["id"];
        if(this.id()==thisid){
            var variantId = koProducts[0]["products"][i]["variants"][0]["id"];
            //var variantArr = koProducts[0]["products"][i]["variants"][0];
        }
    }
} else {
    var variantId = this.variant().id;
}

if(!variantId){
    alert("We need a Variant!");
    return false;
}

window.open('https://XXXXXX.myshopify.com/cart/add/'+variantId+'','_blank');
```

**And Now on Add To Cart it will send the variant option to your Shopify Cart**
