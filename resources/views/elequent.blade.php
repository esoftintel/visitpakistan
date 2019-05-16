@foreach ($categories as $category)
    {!! $category->ct_name !!}
    @foreach($category->subcategory as $subcategory)
        {!! $subcategory->st_name !!}
    @endforeach
@endforeach