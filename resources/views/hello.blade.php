@extends('parent')
@section('content')
<div class="container"> 
  <div class="jumbotron"> 
    <h1>My first jumbo header</h1>
    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente laudantium, incidunt vitae, ducimus dolore facere quidem commodi optio consequuntur enim in quas deserunt reiciendis doloremque vero similique modi nemo maiores.</p>
    <h2>All fruits</h2>
    <ul class="list-group">
      @foreach($fruits as $fruit)
        <li class="list-group-item">{{$fruit}}</li>
      @endforeach
    </ul>
  </div>
</div>
@endsection

@section('title', 'hello dhaka')
