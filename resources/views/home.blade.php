@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Sortable flow</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="span4">
                                <ol class="simple_with_animation vertical">
                                    <li>Item 1</li>
                                    <li>Item 2</li>
                                    <li>Item 3</li>
                                    <li>Item 4</li>
                                    <li>Item 5</li>
                                    <li>Item 6</li>
                                </ol>
                            </div>
                            <div class="span4">
                                <ol class="simple_with_animation vertical">
                                    <li class="highlight">Item 1</li>
                                    <li class="highlight">Item 2</li>
                                    <li class="highlight">Item 3</li>
                                    <li class="highlight">Item 4</li>
                                    <li class="highlight">Item 5</li>
                                    <li class="highlight">Item 6</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        /*var adjustment;

        $("ol.simple_with_animation").sortable({
           group: 'simple_with_animation',
           pullPlaceholder: false,
           // animation on drop
           onDrop: function($item, container, _super) {
               var $clonedItem = $('<li/>').css({height: 0});
               $item.before($clonedItem);
               $clonedItem.animate({'height': $item.height()});

               $item.animate($clonedItem.position(), function() {
                   $clonedItem.detach();
                   _super($item, container);
               });
           },

           // set $item relative to cursor position
           onDragStart: function($item, container, _super) {
               var offset = $item.offset(),
                   pointer = container.rootGroup.pointer;

               adjustment = {
                   left: pointer.left - offset.left,
                   top: pointer.top - offset.top
               };

               _super($item, container);
           },
           onDrag: function($item, position) {
               $item.css({
                             left: position.left - adjustment.left,
                             top: position.top - adjustment.top
                         });
           }
       });*/
    </script>
@endsection
