@extends('base.main')

@section('content')

<div class="container">
        <div class="landing-page">
            <main class="main-contain">
                <div class="main-content">
                    <h2>Fauzan <span><img src="assets/man.png" alt="orang" width="100"></span> Maulana</h2>
                    <h1>Portfolio</h1>
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
                        <h3><span>Fauzan Maulana</span><br>- Portfolio</h3>
                    </div>
                </aside>
            </header>
            <section>
                <h1 style="color:white">Portfolio</h1>
                <ul>
                    <li style="color:white">2019 (Juara 1 LKS Depok - Web Technology)</li>
                    <br>
                    <li style="color:white">2019 (Peserta LKS Jawa Barat - Web Technology)</li>
                    <br>
                    <li style="color:white">2019 (Peserta KKSI Jawa Barat - IOT)</li>
                </ul>
            </section>
        </div>

@endsection