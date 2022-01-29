@include('headerIDinclude')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"></script>
      
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <Script src="{{url('js/projectOverview.js')}}" defer></Script>
    
    <style>
        .bx-shadow{
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px; 
        }

    </style>

</head>
<body>
    
    <div class="container mt-5 mb-5">
     <div class="card mb-3 p-4 bx-shadow">
        <input class="projectId" type="text" value="{{$id}}" hidden>
        @csrf
        <h3 class="pb-3 title">Online eBook Maker</h3>
        
        <h6 class="card-title"><b>Description</b></h6>
        <p class="description"></p>
        {{-- <p>One of the best ideas to start experimenting you hands-on computer science projects for students is working on online eBook maker. This online eBook maker will allow users to design and create eBooks free of cost. The system has two modules – admin login and author login. The admin can accept requests from users (authors), check and validate their details, evaluate completed eBooks, and process the request by mailing eBooks to the authors. Users can register in the system using the author login. <br>
            After filling in the necessary details, users can create new books, specify the context of books, add the title, number of pages, add a book cover, etc. Existing users can simply log in using their ID and password, and they can either create new books or resume editing the existing (unfinished) eBooks. Authors can keep only three incomplete eBooks at a time, of which they must complete at least one book before starting a new book.
          </p> --}}

        <h6 class="pb-3"><b>Project Starting Date:</b> <span id="startDate"></span></h6>
        <h6><b>Project Requirements</b></h6>
          <h6 class="projectReq pb-3">
            {{-- <li>Web Server</li>
            <li>lorem Ipsum</li>
            <li>Pdf Books</li> --}}
            </h6>
            

          <h6><b>Skill Requirements</b></h6>
          <ul class="skillRiq">
            {{-- <li>HTML</li>
            <li>CSS</li>
            <li>Javascript</li>
            <li>PHP</li>
            <li>Laravel</li> --}}
          </ul>

          <h6><b> New Skill Requirements</b></h6>
          <ul class="newSkillRiq">
            {{-- <li>HTML</li>
            <li>CSS</li>
            <li>Javascript</li>
            <li>PHP</li>
            <li>Laravel</li> --}}
          </ul>

          <h6><b>Collaborators</b></h6>
          <ul class="colab">
            {{-- <li>Web Developer</li>
            <li>Graphic Designer</li>
            <li>Marketing</li>
            <li>Sales</li> --}}
          </ul>
          <h6 class="pb-3"><b>Probable Finish Date:</b> <span id="proFinishDate"></span></h6>
          <div class="finishDate"></div>
          <h6 class="pb-3"><b>Project Status:</b> <span id="status"></span></h6>
          


     </div>
    </div>
 
    
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>