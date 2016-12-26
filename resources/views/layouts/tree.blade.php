@extends('layouts.blankpage')

@section('styles')
    {{Html::style('metronic/global/plugins/jstree/dist/themes/default/style.min.css')}}
    {{Html::style('css/jstree.css')}}
@endsection

@section('content-inner')
    <div class="row" hidden>
        <div class="col-lg-12 col-md-12">
            <div class="portlet light">
                <div class="portlet-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tìm kiếm" id="search"
                               value="@yield('query')"/>
                        <span class="input-group-btn">
                            <a href="javascript:fireKeyup($('#search'))" class="btn submit">
                                <i class="icon-magnifier"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="portlet light">
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-1 col-md-offset-6">
                            <i class="fa fa-circle-o-notch fa-spin" style="font-size:24px" id="loader"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div id="tree" class="tree" hidden>
                            @yield('tree-content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-level-plugins')
    @parent
    {{Html::script('metronic/global/plugins/jstree/dist/jstree.min.js')}}
@endsection

@section('page-level-scripts')
    @parent
    {{Html::script('metronic/pages/scripts/ui-tree.min.js')}}
@endsection

@section('scripts')
    @parent
    {{Html::script('js/jstree.js')}}
    <script type="text/javascript">
        initJstree($('#tree'), $('#loader'));
        initSearchPlugin($('#tree'), $('#search'));
        fireKeyup($('#search'));
    </script>
@endsection