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
                <div id="grid" class="row float-left">
                    <div id="gridDemo" class="col grid-elements">
                        <li data-id="0" data-name="Text" class="handle grid-elements-li">
                            <div class="grid-square">
                                <i class="ni ni-align-left-2"></i>
                                <span>Text</span>
                            </div>
                        </li>
                        <li data-id="1" data-name="Image" class="handle grid-elements-li">
                            <div class="grid-square">
                                <i class="ni ni-image"></i>
                                <span>Image</span>
                            </div>
                        </li>
                        <li data-id="1" data-name="Gallery" class="handle grid-elements-li">
                            <div class="grid-square">
                                <i class="ni ni-album-2"></i>
                                <span>Gallery</span>
                            </div>
                        </li>
                        <li data-id="4" data-name="Button" class="handle grid-elements-li">
                            <div class="grid-square">
                                <i class="ni ni-ui-04"></i>
                                <span class="element-prop">Button</span>
                            </div>
                        </li>
                        <li data-id="4" data-name="Login" class="handle grid-elements-li">
                            <div class="grid-square">
                                <i class="ni ni-circle-08"></i>
                                <span>Login</span>
                            </div>
                        </li>
                        <li data-id="5" data-name="TextArea" class="handle grid-elements-li">
                            <div class="grid-square">
                                <i class="ni ni-circle-08"></i>
                                <span>TextArea</span>
                            </div>
                        </li>
                    </div>
                </div>
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
    </script>
@endsection
