<form class="form-inline" method="POST" action="productPost">
@csrf
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" name= "ProductName"class="form-control" placeholder="ProductName">
  </div>
  <br><br>
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" name= "ProductPrice"class="form-control" placeholder="ProductPrice">
  </div>
  <br><br>
  <div class="form-group mx-sm-3 mb-2">
  <input type="text" name= "ProductDescription"class="form-control" placeholder="ProductDescription">
<br><br>
<input type="file" name="image">
</div>
<br><br>
  <select name="categoryId">
    @foreach($product as $p)
    <option value="{{$p->id}}">{{$p->category_name}}</option>
@endforeach
  </select>
  <button type="submit" class="btn btn-primary mb-2">ADD</button>
</form>
