<!DOCTYPE html>
<html lang="en">

  <head>
    <base href="/public">

   @include('home.css')

   <style type="text/css">
    
    .logout
    {
        width: 300px;
        height: 30px;

    }

   
    
    </style>
  </head>

<body>

  @include('home.header')
  
  <div class="item-details-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>View Details <em>For Item</em> Here.</h2>
          </div>
        </div>

        @foreach($data as $data)
        
        <div class="col-lg-7">
          <div class="left-image">
          <img src="book/{{$data->book_img}}" alt="" style="border-radius: 20px;height: 350px;width: 600px;margin-bottom: 20px; ">
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <h4>The Greatest Book</h4>
          <span class="author">
          <img src="author/{{$data->author_img}}" alt="" style="max-width: 50px; border-radius: 50%;">
          <h6>{{$data->author_name}}</h6>
          </span>
          <p>{{$data->description}}</p>
          <div class="row">
            <div class="col-3">
              <span class="bid">
                Category<br><strong>{{$data->category->cat_title}}</strong><br>
              </span>
            </div>
            
            <div class="col-5">
              <span class="ends">
                Total Quantity<br><strong>{{$data->quantity}}</strong><br>
              </span>
            </div>
          </div>
         
        </div>
        @endforeach
  </div>
    </div>
      </div>

 

  @include('home.footer')
  


  


  
  </body>
</html>