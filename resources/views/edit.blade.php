<x-app-layout>
    <x-slot name="header">
   
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <h3> &nbsp;&nbsp; Edit your post</h3>



               
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
            
                <div class="col-lg-6">
                <div class="col-lg-50">
                       <div class="row">
            <div class="col-lg-3">
                    <p>Cover:</p>
                    <form action="/deletecover/{{ $posts->id }}" method="post">
                    <button class="btn text-danger">X</button>
                    @csrf
                    @method('delete')
                    </form>
                    <img src="/cover/{{ $posts->cover }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                    <br>




                  
                  

                </div>
            </div>


                <div class="form-group">
                   <form action="/update/{{ $posts->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                         @method("put")
                         &nbsp;&nbsp; <input type="text" name="food" class="form-control m-2" placeholder="Food Name" value="{{$posts->food}}">
                       
                         &nbsp;&nbsp; <Textarea name="caption" cols="20" rows="4" class="form-control m-2" placeholder="Describe your food - ingredients and taste!" >{{$posts->caption}}</Textarea>

                         &nbsp;&nbsp; <Textarea name="location" cols="20" rows="4" class="form-control m-2" placeholder="Tell your selling location, date and time.">{{$posts->location}}</Textarea>

                         &nbsp;&nbsp; <input type="text" name="price" class="form-control m-2" placeholder="Price"value="{{$posts->price}}">
                        
                         <label class="m-2">Cover Image</label>
                         <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">

                           
                         <label class="m-2">Images</label>
                         <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images"[] multiple>
                         <button type="submit" class="btn btn-danger mt-3">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
  






               
               

            </table>
            </div>
        </div>
    </div>

</x-app-layout>
