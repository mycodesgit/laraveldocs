@extends('layout.master')

@section('body')

<div class="col-lg-9">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title m-0 dot"></h5>
        </div>
        <div class="card-body" id="scrollme">
            <h3 class="title-doc">Web Routes</h3>
            <p style="text-align: justify; text-indent: 50px;">
                All Laravel routes are defined in your route files, which are located in the routes directory.
            </p>
            
            <br>

            <h3 class="title-doc">Basic Routing</h3>
            <p style="font-style: italic; color: #fff;">
                The most basic Laravel routes accept a URI and a closure, providing a very simple and expressive method of defining routes and behavior without complicated routing configuration files. To create a web routing, simply find the <b class="ins-doc">web.php</b> under the <b class="title-doc">routes</b> folder.
            </p>
<pre>
<codelarge class="language-php" data-icon="&#xf0ea;">
<span style="color: #D3423E;">&lt;?php</span>

<span style="color: #C792EA;">use</span> Illuminate\Support\Facades\<span style="color: #e9d391;">Route</span>;

<span style="color: #C792EA;">Route</span><span style="color: #18aae4;">::</span><span style="color: #89DDFF;">get</span><span style="color: #ffffff;">(</span><span style="color: #6cca63;">'/departments'</span>, <span style="color: #C792EA;">[</span><span style="color: #e9d391;">DepartmentController</span>::<span style="color: #C792EA;">class</span>,<span style="color: #6cca63;">'deptShow'</span>])-><span style="color: #4b75cf;">name</span>(<span style="color: #6cca63;">'deptShow'</span>);
</codelarge>
</pre>
        </div>
    </div>
</div>

@endsection