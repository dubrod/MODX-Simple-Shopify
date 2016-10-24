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

In the `shopifyJs` chunk you can turn off *Dynamic Product Database Feed* and just use *Static Product Database Feed* and update that chunk manually.

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

You now have a working cart! Congrats.
