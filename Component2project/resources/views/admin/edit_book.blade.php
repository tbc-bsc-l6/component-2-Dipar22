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
    .div_center
    {
        text-align: center;
        margin: auto;
    }
    .title
    {
        color: white;
        padding: 30px;
        font-size: 30px;
        font-weight: bold;
    }
    label
    {
        display: inline-block;
        width: 200px;
    }
    .div_pad
    {
        padding: 15px;

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

          <div class="div_center">
            <h1 class="title">Update Book</h1>
            <form action="{{url('update_book',$data->id)}}" method="Post" enctype="multipart/form-data">
                @csrf

                <div class="div_pad">
                    <label>Book Title</label>
                    <input type="text" name="title" value="{{$data->title}}">
                </div>
                <div class="div_pad">
                    <label>Author Name</label>
                    <input type="text" name="author_name" value="{{$data->author_name}}">
                </div>
                <div class="div_pad">
                    <label>Price</label>
                    <input type="text" name="price" value="{{$data->price}}">
                </div>
                <div class="div_pad">
                    <label>Quantity</label>
                    <input type="text" name="quantity" value="{{$data->quantity}}">
                </div>
                <div class="div_pad">
                    <label>Description</label>
                   <textarea name="description">{{$data->description}}</textarea>
                </div>
                <div class="div_pad">
                    <label>Category</label>
                   <select name="category">
                    <option value="{{$data->category_id}}">{{$data->category->cat_title}}</option>

                    @foreach($category as $category) 
                    <option value="{{$category->id}}">{{$category->cat_title}}</option>
                    @endforeach
                   </select>

                   <div class="div_pad">
                    <label>Current Author Image</label>
                    <img style="width: 80px; height: 60px;border-radius:50%; margin:auto" src="/author/{{$data->author_img}}">
                   </div>
                   <div class="div_pad">
                    <label>Change Author Image</label>
                    <input type="file" name="author_img">
                   </div>

                   <div class="div_pad">
                    <label>Current Book Image</label>
                    <img style="width: 110px; height: 150px; margin:auto" src="/book/{{$data->book_img}}">
                   </div>
                   <div class="div_pad">
                    <label>Change Book Image</label>
                    <input type="file" name="book_img">
                   </div>

                   <div class="div_pad">
                    <input class="btn btn-warning" type="submit" value="Update Book">
                   </div>


                </div>
               
            </form>


          </div>
          </div>
        </div>
      </div>
        
      @include('admin.footer')
  </body>
</html>