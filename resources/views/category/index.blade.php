<h1>Categories List</h1>
<ul style="direction: rtl">
    @foreach($categories as $category)
        <li>{{ $category->Category_Name}}</li>
    @endforeach
</ul>
