@extends('layouts.master')



@section("content")

    <!-- Begin page content -->
    <main role="main" class="container" ng-controller="landingController">




        <div class="row">

            <div class="col-md-12">
                <div class="jumbotron main-jumbo">
                    <h1 class="mt-5">Hello @{{ name }}, create your hero to begin!</h1>
                    <p class="lead">=)</p>

                    <a href="{{route('heroes-create')}}" class="btn btn-primary">Join Hero Team</a>
                    <a href="{{route('heroes-team-create')}}" class="btn btn-dark">Create a Hero Team</a>
                </div>
            </div>


        </div>


        <div class="row">
            <div class="col-md-12">
                <h2>Hero Team</h2>
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Side</th>
                        <th scope="col">HitPoints</th>
                        <th scope="col">Attack</th>
                        <th scope="col">Special Ability</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($heroes as $hero)
                        <tr>
                            <th scope="row">{{$hero->id}}</th>
                            <td>{{$hero->name}}</td>
                            <td>{{$hero->side}}</td>
                            <td>{{$hero->hitpoints}}</td>
                            <td>{{$hero->attack}}</td>
                            <td>{{$hero->special_ability}}</td>
                        </tr>

                        @endforeach



                    </tbody>
                </table>

            </div>
        </div>


    </main>


@endsection


@push('custom-scripts')

    <script src="{{asset('js\angular\controllers\landingController.js')}}"></script>

@endpush