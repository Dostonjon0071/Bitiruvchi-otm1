
<h1> you can Edit Talaba here </h1>
<div class="container">
    <form method="post" action="{{url('edit-talaba/.$talaba->id) }}">
    {{ csrf_field()}}

    <div class="form-group">
        <label for="exampleFormControlInput1">Title</label>
        <input type="text" name="title" class="form-control" placeholder="Title">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Price</label>
            <input type="number" name="price"  class="form-control" placeholder="Price">
            </div>

            <select name="category_id" class="form-control" id="exampleFormControlSelect">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>

            <button class="btn btn-primary mt-3">Submit</button>

    </form>
</div>


</div>