@extends('layouts.master')



@section("content")

    <!-- Begin page content -->

    <main role="main" class="container main-container" ng-controller="createHeroesController">

        <div class="row">
            <div class="col-md-12">

                <div ng-controller="createTeamsController">
                    <h1>Create your new Team!</h1>

                    @include('display.error')
                    @include('display.alert')

                    <form action="{{route('heroes-team-store')}}" method="POST">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="team-name">Team Name</label>
                            <input type="text" class="form-control" id="team-name" name="name" placeholder="Be Creative!">
                            {{--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                        </div>

                        <div class="form-group">
                            <label for="team-side">Side</label>

                            <select class="form-control  custom-select" name="side"
                                    ng-model="user.select"
                                    ng-options="side.id as side.name for side in sides track by side.id">
                            </select>




                        </div>

                        <div class="form-group">
                            <label for="team-size">Team Size</label>
                            <select class="form-control  custom-select" name="size" id="team-size">


                                @for($i = 3; $i <= 5; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endfor


                            </select>
                        </div>





                        <button type="submit" class="btn btn-primary">Create your Team!</button>
                    </form>


                </div>




            </div>







            </div>
        </div>








    </main>


@endsection


@push('custom-scripts')

    <script src="{{asset('js\angular\controllers\createHeroesController.js')}}"></script>
    <script src="{{asset('js\angular\controllers\createTeamsController.js')}}"></script>

@endpush