@extends('welcome')

@section('form')
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <form action="kuchbhi" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputname">Product Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputname" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPrice">Price</label>
                <input type="text" class="form-control" name="price" id="exampleInputPrice" placeholder="price">
            </div>
            <div class="form-group">
                <label for="exampleInputfile">Password</label>
                <input type="file" class="form-control" name="image" id="exampleInputfile" placeholder="Choose File">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>
@endsection