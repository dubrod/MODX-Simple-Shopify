<div class="cards shopifyx" data-bind="foreach: products">
    <figure class="card-3">
        <img data-bind="attr: { src: img, alt: name }">
        <figcaption>
            <strong data-bind="text: name"></strong>
            <p data-bind="text: desc"></p>
            <h2><small>Starting at:</small> $<span data-bind="text: price"></span></h2>
            <label data-bind="text: optname"></label>
            <select data-bind='
                visible: option()[0],
                options: option(),
                optionsCaption: "Select...",
                value: option(),
                selectedOptions: chosenOptions,
                event:{change: $parent.updatePrice}
                '></select>
            <select data-bind='
                visible: option2()[0],
                options: option2(),
                optionsCaption: "Select...",
                value: option2(),
                selectedOptions: chosenOptions2,
                event:{change: $parent.updatePrice2}
                '></select>
            <input type="text" placeholder="1" data-bind='value: quantity, valueUpdate: "afterkeydown"' />
            <button class="btn" data-bind="click: $parent.addToCart">ADD TO CART</button>
        </figcaption>
    </figure>
</div>
