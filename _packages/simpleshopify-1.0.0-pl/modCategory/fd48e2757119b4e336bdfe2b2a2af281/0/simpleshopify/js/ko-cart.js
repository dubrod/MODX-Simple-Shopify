
function cartModel() {
    var self = this;

    //assign products array to observable data
    var products_obsrv = [];
    for(var i=0;i<koProducts[0]["products"].length; i++){
        var prow = [];
        var prow = {
            id:    ko.observable(koProducts[0]["products"][i].id),
            variant: ko.observableArray(),
            name:  ko.observable(koProducts[0]["products"][i].title),
            price: ko.observable(koProducts[0]["products"][i].variants[0]["price"]),
            desc:  ko.observable(koProducts[0]["products"][i].body_html),
            img:   ko.observable(koProducts[0]["products"][i].images[0]["src"]),
            quantity: ko.observable("1"),
            optname: ko.observable(koProducts[0]["products"][i].options[0]["name"]),
            option: ko.observableArray(koProducts[0]["products"][i].options[0]["values"]),
            option2: ko.observableArray(),
            chosenOptions: ko.observable(),
            chosenOptions2: ko.observable()
        };
        products_obsrv.push(prow);
    }
    self.products = ko.observableArray(products_obsrv);

    //assign cart array
    var ls = localStorage.getItem('cartStorage');
    if(ls){
        var koCart = JSON.parse(localStorage.getItem('cartStorage'));
    } else {
        var koCart = [];
    }
    self.cart = ko.observableArray(koCart);

    //add to cart
    self.addToCart = function(){
        if(this.chosenOptions()){
            var formattedName = ""+this.name()+" - "+this.chosenOptions()+"";
            if(this.chosenOptions2()){
                formattedName += " - "+this.chosenOptions2()+"";
            }    
        } else {
            var formattedName = this.name();
        }
        
        if(this.variant().length == 0){
            //if no variant value it must have been 1 dropdown and 1 value, set it to the first
            for(var i=0;i<koProducts[0]["products"].length; i++){
                var thisid = koProducts[0]["products"][i]["id"];
                if(this.id()==thisid){
                    //var variantId = koProducts[0]["products"][i]["variants"][0]["id"];
                    var variantArr = koProducts[0]["products"][i]["variants"][0];
                }
            }
        } else {
            var variantArr = this.variant();
        }
        
        //Frontend Knockout Cart
        self.cart.push(
            {
                id:this.id(),
                variant:variantArr,
                name: formattedName,
                price: this.price(),
                quantity:this.quantity(),
                subtotal:((parseInt(this.price()))*(parseInt(this.quantity())))
            }
        )
        localStorage.setItem('cartStorage',JSON.stringify(self.cart()));
        
        //Shopify Cart Object
        addToShopifyCart(this.id(),variantArr,this.quantity());
        
    }

    //remove from cart
    self.removeFromCart = function(){
        //remove from Shopify Cart Object
        removeFromShopifyCart(this.variant);
        
        self.cart.remove(this);
        localStorage.setItem('cartStorage',JSON.stringify(self.cart()));
    }

    self.updatePrice = function(){
        //console.log(this.id()); 
        var sel_id = this.id();
        var sel_opt = this.chosenOptions()[0];
        //console.log(sel_opt); 
        
        for(var i=0;i<koProducts[0]["products"].length; i++){
            var thisid = koProducts[0]["products"][i]["id"];
            if(sel_id==thisid){
                var variants = koProducts[0]["products"][i]["variants"];
                //update variant array for when we checkout - this is still level 1 dropdown
                this.variant(koProducts[0]["products"][i]["variants"][0]);
                //console.log(variants);   
                //reset the base image
                this.img(koProducts[0]["products"][i].images[0]["src"]);
            }
        }    
        
        if(!variants[0]["option2"]){
            // we have no other options
            //find the matching option and update price
            //console.log("no option 2");
            for(var i=0;i<variants.length; i++){
                var thisoption = variants[i]["option1"];
                if(sel_opt==thisoption){
                    this.price(variants[i]["price"]);
                    //update variant array for when we checkout
                    this.variant(variants[i]);
                    return false;
                }
            }    
        }
        
        //otherwise we have a 2nd option
        //console.log("Option 2");
        var opt2 = [];
        
        for(var i=0;i<variants.length; i++){
            var thisoption = variants[i]["option1"];
            if(sel_opt==thisoption){
                //update 2nd dropdown
                opt2.push(variants[i]["option2"]);
            }
        }
        this.option2(opt2);
        
    }
    
    self.updatePrice2 = function(){
        //update the price from the second option selected
        //console.log(this.id()); 
        var sel_id = this.id();
        var sel_opt = this.chosenOptions()[0];
        //console.log(sel_opt);
        var sel_opt2 = this.chosenOptions2()[0];
        //console.log(sel_opt2); 
        
        //in the ID array get the variants
        for(var i=0;i<koProducts[0]["products"].length; i++){
            var thisid = koProducts[0]["products"][i]["id"];
            if(sel_id==thisid){
                var variants = koProducts[0]["products"][i]["variants"];
                var og_img = koProducts[0]["products"][i].images[0]["src"];
                //console.log(variants);   
            }
        } 
        
        //in the variants find the price
        for(var i=0;i<variants.length; i++){
            var thisoption1 = variants[i]["option1"];
            var thisoption2 = variants[i]["option2"];
            if(sel_opt==thisoption1 && sel_opt2==thisoption2){
                //update variant array for when we checkout
                this.variant(variants[i]);
                
                this.price(variants[i]["price"]);
                if(variants[i]["featured_image"]){
                    this.img(variants[i]["featured_image"].src);
                } else {
                    this.img(og_img);
                }
                return false;
            }
        }
    
    }


    //make grandtotal
    self.grandTotal = function() {
        var total = 0;
        for(var i=0; i<self.cart().length; i++) {
    		total += parseInt(self.cart()[i]["price"]*self.cart()[i]["quantity"]);
    	}
        return total;
    };

}


ko.applyBindings(new cartModel());
