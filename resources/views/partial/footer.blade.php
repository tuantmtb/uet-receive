<!-- BEGIN FOOTER -->
{{--@include('partial.prefooter')--}}
<!-- BEGIN INNER FOOTER -->
<div class="page-footer">
    <div class="container"> 2016 &copy;
        {{Html::linkRoute('home', config('app.name'), [], ['target' => '_blank'])}}
        <div class="pull-right">
            {{Html::linkRoute('sitemap.index', 'Sitemap', [], ['target' => '_blank'])}}
            <span> | </span>
            {{Html::linkRoute('introduction', 'Giới thiệu', [], ['target' => '_blank'])}}
        </div>
    </div>
</div>
<div class="scroll-to-top">
    <i class="icon-arrow-up"></i>
</div>
<!-- END INNER FOOTER -->
<!-- END FOOTER -->
