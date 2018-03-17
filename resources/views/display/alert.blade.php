@if(session()->has('status'))

    <div class="alert alert-{{session()->get('status')['type']}}">
         {{session()->get('status')['message']}}
    </div>

@endif