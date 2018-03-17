

{{-- *** SCRIPTS *** --}}

{{--BOOTSTRAP--}}
<script src="{{asset('build\jquery\dist\jquery.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{asset('build\bootstrap\dist\js\bootstrap.min.js')}}"></script>

{{--ANGULAR--}}
<script src="{{asset('build\angular\angular.min.js')}}"></script>
<script src="{{asset('js\angular\app.js')}}"></script>

@stack("custom-scripts")



<footer class="footer">
    <div class="container">

    </div>
</footer>
