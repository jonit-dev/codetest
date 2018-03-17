@extends('layouts.master')



@section("content")

    <!-- Begin page content -->

    <main role="main" class="container main-container" ng-controller="createHeroesController">

        <div class="row">
            <div class="col-md-12">

                <h1>Create your new Hero!</h1>

                @include('display.error')
                @include('display.alert')

                <form action="{{route('heroes-store')}}" method="POST">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="hero-name">Hero Name</label>
                        <input type="text" class="form-control" id="hero-name" name="name" placeholder="Be Creative!">
                        {{--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                    </div>

                    <div class="form-group">
                        <label for="hero-name">Side</label>

                        <select class="form-control  custom-select" name="side"
                                ng-model="user.select"
                                ng-options="side.id as side.name for side in sides track by side.id">
                        </select>




                    </div>





                    <button type="submit" class="btn btn-primary">Create your Hero!</button>
                </form>



            </div>
        </div>








    </main>


@endsection


@push('custom-scripts')

    <script src="{{asset('js\angular\controllers\createHeroesController.js')}}"></script>

@endpush