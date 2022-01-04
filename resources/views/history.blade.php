<x-app-layout>
    <x-slot name="header">
   
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Purchase History and Order History') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <br>
                <h3> <center> Your Purchase History <center> </h3>
            
               <center> See your past purchase history here <center>
                <center>
                    <br>

                    <table>
                    <thead>
                        <tr>
                            <th>Order ID &nbsp;&nbsp; </th>
                            <th> &nbsp;Food Name &nbsp;&nbsp; </th>
                            <th> &nbsp;Caption &nbsp;&nbsp; </th>
                            <th> &nbsp;Location and Date&nbsp;&nbsp; </th>
                            <th> &nbsp;Price&nbsp;&nbsp;  </th>
                             <th> &nbsp;Quantity&nbsp;&nbsp;  </th>
                             <th> &nbsp;Payment Method &nbsp;&nbsp; </th>
                             
                            
                           
                        </tr>
                    </thead>
                </tbody>
                
                 <tr>
                    @foreach ($past_purchases as $past_purchase)
                   <td>{{$past_purchase['orderid']}}</td>
                   <td>{{$past_purchase['food']}}</td>
                    <td>{{$past_purchase['caption']}} </td>
                    <td>{{$past_purchase['location']}}</td>
                    <td>{{$past_purchase['price']}}</td>
                    <td>{{$past_purchase['quantity']}}</td>
                    <td>{{$past_purchase['method']}}</td>
                       <td>  <a href="{{url('dynamic_pdf')}}" class="btn btn-outline-primary">Generate Receipt</a> </td>

                </tr>
                @endforeach

                    

                </center></table>
            </div>
        </div>
    </div>
 <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <br>
               
               <h3> <center> Your Order History</center> </h3>
                <center>See the people who purchased your food!</center>
                <br>
                <center>
                <table>
                    <thead>
                        <tr>
                            <th>Order ID &nbsp;&nbsp; </th>
                            <th> &nbsp;Food Name &nbsp;&nbsp; </th>
                            <th> &nbsp;Caption &nbsp;&nbsp; </th>
                            <th> &nbsp;Location and Date&nbsp;&nbsp; </th>
                            <th> &nbsp;Price&nbsp;&nbsp;  </th>
                             <th> &nbsp;Quantity&nbsp;&nbsp;  </th>
                             <th> &nbsp;Payment Method &nbsp;&nbsp; </th>
                             
                            
                           
                        </tr>
                    </thead>
                </tbody>

                <tr>
                    @foreach ($past_purchases as $past_purchase)
                   <td>{{$past_purchase['orderid']}}</td>
                   <td>{{$past_purchase['food']}}</td>
                    <td>{{$past_purchase['caption']}} </td>
                    <td>{{$past_purchase['location']}}</td>
                    <td>{{$past_purchase['price']}}</td>
                    <td>{{$past_purchase['quantity']}}</td>
                    <td>{{$past_purchase['method']}}</td>
                </tr>
                @endforeach
            </table>
</center>

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
