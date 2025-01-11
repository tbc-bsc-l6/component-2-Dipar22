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
    </style>
  </head>
  <body>
    
    @include('admin.header')
    <div class="d-flex align-items-stretch">
    
   

    @include('admin.sidebar')
      @include('admin.body')
        
      @include('admin.footer')
  </body>
</html>