@extends('layout.master')

@section('body')

<div class="col-lg-9">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title m-0 dot"></h5>
        </div>
        <div class="card-body" id="scrollme">
            <h3 class="title-doc">Front End</h3>
            <p style="text-align: justify; text-indent: 50px;">
                Laravel is a backend framework that provides all of the features you need to build modern web applications, such as routing, validation, caching, queues, file storage, and more. However, we believe it's important to offer developers a beautiful full-stack experience, including powerful approaches for building your application's frontend.
            </p>
            <p style="text-align: justify; text-indent: 50px;">
                There are two primary ways to tackle frontend development when building an application with Laravel, and which approach you choose is determined by whether you would like to build your frontend by leveraging PHP or by using JavaScript frameworks such as Vue and React. We'll discuss both of these options below so that you can make an informed decision regarding the best approach to frontend development for your application.
            </p>
            
            <br>

            <h3 class="title-doc">PHP & Blade</h3>
            <p style="font-style: italic; color: #fff;">
                In the past, most PHP applications rendered HTML to the browser using simple HTML templates interspersed with PHP echo statements which render data that was retrieved from a database during the request:
            </p>
            <codelarge class="language-php" data-icon="&#xf0ea;">
                <div class="line"><span style="color: #89DDFF;">&lt;</span><span style="color: #FF5572;">div</span><span style="color: #89DDFF;">&gt;</span></div>
                <div class="line" style="margin-left: 20px">
                    <span style="color: #BFC7D5;"></span>
                    <span style="color: #D3423E;">&lt;?php</span>
                    <span style="color: #BFC7D5;"> </span>
                    <span style="color: #C792EA;">foreach</span>
                    <span style="color: #BFC7D5;"> (</span>
                    <span style="color: #BEC5D4;">$dept</span>
                    <span style="color: #BFC7D5;"> </span>
                    <span style="color: #C792EA;">as</span>
                    <span style="color: #BFC7D5;"> </span>
                    <span style="color: #BEC5D4;">$datadept</span>
                    <span style="color: #BFC7D5;">): </span>
                    <span style="color: #D3423E;">?&gt;</span>
                </div>
                <div class="line" style="margin-left: 60px">
                    <span style="color: #BFC7D5;">        Hello, </span>
                    <span style="color: #D3423E;">&lt;?php</span>
                    <span style="color: #BFC7D5;"> </span>
                    <span style="color: #89DDFF;">echo</span>
                    <span style="color: #BFC7D5;"> </span>
                    <span style="color: #BEC5D4;">$dept</span>
                    <span style="color: #89DDFF;">-&gt;deptname</span>
                    <span style="color: #BFC7D5;">; </span>
                    <span style="color: #D3423E;">?&gt;</span>
                </div>
                <div class="line" style="margin-left: 20px">
                    <span style="color: #BFC7D5;"></span>
                    <span style="color: #D3423E;">&lt;?php</span>
                    <span style="color: #BFC7D5;"> </span>
                    <span style="color: #C792EA;">endforeach</span>
                    <span style="color: #BFC7D5;">; </span>
                    <span style="color: #D3423E;">?&gt;</span>
                </div>
                <div class="line"><span style="color: #89DDFF;">&lt;/</span><span style="color: #FF5572;">div</span><span style="color: #89DDFF;">&gt;</span></div>
            </codelarge>
            <br>

            <p style="font-style: italic; color: #fff;">
                In Laravel, this approach to rendering HTML can still be achieved using <b style="color: #ffc107">views</b> and <b style="color: #ffc107">Blade</b>. Blade is an extremely light-weight templating language that provides convenient, short syntax for displaying data, iterating over data, and more:
            </p>
            <codelarge class="language-php" data-icon="&#xf0ea;">
                <div class="line"><span style="color: #89DDFF;">&lt;</span><span style="color: #FF5572;">div</span><span style="color: #89DDFF;">&gt;</span></div>
                @verbatim
                    <div>
                        <span style="color: #C792EA; margin-left: 20px">@foreach</span> ($dept as $datadept) <br>
                        <span style="color: #BFC7D5; margin-left: 60px">Hello, </span>
                        <span style="color: #89DDFF;">{{ $datadept->name }} </span> <br>
                        <span style="color: #C792EA; margin-left: 20px">@endforeach</span>
                    </div>
                @endverbatim
                <div class="line"><span style="color: #89DDFF;">&lt;/</span><span style="color: #FF5572;">div</span><span style="color: #89DDFF;">&gt;</span></div>
            </codelarge>
            
        </div>
    </div>
</div>

@endsection