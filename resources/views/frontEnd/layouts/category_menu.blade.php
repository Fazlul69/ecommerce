<div class="left-sidebar">
    <?php
        $categories=DB::table('categories')->where([['status',1],['parent_id',0]])->get();
    ?>
    <h2>Category</h2>
    <div class="lefttab">
        <ul class="my-nav">
        @foreach($categories as $category)
            <?php
                $sub_categories=DB::table('categories')->select('id','name')->where([['parent_id',$category->id],['status',1]])->get();
            ?>
            <li class="category">
                <details class="dropdown ">
                    <summary class="on_off">
                        <span class="categoryname">{{$category->name}}</span>     
                        <button class=" eMzhjY toggleButton"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="16px"><path d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z" fill="currentColor" stroke="currentColor"></path></svg></button>
                    </summary>
                    @if(count($sub_categories)>0)
                    <ul class="subcategory faq-row-handle" style="opacity: 1; height: auto;"">
                        @foreach($sub_categories as $sub_category)
                        <li  href="#fruits" class="our-clients__categories--category js--company-toggle">
                            <a href="{{route('cats',$sub_category->id)}}">{{$sub_category->name}} </a>
                        </li>
                        @endforeach
                    </ul> 
                    @endif 
                </details>     
            </li>
        @endforeach
        </ul>
    </div>
</div>

