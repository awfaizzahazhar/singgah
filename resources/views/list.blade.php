<x-app-layout>
    <x-slot name="header">
   
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <br>
                <h1> &nbsp;&nbsp;   Browse through all delicious food! Singgah today!</h1>
                <center> <img src="https://i.ibb.co/RzV0xMX/Untitled-design.gif"></a></center>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                 <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <!-- Font-awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
               <h1> &nbsp;&nbsp;People's Post</h1>


                <table class="table">
                    <thead>
                        <tr>
                            <th>ID &nbsp;&nbsp; </th>
                            <th> &nbsp;Food Name &nbsp;&nbsp; </th>
                            <th> &nbsp;Caption  &nbsp;&nbsp;</th>
                            <th> &nbsp;Location and Date&nbsp;&nbsp;  </th>
                            <th> &nbsp;Price&nbsp;&nbsp;  </th>
                             <th> &nbsp;Stock&nbsp;&nbsp;  </th>
                            <th> &nbsp;Image &nbsp;&nbsp; </th>
                            <th> &nbsp; &nbsp;&nbsp; </th>
                           
                        </tr>
                    </thead>
                </tbody>






               
                
                 @foreach($posts as $post)
                 <tr>
                   <td>{{$post['user_id']}}</td>
                   <td>{{$post['food']}}</td>
                    <td> {{$post['caption']}}</td>
                    <td>{{$post['location']}}</td>
                    <td>{{$post['price']}}</td>
                     <td>{{$post['stock']}}</td>
                     <td><img src="cover/{{ $post->cover }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td>


                     <td><a href="/purchase/{{ $post->id }}" class="btn btn-outline-primary">Purchase</a></td>
                 @endforeach 
             </tr>
                  
              
                        </form>
                       </td>
                </tr>
            
            </div>
        </div>
    </div>

</x-app-layout>
