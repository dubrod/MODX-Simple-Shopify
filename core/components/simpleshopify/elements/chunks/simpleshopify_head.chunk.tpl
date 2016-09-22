<style>
.shopifyx .btn {
  background-image: linear-gradient(to bottom, rgba(223,239,242,0.2) 0%, rgba(223,239,242,0) 70%);
  transition-duration: .3s;
  transition-timing-function: ease;
  transition-property: background-color;
  text-decoration: none;
  cursor: pointer;
  border: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  line-height: 2rem;
  height: auto;
  min-height: 2rem;
  padding: .5rem 1rem;
  color: #fff;
  background-color: #00B7D1
}

.shopifyx .btn:hover {
  color: #fff;
  background-color: #008a9e
}

.shopifyx .btn-secondary-small {
  background-image: linear-gradient(to bottom, rgba(223,239,242,0.2) 0%, rgba(223,239,242,0) 70%);
  transition-duration: .3s;
  transition-timing-function: ease;
  transition-property: background-color;
  text-decoration: none;
  cursor: pointer;
  border: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  line-height: 2rem;
  height: auto;
  min-height: 2rem;
  padding: .5rem 1rem;
  padding: 0 1rem !important;
  color: #fff;
  background-color: #FF337A
}

.shopifyx .btn-secondary-small:hover {
  color: #fff;
  background-color: #ff0059
}

.shopifyx h2{color:#00B7D1;}

.shopifyx tfoot td:last-of-type{
    background:#efefef;
    text-align:center;
    padding:1rem 0;
    font-size:1.25rem;
}

.shopifyx figcaption input[type="text"]{height:3rem;width:2.8rem;}

.shopifyx figcaption label{display:block;padding:.25rem;}
.shopifyx figcaption select{width:100%;height:3rem;margin-bottom:.5rem;}

.cards.shopifyx .card,.cards.shopifyx .card-2,.cards.shopifyx .card-3,.cards.shopifyx .card-4 {
  background-color: #fcfcfc;
  border-radius: .5rem;
  display: flex;
  flex-flow: column nowrap;
}
.cards.shopifyx figcaption select{background-color:#FFF;}

.cards {display: flex;flex-flow: row wrap;justify-content: space-between;padding: 1rem 0 0 0}
.cards .card {flex-basis: 100%;max-width: 100%;margin-bottom: 1rem}
.cards .card-2 {flex: 0 0 calc(50.5% - 1rem);margin-bottom: 1rem}
.cards .card-3 {flex: 0 0 calc(33.8% - 1rem);margin-bottom: 1rem}
.cards .card-4 {flex: 0 0 calc(25.25% - 1rem);margin-bottom: 1rem}
.cards .card img,.cards .card-2 img,.cards .card-3 img,.cards .card-4 img {padding: 1rem}
.cards .card figcaption,.cards .card-2 figcaption,.cards .card-3 figcaption,.cards .card-4 figcaption {padding: 1rem;}
.cards .card figcaption strong,.cards .card-2 figcaption strong,.cards .card-3 figcaption strong,.cards .card-4 figcaption strong {
  display: block;font-size: 1.25rem;line-height: 1.5rem
}

@media only screen and (max-width: 768px) {
  .cards .card,.cards .card-2,.cards .card-3,.cards .card-4 {
    flex-basis: 100%;
    max-width: 100%
  }
}

@media only screen and (max-width: 960px){
    .shopifyx tfoot{display:block;}
    .shopifyx tfoot td{padding-left:0 !important;}
}
</style>
