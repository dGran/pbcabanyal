<div class="row">
	@foreach ($banners as $banner)
	    <div class="col-sm-4">
	        <div class="banner-penya" style="background: {{ $banner->color }}">
	            <div class="title">
	                {{ $banner->title }}
	            </div>
	            <div class="detail">
	                {{ $banner->detail }}
	            </div>
	        </div>
	    </div>
	@endforeach
</div>