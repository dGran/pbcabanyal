@foreach ($posts as $post)

    <article class="panel panel-default post">
        <div class="panel-heading">
            <span class="category">
            @if ($post->category)
                {{ $post->category->name }}
            @else
                sin categoría
            @endif
            </span>
            <div class="clearfix">
                <small class="pull-right">
                    {{-- {{ $post->created_at->format('l d, F Y') }} --}}
                    <span class="date">
                        {{ $post->created_at->diffForHumans() }}
                        @if ($post->author_view)
                            <br>por {{ $post->author->name }}
                        @endif
                    </span>
                </small>
            </div>
            <span class="title">{{ $post->title }}</span>
        </div>
        <div class="panel-body">
            <p>{!! $post->detail !!}</p>
        </div>
        <div class="panel-footer">
            <div class="text-center">
                <div>
                    <small>Comparte esta publicación</small>
                </div>
                <a href="">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
                <a href="">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
                <a href="">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
            </div>

        </div>

    </article>

@endforeach

{{ $posts->links() }}