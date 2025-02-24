@extends('layout.master')

@section('body')

<div class="col-lg-9">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title m-0 dot"></h5>
        </div>
        <div class="card-body" id="scrollme">
            <h3 class="title-doc">Back End</h3>
            <p style="text-align: justify; text-indent: 50px;">
                Instead of defining all of your request handling logic as closures in your route files, you may wish to organize this behavior using "controller" classes. Controllers can group related request handling logic into a single class. For example, a UserController class might handle all incoming requests related to users, including showing, creating, updating, and deleting users. By default, controllers are stored in the app/Http/Controllers directory.
            </p>
            
            <br>

            <h3 class="title-doc">Basic Controllers</h3>
            <p style="font-style: italic; color: #fff;">
                Let's take a look at an example of a basic controller. Note that the controller extends the base controller class included with Laravel:
            </p>
<pre>
<codelarge class="language-php" data-icon="&#xf0ea;">
<span style="color: #D3423E;">&lt;?php</span>

<span style="color: #C792EA;">namespace</span> App\Http\Controllers;
<span style="color: #C792EA;">use</span> App\Models\Departments;

<span style="color: #C792EA;">class</span><span style="color: #e9d391;"> DepartmentController</span> <span style="color: #C792EA;">extends</span> <span style="color: #6cca63;">Controller</span>
{
    /**
    * Show the profile for a given user.
    *
    * @param  int  $id
    * @return \Illuminate\View\View
    */
    <span style="color: #C792EA;">public function</span> <span style="color: #89DDFF;">deptShow</span>()
    {
        <span style="color: #C792EA;">return</span> <span style="color: #89DDFF;">view</span>('<span style="color: #6cca63;">department.list</span>');
    }
}
</codelarge>
</pre>

            <p style="font-style: italic; color: #fff;">
                To create a controller, simply use this command whenever you need to add a new one. This command will place a new controller in your <b class="ins-doc">app/Http/Controllers</b> directory. Just copy and paste it to your terminal:
            </p>
            <code class="language-php" data-icon="&#xf0ea;">php artisan make:controller UserController</code>
        </div>
    </div>
</div>

@endsection