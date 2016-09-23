<table cellspacing="0" cellpadding="0" class="shopifyx highlight">
    <thead><tr><th>Product</th><th>Price</th><th>Quantity</th><th>Subtotal</th><th></th></tr></thead>
    <tbody data-bind="template:{ name: 'cart-row', foreach: cart}"></tbody>
    <tfoot>
        <tr>
            <td colspan="4"></td>
            <td>
                <strong>TOTAL:</strong>
                $<span data-bind='text: grandTotal()'></span>
            </td>
        </tr>
    </tfoot>
</table>

<div style="padding:10px 0;text-align:right;">
    <button class="btn-gray" onclick="resetCart()">EMPTY CART</button>
    <button class="btn" onclick="goCheckout()">CHECKOUT</button>
</div>
