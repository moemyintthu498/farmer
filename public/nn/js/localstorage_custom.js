$(document).ready(function(){
    getData();
    $('.mm').click(function(){

        var id=$(this).data('id');
        
        var photo=$(this).data('photo');
        var name=$(this).data('name');
        var price=$(this).data('price');
        
        
        //console.log(id);

         var item={id:id,photo:photo,name:name,price:price,
                 qty:1};
        //console.log(item);
        var oldproduct=localStorage.getItem('product');
        if(oldproduct == null){
            var product= new  Array();
        }else{
            var product=JSON.parse(oldproduct);

        }
        var exit;
        $.each(product,function (i,v) {
            if(id==v.id){
                v.qty++;
                exit=true;
            }
        })
        if(!exit){
            product.push(item);
        }

        localStorage.setItem('product', JSON.stringify(product));
        getData();
        // count();



        
    })
    function getData(){
        var myproduct=localStorage.getItem('product');
        //console.log(myproduct);

        var  tbody=$('#tbody');
        
        var result='';

        //var footer='';
        if(myproduct!=null){
            product=JSON.parse(myproduct);
            
           


            $.each(product,function (i,v) {
                // subtotal1=v.price*v.qty;
                
                // dis=v.price*v.discount/100;
                // subtotol2=subtotal1-dis*v.qty;
                // total+=subtotol2;
                //  if(v.discount!=0){
                //     $('#dd').show();
                // }else{
                //     $("#dd").hide();
                // }
                result+=`
                        <tr class="text-center">
                                <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
                                
                                <td class="image-prod"><img src="${v.photo}" width='100' height='100'></td>
                                
                                <td class="product-name">
                                    <h3>${v.name}</h3>
                                   
                                </td>
                                
                                <td class="price">$${v.price}</td>
                                
                                <td class="quantity">
                                    <div class="input-group mb-3">
                                    <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                                </div>
                              </td>
                                
                                <td class="total">$${v.price}</td>
                              </tr>`

                     })
               }
               tbody.html(result);
             
        }
})



                              