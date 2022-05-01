<footer class="footer mt-3">
    <p>This my PcWeb 7 project built with opensource support from <a href="http://github.com/ylnn">Yalın</a></p>

    <p>
        {{-- <a href="#">Back to top</a> --}}
        <p>Built with Laravel 7.4.26 </p>
       
    </p>
</footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/holder.min.js')}}"></script>
    <script src="{{asset('js/lightslider.min.js')}}"></script>
    <script src="{{asset('css/summernote/summernote-bs4.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/slick.min.js')}}"></script>
    {{--  <script src="{{asset('css/summernote/summernote.css')}}"></script>  --}}
    @stack('footer_js')
    <script >
        Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });

      $(document).ready(function(){
            // $('.tourPhotos').slick({
            //     autoplay: true,
            //     autoplaySpeed: 2000,        
            //     infinite: true,
            //     slidesToShow: 1,
            //     slidesToScroll: 1
            // });

            $("#lightSlider").lightSlider({
                item: 1,
                auto: true,
                loop: true,
                pause: 2000,
            }); 
        });
    </script>
    
</body>
</html>