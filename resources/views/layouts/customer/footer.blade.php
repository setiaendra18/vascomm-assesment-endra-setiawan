 <!-- Footer-->
 <footer class="py-2 bg-dark fixed-bottom ">
     <div class="container">
         <p class="m-0 text-center text-white">Copyright &copy; Jualin 2022</p>
     </div>
 </footer>
 <!-- Bootstrap core JS-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
 
 <!-- Core theme JS-->
 <script src="{{ url('assets/customer/js/scripts.js') }}"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script language="JavaScript">
     Webcam.set({
         width: 200,
         height: 90,
         image_format: 'jpeg',
         jpeg_quality: 90
     });

     Webcam.attach('#my_camera');

     function take_snapshot() {
         Webcam.snap(function(data_uri) {
             $(".image-tag").val(data_uri);
             document.getElementById('results').innerHTML = '<img src="' + data_uri + '"/>';
         });
     }

 </script>
