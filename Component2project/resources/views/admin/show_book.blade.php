<!DOCTYPE html>
<html>
  <head> 
  @include('admin.css')

  <style type="text/css">
    
    .logout
    {
        width: 300px;
        height: 30px;

    }
    .table_center
    {
        text-align: center;
        margin: auto;
        border: 1px solid yellowgreen;
        margin-top: 50px;
    }
    th
    {
        background-color: skyblue;
        padding: 10px;
        font-size: 20px;
        font-weight:bold;
        color: black;

        

    }
    /* tr
    {
      border: 1px solid white;
      padding: 10px;
    } */
    .img_author
    {
        width: 80px;
        height: 60px;
        border-radius: 50%;
    }
    .img_book
    {
        width:110px;
        height: 150px;
    }
    tr
    {
        padding: 5px;
    }
    
    


    </style>
  </head>
  <body>
    
    @include('admin.header')
    <div class="d-flex align-items-stretch">
    
   

    @include('admin.sidebar')
      <!-- @include('admin.body') -->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
          @if(session()->has('message'))
                    <div class="alert alert-success">
                   

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                    </div>
                    
                    @endif

          <div>
            <table class="table_center">
                <tr>
                    <th>Book Title</th>
                    <th>Author Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Delete</th>
                    <th>Update</th>
                    <th>Author Image</th>
                    <th>Book Image</th>
                    

                </tr>

                @foreach($book as $book)
                <tr>
                    
                    <td>{{$book->title}}</td>
                    <td>{{$book->author_name}}</td>
                    <td>{{$book->price}}</td>
                    <td>{{$book->quantity}}</td>
                    <td>{{$book->description}}</td>
                    <td>{{$book->category->cat_title}}</td>
                    <td >
                    <a class="btn btn-danger" href="{{url('b_delete',$book->id)}}">Delete</a>
                    
                    </td>
                    <td>
                    <a class="btn btn-info" href="{{url('edit_book',$book->id)}}">Update</a>
                    </td>
                    
                    <td>
                        <img class="img_author" src="author/{{$book->author_img}}">
                    </td>

                    <td>
                        
                    <img class="img_book" src="book/{{$book->book_img}}">
                       
                    </td>
                   

                    
                    
                    


                </tr>
                @endforeach
                


            </table>


          </div>

          </div>
        </div>
      </div>
        
      @include('admin.footer')
  </body>
</html>