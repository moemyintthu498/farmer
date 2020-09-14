$(document).ready(function(){

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
   });
    getData();
    count();
   function count(){
            var myproduct=localStorage.getItem('product');
            if(myproduct){
              var myproduct_obj=JSON.parse(myproduct);
              if(myproduct_obj!=0){
                var count=myproduct_obj.length;
                
                $("#cartNoti").html(count);
              }else{
                $("#cartNoti").html(0);
              }

            }
            else{
              $("#cartNoti").html(0);

            }

          };
       
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
        count();



        
    })
    function getData(){
        var myproduct=localStorage.getItem('product');
        //console.log(myproduct);

        var  tbody=$('#tbody');
        var cname=$('#cname');
        var subtotal=$('#subtotal');
        var total1=$('#total1');
        
        var result='';
        var aa='';
        var bb='';
        var tt='';
        

        //var footer='';
        if(myproduct!=null){
            product=JSON.parse(myproduct);
            
           var total=0;


            $.each(product,function (i,v) {
                subtotal1=v.price*v.qty;
                total+=subtotal1;
                

                
                result+=`
                        <tr class="text-center">
                                <td class="product-remove" ><a href="#" class="remove" data-id="${i}"><span class="ion-ios-close " ></span></a></td>
                                
                                <td class="image-prod"><img src="${v.photo}" width='100' height='100'></td>
                                
                                <td class="product-name">
                                    <h3>${v.name}</h3>
                                   
                                </td>
                                
                                <td class="price">${v.price}Ks</td>
                                
                                <td>
                                <button class="btn btn-outline-secondary plus_btn" data-id="${i}"> 
                                    <i class="icofont-plus "></i> 
                                </button>
                            
                                <p> ${v.qty}</p>
                            
                                <button class="btn btn-outline-secondary minus_btn" data-id="${i}"> 
                                    <i class="icofont-minus"></i>
                                </button>
                            </td>
                                
                                <td class="total">${subtotal1}Ks</td>
                              </tr>`;


                             aa+= `<p>${v.name}</p>`;
                             bb+= `<p>${subtotal1}Ks</p>`;
                             

                     

                     })
            
                  tt+= `<p>${total}Ks</p>`;
               
               }

               tbody.html(result);

               
               cname.html(aa);
               subtotal.html(bb);
               total1.html(tt);
             
        }
        $('#tbody').on('click','.plus_btn',function() {
                
                var id=$(this).data('id');

                var myproduct=localStorage.getItem('product');
                var product=JSON.parse(myproduct);
                $.each(product,function(i,v){
                    if(i==id){
                        v.qty++;
                    }
                })
                localStorage.setItem('product', JSON.stringify(product));
                getData();
                 count();
                
            })
        $('#tbody').on('click','.minus_btn',function () {
                
                var id=$(this).data('id');

                var myproduct=localStorage.getItem('product');
                var product=JSON.parse(myproduct);
                
                $.each(product,function(i,v){
                    if(i==id ){
                        v.qty--;
                    }
                })
                localStorage.setItem('product', JSON.stringify(product));
                getData();
               count();
            })
         $('#tbody').on('click','.remove',function () {


                let index=$(this).data('id');
                var myproduct=localStorage.getItem('product');
                product=JSON.parse(myproduct);
                //localStorage.removeItem(index,1);
                product.splice(index,1);

                localStorage.setItem('product', JSON.stringify(product));
                getData();
                count();
                
            })

         $('.buy_now').on('click',function(){
        
            var shopString=localStorage.getItem("product");
            if(shopString){
            $.post('/orders',{shop_data:shopString},function(response){
                if(response){
                    alert(response);
                    localStorage.clear();
                    getData();
                    location.href="/";
                }
            })   
            }
        
        
      })
})



                              