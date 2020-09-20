$(document).ready(function(){

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
   });
   
       
    $('.mm').click(function(){

        var id=$(this).data('id');
        
        //var cropid=$(this).data('cropid');
        // var photo=$(this).data('photo');
        var name=$(this).data('name');
        var price=parseInt($(this).data('price'));
        console.log(price);
        var qty=$("#qty").val();
        
        //console.log(id,name,price);
        $('#name').val(name);
        $('#price').val(price);
        //$('#cropid'.val(cropid);
        console.log(qty);
        
        

      

       
        
    })
    $('#total').click(function(){

        //var price=parseInt($(this).data('price'));
         var pp =parseInt($('#price').val());
        //console.log(pp);
        var qty=$("#qty").val();
        var total=pp*qty;
        //console.log( total);
        $('#total').val(total);
    })

    
        
})



                              