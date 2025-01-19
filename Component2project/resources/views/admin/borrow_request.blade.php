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

    .center
    {
        text-align: center;
        margin: auto;
        width: 100%;
        border: 1px solid white;
        margin-top: 60px;
    }

    th
    {
        background-color: plum;
        text-align: center;
        color: white;
        font-size: 20px;
        font-weight: bold;
        padding: 10px;
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

          <table class="center">

          <tr>
            <th>User Name</th>
            <th>Email</th>
            <th>Phone</th>
            
            <th>Quantity</th>
            <th>Change Status</th>
            <th>Borrow Status</th>
            <th>Book title</th>
            
            <th>Book Image</th>
            
          </tr>

          @foreach($data as $data)

          <tr>
            <td>{{$data->user->name}}</td>
            <td>{{$data->user->email}}</td>
            <td>{{$data->user->phone}}</td>
            
            <td>{{$data->book->quantity}}</td>
            <td>
                <a class="btn btn-info" href="{{url('approve_book',$data->id)}}">Approved</a>
                <a class="btn btn-danger" href="{{url('reject_book',$data->id)}}">Rejected</a>
                <a class="btn btn-warning" href="{{url('return_book',$data->id)}}">Returned</a>
            </td>
            <td>
                @if($data->status == 'approved')
                <span style="color: skyblue;">{{$data->status}}</span>
                @endif

                @if($data->status == 'rejected')
                <span style="color: red;">{{$data->status}}</span>
                @endif

                @if($data->status == 'returned')
                <span style="color: yellow;">{{$data->status}}</span>
                @endif
                @if($data->status == 'Applied')
                <span style="color: white;">{{$data->status}}</span>
                @endif
            </td>
            <td>{{$data->book->title}}</td>
           


            <td>
                <img style="height: 130px; width:80px;" src="book/{{$data->book->book_img}}">
            </td>
            


          </tr>
          @endforeach


          </table>

          </div>
        </div>
      </div>

        
      @include('admin.footer')
  </body>
</html>