@extends('welcome')

@section('main')
Category

<table>
    <tr>
        <th>id</th>
        <th>name</th>
    </tr>
    @foreach($category as $c)
    <tr>
        <td>{{$c->id}}</td>
        <td>{{$c->category_name}}</td>
        <td><a href="DeleteCategory/{{$c->id}">DELETE<a></td>
        <td><a href="UpdateCategory/{{$c->id}">UPDATE<a></td>
        </tr>
        @endforeach
        
</table>

@endsection

