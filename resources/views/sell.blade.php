<x-app-layout>
    <x-slot name="header">
   
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sell Your Food') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <h3> &nbsp;&nbsp;  Let's heat the kitchen up! What will you be selling?</h3>

                 <center> <img src="https://i.ibb.co/0M06xxc/What-s-cooking-in-the-kitchen-Let-the-world-know.gif"></a></center>


               
            </div>
        </div>
    </div>
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
  background-color: #fad3be;
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <!-- Font-awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <br>
                <h1> &nbsp;&nbsp; Sell Your Food</h1>
                <div class="col-lg-6">
                <div class="col-lg-50">
            
                <div class="form-group">
                    <form action="/post" method="post" enctype="multipart/form-data">
                        @csrf
                         &nbsp;&nbsp; <input type="text" name="food" class="form-control m-2" placeholder="Food Name">
                       
                         &nbsp;&nbsp; <Textarea name="caption" cols="20" rows="4" class="form-control m-2" placeholder="Describe your food - ingredients and taste!"></Textarea>

                         &nbsp;&nbsp; <Textarea name="location" cols="20" rows="4" class="form-control m-2" placeholder="Tell your selling location, date and time."></Textarea>

                         &nbsp;&nbsp; <input type="text" name="price" class="form-control m-2" placeholder="Price">

                          &nbsp;&nbsp; <input type="text" name="stock" class="form-control m-2" placeholder="How many will you be selling?">


                        
                         <label class="m-2">Cover Image</label>
                         <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">

                           
                         <label class="m-2">Images</label>
                         <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images"[] multiple>
                         <button type="submit" class="btn btn-danger mt-3">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
               <h1> &nbsp;&nbsp;Your Post</h1>


                <table class="table">
                    <thead>
                        <tr>
                            <th>ID &nbsp;&nbsp; </th>
                            <th> &nbsp;Food Name &nbsp;&nbsp; </th>
                            <th> &nbsp;Caption  &nbsp;&nbsp;</th>
                            <th> &nbsp;Location and Date&nbsp;&nbsp;  </th>

                            <th> &nbsp;Price&nbsp;&nbsp;  </th>
                            <th> &nbsp;Stock&nbsp;&nbsp;  </th>
                            <th> &nbsp;User ID&nbsp;&nbsp;  </th>
                            <th> &nbsp;Cover &nbsp;&nbsp; </th>

                            <th> &nbsp;Update &nbsp;&nbsp; </th>
                            <th> &nbsp;Delete &nbsp;&nbsp; </th>
                        </tr>
                    </thead>
                </tbody>


               

                @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td> {{ $post->food}}</td>
                    <td> {{ $post->caption}}</td>
                    <td> {{ $post->location}}</td>
                    <td> {{ $post->price}}</td>
                    <td> {{ $post->stock}}</td>
                    <td> {{ $post->user_id}}</td>

                   <td><img src="cover/{{ $post->cover }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td>
                       <td><a href="/edit/{{ $post->id }}" class="btn btn-outline-primary">Update</a></td>
                       <td>
                           <form action="/delete/{{ $post->id }}" method="post">
                            <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?');" type="submit">Delete</button>
                            @csrf
                            @method('delete')
                        </form>
                       </td>
                </tr>
                @endforeach
               

            </table>
            </div>
        </div>
    </div>

</x-app-layout>
