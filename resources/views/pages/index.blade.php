        @extends('layouts.landing')

        @section('front')
                <div class="jumbotron text-center ">
                        <h1>{{$title}}</h1>
                        <p class="lead">বাংলা ভাষাভাষী মুসলিম স্কলার এবং যুবকদের ইসলাম নিয়ে কথা বলার জন্য একটা প্লাটফর্ম তৈরী করা। বিশেষ করে সাম্প্রতিক সময়ে মুসলিম সমাজ যেসব সমস্যার মুখোমুখী হচ্ছে তা নিয়ে আলোচনা করা এবং ইসলামের প্রকৃত সৌন্দর্য তুলে ধরা।</p>
                        <p><a class="btn btn-lg btn-success" href="{{ route('login') }}" role="button">Login</a> <a class="btn btn-lg btn-danger" href="{{ route('register') }}" role="button">Sign up</a></p>
                </div>      
        @endsection
   