<form class="form-inline" method="POST" action="addCategoryPost">
  <div class="form-group mx-sm-3 mb-2">
@csrf
    <input type="text" name= "category_name"class="form-control" placeholder="CategoryName">
  </div>
  <button type="submit" class="btn btn-primary mb-2">ADD</button>
</form>