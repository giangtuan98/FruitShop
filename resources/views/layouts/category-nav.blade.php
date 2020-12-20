<ul class="shuffle-buttons-list">
  <li class="shuffle-button-item"><a href="javascript:void(0);" class="btn btn-transparent active" data-group="all">All
      products</a></li>
  @foreach ($categories as $category)
    <li class="shuffle-button-item"><a href="javascript:void(0);" class="btn btn-transparent"
        data-group="{{ $category->name }}">{{ $category->name }}</a></li>
  @endforeach
</ul>
