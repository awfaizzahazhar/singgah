<x-app-layout>
    <x-slot name="header">
   
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Payment') }}
        </h2>
    </x-slot>
<style>
    table{
      font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
    }
    td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #ebefff;
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <!-- Font-awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <br>
                <h1>  &nbsp; Complete Payment   </h1>
                <h3> &nbsp; &nbsp;Order will only be confirmed once you have made your payment.
                </h3>
                <img src="https://i.ibb.co/RSq9JJw/Untitled-design-1.gif"></a>


                <table class="table">
                	<tr>
                	<th>  Food </th>
                </tr>
                	<td>{{$data['food']}}</td>
                	<tr>
                	<th> Caption </th>
                </tr>
                	<td>{{$data['caption']}}</td>
                	<tr>
                	<th> Location and Time </th>
                </tr>
                	<td>{{$data['location']}}</td>
                	<tr>
                	<th> Price</th>
                </tr>
                	<td>{{$data['price']}}</td>
                	<tr>
                	<th>Stock Left </th>
                </tr>
                	<td>{{$data['stock']}}</td>
                	<!-- <tr>
                	<th> Image </th>
                </tr>
                	<td><img src="cover/{{ $data->cover }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td> -->
                	
                	<tr>
                	<th> How many will you be buying? </th>
                    </tr>
                	<td><label for="quantity"></label>
  					<input type="number" id="quantity" name="quantity" min="1" max="{{$data['stock']}}">&nbsp;</td>
                    <tr>
                    <th> Total: RM 
                    <span class="amount-total"></span></th>

                  

                    </tr>
                </table>

               <b>Choose your payment method</b>
                <br>
                <br>

                <input type="radio" name="result" value="maybank2u" checked> Online Banking   

                <img src="https://www.nicepng.com/png/detail/123-1232443_click-vector-digital-online-banking-transparent.png" style="max-height:100px; max-width:100px" >
                <br>
                <br>

                 <input type="radio" name="result" value="credit"> Credit Card

                  <img src="https://thumbs.dreamstime.com/b/delhi-india-february-popular-credit-card-companies-logos-including-mastercard-visa-american-express-more-211749084.jpg" style="max-height:200px; max-width:200px" >

                 <br>

                




                    &nbsp;&nbsp;
                    <a href="/complete" class="btn btn-outline-primary">Complete Payment</a>

                    </div>  





  				





<!-- quantity*{{$data['price']}} -->

                	


             


                	





 <!--  <img src={{$data['cover']}}> -->



                	







            </div>
        </div>
    </div>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                 <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <!-- Font-awesome -->
    
                  
              
                        </form>
                       </td>
                </tr>
            
            </div>
        </div>
    </div>

</x-app-layout>



<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>


<script type="text/javascript">



$(document).ready(function(argument) {

// 	if (person == null || person == "") {
//   text = "User cancelled the prompt.";
// } else {
//   text = "Hello " + person + "! How are you today?";
// }



    var price = parseFloat("{{$data['price']}}");
    var stock = parseInt("{{$data['stock']}}");



    $('#quantity').keyup(function(){
        quantity = parseInt($(this).val());

        $('.amount-total').html(quantity*price);
       
    });
    $('#quantity').change(function(){
        quantity = parseInt($(this).val());
        $('.amount-total').html(quantity*price);
    })

    
     // $('.quantity-max').html(
     //    	if(quantity>stock)
     //    	{
     //    		window.alert("sometext");
     //    	};
        






})    
</script>
