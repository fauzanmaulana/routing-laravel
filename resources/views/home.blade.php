@extends('base.main')

@section('content')

<div class="container">
        <div class="landing-page">
            <main class="main-contain">
                <div class="main-content">
                    <h2>Someone <span><img src="assets/man.png" alt="orang" width="100"></span> Who</h2>
                    <h1>Eat | Coffee | Code</h1>
                </div>
            </main>
            <aside class="side-contain">
                <div class="side-content" onclick="scrollClick(document.getElementById('end-page'))">
                    <img src="assets/touch.png" alt="touch" width="70">
                    <p>click me!</p>
                </div>
            </aside>
        </div>
        <div class="end-page" id="end-page">
            <header>
                <div class="wall"></div>
                <aside>
                    <div class="aside-content">
                        <img src="assets/profile.jpg" alt="profile" width="50">
                        <h3><span>Fauzan Maulana</span><br>- Home</h3>
                    </div>
                </aside>
            </header>
            <section>
                <a href="/portfolio" style="text-decoration:none">
                    <div class="school">
                        <h1>Portfolio</h1>
                        <img src="assets/school.png" alt="school" width="150">
                        <hr style="color:white">
                    </div>
                </a>
                <a href="/experience" style="text-decoration:none">
                    <div class="music">
                        <h1>Experience</h1>
                        <img src="assets/guitar.png" alt="guitar" width="150">
                        <hr style="color:white">
                    </div>
                </a>
            </section>
        </div>

@endsection