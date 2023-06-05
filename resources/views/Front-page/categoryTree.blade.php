@foreach($children as $subcategory)
    <ul class="list-links">
        @if(count($subcategory->$children))
            <li style="color: #1d2124;font-family: 'Arial Black'">
                {{$subcategory->title}}
            </li>
            <ul class="list-links">
                @include('Front-page.categoryTree',['children'=>$subcategory->$children])
            </ul>
            <hr>
        @else
            <li>
                <a href="{{route('categoryServices',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a>
            </li>
    </ul>
@endforeach
