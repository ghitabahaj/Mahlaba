

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<div style="width: 30%; margin:auto; background-color:aliceblue " class="rounded">
 <form action="{{url('UpdateItem',$item->id) }}" method="POST" class="m-4" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="name" value={{$item->name}}>
    </div>
    <div class="form-group">
      <label>Description</label>
      <input type="text" class="form-control" name="description" value={{$item->description}}>
    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="text" class="form-control" name="price" value={{$item->price}}>
      </div>
      <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-control" name="image">
      </div>
      <button type="submit" class="btn btn-primary mt-3">Update</button>

  </form>
</div>
