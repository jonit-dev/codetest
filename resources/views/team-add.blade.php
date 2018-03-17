@extends('layouts.master')



@section("content")

    <!-- Begin page content -->

    <main role="main" class="container main-container" ng-controller="createHeroesController">

        <div class="row">
            <div class="col-md-12">

                <div ng-controller="createTeamsController">
                    <h1>Add your Hero to a Team</h1>

                    @include('display.error')
                    @include('display.alert')

                    <form action="{{route('heroes-team-attach')}}" method="POST">
                        {{csrf_field()}}

                        <br>
                        <p>Hero to be attached: <strong>{{$hero->name}}</strong></p>

                        <br>

                        <input type="hidden" value="{{$hero->id}}" name="hero">


                        <div class="form-group">
                            <label for="team-size">Team Name</label>
                            <select class="form-control  custom-select" name="team" id="team">

                                @foreach($teams as $team)
                                    <option value="{{$team->id}}">{{$team->name}}</option>
                                    @endforeach



                            </select>
                        </div>





                        <button type="submit" class="btn btn-primary">Attach to Selected Team</button>
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