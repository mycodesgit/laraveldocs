@extends('layout.master')

@section('body')

<div class="col-lg-9">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title m-0 dot"></h5>
        </div>
        <div class="card-body" id="scrollme">
            <h3 class="title-doc">Introducing Lorem PHP Master Framework</h3>
            <p style="text-align: justify; text-indent: 50px;">
                Laravel is a web application framework with expressive, elegant syntax. A web framework provides a structure and starting point for creating your application, allowing you to focus on creating something amazing while we sweat the details.
            </p>
            <p style="text-align: justify;">
                Laravel strives to provide an amazing developer experience while providing powerful features such as thorough dependency injection, an expressive database abstraction layer, queues and scheduled jobs, unit and integration testing, and more.
            </p>
            <p style="text-align: justify;">
                Whether you are new to PHP web frameworks or have years of experience, Laravel is a framework that can grow with you. We'll help you take your first steps as a web developer or give you a boost as you take your expertise to the next level. We can't wait to see what you build.
            </p>
            <br>

            <h3 class="title-doc">Why?</h3>
            <p style="text-align: justify; text-indent: 50px;">
                There are a variety of tools and frameworks available to you when building a web application. However, we believe Laravel is the best choice for building modern, full-stack web applications.
            </p>
            <br>

            <h3 class="title-doc">A Progressive Framework</h3>
            <p style="text-align: justify; text-indent: 50px;">
                We like to call Laravel a "progressive" framework. By that, we mean that Laravel grows with you. If you're just taking your first steps into web development, Laravel's vast library of documentation, guides, and video tutorials will help you learn the ropes without becoming overwhelmed.
            </p>
            <p style="text-align: justify; text-indent: 50px;">
                If you're a senior developer, Laravel gives you robust tools for dependency injection, unit testing, queues, real-time events, and more. Laravel is fine-tuned for building professional web applications and ready to handle enterprise work loads.
            </p>
            <br>

            <h3 class="title-doc">A Scalable Framework</h3>
            <p style="text-align: justify; text-indent: 50px;">
                Laravel is incredibly scalable. Thanks to the scaling-friendly nature of PHP and Laravel's built-in support for fast, distributed cache systems like Redis, horizontal scaling with Laravel is a breeze. In fact, Laravel applications have been easily scaled to handle hundreds of millions of requests per month.
            </p>
            <p style="text-align: justify; text-indent: 50px;">
                Need extreme scaling? Platforms like Laravel Vapor allow you to run your Laravel application at nearly limitless scale on AWS's latest serverless technology.
            </p>
            <br>

            <h3 class="title-doc">A Community Framework</h3>
            <p style="text-align: justify; text-indent: 50px;">
                Laravel combines the best packages in the PHP ecosystem to offer the most robust and developer friendly framework available. In addition, thousands of talented developers from around the world have contributed to the framework. Who knows, maybe you'll even become a Laravel contributor.
            </p>
            <br>

            <h3 class="title-doc">Your First Laravel Project</h3>
            <p style="text-align: justify; text-indent: 50px;">
                Before creating your first Laravel project, you should ensure that your local machine has PHP and Composer installed. If you are developing on macOS, PHP and Composer can be installed via Homebrew. In addition, we recommend installing Node and NPM.
            </p>
            <p style="font-style: italic; color: #fff;">1. After you have installed PHP and Composer, you may create a new Lorem PHP Master project via the Composer "create-project" command below:</p>

            <code class="language-php" data-icon="&#xf0ea;">composer create-project laravel/laravel:^9.0 example-app</code>

            <br>
            <p style="font-style: italic; color: #fff;">2. After you have create a project just browse it any browser, just type 
                <b class="ins-doc">"localhost/yourprojectname/public"</b> and it will display like this. 
                <b class="image-popup"><a href="#" onclick="openPopup()">View Image</a></b>
            </p>

            <div id="popupModal" class="modal">
                <span class="close" onclick="closePopup()">&times;</span>
                <img class="modal-content" id="popupImage" src="template/img/blog/img3.png">
            </div>
        </div>
    </div>
</div>
@endsection