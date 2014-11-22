setTimeout(
    function(){
        $('.oferta').(function(){
            setTimeInterval(function(){
                var currentPrice=calculatePrice(this);
            }.bind(this),$(this).data('interval'))
        })
    },300
);
function calculatePrice(object){
    var price=$(object).data('price');
    var interval=new Date($(object).data('interval'));
    var discount=$(object).data('discount');
    var diferencia=calculaDiferencia(object);
    var format= interval.getHours()!=0? 'hours':'minutes';
    if(format=='hours'){
        var num_int=diferencia.getHours()/interval.getHours();
        var currentPrice=price-(discount*num_int);
    }
    else{
        var num_int=diferencia.getMinutes()/interval.getMinutes();
        var currentPrice=price-(discount*num_int);
    }
    return currentPrice;
}