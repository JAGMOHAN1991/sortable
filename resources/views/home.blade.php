@extends('layouts.flow')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{--<div class="card-header">Sortable flow</div>--}}

                    <div class="card-body">
                        <div class="row flow-container">
                            {{--<div class="span4">
                                <ol class="serialization vertical" id="serialization">
                                    <li data-id="0" data-name="Text" class="handle">
                                        <div>
                                            <i class="ni ni-align-left-2"></i>
                                            <span>Text</span>
                                            <div class="add-element"></div>
                                        </div>
                                    </li>
                                    <li data-id="1" data-name="Image" class="handle">
                                        <div>
                                            <i class="ni ni-image"></i>
                                            <span>Image</span>
                                            <div class="add-element"></div>
                                        </div>
                                    </li>
                                    <li data-id="1" data-name="Gallery" class="handle">
                                        <div>
                                            <i class="ni ni-album-2"></i>
                                            <span>Gallery</span>
                                            <div class="add-element"></div>
                                        </div>
                                    </li>
                                    <li data-id="4" data-name="Button" class="handle">
                                        <div>
                                            <i class="ni ni-ui-04"></i>
                                            <span>Button</span>
                                            <div class="add-element"></div>
                                        </div>
                                    </li>
                                    <li data-id="4" data-name="Login" class="handle">
                                        <div>
                                            <i class="ni ni-circle-08"></i>
                                            <span>Login</span>
                                            <div class="add-element"></div>
                                        </div>
                                    </li>
                                </ol>
                            </div>--}}

                            <div class="span4" data-flow-name="">
                                <ol class="serialization vertical" id="serialization1">
                                    {{--<li data-id="0" data-name="Item 1">
                                        <i class="ni ni-ui-04"></i>
                                        <span>Button</span>
                                    </li>--}}
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                @component('components/elements')@endcomponent
            </div>
        </div>

    </div>
    <script>
		function changeFlowName(element) {
			$(element).parent().find('.element-prop').text($(element).val())
		}

		function askForEntry(element) {
			$(element).parent().find('.element-prop').text($(element).val())
		}

		function startNew() {
            $('#serialization1').html( $('#start-flow').html());

        }

        function loadFlow(flowId) {

        }
    </script>

    <script id="start-flow" type="text/template">
        <li data-id="5" data-name="TextArea" class="handle grid-elements-li">
            <textarea name='textarea' class='flow-textarea' onkeyup='changeFlowName(this);' />
        </li>
    </script>
@endsection
